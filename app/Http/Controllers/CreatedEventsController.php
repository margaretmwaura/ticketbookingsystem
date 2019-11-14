<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreatedEvent;

class CreatedEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $createdevents =  CreatedEvent::orderBy('time','desc')->paginate(1);
        return view('createdevents.events')->with('createdevents',$createdevents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createdevents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $editor_data = $_POST[ 'editor' ];
        echo $editor_data;
        $this->validate($request,[
            'title' => 'required',
            'place' => 'required',
            'time' => 'required',
            'regular' => 'required',
            'vip' => 'required',
            'number' => 'required'

       ]);
       if($editor_data == " ")
       {
           echo "Field description is required";
       }
       else
       {
           echo "Data for the description has been entered";
       }
       $createdevent = new CreatedEvent;
      $createdevent ->title = $request->input('title');
      $createdevent ->description = $editor_data;
      $createdevent ->place = $request->input('place');
      $createdevent ->time = $request->input('time');
      $createdevent ->regular = $request->input('regular');
      $createdevent ->vip = $request->input('vip');
      $createdevent ->number = $request->input('number');
      $createdevent  -> save();
      return redirect('/createdevents')->with('success' , 'the event was successfully created');
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
        $createdevent = CreatedEvent::find($id);
        return view('createdevents.show')->with('createdevent',$createdevent);
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
        $createdevent = CreatedEvent::find($id);
        return view('createdevents.edit')->with('createdevent',$createdevent);
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
      $editor_data = $_POST[ 'editor' ];
      echo $editor_data;

      $this->validate($request,[
        'title' => 'required',
        'place' => 'required',
        'time' => 'required',
        'regular' => 'required',
        'vip' => 'required',
        'number' => 'required'

   ]);

   if($editor_data == " ")
       {
           echo "Field description is required";
       }
       else
       {
           echo "Data for the description has been entered";
       }

   $createdevent = CreatedEvent::find($id);
  $createdevent ->title = $request->input('title');
  $createdevent ->description = $editor_data;
  $createdevent ->place = $request->input('place');
  $createdevent ->time = $request->input('time');
  $createdevent ->regular = $request->input('regular');
  $createdevent ->vip = $request->input('vip');
  $createdevent ->number = $request->input('number');
  $createdevent  -> save();
  return redirect('/createdevents')->with('success' , 'the event was successfully Updated');
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
        $createdevent = CreatedEvent::find($id);
        $createdevent  -> delete();
        return redirect('/createdevents')->with('success' , 'the event was successfully deleted');
    }
}
