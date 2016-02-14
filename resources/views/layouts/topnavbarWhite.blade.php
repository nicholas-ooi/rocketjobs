<div class=" nav fixed ui container">
    <div class="ui large secondary pointing menu">
		<a class="item" href="{{url('/')}}">RocketJobs <i class="large rocket icon"></i></a>
		<div class="right item">
			<a class="ui button" >I'm Hiring!</a>
      @if (!Auth::check())
    <a class="ui inverted button" href="{{url('/login')}}">Login</a>
      <a class="ui inverted button" href="{{url('/register')}}">Register</a>
      @else
      <a class="ui inverted button" href="{{url('/logout')}}">Logout</a>
      @endif
		</div>
    </div>
</div>
