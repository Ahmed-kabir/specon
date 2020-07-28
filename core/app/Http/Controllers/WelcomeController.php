<?php

namespace App\Http\Controllers;

use App\Benifit;
use App\Blog;
use App\Schedule;
use App\Section;
use App\Setting;
use App\Speaker;
use App\Sponsor;
use App\SponsorType;
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
        $data['about'] = Section::where('name', 'about')->first();
        $data['about_overview'] = Section::where('name', 'about_overview')->first();
        $data['speaker'] = Section::where('name', 'speaker')->first();
        $data['schedule'] = Section::where('name', 'schedule')->first();
        $data['call_in'] = Section::where('name', 'call_in')->first();
        $data['ticket1'] = Section::where('name', 'ticket1')->first();
        $data['event'] = Section::where('name', 'event')->first();
        $data['blog1'] = Section::where('name', 'blog1')->first();
        $data['sponsor1'] = Section::where('name', 'sponsor1')->first();
//         $data['sponsor'] = Sponsor::with('sponsorType')->get();
        $data['tab_mission'] = Section::where('name', 'tab_mission')->first();
        $data['tab_testimonial'] = Section::where('name', 'tab_testimonial')->first();
        $data['overview_img'] = Section::where('name', 'overview_img')->first();
        $data['allSpeakers'] = Speaker::all();
        $data['benifit'] = Benifit::all();
        $data['ticket'] = Ticket::all();
//        $data['sponsorType'] = SponsorType::where('status', 1)->get();
         $data['sponsorType'] = SponsorType::with('sponsorName')->get();

        $data['blog'] = Blog::where('status', 1)->get();
        $data['settings'] = Setting::first();
        $data['frontendSchedule'] = Schedule::with('speakers', 'topicName')->get();


        $data['slot'] = Schedule::groupBy('date')
            ->selectRaw('date')
            ->get();

//        $data['sponsor_type'] = Sponsor::groupBy('sponsor_id')
//            ->selectRaw('sponsor_id')
//            ->get();

        return view('frontend.main_content', $data);
    }

    public function speaker()
    {
        $data['title'] = 'Speaker';
        $data['speaker'] = Speaker::where('status', 1)->get();
        return view('home.speaker', $data);
    }

    public function Ticket()
    {
        $data['title'] = 'Ticket';
        $data['ticket'] = Ticket::where('status', 1)->get();
        return view('home.ticket', $data);
    }

    public function schedule()
    {
        $data['title'] = 'Schedule';
        $data['frontendSchedule'] = Schedule::with('speakers', 'topicName')->get();
        $data['slot'] = Schedule::groupBy('date', 'slot')
            ->selectRaw('slot, date')
            ->get();
        return view('home.schedule', $data);
    }

    public function contact()
    {
        $data['title'] = 'Contact';
        return view('home.contact', $data);
    }

    public function Blog()
    {
        $data['title'] = 'Blog';
        $data['blog'] = Blog::where('status', 1)->get();
        return view('home.blog', $data);
    }

    public function Sponsor()
    {
        $data['title'] = 'Sponsor';
        $data['sponsorType'] = SponsorType::get();
        return view('home.sponsor', $data);
    }


}
