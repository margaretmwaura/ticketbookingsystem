<?php

namespace App\Http\Controllers;

use DB;
use Mail;
use Illuminate\Http\Request;
use App\CreatedEvent;
use App\Ticket;

class TicketsController extends Controller
{
    
    public function store(Request $request )
    {
        
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required'          
            
       ]);

       $numpresent = Ticket::count();
       
       $name = $request->type;
       $number = $request->num;
       $newenentname = $request->input('eventname');
       $number = $number + 1;

       $numberevents = DB::table('created_events')->where('title', $newenentname)->value('number');


       //All three values are present now
       
     $allowed = $numberevents - $numpresent;
     if($allowed < $number)
     {
       //show alert
       return redirect()->back()->with('error','There are no enough tickets , tickets remaining are ' . $allowed ." ");
     }
     else
     {
         //book events
         for($i=1 ; $i <= $number; $i++)
         {
             // Create the ticket row to be sent to database
         $ticket = new Ticket;
         $ticket ->name = $request->input('name');
        $ticket ->email = $request->input('email');
        $ticket ->tickettype = $request->type;
        $ticket->eventname = $newenentname;
        $ticket -> save();
  
         
         } 
         
          $this->basic_email($ticket->name,$ticket->tickettype,$ticket->eventname,$ticket->email);
         return redirect()->back()->with('success','You have succesfully booked your event tickets , an email will be sent to you');
     }
     

      
    //    return view('createdevents.details', compact('name', 'number','newenentname','numberevents','numpresent'));

    }

    public function basic_email($name , $type , $eventname ,$email) {
        $data = array('name'=>"$name",'type'=>$type , 'eventname'=>$eventname , 'email' => $email);
     
        // Without the use function and passing the variable the mail function will not work
        Mail::send(['text'=>'mail'], $data, function($message) use ($email)
        {
           $message->to($email)->subject
              ('Booking of tickets');
           $message->from('mwauramargaret1@gmail.com','Ticket Booking Company');
        });
        echo "Basic Email Sent. Check your inbox.";
     }
  
  
}
