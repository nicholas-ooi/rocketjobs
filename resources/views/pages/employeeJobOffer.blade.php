@extends('layouts.master')

@section('content')

@include('layouts.loginedUserNavbar')

<div class="applicants ui container centered grid">
	<div class="ui card five wide column">
		@foreach ($jobs as $job)
		<div>
			<div class="content header">
				<div class="header">{{$job->title}}</div>
			</div>
		@foreach ($job->users as $user)
		@if ($user->pivot->status == "requesting" || $user->pivot->status == "approve" || $user->pivot->status == "decline")
		<div class="content">
				<h4 class="ui sub header">{{$user->name}}</h4>
				<div class="ui small feed">
					<div class="event">
						<div class="content">
							<div class="summary">
								<div style="float:left;padding-left:10px;">
								<p>Front end developer</p>
								<p>{{$user->description}}</p>
							</div>
							<div style="clear:both;padding-top:10px;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="extra content">
				<div class="ui two buttons">
					@if ($user->pivot->status == "requesting")
					<input type="button" class="ui basic green button" value="Requesting" />
					@elseif ($user->pivot->status == "approve")
					<input type="button" class="ui basic green button" value="Approved" />
					@elseif ($user->pivot->status == "decline")
					<input type="button" class="ui basic red button" value="Declined" />
					@endif
				</div>
			</div>
		@endif
		@endforeach
	</div>
		@endforeach
	</div>
</div>
@endsection
