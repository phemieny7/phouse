{{-- @extends('layouts.app')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                 <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}


 @extends('layouts.app')

@section('body')
<section id="login" class="padding">
  <div class="container">
    <h3 class="hidden">hidden</h3>
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="profile-login">
          <!-- Nav tabs -->
          <ul class="nav" role="tablist">
            <li role="presentation" class="active"><a href="#" role="tab" data-toggle="tab">Register</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content padding_half">
            <div role="tabpanel" class="tab-pane fade in active" id="home">
              <div class="agent-p-form">
                <form method="POST" action="{{ route('register') }}" class="callus clearfix">
                  {{ csrf_field() }}

                  <div class="single-query form-group{{ $errors->has('Name') ? ' has-error' : '' }} col-sm-12">
                    <input type="text" class="keyword-input" name="name" value="{{ old('name') }}" required autofocus placeholder="{{ __('your name') }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                  </div>


                  <div class="single-query form-group{{ $errors->has('email') ? ' has-error' : '' }} col-sm-12">
                    <input type="email" class="keyword-input" name="email" value="{{ old('email') }}" required autofocus placeholder="{{ __('name@yourmail.com') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                  </div>

                  <div class="single-query form-group{{ $errors->has('password') ? ' has-error' : '' }}  col-sm-12">
                    <input type="password" class="keyword-input" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  </div>

                  <div class="single-query form-group col-sm-12">
                    <input type="password" class="keyword-input" placeholder="Confirm Password" name="password_confirmation" required>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="col-sm-6 text-left">
                        <div class="search-form-group white form-group ">
                           <a href="{{ route('login') }}" class="lost-pass">Login</a>
                        </div>
                      </div>
                      <div class="col-sm-6 text-right">
                        <a href="{{ route('password.request') }}" class="lost-pass">Lost your password?</a>
                      </div>
                    </div>
                  </div>
                  <div class=" col-sm-12">
                    <input type="submit" value="Register" class="btn-slide border_radius"> 
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
