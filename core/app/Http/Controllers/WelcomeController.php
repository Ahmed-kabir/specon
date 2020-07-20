<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Schedule;
use App\Section;
use App\Speaker;
use App\Sponsor;
use App\Ticket;
use App\Welcome;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Specon';
         $data['banner'] = Section::where('name', 'banner')->first();
//         dd($data['banner']->title);
        $data['about'] = Section::where('name', 'about')->first();
        $data['about_overview'] = Section::where('name', 'about_overview')->first();
        $data['speaker'] = Section::where('name', 'speaker')->first();
        $data['schedule'] = Section::where('name', 'schedule')->first();
        $data['call_in'] = Section::where('name', 'call_in')->first();
        $data['ticket1'] = Section::where('name', 'ticket1')->first();
        $data['event'] = Section::where('name', 'event')->first();
        $data['blog1'] = Section::where('name', 'blog1')->first();
        $data['sponsor1'] = Section::where('name', 'sponsor1')->first();
        $data['tab_mission'] = Section::where('name', 'tab_mission')->first();
        $data['tab_testimonial'] = Section::where('name', 'tab_testimonial')->first();
        $data['overview1'] = Section::where('name', 'overview1')->first();
        $data['overview2'] = Section::where('name', 'overview2')->first();
        $data['overview3'] = Section::where('name', 'overview3')->first();
        $data['overview4'] = Section::where('name', 'overview4')->first();

        $data['allSpeakers'] = Speaker::all();
//        $data['allSchedule'] = Schedule::all();
        $data['ticket'] = Ticket::all();
        $data['sponsor'] = Sponsor::where('status', 1)->get();
        $data['blog'] = Blog::where('status', 1)->get();
         $data['frontendSchedule'] = Schedule::with('speakers', 'topicName')->where('slot', '1st')->get();
//         dd($data['frontendSchedule'] );

//        return $results = Schedule::select('date', \DB::raw('COUNT(id) as amount'))
//            ->groupBy('date')
//            ->get();

           $data['slot'] = Schedule::groupBy('date','slot')
            ->selectRaw('slot, date')
            ->get();
        return view('frontend.main_content', $data);
    }

    public function speaker()
    {
        $data['title'] = 'Speaker';
        $data['speaker'] = Speaker::where('status', 1)->get();
        return view('speaker', $data);
    }
    public function Ticket()
    {
        $data['title'] = 'Ticket';
        return view('ticket', $data);
    }


}
