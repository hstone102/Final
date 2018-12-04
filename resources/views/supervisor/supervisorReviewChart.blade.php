@extends('supervisorLayout')

@section('content')

<div id="client">
  <div class=" centertext m-b-xl textlarge">

  Which client would you like to review or update?

  </div>

<form method="get" action="/supervisorClientFile">
  <div class="center">
  <div class="control centertext">
    <div class="select">
      <select name="client_id">
        <option>Select dropdown</option>

        @foreach ($k as $l)
        <option value="{{$l->id}}">{{$l->firstName }} {{$l->lastName }}</option>
        @endforeach

      </select>
    </div>
  </div>
  </div>

  <div class="control centertext m-t-lg m-b-xxl">
    <button class="button is-info">Find Client</button>
  </div>
</div>
</form>



@endsection
