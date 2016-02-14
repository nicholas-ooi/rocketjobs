@extends('layouts.master')

@section('content')

  <!-- Following Menu -->
<div class="ui large top fixed hidden menu">
  <div class="ui container">
    <a class="active item">RocketJobs</a>
    <div class="right menu">
      <div class="item">
        <a class="ui button">I'm Hiring!</a>
      </div>
      <div class="item">
        <a class="ui button">Login/Sign Up</a>
      </div>
    </div>
  </div>
</div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

   <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="item">RocketJobs</a>
        <div class="right item">
          <a class="ui inverted button">I'm Hiring!</a>
          <a class="ui inverted button">Login/Sign Up</a>
        </div>
      </div>
    </div>

    @include('layouts.topnavbar')
      <div class="ui raised very padded text container segment">
        <div class="ui two column middle aligned very relaxed stackable grid">
          <div class="column">
            <div class="ui form">
              <div class="field">
                <label>Username</label>
                <div class="ui left icon input">
                  <input placeholder="Username" type="text">
                  <i class="user icon"></i>
                </div>
              </div>
              <div class="field">
                <label>Password</label>
                <div class="ui left icon input">
                  <input type="password">
                  <i class="lock icon"></i>
                </div>
              </div>
              <div class="ui blue submit button">Login</div>
            </div>
          </div>
          <div class="ui vertical divider">
            Or
          </div>
          <div class="center aligned column">
            <div class="ui big green labeled icon button">
              <i class="signup icon"></i>
              Sign Up
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection
