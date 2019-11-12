@extends('layouts.app')
@section('content')
<h3>Enter a new event</h3>

{!! Form::open(['action'=> 'CreatedEventsController@store' , 'method' =>'POST']) !!}
    <div class ="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',' ')}}
    </div>
    <div class ="form-group">
        {{Form::label('description','Event Description')}}
        {{Form::textarea('description',' ' , ['id' => "editor" , 'name' => "editor"])}}
        {{-- <script>CKEDITOR.replace( 'editor',{height: 500});</script> --}}
    </div>
    <div class ="form-group">
        {{Form::label('place','Event place venue')}}
        {{Form::text('place',' ')}}
    </div>
    <div class ="form-group">
        {{Form::label('time','Time')}}
        {{Form::text('time',' ')}}
    </div>
    <div class ="form-group">
        {{Form::label('vip','VIP pay')}}
        {{Form::text('vip',' ')}}
    </div>
    <div class ="form-group">
        {{Form::label('regular','Regular pay')}}
        {{Form::text('regular',' ')}}
    </div>
    <div class ="form-group">
        {{Form::label('number','Number of people accepted at event')}}
        {{Form::text('number',' ')}}
    </div>
    {{Form::submit('Submit')}}
{!! Form::close() !!}

@endsection