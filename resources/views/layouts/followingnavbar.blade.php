  <!-- Following Menu -->
<div class="following-menu ui large top fixed hidden menu">
  <div class="ui container">
    <a class="active item" href={{ url('/') }}>RocketJobs</a>
    <div class="right menu">

      @if (!Auth::check())
      <div class="item">
        <a class="ui button" href="{{ url('/login') }}">I'm Hiring!</a>
      </div>
      <div class="item">
        <a class="ui button" href={{ url('/login') }}>Login</a>
      </div>
      <div class="item">
        <a class="ui button" href={{ url('/register') }}>Sign Up</a>
      </div>
      @else
      <div class="item">
        <a class="ui button" href={{ url('/logout') }}>Logout</a>
      </div>
      @endif
    </div>
  </div>
</div>
