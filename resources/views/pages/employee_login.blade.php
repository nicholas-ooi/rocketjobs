@extends('layouts.master')

@section('content')
<div class="pusher">
  <div class="employee ui inverted vertical masthead center aligned segment">

    @include('layouts.topnavbar')
    <form action="/login" method="get">
      <div class="employee ui raised very padded text container segment">
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
    </form>
    </div>
    </div>

@endsection
