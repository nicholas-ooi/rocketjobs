@extends('layouts.master')

@section('content')

@include('layouts.loginednavbar')

<div class="register-user-form">

  @if(Session::has('success'))

  <div class="ui success message">
  <i class="close icon"></i>
  <div class="header">
    {!! Session::get('success') !!}
  </div>
</div>
  @endif

  {!! Form::open(
      array(
          'url' => 'addJob',
          'class' => 'ui form',
          'novalidate' => 'novalidate',
          'files' => true)) !!}

            <h4 class="ui dividing header">
              New RocketJobs Posting
            </h4>
  <div class="field">
    <label>Job Title</label>
      <div class="field">
            {!! Form::text('title', null, array('placeholder'=>'1234')) !!}
      </div>
      <label>Job Description</label>
      <div class="field">
            {!! Form::textarea('description', null, array('placeholder'=>'1234')) !!}
      </div>
      <label>Upload Workplace Image(s)</label>
      <div class="field">
        {!! Form::file('images[]', array('multiple'=>true)) !!}
      </div>
  </div>
  {!! Form::submit('Add Job') !!}
  {!! Form::close() !!}

</div>


@endsection
