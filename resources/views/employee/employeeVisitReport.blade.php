@extends('employeeLayout')

@section('content')

<h2 class="textlarge centertext m-b-md">Do you want an overall report or for a specific client?</h2>

<div class="control centertext m-b-md">
  <div class="select">
    <select id="select" onchange="selection()">
      <option value="0">Select dropdown</option>
      <option value="1">Overall</option>
      <option value="2">Specific client</option>
    </select>
  </div>
</div>

<script>

function selection () {


  var x = document.getElementById("overall");
  var y = document.getElementById("specific");

  if (document.getElementById("select").value == "1"){
    x.style.display = "block";
    y.style.display = "none";
  }
  else if (document.getElementById("select").value == "2"){
    y.style.display = "block";
    x.style.display = "none";
  }
  else {
    y.style.display = "none";
    x.style.display = "none";
  }
}

</script>

<div id="overall" style="display:none">
  <h2 class="textmedium m-b-xl">Select as many as you would like...</h2>
  <div class="columns">
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        Day of week
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        Day of Month
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        Billing Source
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        Under18
      </label>
    </div>
  </div>
  <div class="columns">
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        Over 18
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        Unemployed
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        High School Student
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        Before Noon
      </label>
    </div>
  </div>
  <div class="columns">
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        After Noon
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        Sub visit
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        Tobacco Use
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        Breastfeeding
      </label>
    </div>
  </div>
  <div class="control centertext m-t-lg m-b-xxl">
    <button class="button is-info">Get Report</button>
  </div>
</div>


<div id="specific" style="display:none">
  <div class=" centertext m-b-xl textlarge">

  Pick a client

  </div>

  <div class="center">
    <div class="control centertext">
      <div class="select">
        <select>
          <option>Select dropdown</option>
          <option value="1">With options</option>
          <option value="2">Use for each to get names from database</option>
        </select>
      </div>
    </div>
  </div>

  <div class="control centertext m-t-lg m-b-xxl">
    <button class="button is-info" onClick="selection2()">Find Client</button>
  </div>
  <script>

  function selection2 () {


    var x = document.getElementById("specificSelections");

    x.style.display = "block";
  }


  </script>

   <div id="specificSelections" style="display:none">
     <h2 class="textmedium m-b-xl">Select as many as you would like...</h2>

     <div class="columns">
       <div class="column">
         <label class="checkbox">
           <input type="checkbox">
           Before Noon
         </label>
       </div>
       <div class="column">
         <label class="checkbox">
           <input type="checkbox">
           After Noon
         </label>
       </div>
       <div class="column">
         <label class="checkbox">
           <input type="checkbox">
           Day of Week
         </label>
       </div>
       <div class="column">
         <label class="checkbox">
           <input type="checkbox">
           Day of Month
         </label>
       </div>
       <div class="column">
         <label class="checkbox">
           <input type="checkbox">
           With Sub Scheduled
         </label>
       </div>
     </div>
     <div class="control centertext m-t-lg m-b-xxl">
       <button class="button is-info">Get Report</button>
     </div>
  </div>

</div>


@endsection
