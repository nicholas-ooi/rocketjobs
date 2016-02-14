@extends('layouts.master')

@section('content')

@include('layouts.loginedUserNavbar')


<div class="employee-home ui icon input container">

	<input type="text" placeholder="Search for jobs">
	<i class="big arrow circle outline right icon"></i>
</div>

<div class="employee-home ui three column stackable cards centered grid container">
	<h1>Your recommended Jobs</h1>
	<div class="row">
		<div class="ui card">
			<div class="content">
				<div class="header">Title</div>
			</div>
			<div class="content">
				<h4 class="ui sub header">Created at</h4>
				<div class="ui small feed">
					<div class="event">
						<div class="content">
							<div class="summary">
								<p>Company : </p>
								<p>Employer : </p>
								<p>Venue : </p>
								<p>$$</p>
								<p>
									desc
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="extra content">
				<button class="ui button">Chat with employer</button>
			</div>
		</div>
		<div class="ui card">
			<div class="content">
				<div class="header">Title</div>
			</div>
			<div class="content">
				<h4 class="ui sub header">Created at</h4>
				<div class="ui small feed">
					<div class="event">
						<div class="content">
							<div class="summary">
								<p>Company : </p>
								<p>Employer : </p>
								<p>Venue : </p>
								<p>$$</p>
								<p>
									desc
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="extra content">
				<button class="ui button">Chat with employer</button>
			</div>
		</div>
		<div class="ui card">
			<div class="content">
				<div class="header">Title</div>
			</div>
			<div class="content">
				<h4 class="ui sub header">Created at</h4>
				<div class="ui small feed">
					<div class="event">
						<div class="content">
							<div class="summary">
								<p>Company : </p>
								<p>Employer : </p>
								<p>Venue : </p>
								<p>$$</p>
								<p>
									desc
								</p>
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

@endsection
