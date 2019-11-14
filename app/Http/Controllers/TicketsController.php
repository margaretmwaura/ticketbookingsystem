<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\CreatedEvent;
use App\Ticket;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

         return redirect()->back()->with('success','There are enough tickets');
     }
     

      
    //    return view('createdevents.details', compact('name', 'number','newenentname','numberevents','numpresent'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
