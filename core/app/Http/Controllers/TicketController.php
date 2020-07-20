<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Speaker;
use App\Ticket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function addTicket()
    {
        $data['title'] = 'Add Ticket';
        return view('ticket.add_ticket', $data);
    }
    public function saveTicket(Request $request)
    {
        $request->validate([
            "tkt_typ" => 'required',
            "tkt_price" => 'required|not_in:0',
            "tkt_desc" => 'required',
            "tkt_qty" => 'required|not_in:0',
            "tkt_img"=>'mimes:jpeg,jpg,png,gif|required|max:1000'
        ]);
        $ticketImage=$request->file('tkt_img');
        $name=$ticketImage->getClientOriginalName();
        $path=('assets/ticketImage/');
        $ticketImage->move($path,$name);
        $imageurl=$path.$name;

        $ticket = new Ticket();
        $ticket->tkt_typ = $request->tkt_typ;
        $ticket->tkt_price = $request->tkt_price;
        $ticket->tkt_desc = $request->tkt_desc;
        $ticket->tkt_qty = $request->tkt_qty;
        $ticket->status = 1;
        $ticket->tkt_img = $imageurl;
        $ticket->save();
        return back()->with('success_message', 'Ticket Added Successfully');
    }

    public function manageTicket()
    {
        $data['title'] = 'Manage Ticket';
        $data['ticket'] = Ticket::where('status', 1)->get();
        return view('ticket.manage_ticket', $data);
    }
    public function editTicket($id)
    {
        $data['title'] = 'Edit Ticket';
        $data['editTicketById'] = Ticket::find($id);
        return view('ticket.edit_ticket',$data);
    }
    public function updateTicket(Request $request, $id)
    {

        $request->validate([
            "tkt_typ" => 'required',
            "tkt_price" => 'required|not_in:0',
            "tkt_desc" => 'required',
            "tkt_qty" => 'required|not_in:0'
        ]);
        $imageurl = $this->chkimage($request, $id);

        $ticket = Ticket::find($id);
        $ticket->tkt_typ = $request->tkt_typ;
        $ticket->tkt_price = $request->tkt_price;
        $ticket->tkt_desc = $request->tkt_desc;
        $ticket->tkt_qty = $request->tkt_qty;
        $ticket->tkt_img = $imageurl;
        $ticket->save();
        return redirect()->route('manageTicket')->with('success_message', 'Ticket Updated Successfully');
    }
    public function chkimage($request, $id)
    {
        $ticket = Ticket::where('id', $id)->first();
        $ticketImage = $request->file('tkt_img');
        if($ticketImage){
            unlink($ticket->tkt_img);
            $name=$ticketImage->getClientOriginalName();
            $path=('assets/ticketImage/');
            $ticketImage->move($path,$name);
            $imageurl=$path.$name;

        }
        else{
            $imageurl=$ticket->tkt_img;
        }
        return $imageurl;
    }

    public function inactiveTicket($id)
    {
        $ticket = Ticket::where('id', $id)->first();
        $ticket->status = 0;
        $ticket->save();
        return redirect()->route('manageTicket')->with('success_message', 'Ticket Inactivated Successfully');
    }
    public function buyTicket($id)
    {
        $data['title'] = 'Buy Ticket';
        $data['ticket'] = Ticket::find($id);
        return view('ticket.buy_ticket', $data);
    }
    public function confirmTicket(Request $request, $id)
    {
        $request->validate([
           "name" => 'required',
           "email" => 'required|email',
           "phone" => 'required',
           "qty" => 'required'
        ]);
        $ticket = Ticket::find($id);
        if ($ticket->tkt_qty < $request->qty)
        {
            return back()->with('error_message', $request->qty. 'Ticket'. ' '.  'Not Available');
        }
        else
        {
            $tktId = Str::random(6);
            $customer = New Customer();
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            $customer->tkt_id = $tktId;
            $customer->qty = $request->qty;
            $customer->save();

            $ticket->tkt_qty = $ticket->tkt_qty - $request->qty;
            $ticket->save();
            return redirect()->route('buyTicket',$id)->with('success_message', 'Ticket Confirmed Successfully');
        }
    }
}
