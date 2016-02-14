@extends('layouts.master')

@section('content')

    <div class="register-user-form">
        {!! Form::open(
            array(
                'url' => 'api/add_testimonial',
                'class' => 'ui form',
            )
        )!!}

        <h4 class="ui dividing header">
            Add a new testimonial for {{$user->name}}
        </h4>
        <div class="field">
            <label>Title</label>
            <div class="field">
                {!! Form::text('title', null, array('placeholder'=>'Title')) !!}
            </div>
            <label>Message</label>
            <div class="field">
                {!! Form::textarea('description', null, array('placeholder'=>'Message')) !!}
            </div>
            {{ Form::hidden('user_id', $user->id) }}
        </div>
        {!! Form::submit('Add Job') !!}
        {!! Form::close() !!}

    </div>


@endsection
