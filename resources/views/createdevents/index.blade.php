@extends('layouts.app')
@section('content')
<h3>These are al the events in the database</h3>
@if(count($createdevents) > 0)

   @foreach ($createdevents as $createdevent)
       <div class="well">
       <h4><a href="/tbapp/public/createdevents/{{$createdevent->id}}">{{$createdevent->title}}</a></h4>
       <small>Written on {{$createdevent->place}}</small>
       </div>
   @endforeach

   {{$createdevents->links()}}
@else
<p>No posts found</p>
@endif
@endsection