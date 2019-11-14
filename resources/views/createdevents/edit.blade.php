@extends('layouts.app')
@section('content')


<div class="createevent">
        <label><i>Edit this event </i></label>
{!! Form::open(['action'=> ['CreatedEventsController@update' , $createdevent->id ], 'method' =>'POST']) !!}
    <div class ="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$createdevent ->title)}}
    </div>
    <div class ="form-group">
        {{Form::label('description','Event Description')}}
        {{Form::textarea('description', $createdevent ->description , ['id' => "editor" , 'name' => "editor"])}}
        {{-- <script>CKEDITOR.replace( 'editor',{height: 500});</script> --}}
    </div>
    <div class ="form-group">
        {{Form::label('place','Event place venue')}}
        {{Form::text('place',$createdevent ->place)}}
    </div>
    <div class ="form-group">
        {{Form::label('time','Time')}}
        {{Form::text('time',$createdevent ->time)}}
    </div>
    <div class ="form-group">
        {{Form::label('vip','VIP pay')}}
        {{Form::text('vip',$createdevent ->vip )}}
    </div>
    <div class ="form-group">
        {{Form::label('regular','Regular pay')}}
        {{Form::text('regular',$createdevent ->regular)}}
    </div>
    <div class ="form-group">
        {{Form::label('number','Number of people accepted at event')}}
        {{Form::text('number',$createdevent ->number)}}
    </div>
    {{Form::hidden('_method' ,'PUT')}}
    {{Form::submit('Submit',['class' => "submit"])}}
    {!! Form::close() !!}

</div>
@endsection