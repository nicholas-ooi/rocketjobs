@extends('layouts.master')

@section('content')

@include('layouts.loginedEmpNavbar')


<div class="employee-home ui icon input container">

	<input type="text" placeholder="Search for jobs">
	<i class="big arrow circle outline right icon"></i>
</div>

<<<<<<< HEAD:resources/views/pages/employeeHome.blade.php
<div class="employee-home ui three column stackable cards centered grid container">
	<h1>Your recommended Jobs</h1>
	<div class="row">
		@foreach ($jobs as $job)
			<div class="ui card">
				<div class="content">
					<div class="header">{{$job->title}}</div>
				</div>
				<div class="content">
					<h4 class="ui sub header">{{$job->created_at}}</h4>
					<div class="ui small feed">
						<div class="event">
							<div class="content">
								<div class="summary">
									<p>Company : {{$job->company}}</p>
									<p>Employer : {{$job->user->name}}</p>
									<p>Venue : {{$job->venue}}</p>
									<p>{{$job->amount}}/{{$job->payment_timeline}}</p>
									@foreach ($job->keywords->take(3) as $keyword)
										<a class="ui blue label">
											{{$keyword->keyword}}
										</a>
									@endforeach
									<p>
										{{$job->description}}
									</p>
								</div>
=======
<div class="employee-home container">
	<h1>Your Job Postings</h1>
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
								<p>Venue</p>
								<p>$10/hour</p>
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
								<p>Venue</p>
								<p>$10/hour</p>
							</div>
						</div>
					</div>
				</div>
				<div class="extra content">
					<button class="ui button">Chat with employer</button>
			</div>
			<div class="extra content">
				<button class="ui button">Chat with employer</button>
			</div>
		</div>
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
								<p>Venue</p>
								<p>$10/hour</p>
							</div>
						</div>
					</div>
>>>>>>> Adding employee & employer dashboard:resources/views/pages/employerDashboard.blade.php
				</div>
			</div>
		@endforeach
	</div>
</div>

<div class="employee-home container history">
	<h1>Moolah accounted for: $650 </h1>
</div>

@endsection