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
            <li role="presentation" class="active"><a href="#" role="tab" data-toggle="tab">Login</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content padding_half">
            <div role="tabpanel" class="tab-pane fade in active" id="home">
              <div class="agent-p-form">
                <form method="POST" action="{{ route('login') }}" class="callus clearfix">
                  {{ csrf_field() }}
                  <div class="single-query form-group{{ $errors->has('email') ? ' has-error' : '' }} col-sm-12">
                    <input type="email" class="keyword-input" name="email" value="{{ old('email') }}" required autofocus placeholder="{{ __('name@yourmail.com') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                  </div>

                  <div class="single-query form-group{{ $errors->has('password') ? ' has-error' : '' }}  col-sm-12">
                    <input type="password" class="keyword-input" placeholder="*********" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="col-sm-6 text-left">
                        <div class="search-form-group white form-group ">
                           <a href="{{ route('register') }}" class="lost-pass">Register Now</a>
                        </div>
                      </div>
                      <div class="col-sm-6 text-right">
                        <a href="{{ route('password.request') }}" class="lost-pass">Lost your password?</a>
                      </div>
                    </div>
                  </div>
                  <div class=" col-sm-12">
                    <input type="submit" value="Login" class="btn-slide border_radius"> 
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
