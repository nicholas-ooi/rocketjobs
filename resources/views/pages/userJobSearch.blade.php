@extends('layouts.master')

@section('content')

@include('layouts.loginednavbar')


<div class="user-home ui icon input container">

	<input type="text" placeholder="Search for jobs">
	<i class="big arrow circle outline right icon"></i>
</div>

<div class="user-home ui stackable cards centered grid container">

	@foreach ($jobs as $job)
	<div class="ui card five wide column">
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
					</div>
				</div>
			</div>
		</div>
		<div class="extra content">
			<button class="ui button">Chat with employer</button>
		</div>
	</div>
	@endforeach

</div>
@endsection
