@extends('layouts.master')

@section('content')

    <div class="pusher">
        <div class="employee ui inverted vertical masthead center aligned segment">

            @include('layouts.topnavbar')
            <form role="form" method="POST" action="{{ url('/login') }}">
                <div class="employee ui raised very padded text container segment">
                    <div class="ui two column middle aligned very relaxed stackable grid">
                        <div class="column">
                            <form class="ui form" role="form" method="POST" action="{{ url('/login') }}">
                                {!! csrf_field() !!}

                                <div class="field {{ $errors->has('email') ? ' has-error' : '' }}">

                                    <div class="ui left icon input">
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
                                <div class="field {{ $errors->has('password') ? ' has-error' : '' }}">

                                    <div class="ui left icon input">
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
                                <div class="field">

                                        <div class="ui checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                </div>
                                <p/>
                                <div class="field">

                                        <button type="submit" class="ui blue submit button">
                                            <i class="fa fa-btn fa-sign-in"></i>Login
                                        </button>
                                    <p/>
                                    <p/>
                                        <a class="ui link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>

                                </div>
                            </form>
                        </div>
                        <div class="ui vertical divider">
                            Or
                        </div>
                        <div class="center aligned column">
                            <a class="ui big green labeled icon button" href="{{url('/register')}}">
                                <i class="signup icon"></i>
                                Sign Up
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
