@extends('layouts.app')
@section('content')


<div class="createevent">
        <label><i>Create a new event</i></label>
{!! Form::open(['action'=> 'CreatedEventsController@store' , 'method' =>'POST']) !!}
    <div class ="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',' ')}}
    </div>
    <div class ="form-group">
        {{Form::label('description','Event Description')}}
        {{Form::textarea('description',' ' , ['id' => "editor" , 'name' => "editor"])}}
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
    {{Form::submit('Submit',['class' => "submit"]) }}
{!! Form::close() !!}
</div>
@endsection