  <!-- Following Menu -->
<div class="following-menu ui large top fixed hidden menu">
  <div class="ui container">
    <a class="active item" href={{ url('/') }}>RocketJobs</a>
    <div class="right menu">
      <div class="item">
        <a class="ui button">I'm Hiring!</a>
      </div>
      @if (!Auth::check())
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
