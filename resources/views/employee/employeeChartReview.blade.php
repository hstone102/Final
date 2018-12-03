@extends('employeeLayout')

@section('content')

<div id="client">
  <div class=" centertext m-b-xl textlarge">

  Which client would you like to review or update?

  </div>
<form method="get" action="/employeeClientFile">
  <div class="center">
  <div class="control centertext">
    <div class="select">
      <select name="client_id">
        <option>Select dropdown</option>

        @foreach ($e as $f)
        <option value="{{$f->id}}">{{$f->firstName }} {{$f->lastName }}</option>
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
