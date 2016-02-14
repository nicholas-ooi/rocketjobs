@extends('layouts.master')

@section('content')

    <div class="pusher">
        <div class="employee ui inverted vertical masthead center aligned segment">

            @include('layouts.topnavbar')
                <div class="employee ui raised very padded text container segment">
                    <div class="ui two column middle aligned very relaxed stackable grid">
                        <div class="column">
                            <form class="ui form" role="form" method="POST" action="{{ url('/register') }}">
                                {!! csrf_field() !!}

                                <div class="field{{ $errors->has('name') ? ' has-error' : '' }}">

                                    <div class=" ui left icon input">
                                        <input placeholder="Username" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                        <i class="user icon"></i>
                                    </div>
                                        @if ($errors->has('name'))
                                            <div class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                        @endif

                                </div>
                                <p/>
                                <div class="field{{ $errors->has('email') ? ' has-error' : '' }}">

                                    <div class=" ui left icon input">
                                        <input placeholder="Email Address" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                        <i class="at icon"></i>
                                    </div>
                                        @if ($errors->has('email'))
                                            <div class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                        @endif

                                </div>
                                <p/>
                                <div class="field{{ $errors->has('password') ? ' has-error' : '' }}">

                                    <div class=" ui left icon input">
                                        <input placeholder="Password" type="password" class="form-control" name="password">
                                        <i class="lock icon"></i>
                                    </div>
                                        @if ($errors->has('password'))
                                            <div class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                        @endif

                                </div>
                                <p/>
                                <div class="field{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                                    <div class=" ui left icon input">
                                        <input placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation">
                                        <i class="lock icon"></i>
                                    </div>
                                        @if ($errors->has('password_confirmation'))
                                            <div class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </div>
                                        @endif

                                </div>
                                <p/>
                                <div class="field">
                                    <div class=" ui left icon input">
                                        <button type="submit" class="ui green  submit button">

                                            Sign Up
                                        </button>
                                    </div>
                                </div>
                                {{Form::hidden('type','employee')}}
                            </form>



                        </div>
                        <div class="ui vertical divider">
                            Or
                        </div>
                        <div class="center aligned column">
                            <a class="ui big blue labeled icon button" href="{{url('/login')}}">
                                <i class="signup icon"></i>
                                Login
                            </a>
                        </div>
                    </div>
                </div>
        </div>
    </div>


@endsection
