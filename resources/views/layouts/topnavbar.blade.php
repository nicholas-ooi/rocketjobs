<div class=" nav ui container">
    <div style="background: rgba(255,255,255,0.4);" class="ui large secondary inverted pointing menu">
      <a style="color: black;" class="rocket item" href="{{url('/')}}">RocketJobs <i class="large rocket icon"></i></a>
      <div class="topnavbar right item">
          @if (!Auth::check())
          <a class="ui inverted button" href="{{url('/login')}}">I'm Hiring!</a>
        <a class="ui inverted button" href="{{url('/login')}}">Login</a>
          <a class="ui inverted button" href="{{url('/register')}}">Register</a>
          @else
          <a class="ui inverted button" href="{{url('/logout')}}">Logout</a>
          @endif
      </div>
    </div>
  </div>
