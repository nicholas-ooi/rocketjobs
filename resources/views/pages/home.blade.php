@extends('layouts.master')

@section('content')

<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

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
