@extends('layouts.master')

@section('content')

@include('layouts.loginedUserNavbar')

<div class="employee-home container">
	<h1>Your recommended Jobs</h1>
	<div class="user-home ui stackable cards centered grid container">
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
								<img style="float:left;" src="{{ asset('public/images/job/'.$image->src) }}" alt="" />
								@endforeach
								<div style="float:left;padding-left:10px;">
								<p>Company : {{$job->company}}</p>
								<p>Employer : {{$job->user->name}}</p>
								<p>Venue : {{$job->venue}}</p>
								<p>{{$job->amount}}/Hours</p>
							</div>
								<div style="clear:both;padding-top:10px;"></div>

								@foreach ($job->keywords->take(3) as $keyword)
								<a class="ui blue label">
									{{$keyword->keyword}}
								</a>
								@endforeach
								<p style="padding-top:10px;">
									{{$job->description}}
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="extra content">
				@if(count($job->users) <=0 )
				{!! Form::open(
						array(
								'url' => 'requestJob',
								'class' => 'ui form',
								'novalidate' => 'novalidate')) !!}
												<input type="submit" class="ui button" value="Request" />
				<input name="job_id" type="hidden"  value="{{$job->id}}" />
				{!! Form::close() !!}
				@endif

				@foreach ($job->users as $jobPost)
				@if ($jobPost->pivot->status == "requesting")
					<input disabled="disabled" type="button" class="ui button" value="Requested" />
				@endif
				@if ($jobPost->pivot->status == "approved")
					<input disabled="disabled" type="button" class="ui green button" value="Approved" />
				@endif
				@if ($jobPost->pivot->status == "decline")
					<input disabled="disabled" type="button" class="ui red button" value="Decline" />
				@endif
				@endforeach
		</div>
	</div>

		@endforeach
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
