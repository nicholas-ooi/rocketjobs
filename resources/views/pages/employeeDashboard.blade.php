@extends('layouts.master')

@section('content')

@include('layouts.loginedUserNavbar')


<div class="employee-home ui icon input container">

	<input type="text" placeholder="Search for jobs">
	<i class="big arrow circle outline right icon"></i>
</div>

<div class="employee-home container">
	<h1>Your recommended Jobs</h1>
	<div class="user-home ui stackable cards centered grid container">
		<div class="ui card five wide column">
			<div class="content">
				<div class="header">Front end developer</div>
			</div>
			<div class="content">
				<h4 class="ui sub header">14 Feb 2016 / 9am - 7pm</h4>
				<div class="ui small feed">
					<div class="event">
						<div class="content">
							<div class="summary">
								<p>Company: NewTech</p>
								<p>Employer: Smith T.</p>
								<p>Venue: Galvanize</p>
								<p>$120/day</p>
								<p>Desc: Debug website</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="extra content">
				<button class="ui button">Chat with employer</button>
			</div>
		</div>
		<div class="ui card five wide column">
			<div class="content">
				<div class="header">Waiter</div>
			</div>
			<div class="content">
				<h4 class="ui sub header">16 Feb 2016 / 9am - 10pm</h4>
				<div class="ui small feed">
					<div class="event">
						<div class="content">
							<div class="summary">
								<p>Company: Grill&Cook</p>
								<p>Employer: Tom C.</p>
								<p>Venue: SF</p>
								<p>$100/day</p>
								<p>Desc: Replace waiter who took sudden leave</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="extra content">
				<button class="ui button">Chat with employer</button>
			</div>
		</div>
		<div class="ui card five wide column">
			<div class="content">
				<div class="header">QA Assistant</div>
			</div>
			<div class="content">
				<h4 class="ui sub header">14 Feb 2016 / 9am - 7pm</h4>
				<div class="ui small feed">
					<div class="event">
						<div class="content">
							<div class="summary">
								<p>Company: CoolTech</p>
								<p>Employer: </p>
								<p>Venue: San Jose</p>
								<p>$150/day</p>
								<p>Desc: Replace waiter who took sudden leave</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="extra content">
				<button class="ui button">Chat with employer</button>
			</div>
		</div>
	</div>
</div>

<div class="employee-home container history">
	<h1>Your moolah for this month: $450 </h1>
	<div class="employee-home ui container">
		<div class="ui list">
		  <div class="item">
		    <i class="money icon"></i>
		    <div class="content">
		      QA Assistant, $150
		    </div>
		  </div>
		  <div class="item">
		    <i class="money icon"></i>
		    <div class="content">
		      Shop Assistant, $100
		    </div>
		  </div>
		  <div class="item">
		    <i class="money icon"></i>
		    <div class="content">
		      Technician, $150
		    </div>
		  </div>
		</div>
	</div>
</div>

@endsection
