<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Customer;
use App\Schedule;
use App\Setting;
use App\Sponsor;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminController extends Controller
{

    public function index()
    {
        $data['title'] = 'Admin Home';
        $data['sponsor'] = Sponsor::count('id');
        $data['soldTkt'] = Customer::sum('qty');
        $data['remainTicket'] = Ticket::sum('tkt_qty');
        $data['schedule'] = Schedule::with('speakers', 'topicName')->paginate(3);
        $data['frontendSchedule'] = Schedule::with('speakers', 'topicName')->paginate(3);
        return view('admin.mainContent1', $data);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('index');
    }

    public function manageSettings()
    {
        $data['title'] = 'Update Settings';
        $data['settings'] = Setting::first();
        return view('admin.update_settings', $data);
    }

    public function updateSettings(Request $request, $id)
    {
        $request->validate([
            "title" => 'required',
            "location" => 'required',
            "start_date" => 'required',
            "place" => 'required',
            "email" => 'required',
            "max_tkt_qty" => 'required|integer|min:0',
            "img" => 'mimes:jpeg,jpg,png,gif|max:1000'

        ]);

        $name = $this->chkimage($request, $id);

        $settings = Setting::where('id', $id)->first();

        $settings->title = $request->title;
        $settings->location = $request->location;
        $settings->start_date = $request->start_date;
        $settings->place = $request->place;
        $settings->max_tkt_qty = $request->max_tkt_qty;
        $settings->img = $name;
        $settings->save();
        return redirect()->route('adminHome')->with('success', 'Updated Successfully');
    }

    public function chkimage($request, $id)
    {
        $settings = Setting::where('id', $id)->first();
        $siteImage = $request->file('img');
        if ($siteImage) {
            unlink($settings->img);
            $randNumber = Str::random(6);
            $fileExtension = $siteImage->getClientOriginalExtension();
            $name = $randNumber . '.' . $fileExtension;
            $path = ('assets/siteImage/');
            $siteImage->move($path, $name);
            $imageurl = $path . $name;

        } else {
            $name = $settings->img;
        }
        return $name;
    }


}
