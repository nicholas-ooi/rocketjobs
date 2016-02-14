@extends('layouts.master')

@section('content')

{!! Form::open(
    array(
        'url' => 'addJob',
        'class' => 'form',
        'novalidate' => 'novalidate',
        'files' => true)) !!}

<div class="form-group">
    {!! Form::label('Job Images') !!}
    {!! Form::file('image', null) !!}
</div>

<div class="form-group">
    {!! Form::submit('Add Job') !!}
</div>
{!! Form::close() !!}
</div>


@endsection
