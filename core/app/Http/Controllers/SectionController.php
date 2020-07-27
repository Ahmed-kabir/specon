<?php

namespace App\Http\Controllers;

use App\Benifit;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SectionController extends Controller
{

    public function manageBanner()
    {
        $data['title'] = 'Manage Banner';
         $data['banner'] = Section::where('name', 'banner')->first();
        return view('section.banner', $data);
    }

    public function updateBanner(Request $request, $id)
    {
        $request->validate([
            "title" => 'required',
            "description" => 'required'
        ]);
        $section = Section::find($id);
//      $bannerInfo =[
//          'title' =>$request->title,
//          'description' =>$request->description
//      ];

        $section->title = $request->title;
        $section->description = $request->description;
        $section->save();
        return redirect()->route('manageBanner')->with('success', 'Banner Updated Successfully');

    }

    public function manageAbout()
    {
        $data['title'] = 'Manage About';
        $data['about'] = Section::where('name', 'about')->first();
        return view('section.about', $data);
    }

    public function manageBenifit()
    {
        $data['title'] = 'Manage Benifit';
        $data['benifit'] = Benifit::all();

        return view('benifit.manage_benifit', $data);
    }

    public function updateAbout(Request $request, $id)
    {
        $request->validate([
            "title" => 'required',
            "description" => 'required',
            "img" => 'mimes:jpeg,jpg,png,gif|max:1000'
        ]);
        $imageurl = $this->chkimage($request, $id);

        $section = Section::find($id);
        $section->title = $request->title;
        $section->description = $request->description;
        $section->img = $imageurl;

        $section->save();
        return redirect()->route('manageAbout')->with('success_message', 'About Updated Successfully');
    }

    public function updateBenifit(Request $request, $id)
    {
        $benifit = Benifit::find($id);
        $benifit->title = $request->title;
        $benifit->description = $request->description;
        $benifit->img = 'fa' . ' ' . $request->img;
        $benifit->save();
        return redirect()->route('manageBenifit')->with('success_message', 'Updated Successfully');
    }

    public function manageAboutOverview()
    {
        $data['title'] = 'Manage About Overview';
        $data['about_overview'] = Section::where('name', 'about_overview')->first();
        return view('section.about_overview', $data);
    }

    public function speakerTitle()
    {
        $data['title'] = 'Speaker Title';
        $data['speaker'] = Section::where('name', 'speaker')->first();
        return view('section.speaker', $data);
    }

    public function scheduleTitle()
    {
        $data['title'] = 'Schedule Title';
        $data['schedule'] = Section::where('name', 'schedule')->first();
        return view('section.schedule', $data);
    }

    public function callInTitle()
    {
        $data['title'] = 'CallIn Title';
        $data['callin'] = Section::where('name', 'call_in')->first();
        return view('section.callin', $data);
    }

    public function ticketTitle()
    {
        $data['title'] = 'Ticket Title';
        $data['ticket'] = Section::where('name', 'ticket1')->first();
        return view('section.ticket', $data);
    }

    public function eventTitle()
    {
        $data['title'] = 'Event Title';
        $data['event'] = Section::where('name', 'event')->first();
        return view('section.event', $data);
    }

    public function blog1Title()
    {
        $data['title'] = 'Blog Title';
        $data['blog1'] = Section::where('name', 'blog1')->first();
        return view('section.blog', $data);
    }

    public function sponsor1Title()
    {
        $data['title'] = 'Sponsor Title';
        $data['sponsor1'] = Section::where('name', 'sponsor1')->first();
        return view('section.sponsor', $data);
    }

    public function missionTitle()
    {
        $data['title'] = 'Sponsor Title';
        $data['mission'] = Section::where('name', 'tab_mission')->first();
        return view('section.mission', $data);
    }

    public function testimonialTitle()
    {
        $data['title'] = 'Testimonial Title';
        $data['testimonial'] = Section::where('name', 'tab_testimonial')->first();
        return view('section.testimonial', $data);
    }

    public function overviewImage()
    {
        $data['title'] = 'Overview Image';
        $data['overviewImg'] = Section::where('name', 'overview_img')->first();
        return view('section.overview_img', $data);
    }

    public function updateTitleTestimonial(Request $request, $id)
    {
        $request->validate([
            "title" => 'required',
            "description" => 'required',
            "img" => 'mimes:jpeg,jpg,png,gif|max:1000'
        ]);
        $imageurl = $this->chkimage($request, $id);
        $section = Section::find($id);
        $section->title = $request->title;
        $section->description = $request->description;
        $section->img = $imageurl;

        $section->save();
        return redirect()->route('testimonialTitle')->with('success_message', 'About Updated Successfully');
    }

    public function updateTitleMission(Request $request, $id)
    {
        $request->validate([
            "title" => 'required',
            "description" => 'required'
        ]);
        $section = Section::find($id);

        $section->title = $request->title;
        $section->description = $request->description;
        $section->save();
        return redirect()->route('missionTitle')->with('success_message', 'Updated Successfully');
    }

    public function updateSponsor1(Request $request, $id)
    {
        $request->validate([
            "title" => 'required',
            "description" => 'required'
        ]);
        $section = Section::find($id);

        $section->title = $request->title;
        $section->description = $request->description;
        $section->save();
        return redirect()->route('sponsor1Title')->with('success_message', 'Updated Successfully');
    }

    public function updateBlogTitle1(Request $request, $id)
    {
        $request->validate([
            "title" => 'required',
            "description" => 'required'
        ]);
        $section = Section::find($id);

        $section->title = $request->title;
        $section->description = $request->description;
        $section->save();
        return redirect()->route('blog1Title')->with('success_message', 'Updated Successfully');
    }

    public function updateOverviewImg(Request $request, $id)
    {
        $request->validate([

            "img" => 'mimes:jpeg,jpg,png,gif|max:1000'
        ]);

        $imageurl = $this->chkimage($request, $id);

        $section = Section::find($id);
        $section->img = $imageurl;

        $section->save();
        return redirect()->route('overviewImage')->with('success_message', 'Updated Successfully');
    }

    public function updateEventTitle(Request $request, $id)
    {
        $request->validate([
            "title" => 'required',
            "description" => 'required'
        ]);
        $section = Section::find($id);

        $section->title = $request->title;
        $section->description = $request->description;
        $section->save();
        return redirect()->route('eventTitle')->with('success_message', 'Updated Successfully');
    }


    public function updateCallinTitle(Request $request, $id)
    {
        $request->validate([
            "title" => 'required',
            "description" => 'required'
        ]);
        $section = Section::find($id);

        $section->title = $request->title;
        $section->description = $request->description;
        $section->save();
        return redirect()->route('callInTitle')->with('success_message', 'Updated Successfully');
    }

    public function updateTicket1(Request $request, $id)
    {
        $request->validate([
            "title" => 'required',
            "description" => 'required'
        ]);
        $section = Section::find($id);

        $section->title = $request->title;
        $section->description = $request->description;
        $section->save();
        return redirect()->route('ticketTitle')->with('success_message', 'Updated Successfully');
    }

    public function updateScheduleTitle(Request $request, $id)
    {
        $request->validate([
            "title" => 'required',
            "description" => 'required'
        ]);
        $section = Section::find($id);

        $section->title = $request->title;
        $section->description = $request->description;
        $section->save();
        return redirect()->route('scheduleTitle')->with('success_message', 'Updated Successfully');
    }

    public function updateSpeakerTitle(Request $request, $id)
    {
        $request->validate([
            "title" => 'required',
            "description" => 'required'
        ]);
        $section = Section::find($id);

        $section->title = $request->title;
        $section->description = $request->description;
        $section->save();
        return redirect()->route('speakerTitle')->with('success_message', 'Updated Successfully');
    }

    public function deleteBenifit($id)
    {
        $benifit = Benifit::where('id', $id)->first();
        $benifit->delete();
        return redirect()->route('manageBenifit')->with('success_message', 'Deleted Successfully');
    }

    public function updateAboutOverview(Request $request, $id)
    {
        $request->validate([
            "title" => 'required',
            "description" => 'required',
            "img" => 'mimes:jpeg,jpg,png,gif|max:1000'
        ]);
        $imageurl = $this->chkimage($request, $id);
        $section = Section::find($id);
        $section->title = $request->title;
        $section->description = $request->description;
        $section->img = $imageurl;

        $section->save();
        return redirect()->route('manageAboutOverview')->with('success_message', 'Data Updated Successfully');
    }

    public function chkimage($request, $id)
    {
        $section = Section::where('id', $id)->first();

        $sectionImage = $request->file('img');
        if ($sectionImage) {
            unlink($section->img);
            $randNumber = Str::random(6);
            $fileExtension = $sectionImage->getClientOriginalExtension();
            $name = $randNumber . '.' . $fileExtension;

            $path = ('assets/sectionImage/');
            $sectionImage->move($path, $name);
            $imageurl = $path . $name;

        } else {
            $imageurl = $section->img;
        }
        return $imageurl;
    }


}
