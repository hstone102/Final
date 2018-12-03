@extends('supervisorLayout')

@section('content')
<div class="columns m-b-none">
  <div class="column">
    <span class="textsmallbold">Assigned FSW:</span> <span class="textsmall">Holly Stone<span>
  </div>
  <div class="column textsmall">
    <span class="textsmallbold">Contact made by:</span> <span class="textsmall">Holly Stone<span>
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
    <span class="textsmallbold">Date:</span> <span class="textsmall">Jan. 2, 2012<span>
  </div>
  <div class="column textsmall">
    <span class="textsmallbold">Family level:</span> <span class="textsmall">{{contact->level}}<span>
  </div>
  <div class="column textsmall">
    <span class="textsmallbold">Person contacted:</span> <span class="textsmall">Mother<span>
  </div>
  <div class="column textsmall">
    <p><span class="textsmallbold">Contact type:</span> <span class="textsmall">No Show<span></p>
  </div>
</div>
<div class="columns">
  <div class="column">
  <p>FSW knocked on door, no one home. Called phone, no answer.</p>
  </div>
</div>
<div class="columns">
  <div class="column">
  <span>Supervisor Signature     </span><span>10/31/18</span>
  </div>
</div






@endsection
