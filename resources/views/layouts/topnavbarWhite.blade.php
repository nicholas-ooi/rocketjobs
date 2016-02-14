<div class="nav ui container">
    <div class="ui large secondary pointing menu">
		<a class="item" href="{{url('/')}}">RocketJobs <i class="large rocket icon"></i></a>
		<div class="topnavbarwhite right item">
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
