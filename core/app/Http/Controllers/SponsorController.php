<?php

namespace App\Http\Controllers;

use App\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
   public function addSponsor()
   {
       $data['title'] = 'Add Sponsor';
       return view('sponsor.add_sponsor', $data);
   }
   public function saveSponsor(Request $request)
   {
       $request->validate([
           "sponsor_type" => 'required',
           "sponsor_title" => 'required|not_in:0',
           "sponsor_img"=>'mimes:jpeg,jpg,png,gif|required|max:1000'
       ]);
       $sponsorImage=$request->file('sponsor_img');
       $name=$sponsorImage->getClientOriginalName();
       $path=('assets/sponsorImage/');
       $sponsorImage->move($path,$name);
       $imageurl=$path.$name;

       $sponsor = new Sponsor();
       $sponsor->sponsor_type = $request->sponsor_type;
       $sponsor->sponsor_title = $request->sponsor_title;
       $sponsor->sponsor_img = $imageurl;
       $sponsor->status = 1;
       $sponsor->save();
       return back()->with('success_message', 'Sponsor Added Successfully');
   }
   public function manageSponsor()
   {
       $data['title'] = 'Manage Sponsor';
       $data['sponsors'] = Sponsor::where('status', 1)->get();
       return view('sponsor.mange_sponsor', $data);
   }
   public function editSponsor($id)
   {
       $data['title'] = 'Edit Sponsor';
        $data['sponosr'] = Sponsor::find($id);
       return view('sponsor.edit_sponsor', $data);
   }
   public function updateSponsor(Request $request, $id)
   {
       $request->validate([
           "sponsor_type" => 'required',
           "sponsor_title" => 'required'


       ]);
       $imageurl = $this->chkimage($request, $id);

       $sponsor = Sponsor::find($id);
       $sponsor->sponsor_type = $request->sponsor_type;
       $sponsor->sponsor_title = $request->sponsor_title;
       $sponsor->sponsor_img = $imageurl;

       $sponsor->save();
       return redirect()->route('manageSponsor')->with('success_message', 'Sponsor Updated Successfully');
   }
    public function chkimage($request, $id)
    {
        $sponsor = Sponsor::where('id', $id)->first();
        $sponsorImage = $request->file('sponsor_img');
        if($sponsorImage){
            unlink($sponsor->sponsor_img);
            $name=$sponsorImage->getClientOriginalName();
            $path=('assets/sponsorImage/');
            $sponsorImage->move($path,$name);
            $imageurl=$path.$name;

        }
        else{
            $imageurl=$sponsor->sponsor_img;
        }
        return $imageurl;
    }
    public function inactiveSponsor($id)
    {
        $sponsor = Sponsor::where('id', $id)->first();
        $sponsor->status = 0;
        $sponsor->save();
        return redirect()->route('manageSponsor')->with('success_message', 'Sponsor Inactivated Successfully');
    }
}