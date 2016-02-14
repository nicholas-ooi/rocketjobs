 <div class="ui container">
    <div class="ui large secondary pointing menu">
    	<div>
			<i class="big sidebar icon" onClick="runSidebar();"></i>
		</div>
    	<a class="item" href="{{url('/')}}">RocketJobs <i class="large rocket icon"></i></a>
   		<div class="right item">
    		<a class="ui button">Welcome See Ting!</a>
        	<a class="ui button" href="{{url('/logout')}}">Logout</a>
    	</div>
    </div>
</div>

<script>
	function runSidebar() {
		$('.ui.labeled.icon.sidebar').sidebar('toggle');
	}
</script>

<div class="user-home ui left demo vertical inverted sidebar labeled icon menu">
	<a class="item">
		<i class="home icon"></i>
		Home
	</a>
	<a class="item">
		<i class="history icon"></i>
		History
	</a>
	<a class="item">
		<i class="block layout icon"></i>
		Postings
	</a>
	<a class="item">
		<i class="search icon"></i>
		Search Jobs
	</a>
	<a class="item">
		<i class="write icon"></i>
		Update Profile
	</a>
</div>
