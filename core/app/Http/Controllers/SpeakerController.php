<?php

namespace App\Http\Controllers;

use App\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    public function addSpeaker()
    {
        $data['title'] = 'Add Speaker';
        return view('speaker.add_speaker', $data);
    }
    public function saveSpeaker(Request $request)
    {
        $request->validate([
            "speaker_name"=>'required',
            "experties"=>'required',
            "description"=>'required',
            "speaker_img"=>'mimes:jpeg,jpg,png,gif|required|max:1000'

        ]);

        $speakerImage=$request->file('speaker_img');
        $name=$speakerImage->getClientOriginalName();
        $path=('assets/speakerImage/');
        $speakerImage->move($path,$name);
        $imageurl=$path.$name;

        $speaker = New Speaker();
        $speaker->speaker_name = $request->speaker_name;
        $speaker->experties = $request->experties;
        $speaker->description = $request->description;
        $speaker->speaker_img = $imageurl;
        $speaker->status = 1;
        $speaker->save();
        return redirect()->route('addSpeaker')->with('success_message', 'Speaker Added Successfully');

    }
}
