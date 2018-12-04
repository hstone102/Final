@extends('supervisorLayout')

@section('content')

<h2 class="textlarge centertext m-b-md">Predictive Calendar</h2>
<div class="centertext">
<p class="green-box center"></p>Green indiates low-cancellation and no-show rate.
<p class="yellow-box center m-t-sm"></p>Yellow indiates moderate cancellation and no-show rate.
<p class="red-box center m-t-sm"></p>Red indiates high cancellation and no-show rate.
</div>


<h2 class="textmedium centertext m-t-md m-b-md">This Week's Schedule</h2>






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

            <li class="underline"value="{{$item->client_id}}">{{$item->client->firstName}}<div class="indicator {{ $item->client->cancellation_frequency() }}" </div> </li>
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

            <li class="underline"value="{{$item->client_id}}">{{$item->client->firstName}}<div class="indicator {{ $item->client->cancellation_frequency() }}" </div> </li>
            @endforeach

          </ul>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="box m-b-lg">
        <div class="content">
          <ul>
            @foreach ($wednesday as $item)

            <li class="underline"value="{{$item->client_id}}">{{$item->client->firstName}}<div class="indicator {{ $item->client->cancellation_frequency() }}" </div> </li>
            @endforeach

          </ul>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="box m-b-lg">
        <div class="content">
          <ul>
            @foreach ($thursday as $item)

            <li class="underline" value="{{$item->client_id}}">{{$item->client->firstName}}<div class="indicator {{ $item->client->cancellation_frequency() }}" </div> </li>
            @endforeach

          </ul>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="box m-b-lg">
        <div class="content">
          <ul>
            @foreach ($friday as $item)

            <li class="underline"value="{{$item->client_id}}">{{$item->client->firstName}}<div class="indicator {{ $item->client->cancellation_frequency() }}" </div> </li>
            @endforeach

          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
