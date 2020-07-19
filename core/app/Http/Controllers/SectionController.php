<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    public function manageBanner()
    {
        $data['title'] = 'Manage Banner';
         $data['section'] = Section::where('name', 'banner')->first();
//         dd($data['section']->content['title']);
        return view('section.banner', $data);
    }

    public function updateBanner(Request $request, $id)
    {
      $request->validate([
         "title" => 'required',
         "desc" => 'required'
      ]);
      $section = Section::find($id);
      $bannerInfo =[
          'title' =>$request->title,
          'desc' =>$request->desc
      ];

      $section->content = $bannerInfo;
      $section->save();
      return redirect()->route('manageBanner')->with('success_message', 'Banner Updated Successfully');

    }


}
