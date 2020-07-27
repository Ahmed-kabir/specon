<?php

namespace App\Http\Controllers;

use App\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;


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
            "speaker_name" => 'required',
            "experties" => 'required',
            "description" => 'required',
            "speaker_img" => 'mimes:jpeg,jpg,png,gif|required|max:1000'

        ]);

//        $speakerImage = $request->file('speaker_img');
//        $name=$speakerImage->getClientOriginalName();
//        $randNumber = Str::random(6);
//        $fileExtension = $speakerImage->getClientOriginalExtension();
//        $name = $randNumber . '.' . $fileExtension;
//
//        $path = ('assets/speakerImage/');
//        $speakerImage->move($path, $name);
//        $imageurl = $path . $name;


        $imageName = $request->file('speaker_img');
        $speakerNameFormate = 'speaker-'.Str::random(8).'.'.$imageName->getClientOriginalExtension();
        $img = Image::make($imageName);
        $path = 'assets/speakerImage/';
        $img->resize(460,530);
        $img->save($path.'/'.$speakerNameFormate);


        $speaker = new Speaker();
        $speaker->speaker_name = $request->speaker_name;
        $speaker->experties = $request->experties;
        $speaker->description = $request->description;
        $speaker->speaker_img = $speakerNameFormate;
        $speaker->status = 1;
        $speaker->save();
        return redirect()->route('addSpeaker')->with('success_message', 'Speaker Added Successfully');

    }

    public function manageSpeaker()
    {
        $data['title'] = 'Manage Speaker';
        $data['speaker'] = Speaker::where('status', 1)->paginate(3);
        return view('speaker.manage_speaker', $data);
    }

    public function editSpeaker($id)
    {
        $data['title'] = 'Edit Speaker';
        $data['speaker'] = Speaker::find($id);
        return view('speaker.edit_speaker', $data);
    }

    public function updateSpeaker(Request $request, $id)
    {
        $request->validate([
            "speaker_name" => 'required',
            "experties" => 'required',
            "description" => 'required',
            "speaker_img" => 'mimes:jpeg,jpg,png,gif|max:1000'
        ]);

        $speakerNameFormate = $this->chkimage($request, $id);

         $speaker = Speaker::where('id', $id)->first();

        $speaker->speaker_name = $request->speaker_name;
        $speaker->experties = $request->experties;
        $speaker->description = $request->description;
        $speaker->speaker_img = $speakerNameFormate;
        $speaker->save();
        return redirect()->route('manageSpeaker')->with('success_message', 'Speaker Updated Successfully');

    }

    public function chkimage($request, $id)
    {
        $speaker = Speaker::where('id', $id)->first();
        $speakerImage = $request->file('speaker_img');
        if ($speakerImage) {
            unlink('assets/speakerImage/'.$speaker->speaker_img);


            $speakerNameFormate = 'speaker-'.Str::random(8).'.'.$speakerImage->getClientOriginalExtension();
            $img = Image::make($speakerImage);
            $path = 'assets/speakerImage/';
            $img->resize(460,530);
            $img->save($path.'/'.$speakerNameFormate);


        } else {
            $speakerNameFormate = $speaker->speaker_img;
        }
        return $speakerNameFormate;
    }

    public function inactiveSpeaker($id)
    {
        $speaker = Speaker::where('id', $id)->first();
        $speaker->status = 0;
        $speaker->save();
        return redirect()->route('manageSpeaker')->with('success_message', 'Speaker Inactivated Successfully');
    }
}
