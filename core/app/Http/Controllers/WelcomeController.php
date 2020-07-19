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
        $data['banner'] = Section::where('name', 'banner')->first();
       $data['about'] = Section::where('name', 'about')->first();

        $data['allSpeakers'] = Speaker::all();
        $data['allSchedule'] = Schedule::all();
        $data['ticket'] = Ticket::all();
        $data['sponsor'] = Sponsor::where('status', 1)->get();
        $data['blog'] = Blog::where('status', 1)->get();
        $data['frontendSchedule'] = Schedule::with('speakers', 'topicName')->get();
        return view('welcome', $data);
    }


}
