@extends('layouts.app')
@section('content')

<a href="/tbapp/public/createdevents" class="back"> Go back</a>


<h3 class="eventcenter">Event Name : <i>{{$createdevent->title}}</i></h3>


@if (Auth::check())
<a href="/tbapp/public/createdevents/{{$createdevent -> id}}/edit" class="edit">Edit</a>

{!! Form::open(['action'=> ['CreatedEventsController@destroy'  , $createdevent -> id], 'method' =>'POST']) !!}
{{Form::submit('DELETE EVENT' , ['class' => 'delete'])}}
{{Form::hidden('_method' ,'DELETE')}}
{!! Form::close() !!}



{!! Form::open(['action'=> 'UserNumberController@deleteuseraccount', 'method' =>'POST']) !!}
{{Form::submit('DELETE ACCOUNT' , ['class' => 'account'])}}
{{Form::hidden('_method' ,'DELETE')}}
{!! Form::close() !!}
 
@else
 <h1>User is not logged in</h1>
@endif

@php
  $num = array(1,2,3,4,5);  
@endphp

<!-- This is the form for booking tickets -->

<div class="createeventtwo">
        <h3>Book a ticket for the event</h3>
{!! Form::open(['action'=> 'TicketsController@store', 'method' =>'POST']) !!}
    <div class ="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name',' ')}}
    </div>
    <div class ="form-group">
        {{Form::label('email','Event Email')}}
        {{Form::email('email',' ' )}}
        {{-- <script>CKEDITOR.replace( 'editor',{height: 500});</script> --}}
    </div>
    <div class="form-group">
            <br>
            {!! Form::label('vip', 'VIP ') !!}
            {!! Form::radio('type', 'VIP') !!}
            {!! Form::label('regular', 'Regular') !!}
            {!! Form::radio('type', 'Regular',true) !!}
            <br>
    </div>
    <div class="form-group">
            {!! Form::select('num', $num) !!}
    </div>
    <div class ="form-group">
        {{Form::label('name','This is the event you are bookiing')}}
        {{Form::text('eventname',$createdevent->title )}}
    </div>
{{Form::submit('Submit',['class' => "submit"])}}
{!! Form::close() !!}
</div>
@endsection