@extends('templates.public')

@section('content')

<div class="middlePage">
  <div class="page-header">
    <h1 class="logo">{{ trans('messages.nameCompany') }} <small>{{ trans('messages.welcome') }}</small></h1>
  </div>

  <div class="panel panel-primary ">
    <div class="panel-heading">
      <h3 class="panel-title">{{ trans('messages.register') }}</h3>
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
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <fieldset class="col-md-6">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="cols-sm-2 control-label">{{ trans('messages.name') }}</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                    <input id="name" name="name" type="text" class="form-control input-md">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                <label for="surname" class="cols-sm-2 control-label">{{ trans('messages.surname') }}</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                    <input id="surname" name="surname" type="text" class="form-control input-md">
                    @if ($errors->has('surname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('surname') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <label for="username" class="cols-sm-2 control-label">{{ trans('messages.username') }}</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                    <input id="username" name="username" type="text" class="form-control input-md">
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="cols-sm-2 control-label">{{ trans('messages.email') }}</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                    <input id="email" name="email" type="text" class="form-control input-md">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>
            </fieldset>
            <fieldset class="col-md-6">
              <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                <label for="phone" class="cols-sm-2 control-label">{{ trans('messages.phone') }}</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                    <input id="phone" name="phone" type="text" class="form-control input-md">
                    @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="cols-sm-2 control-label">{{ trans('messages.password') }}</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                    <input id="password" name="password" type="password" class="form-control input-md">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label for="password_confirmation" class="cols-sm-2 control-label">{{ trans('messages.password_confirmation') }}</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control input-md">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-lg pull-right">{{ trans('messages.register') }}</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
