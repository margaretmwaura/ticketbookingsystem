@extends('layouts.app')
@section('content')

<a href="/tbapp/public/createdevents" class="btn btn-default">Go back</a>
<h3>{{$createdevent->title}}</h3>

@if (Auth::check())
<a href="/tbapp/public/createdevents/{{$createdevent -> id}}/edit" class="btn btn-default">Edit</a>

{!! Form::open(['action'=> ['CreatedEventsController@destroy'  , $createdevent -> id], 'method' =>'POST']) !!}
{{Form::submit('DELETE' , ['class' => 'btn btn-danger'])}}
{{Form::hidden('_method' ,'DELETE')}}
{!! Form::close() !!}



{!! Form::open(['action'=> 'UserNumberController@deleteuseraccount', 'method' =>'POST']) !!}
{{Form::submit('DELETE ACCOUNT' , ['class' => 'btn btn-danger'])}}
{{Form::hidden('_method' ,'DELETE')}}
{!! Form::close() !!}
 
@else
 <h1>User is not logged in</h1>
@endif
@endsection