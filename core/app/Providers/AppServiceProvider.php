<?php

namespace App\Providers;

use App\Schedule;
use App\Speaker;
use App\Ticket;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       $allSpeakers = Speaker::all();
       $allSchedule = Schedule::all();
       $ticket = Ticket::all();
        $frontendSchedule = Schedule::with('speakers', 'topicName')->get();
        view()->share('allSpeakers', $allSpeakers);
        view()->share('allSchedule', $allSchedule);
        view()->share('frontendSchedule', $frontendSchedule);
        view()->share('ticket', $ticket);

    }
}
