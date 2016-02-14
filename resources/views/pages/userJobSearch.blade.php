@extends('layouts.master')

@section('content')

@include('layouts.loginedUserNavbar')

{!! Form::open(array('url' => 'jobs/search', "method"=>"get")) !!}
<div class="user-home ui icon input container">

	<input name="searchValue" type="text" placeholder="Search for jobs">
	<i style="cursor:pointer;" onclick="$(this).closest('form').submit();" class="big arrow circle outline right icon"></i>
</div>
{!! Form::close() !!}

<div class="user-job-search ui stackable cards centered grid container">
	@if (count($jobs) > 0)

	@foreach ($jobs as $job)
	<div class="ui card five wide column">
		<div class="content header">
			<div class="header">{{$job->title}}</div>
		</div>
		<div class="content">
			<h4 class="ui sub header">{{date('F d, Y', strtotime($job->created_at))}}</h4>
			<div class="ui small feed">
				<div class="event">
					<div class="content">
						<div class="summary">
							@foreach ($job->images as $image)
							<img src="{{ asset('public/images/job/'.$image->src) }}" alt="" />
							@endforeach

							<p>Company : {{$job->company}}</p>
							<p>Employer : {{$job->user->name}}</p>
							<p>Venue : {{$job->venue}}</p>
							<p>{{$job->amount}}/Hours</p>
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
			{!! Form::open(
					array(
							'url' => 'requestJob',
							'class' => 'ui form',
							'novalidate' => 'novalidate')) !!}
											<input type="submit" class="ui button" value="Request" />
			<input name="job_id" type="hidden"  value="{{$job->id}}" />
			{!! Form::close() !!}

	</div>
	</div>
	@endforeach
	@else

	<p>
		No Jobs Found.
	</p>

	@endif

</div>
@endsection
