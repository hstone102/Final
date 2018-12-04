@extends('supervisorLayout')

@section('content')
<div class="columns m-b-none">
  <div class="column">
    <span class="textsmallbold">Assigned FSW:</span> <span class="textsmall">{{$contact->user->name}}<span>
  </div>
  <div class="column textsmall">
    <span class="textsmallbold">Contact made by:</span> <span class="textsmall">{{$contact->user->name}}<span>
  </div>
  <div class="column textsmall">
    <span class="textsmallbold">Start time:</span> <span class="textsmall">{{$contact->start}}<span>
  </div>
  <div class="column textsmall">
    <span class="textsmallbold">End time:</span> <span class="textsmall">{{$contact->end}}<span>
  </div>
</div>
<div class="columns">
  <div class="column textsmall">
    <span class="textsmallbold">Date:</span> <span class="textsmall">{{$contact->date}}<span>
  </div>
  <!-- <div class="column textsmall">
    <span class="textsmallbold">Family level:</span> <span class="textsmall">2<span>
  </div> -->
  <div class="column textsmall">
    <span class="textsmallbold">Person contacted:</span> <span class="textsmall">{{$contact->name}}<span>
  </div>
  <div class="column textsmall">
    <p><span class="textsmallbold">Contact type:</span> <span class="textsmall">{{$contact->type}}<span></p>
  </div>
  <div class="column textsmall">
  </div>
</div>
<div class="columns">
  <div class="column">
  <p>{{$contact->comment}}.</p>
  </div>
</div>
<div class="columns">
  <div class="column">
  <p><span>{{$contact->user->name}}</span></p>
  <p><span>{{$contact->created_at}}</span></p>
  </div>
</div






@endsection
