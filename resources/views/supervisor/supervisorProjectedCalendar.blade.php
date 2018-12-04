@extends('supervisorLayout')

@section('content')

<h2 class="textlarge centertext m-b-md">Predictive Calendar</h2>

<div id="client">
  <div class=" centertext m-b-xl textlarge">

  Which employee's calendar would you like to look at?

  </div>
<form method="get" action="/supervisorCalendarStaff">
  <div class="center">
  <div class="control centertext">
    <div class="select">
      <select name="user_id">
        <option value="0">Select dropdown</option>

        @foreach ($staff as $person)
        <option value="{{$person->id}}">{{$person->name }}</option>
        @endforeach
      </select>
    </div>
  </div>
  </div>

  <div class="control centertext m-t-lg m-b-xxl">
    <button class="button is-info" onclick="selection2()">Find Employee</button>
  </div>
</div>
</form>


@endsection
