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

    <div class="ui text container">
      <h1 class="ui inverted header">RocketJobs</h1>
      <h2>Are you ready for the next RocketJob launch?</h2>
      <div class="item">
      <div class="home-search ui icon input">
        <input type="text" placeholder="Which city are you located?">
        <i class="cloud icon"></i>
      </div>
    </div>
    </div>
  </div>

  <div class="home-buttons ui two column grid centered center aligned">
    <div class="row">
      <div class="four wide column">Search nearby rocket jobs</div>
      <div class="four wide column">Accept the offer</div>
    </div>
    <div class="row">
      <div class="four wide column">Receive confirmation</div>
      <div class="four wide column">Happy Rocketjob-ing</div>
    </div>
  </div>
</div>
@endsection
