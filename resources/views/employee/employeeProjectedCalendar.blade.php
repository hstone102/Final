@extends('employeeLayout')

@section('content')

<h2 class="textlarge centertext m-b-md">Predictive Calendar</h2>

<h2 class="textmedium centertext m-b-md">This Week's Schedule</h2>





<div id="thisweek" >
  <div class="columns">
    <div class="column">
      <p class="textmedium centertext">Monday</p>
    </div>
    <div class="column">
      <p class="textmedium centertext">Tuesday</p>
    </div>
    <div class="column">
      <p class="textmedium centertext">Wednesday</p>
    </div>
    <div class="column">
      <p class="textmedium centertext">Thursday</p>
    </div>
    <div class="column">
      <p class="textmedium centertext">Friday</p>
    </div>
  </div>
  <div class="columns">
    <div class="column">
      <div class="box m-b-lg">
        <div class="content">
          <ul>
            @foreach ($monday as $item)

            <li value="{{$item->client_id}}">{{$item->client->firstName}}</li>
            @endforeach

          </ul>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="box m-b-lg">
        <div class="content">
          <ul>
            @foreach ($tuesday as $item)

            <li value="{{$item->client_id}}">{{$item->client->firstName}}</li>
            @endforeach

          </ul>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="box m-b-lg">
        <div class="content">
          <h4>Write a log or contact.</h4>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="box m-b-lg">
        <div class="content">
          <h4>Write a log or contact.</h4>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="box m-b-lg">
        <div class="content">
          <h4>Write a log or contact.</h4>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
