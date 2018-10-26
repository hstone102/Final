@extends('layout')



@section('content')

    <div class="field">
      <div class="columns">
        <div class="column is-three-fifths is-offset-one-fifth">
          <p class="control has-icons-left">
            <input class="input is-medium is-rounded" type="username" placeholder="Username">
            <span class="icon is-small is-left">
              <i class="fas fa-user"></i>
            </span>
          </p>
        </div>
      </div>
    </div>

    <div class="field">
      <div class="columns">
        <div class="column is-three-fifths is-offset-one-fifth">
          <p class="control has-icons-left">
            <input class="input is-medium is-rounded" type="password" placeholder="Password">
            <span class="icon is-small is-left">
              <i class="fas fa-lock"></i>
            </span>
          </p>
        </div>
      </div>
    </div>

    <div class="field">
        <p class="control">
          <center><button class="button is-rounded is-medium is-info">
            Login
          </button></center>
        </p>
    </div>


@endsection
