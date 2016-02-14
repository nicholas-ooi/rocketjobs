@extends('layouts.master')

@section('content')

@include('layouts.topnavbarWhite')
@include('layouts.sidebar')

<div class="ui visible left demo vertical inverted sidebar labeled icon menu">
  <a class="item">
    <i class="home icon"></i>
    Home
  </a>
  <a class="item">
    <i class="block layout icon"></i>
    Topics
  </a>
  <a class="item">
    <i class="smile icon"></i>
    Friends
  </a>
</div>

<div class="user-home ui grid container centered">
	<div class="four-wide-column">
		<div class="ui card">
		  <div class="image">
		    <img src="/images/avatar2/large/kristy.png">
		  </div>
		  <div class="content">
		    <a class="header">Employer</a>
		    <div class="meta">
		      <span class="date">Joined in 2013</span>
		    </div>
		    <div class="description">
		      Job description
		    </div>
		  </div>
		  <div class="extra content">
		    <a>
		      <i class="user icon"></i><a class="ui inverted button">Choose</a>
		    </a>
		  </div>
		</div>
	</div>
</div>



@endsection
