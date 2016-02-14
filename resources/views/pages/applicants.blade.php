@extends('layouts.master')

@section('content')

@include('layouts.loginedEmpNavbar')

<div class="applicants ui container centered grid">
	<div class="ui cards">
		@foreach ($jobs as $job)

		<div>
			<h2>
				{{$job->title}}
			</h2>
			<br />
		@foreach ($job->users as $user)
		@if ($user->pivot->status == "requesting" || $user->pivot->status == "approve" || $user->pivot->status == "decline")
	  <div class="card">
	    <div class="content">
	      <!--<img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg">-->
	      <div class="header">
	        {{$user->name}}
	      </div>
	      <div class="meta">
	        Front end developer
	      </div>
	      <div class="description">
	        {{$user->description}}
	      </div>
	    </div>
	    <div class="extra content">


	      <div class="ui two buttons">
					@if ($user->pivot->status == "requesting")

					{!! Form::open(
							array(
									'url' => 'approveJob',
									'class' => 'ui form',
									'novalidate' => 'novalidate')) !!}
	        <input type="submit" class="ui basic green button" value="Approve" />
					<input name="job_id" type="hidden"  value="{{$job->id}}" />
					{!! Form::close() !!}

					{!! Form::open(
							array(
									'url' => 'declineJob',
									'class' => 'ui form',
									'novalidate' => 'novalidate')) !!}
	        <input type="submit" class="ui basic red button" value="Decline" />
					<input name="job_id" type="hidden"  value="{{$job->id}}" />
					{!! Form::close() !!}


					@elseif ($user->pivot->status == "approve")
					<input type="button" class="ui basic green button" value="Approved" />

					@elseif ($user->pivot->status == "decline")
					<input type="button" class="ui basic red button" value="Declined" />


					@endif


				</div>




	    </div>
	  </div>
		@endif
		@endforeach

	</div>

		@endforeach

	</div>
</div>

@endsection
