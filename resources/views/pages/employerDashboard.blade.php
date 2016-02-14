@extends('layouts.master')

@section('content')

@include('layouts.loginedEmpNavbar')


<div class="employee-home ui icon input container">

	<input type="text" placeholder="Search for jobs">
	<i class="big arrow circle outline right icon"></i>
</div>

<div class="employee-home container">
	<h1>Your Job Postings</h1>
	<div class="user-home ui stackable cards centered grid container">
		@foreach ($jobs as $job)
		<div class="ui card five wide column">
			<div class="content">
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
				<div class="ui two statistics">
  <div class="olive statistic">
    <div class="value">
      22
    </div>
    <div class="label">
      Request
    </div>
  </div>
  <div class="statistic">
    <div class="value">
      22
    </div>
    <div class="label">
      Saves
    </div>
  </div>
			</div>
		</div>
	</div>
		
		@endforeach

<div class="employee-home container history">
	<h1>Moolah accounted for: $650 </h1>
</div>

@endsection
