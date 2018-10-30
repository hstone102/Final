@extends('supervisorLayout')

@section('content')

<h2 class="centertext m-b-lg textlarge">Welcome to your Chart.  What would you like to do?</h2>

<div class="columns">
  <div class="column">
    <a href="supervisorReviewEvent">
    <div class="box m-b-lg">
      <article class="media">
        <div class="media-left">
          <figure class="image is-64x64">
            <!-- <i class="fas fa-check-square"></i> -->
            <img src="https://solidwize.com/wp-content/uploads/2012/04/Green-Check-Mark.jpg" alt="Image">
          </figure>
        </div>
          <div class="media-content">
            <div class="content">
              <h4>Sign off on logs and contacts.</h4>
            </div>
          </div>
      </article>
    </div></a>
  </div>
  <div class="column">
    <a href="supervisorReviewChart">
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
    <a href="supervisorVisitReport">
    <div class="box m-b-lg">
      <article class="media">
        <div class="media-left">
          <figure class="image is-64x64">
            <img src="https://solidwize.com/wp-content/uploads/2012/04/Green-Check-Mark.jpg" alt="Image">
          </figure>
        </div>
          <div class="media-content">
            <div class="content">
              <h4>See visit reports.</h4>
            </div>
          </div>
      </article>
    </div></a>
  </div>
  <div class="column">
    <a href="supervisorProjectedCalendar">
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

<div class="columns">
  <div class="column">
    <a href="supervisorNewClient">
    <div class="box m-b-lg">
      <article class="media">
        <div class="media-left">
          <figure class="image is-64x64">
            <img src="https://solidwize.com/wp-content/uploads/2012/04/Green-Check-Mark.jpg" alt="Image">
          </figure>
        </div>
          <div class="media-content">
            <div class="content">
              <h4>Add new client.</h4>
            </div>
          </div>
      </article>
    </div></a>
  </div>
  <div class="column">
    <a href="supervisorInputData">
    <div class="box">
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
    </div>
  </div>
</div>

@endsection
