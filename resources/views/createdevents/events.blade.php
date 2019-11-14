@extends('layouts.app')
@section('content')

<div class="eventdetails">
        <h3>These are all the events that have been registered</h3>
@if(count($createdevents) > 0)

   @foreach ($createdevents as $createdevent)
       
       <h4 id="eventtitle"><a href="/tbapp/public/createdevents/{{$createdevent->id}}">{{$createdevent->title}}</a></h4>

       <div class="eventinfo">
       <p>Event Name : {{$createdevent->id}}</p>
       <p>Event Descrition : {{$createdevent->description}}</p>
       <p>Place of Event : {{$createdevent->place}}</p>
       <p>Time to take place : {{$createdevent->time}}</p>
       <p>Tickets for regular : {{$createdevent->regular}}</p>
       <p>Tickets for VIP {{$createdevent->vip}}</p>
       <br>
       <br>
       <small>Written on {{$createdevent->created_at}}</small>

       </div>

     
   @endforeach

   <br>
   <br>
   {{$createdevents->links()}}
@else
<p>No posts found</p>

</div>
@endif
@endsection