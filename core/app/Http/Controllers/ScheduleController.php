<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Speaker;
use App\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    public function addSchedule()
    {
        $data['title'] = 'Add Schedule';
        $data['speakers'] = Speaker::all();
        $data['topics'] = Topic::all();
        return view('schedule.add_schedule', $data);
    }

    public function checkSchedule()
    {
        $speaker = Speaker::with('schedule')->first();
        $topic = $speaker->schedule->with('topicName')->first();
        dd($topic);
    }

    public function saveSchedule(Request $request)
    {
        $request->validate([
            "speaker_id" => 'required',
            "topic" => 'required',
            "date" => 'required|after:today',
            "start_time" => 'required',
            "end_time" => 'required|after:start_time'
        ]);
        $startTime = $request->start_time;
        $endTime = $request->end_time;
        $date = $request->date;

        $topic = Schedule::where('topic', '=', $request->topic)->first();

//        $search1 = Schedule::where('start_time', '<', $startTime)
//            ->where('end_time', '>', $endTime)
//            ->get();

         $reservations = Schedule::where('date', $request->date)->where('start_time', '<=', $request->end_time)->where('end_time', '>=', $request->start_time)->first();


//        $test = Schedule::whereBetween('start_time', [$startTime, $endTime])
//            ->orWhereRaw('? BETWEEN start_time AND end_time', [$startTime, $endTime])
//            ->WHERE('date', '=', $date)
//            ->get();
//
//        $test1 = Schedule::WhereRaw('? BETWEEN start_time AND end_time', [$startTime, $endTime])
//            ->where('date', '=', $date)
//            ->get();

//        if($topic)
//        {
//            return back()->with('error_message', 'Topic Already Taken');
//        }

         if( $reservations)
        {
            return back()->with('error', 'Schedule Not Available');
        }

        else
        {
            $schedule = new Schedule();
            $schedule->speaker_id = $request->speaker_id;
            $schedule->topic = $request->topic;
            $schedule->date = $request->date;
            $schedule->start_time = $request->start_time;
            $schedule->end_time = $request->end_time;
            $schedule->save();
            return back()->with('success', 'Schedule Added Successfully');
        }

    }

    public function manageSchedule()
    {
        $data['title'] = 'Manage Schedule ';
        $data['schedule'] = Schedule::with('speakers', 'topicName')->paginate(3);
//       $reffered_by_id =Reffered::with('user')->where('reffered_id',$user_id)->orderBy('id', 'desc')->paginate(4);
        return view('schedule.manage_schedule', $data);

    }

    public function editSchedule($id)
    {

        $data['title'] = 'Edit Schedule';
        $data['scheduleEditByid'] = Schedule::where('id', $id)->first();
        $data['speakerName'] = Speaker::all();
        $data['topicName'] = Topic::all();
        return view('schedule.edit_schedule', $data);
    }

    public function updateSchedule(Request $request, $id)
    {


        $request->validate([
            "speaker_name" => 'required',
            "topic" => 'required'
        ]);

        $reservations = Schedule::where('date', $request->date)->where('start_time', '<=', $request->end_time)->where('end_time', '>=', $request->start_time)->first();

        $testQuery = Schedule::whereBetween('start_time', [$request->start_time, $request->end_time])
            ->orWhereRaw('? BETWEEN start_time AND end_time', [$request->start_time, $request->end_time])
            ->WHERE('date', '=', $request->date)
            ->get();

         $schedule = Schedule::find($id)->first();

//       if(sizeof($reservations)>0)
        if (empty($schedule)) {
            return back()->with('error_message', 'Speaker Not Found');

        } else {
            $schedule->speaker_id = $request->speaker_name;
            $schedule->topic = $request->topic;
            $schedule->save();
            return redirect()->route('manageSchedule')->with('success_message', 'Schedule Updated Successfully');
        }
    }

    public function deleteSchedule($id)
    {
        echo 'deleted';
    }

    public function dateScheduletest(Request $request)
    {

        $date = Schedule::with('speakers', 'topicName')->where('date', $request->date)->get();
//   echo json_encode($date);
        return response()->json([
            'data' => $date
        ]);
    }
}
