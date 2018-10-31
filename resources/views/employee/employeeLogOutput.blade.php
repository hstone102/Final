@extends('supervisorLayout')

@section('content')

<div class="columns">
  <div class="column is-three-quarters p-xxs">
  </div>
  <div class="column  p-xxs">
    <span class="textsmallbold">Patient Name: <span class="textsmall">Jane Doe</span>
  </div>
</div>
<div class="columns">
  <div class="column is-three-quarters p-xxs">
  </div>
  <div class="column  p-xxs">
    <span class="textsmallbold">Patient #: <span class="textsmall">999-99-9999</span>
  </div>
</div>
<div class="columns">
  <div class="column is-half p-xxs">
  </div>
  <div class="column p-xxs">
    <div class="control">
      <label class="radio">
        <input type="radio" name="answer" checked>
        Baby
      </label>
      <label class="radio">
        <input type="radio" name="answer">
        Mother
      </label>
    </div>
  </div>
  <div class="column  p-xxs">
    <span class="textsmallbold">Client #: <span class="textsmall">000-00-0000</span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Date Supplemental Entered:</span><span>10/31/18</span>
  </div>
  <div class="column is-2 p-xxs">
    <span class="textsmallbold">Initials:</span><span>HS</span>
  </div>
  <div class="column p-xxs">
    <span class="textsmallbold">Date HVL Entered:</span><span>10/31/18</span>
  </div>
  <div class="column p-xxs">
    <span class="textsmallbold">Initials:</span><span>HS</span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Date:</span><span>October 31, 2018</span>
  </div>
  <div class="column p-xxs">
    <span class="textsmallbold">Family Level:</span><span>2</span>
  </div>
  <div class="column p-xxs">
    <span class="textsmallbold">Begin Time:</span><span>9:22 am</span>
  </div>
  <div class="column p-xxs">
    <span class="textsmallbold">End Time:</span><span>9:55 am</span>
  </div>
  <div class="column p-xxs">
    <span class="textsmallbold">Visit Type:</span><span>01</span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">FSW Assigned:</span><span>Holly Stone</span>
  </div>
  <div class="column p-xxs">
    <span class="textsmallbold">Visit Made By:</span><span>Holly Stone</span>
  </div>
  <div class="column p-xxs">
    <span class="textsmallbold">Visit Completed By:</span><span>FSW Pro 4444</span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Referral Made to Local Agency for: Indicate A-Accepted Referrals D-Denied Referrals</span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
    <span>Basic Needs - A</span>
  </div>
  <div class="column p-xxs">
    <span>Group Event - A</span>
  </div>
  <div class="column p-xxs">
    <span>Transportation - A</span>
  </div>
  <div class="column p-xxs">
    <span>Smoking Cessitation - A</span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">* Document any details describing referral(s) made in these areas on the parent's Service Record (CH-3A)</span>
  </div>
</div>
<div class="columns">
  <div class="column p-xxs">
    <span class="textsmallbold">Persons Present in Visit: </span><span> Mother, Baby, Grandparent</span>
  </div>
</div>
<div class="columns">
  <div class="column is-three-quarters p-xxs">
    <span class="textsmallbold">Do you have any concerns regarding your child's development, behavior, or learning? </span>
  </div>
  <div class="column p-xxs">
    <span>
      <div class="control">
        <label class="radio">
          <input type="radio" name="foobar">
          Yes
        </label>
        <label class="radio">
          <input type="radio" name="foobar" checked>
          No
        </label>
      </div>
    </span>
  </div>
</div>


@endsection
