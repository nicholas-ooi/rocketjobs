@extends('layouts.master')

@section('content')

<!-- Page Contents -->
<div class="pusher">
  <div class="homeone ui inverted vertical masthead center aligned segment">

    @include('layouts.topnavbar')
    <div class="ui text container">
      <h1 class="ui inverted header">RocketJobs</h1>
      <h2>Are you ready for the next RocketJob launch?</h2>
      <div class="item">
      <div class="home-search ui icon input">
        <input type="text" placeholder="Which city are you located?">
        <i class="big arrow circle outline right icon"></i>
      </div>
    </div>
    </div>
  </div>

<div class="hometwo ui inverted vertical masthead center aligned segment">
  <h1 class="home ui inverted header">How It Works?</h1>
  <div class="home-buttons ui two column grid centered center aligned">
    <div class="home row">
      <div class="four wide column">1. Search Nearby Rocketjobs</div>
      <div class="four wide column">2. Accept the Offer</div>
    </div>
    <div class="home row">
      <div class="four wide column">3. Receive Confirmation</div>
      <div class="four wide column">4. Happy Rocketjob-ing</div>
    </div>
  </div>
</div>

@endsection
