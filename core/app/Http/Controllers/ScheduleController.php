<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Speaker;
use App\Topic;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
   public function addSchedule()
   {
       $data['title'] = 'Add Schedule';
       $data['speakers'] = Speaker::all();
       $data['topics'] = Topic::all();
       return view('schedule.add_schedule', $data);
   }
   public function saveSchedule(Request $request)
   {
        $request->validate([
            "speaker_name"=>'required',
            "topic"=>'required',
            "date"=>'required|after:today',
            "start_time"=>'required',
            "end_time"=>'required|after:start_time'
        ]);
        $startTime = $request->start_time;
        $endTime = $request->end_time;

//        $search = Schedule::where('date', '=' ,$request->date)->get();

       $search = Schedule::where('start_time', '<', $startTime)
           ->where('end_time', '>', $endTime)
           ->get();

        return $reservations = Schedule::whereBetween('end_time', [$startTime, $endTime])->get();
//           ->where('end_time', '>', $endTime)
//           ->get();
//          $search = Schedule::where([
//           ['date', '=', $request->date],
//           ['end_time', '>', $request->start_time]
//
//       ])->get();


//         $search = Schedule::where('date', '=', $request->date)
//           ->where('end_time', '>', $request->start_time)
//           ->get();

        if(sizeof($reservations)>0)
        {
            return 'slot not available';
        }
        else
        {
            return 'slot  available';
        }
        return 'end';

        $schedule = New Schedule();
        $schedule->speaker_id = $request->speaker_name;
        $schedule->topic = $request->topic;
        $schedule->date = $request->date;
        $schedule->start_time = $request->start_time;
        $schedule->end_time = $request->end_time;
        $schedule->save();
       return back()->with('success_message', 'Schedule Added Successfully');

   }
}
