@extends('employeeLayout')

@section('content')

<h2 class="centertext m-b-lg textlarge">Welcome to your Chart.  What would you like to do?</h2>

<div class="columns">
  <div class="column">
    <a href="employeeInputData">
    <div class="box m-b-lg">
      <article class="media">
        <div class="media-left">
          <figure class="image is-64x64">
            <img src="https://solidwize.com/wp-content/uploads/2012/04/Green-Check-Mark.jpg" alt="Image">
          </figure>
        </div>
          <div class="media-content">
            <div class="content">
              <h4>Write a log or contact.</h4>
            </div>
          </div>
      </article>
    </div></a>
  </div>
  <div class="column">
    <a href="employeeChartReview">
    <div class="box">
      <article class="media">
        <div class="media-left">
          <figure class="image is-64x64">
            <img src="https://solidwize.com/wp-content/uploads/2012/04/Green-Check-Mark.jpg" alt="Image">
          </figure>
        </div>
          <div class="media-content">
            <div class="content">
              <h4>Review a chart.</h4>
            </div>
          </div>
      </article>
    </div></a>
  </div>
</div>

<div class="columns">
  <div class="column">
    <a href="employeeVisitReport">
    <div class="box">
      <article class="media">
        <div class="media-left">
          <figure class="image is-64x64">
            <img src="https://solidwize.com/wp-content/uploads/2012/04/Green-Check-Mark.jpg" alt="Image">
          </figure>
        </div>
          <div class="media-content">
            <div class="content">
              <h4>See visit report.</h4>
            </div>
          </div>
      </article>
    </div></a>
  </div>
  <div class="column">
    <a href="employeeProjectedCalendar">
    <div class="box">
      <article class="media">
        <div class="media-left">
          <figure class="image is-64x64">
            <img src="https://solidwize.com/wp-content/uploads/2012/04/Green-Check-Mark.jpg" alt="Image">
          </figure>
        </div>
          <div class="media-content">
            <div class="content">
              <h4>Projected calendar.</h4>
            </div>
          </div>
      </article>
    </div></a>
  </div>
</div>

@endsection
