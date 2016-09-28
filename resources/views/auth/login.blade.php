@extends('templates.public')

@section('content')

    <div class="middlePage">
        <div class="page-header">
            <h1 class="logo">{{ trans('messages.nameCompany') }} <small>{{ trans('messages.welcome') }}</small></h1>
        </div>

        <div class="panel panel-primary ">
            <div class="panel-heading">
                <h3 class="panel-title">{{ trans('messages.pleaseSignIn') }}</h3>
            </div>
            <div class="panel-body">

                <div class="row">

                    <div class="col-md-5" >
                        <a class="btn btn-block btn-lg btn-social btn-facebook" href="{{ url('social/facebook') }}">
                            <span class="fa fa-facebook"></span>{{ trans('messages.signFacebook') }}
                        </a><br/>
                        <a class="btn btn-block btn-lg btn-social btn-github" href="{{ url('social/github') }}">
                            <span class="fa fa-github"></span>{{ trans('messages.signGitHub') }}
                        </a><br/>
                    </div>

                    <div class="col-md-7 line-separator">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="email" name="email" type="text" placeholder="{{ trans('messages.enterCredentials') }}" class="form-control input-md">
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" name="password" type="password" placeholder="{{ trans('messages.enterPassword') }}" class="form-control input-md">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-lg pull-right">{{ trans('messages.signIn') }}</button>
                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
