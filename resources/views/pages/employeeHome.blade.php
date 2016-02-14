@extends('layouts.master')

@section('content')

@include('layouts.loginednavbar')


<div class="user-home ui icon input container">

	<input type="text" placeholder="Search for jobs">
	<i class="big arrow circle outline right icon"></i>
</div>

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
			</div>
		</div>
		<div class="extra">
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
			</div>
		</div>
		<div class="extra content">
			<button class="ui button">Chat with employer</button>
		</div>
	</div>

</div>
@endsection
