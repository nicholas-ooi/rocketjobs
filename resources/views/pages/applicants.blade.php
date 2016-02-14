@extends('layouts.master')

@section('content')

@include('layouts.loginedEmpNavbar')

<div class="applicants ui container centered grid">
	<div class="ui cards">
	  <div class="card">
	    <div class="content">
	      <!--<img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg">-->
	      <div class="header">
	        Stephanie
	      </div>
	      <div class="meta">
	        Front end developer
	      </div>
	      <div class="description">
	        Elliot requested to apply for your job posting
	      </div>
	    </div>
	    <div class="extra content">
	      <div class="ui two buttons">
	        <div class="ui basic green button">Approve</div>
	        <div class="ui basic red button">Decline</div>
	      </div>
	    </div>
	  </div>
	  <div class="card">
	    <div class="content">
	      <div class="header">
	        Caroline
	      </div>
	      <div class="meta">
	        QA Assistant
	      </div>
	      <div class="description">
	        Elliot requested to apply for your job posting
	      </div>
	    </div>
	    <div class="extra content">
	      <div class="ui two buttons">
	        <div class="ui basic green button">Approve</div>
	        <div class="ui basic red button">Decline</div>
	      </div>
	    </div>
	  </div>
	</div>
</div>

@endsection
