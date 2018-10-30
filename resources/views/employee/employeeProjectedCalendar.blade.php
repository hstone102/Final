@extends('employeeLayout')

@section('content')

<h2 class="textlarge centertext m-b-md">Predictive Calendar</h2>

<h2 class="textmedium centertext m-b-md">Which week would you like to look at?</h2>

<div class="control centertext m-b-lg">
  <div class="select">
    <select id="select" onchange="selection()">
      <option value="0">Select dropdown</option>
      <option value="1">Last Week</option>
      <option value="2">This Week</option>
      <option value="3">Next Week</option>
    </select>
  </div>
</div>
<script>

function selection () {


  var x = document.getElementById("lastweek");
  var y = document.getElementById("thisweek");
  var z = document.getElementById("nextweek");

  if (document.getElementById("select").value == "1"){
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";
  }
  else if (document.getElementById("select").value == "2"){
    y.style.display = "block";
    z.style.display = "none";
    x.style.display = "none";
  }
  else if (document.getElementById("select").value == "3"){
    z.style.display = "block";
    y.style.display = "none";
    x.style.display = "none";
  }
  else {
    y.style.display = "none";
    x.style.display = "none";
    z.style.display = "none";
  }
}
</script>


<div id="lastweek" style="display:none">
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

<div id="thisweek" style="display:none">
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

<div id="nextweek" style="display:none">
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
