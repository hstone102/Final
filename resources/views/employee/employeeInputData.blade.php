@extends('employeeLayout')

@section('content')

<div class=" centertext m-b-xl textlarge">

Which client would you like to write a contact or log for?

</div>

<div class="center">
<div class="control centertext">
  <div class="select">
    <select>
      <option>Select dropdown</option>
      <option>With options</option>
      <option>Use for each to get names from database</option>
    </select>
  </div>
</div>
</div>

<div class="control centertext m-t-lg m-b-xxl">
  <button class="button is-info">Find Client</button>
</div>






@endsection
