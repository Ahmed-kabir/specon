<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Speaker;
use App\SponsorType;
use App\Ticket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

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
            "tkt_img" => 'mimes:jpeg,jpg,png,gif|required|max:1000'
        ]);
//        $ticketImage = $request->file('tkt_img');

//        $randNumber = Str::random(6);
//        $fileExtension = $ticketImage->getClientOriginalExtension();
//        $name = $randNumber . '.' . $fileExtension;
//
//        $path = ('assets/ticketImage/');
//        $ticketImage->move($path, $name);
//        $imageurl = $path . $name;

        $imageName = $request->file('tkt_img');
        $speakerNameFormate = 'tkt-'.Str::random(8).'.'.$imageName->getClientOriginalExtension();
        $img = Image::make($imageName);
        $path = 'assets/ticketImage/';
        $img->resize(193,175);
        $img->save($path.'/'.$speakerNameFormate);


        $ticket = new Ticket();
        $ticket->tkt_typ = $request->tkt_typ;
        $ticket->tkt_price = $request->tkt_price;
        $ticket->tkt_desc = $request->tkt_desc;
        $ticket->tkt_qty = $request->tkt_qty;
        $ticket->status = 1;
        $ticket->tkt_img = $speakerNameFormate;
        $ticket->save();
        return back()->with('success_message', 'Ticket Added Successfully');
    }

    public function manageTicket()
    {
        $data['title'] = 'Manage Ticket';
        $data['ticket'] = Ticket::where('status', 1)->paginate(5);
        return view('ticket.manage_ticket', $data);
    }

    public function editTicket($id)
    {
        $data['title'] = 'Edit Ticket';
        $data['editTicketById'] = Ticket::find($id);
        return view('ticket.edit_ticket', $data);
    }

    public function updateTicket(Request $request, $id)
    {

        $request->validate([
            "tkt_typ" => 'required',
            "tkt_price" => 'required|not_in:0',
            "tkt_desc" => 'required',
            "tkt_qty" => 'required|not_in:0',
            "tkt_img" => 'mimes:jpeg,jpg,png,gif|max:1000'
        ]);
        $speakerNameFormate = $this->chkimage($request, $id);
        $ticket = Ticket::find($id);
        $ticket->tkt_typ = $request->tkt_typ;
        $ticket->tkt_price = $request->tkt_price;
        $ticket->tkt_desc = $request->tkt_desc;
        $ticket->tkt_qty = $request->tkt_qty;
        $ticket->tkt_img = $speakerNameFormate;
        $ticket->save();
        return redirect()->route('manageTicket')->with('success_message', 'Ticket Updated Successfully');
    }

    public function chkimage($request, $id)
    {
        $ticket = Ticket::where('id', $id)->first();
        $ticketImage = $request->file('tkt_img');
        if ($ticketImage) {
            unlink('assets/ticketImage/'.$ticket->tkt_img);

            $speakerNameFormate = 'tkt-'.Str::random(8).'.'.$ticketImage->getClientOriginalExtension();
            $img = Image::make($ticketImage);
            $path = 'assets/ticketImage/';
            $img->resize(193,175);
            $img->save($path.'/'.$speakerNameFormate);

        } else {
            $speakerNameFormate = $ticket->tkt_img;
        }
        return $speakerNameFormate;
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
            "name" => 'required|max:25',
            "email" => 'required|email|max:25',
            "phone" => 'required|max:15',
            "qty" => 'required|integer|max:5|min:1',
            "checkbox" => 'required'

        ]);
        $ticket = Ticket::find($id);
        if ($ticket->tkt_qty < $request->qty) {
            return back()->with('error_message', $request->qty . 'Ticket' . ' ' . 'Not Available');
        } else {
            $tktId = Str::random(6);
            $customer = new Customer();
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            $customer->tkt_id = $tktId;
            $customer->qty = $request->qty;
            $customer->save();

            $ticket->tkt_qty = $ticket->tkt_qty - $request->qty;
            $ticket->save();

            $to = $request->email;
            $subject = 'Ticket Info';
//            $message="Click this link for reset password:". $link = url("user/password/reset/$user_id");
            $message = "Your Ticket No Is :" . $tktId;
            $headers = 'From: webmaster@example.com' . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);


            return redirect()->route('buyTicket', $id)->with('success_message', 'Please Check Your Email');


//            return redirect()->route('buyTicket', $id)->with('success_message', 'Ticket Confirmed Successfully');
        }
    }
}
