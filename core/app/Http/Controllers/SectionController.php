<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    public function manageBanner()
    {
        $data['title'] = 'Manage Banner';
         $data['banner'] = Section::where('name', 'banner')->first();
//         dd($data['section']->content['title']);
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
      return redirect()->route('manageBanner')->with('success_message', 'Banner Updated Successfully');

    }
    public function manageAbout()
    {
        $data['title'] = 'Manage About';
        $data['about'] = Section::where('name', 'about')->first();
        return view('section.about', $data);
    }

    public function updateAbout(Request $request, $id)
    {
        $request->validate([
            "title" => 'required',
            "description" => 'required',
            "img" => 'mimes:jpeg,jpg,png,gif|required|max:1000'
        ]);
        $imageurl = $this->chkimage($request, $id);
//        $sectionImage = $request->file('img');
//        $name=$sectionImage->getClientOriginalName();
//        $path=('assets/sectionImage/');
//        $speakerImage->move($path,$name);
//        $imageurl=$path.$name;

        $section = Section::find($id);
        $section->title = $request->title;
        $section->description = $request->description;
        $section->img = $imageurl;

        $section->save();
        return redirect()->route('manageAbout')->with('success_message', 'About Updated Successfully');
    }
    public function chkimage($request, $id)
    {
        $section = Section::where('id', $id)->first();
        $sectionImage = $request->file('img');
        if($sectionImage){
            unlink($section->img);
            $name=$sectionImage->getClientOriginalName();
            $path=('assets/sectionImage/');
            $sectionImage->move($path,$name);
            $imageurl=$path.$name;

        }
        else{
            $imageurl=$section->img;
        }
        return $imageurl;
    }
    public function manageAboutOverview()
    {
        $data['title'] = 'Manage About Overview';
        $data['about_overview'] = Section::where('name', 'about_overview')->first();
        return view('section.about_overview', $data);
    }

    public function updateAboutOverview(Request $request, $id)
    {
        $request->validate([
            "title" => 'required',
            "description" => 'required',
            "img" => 'mimes:jpeg,jpg,png,gif|required|max:1000'
        ]);
        $imageurl = $this->chkimage($request, $id);
//        $sectionImage = $request->file('img');
//        $name=$sectionImage->getClientOriginalName();
//        $path=('assets/sectionImage/');
//        $sectionImage->move($path,$name);
//        $imageurl=$path.$name;

        $section = Section::find($id);
        $section->title = $request->title;
        $section->description = $request->description;
        $section->img = $imageurl;

        $section->save();
        return redirect()->route('manageAboutOverview')->with('success_message', 'Data Updated Successfully');
    }


}
