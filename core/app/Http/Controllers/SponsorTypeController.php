<?php

namespace App\Http\Controllers;

use App\SponsorType;
use Illuminate\Http\Request;

class SponsorTypeController extends Controller
{
    public function addSponsorCategory()
    {
        $data['title'] = 'Add Sponsor Category';
        return view('sponsorCategory.add_sponsor_type', $data);
    }
    public function saveSponsorCategory(Request $request)
    {
        $request->validate([
            "sponsor_name" => 'required'
        ]);
        $sponsorCategory = new SponsorType();
        $sponsorCategory->sponsor_name = $request->sponsor_name;
        $sponsorCategory->status = 0;
        $sponsorCategory->save();
        return back()->with('success_message', 'Successfully Aded');
    }
    public function manageSponsorCategory()
    {
        $data['title'] ='Manage Sponsor Category';
        $data['sponsorCategory'] = SponsorType::all();
        return view('sponsorCategory.manage_sponsor_category', $data);
    }
    public function editSponsorCategory( $id)
    {

        $data['title'] = 'Edit Sponsor Category';
         $data['sponsorCategory'] = SponsorType::find($id);
        return view('sponsorCategory.edit_sponsor_category', $data);
    }
    public function updateSponsorCategory(Request $request, $id)
    {
        $request->validate([
            "sponsor_name" => 'required'
        ]);

        $data['title'] = 'Update Sponsor Category';
        $sponsorType = SponsorType::where('id', $id)->first();

        $sponsorType->sponsor_name = $request->sponsor_name;

        $sponsorType->save();
        return redirect()->route('manageSponsorCategory')->with('success_message', 'Updated Successfully');
    }
    public function deleteSponsorCategory($id)
    {
        $sponsorType = SponsorType::where('id', $id)->first();
        $sponsorType->delete();
        return redirect()->route('manageSponsorCategory')->with('success_message', 'Deleted Successfully');
    }


}
