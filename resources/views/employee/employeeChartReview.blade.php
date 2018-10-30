@extends('employeeLayout')

@section('content')

<div id="client">
  <div class=" centertext m-b-xl textlarge">

  Which client would you like to review or update?

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
</div>


<div id=reviewOrUpdate>
  <h2 class="textlarge centertext m-b-md">Do you want to review a chart or update information?</h2>


  <!-- Display the client name here -->
  <div class="control centertext m-b-xl">
    <div class="select">
      <select id="select" onchange="selection()">
        <option value="0">Select dropdown</option>
        <option value="1">Review</option>
        <option value="2">Update</option>
      </select>
    </div>
  </div>
</div>

<script>

function selection () {


  var x = document.getElementById("review");
  var y = document.getElementById("update")

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

<div id="review" style="display:none">
  <p class="m-b-md textlarge">Logs</p>

  <!-- Do a "for each" with the database and put all logs here -->

  <h2 class="m-b-md textlarge">Contacts</h2>

  <!-- Do a "for each" with the database and put all contacts here -->

  <h2 class="m-b-xxl textlarge">Documents</h2>

  <!-- Do a "for each" with the database and put all documents here -->

</div>


<div id="update" style="display:none">
  <!-- Display the client name here -->
  <p class="textlarge centertext m-b-lg">What information would you like to enter?</p>

<div class="columns">
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        ASQ-3
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        ASQ-SE2
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        Child Status
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        Home Infant/Toddler Inventory
      </label>
    </div>
</div>
<div class="columns">
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        Childproofing Checklist
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        Consent/Release
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        EDS
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        Goal Sheet
      </label>
    </div>
</div>
<div class="columns">
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        Primary Caregiver Status
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        Health Progress
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        HIPAA
      </label>
    </div>
    <div class="column">
      <label class="checkbox">
        <input type="checkbox">
        DV Screen
      </label>
    </div>
</div>
<div class="columns">
      <div class="column">
        <label class="checkbox">
          <input type="checkbox">
          Mandatory Reporting/Referral
        </label>
      </div>
      <div class="column">
        <label class="checkbox">
          <input type="checkbox">
          Parent-Home Visitor Partnership Agreement/Toy Safety
        </label>
      </div>
      <div class="column">
        <label class="checkbox">
          <input type="checkbox">
          Contact Information
        </label>
      </div>
      <div class="column">
        <label class="checkbox">
          <input type="checkbox">
          Service Record
        </label>
      </div>
</div>

<div class="control centertext m-t-lg m-b-xxl">
  <button class="button is-info">Update Information</button>
</div>


@endsection
