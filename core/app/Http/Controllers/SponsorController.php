<?php

namespace App\Http\Controllers;

use App\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
           "name" => 'required',
           "company_name" => 'required',
           "email" => 'required',
           "website" => 'required',
           "sponsor_type" => 'required'

       ]);

       $sponsor = new Sponsor();
       $sponsor->name = $request->name;
       $sponsor->company_name = $request->company_name;
       $sponsor->email = $request->email;
       $sponsor->website = $request->website;
       $sponsor->sponsor_type = $request->sponsor_type;
       $sponsor->status = 0;
       $sponsor->save();
       return redirect()->route('Sponsor')->with('success_message', 'Success!! Contact With Admin');
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

   public function sponsorRequest()
   {
       $data['title'] = 'Sponsor Request';
       $data['sponsors'] = Sponsor::where('status', 0)->get();
       return view('sponsor.request_sponsor', $data);
   }
   public function activeSponsor(Request $request, $id)
   {

       $data['title'] = 'Active Sponsor';
       $request->validate([
           "status" =>'required',
           "img" =>'mimes:jpeg,jpg,png,gif|max:1000'
       ]);

       $sponsor = Sponsor::find($id);
       $sponsorImage=$request->file('img');

       if($sponsorImage)
       {
           $randNumber = Str::random(6);
           $fileExtension = $sponsorImage->getClientOriginalExtension();
           $name = $randNumber.'.'.$fileExtension;

           $path=('assets/sponsorImage/');
           $sponsorImage->move($path,$name);
           $imageurl=$path.$name;
           $sponsor->img = $imageurl;
           $sponsor->save();

       }



           $sponsor->status = $request->status;
           $sponsor->save();
           return redirect()->route('manageSponsor')->with('success_message', 'Sponsor Updated Successfully');



   }
   public function test(Request $request)
   {
       dd($request->all());
   }

   public function updateSponsor(Request $request, $id)
   {
       $request->validate([
           "name" => 'required',
           "company_name" => 'required',
           "email" => 'required|email',
           "website" => 'required',
           "status" => 'required',
           "sponsor_type" => 'required',
           "img" =>'mimes:jpeg,jpg,png,gif|max:1000'

       ]);
       $imageurl = $this->chkimage($request, $id);

       $sponsor = Sponsor::find($id);
       $sponsor->name = $request->name;
       $sponsor->company_name = $request->company_name;
       $sponsor->email = $request->email;
       $sponsor->website = $request->website;
       $sponsor->sponsor_type = $request->sponsor_type;
       $sponsor->img = $imageurl;
       $sponsor->status = $request->status;

       $sponsor->save();
       return redirect()->route('manageSponsor')->with('success_message', 'Sponsor Updated Successfully');
   }
    public function chkimage($request, $id)
    {
        $sponsor = Sponsor::where('id', $id)->first();
        $sponsorImage = $request->file('img');
        if($sponsorImage){
//            unlink($sponsor->img);

            $randNumber = Str::random(6);
            $fileExtension = $sponsorImage->getClientOriginalExtension();
            $name = $randNumber.'.'.$fileExtension;


            $path=('assets/sponsorImage/');
            $sponsorImage->move($path,$name);
            $imageurl=$path.$name;

        }
        else{
            $imageurl=$sponsor->img;
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
    public function activatedSponsor($id)
    {
        $sponsor = Sponsor::where('id', $id)->first();
        $sponsor->status = 1;
        $sponsor->save();
        return redirect()->route('sponsorRequest')->with('success_message', 'Sponsor Activated Successfully');
    }
}
