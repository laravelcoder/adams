@extends('auth.admin_signin')
@section('content')
<section class="ls ms section_padding_top_100 section_padding_bottom_100 section_full_height">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <div class="with_background with_padding">
                    <div class="login-logo ds">
                        <a href="{!! url('/') !!}" class="logo top_logo">
                        <img src="{!! asset('images/logo.png') !!}" alt="Adams Davis Logo">
                        <span class="logo_text">
                        <span class="playfair title">Adams Davis</span>
                        </span>
                        </a>
                    </div>
                    <h4 class="text-center">
                        Sign In to Your Account
                    </h4>
                    <hr class="bottommargin_30">
                    <div class="wrap-forms">
                        <form method="post" action="{{ url('/register') }}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name">
                                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                                                            <div class="row">
                                    <div class="col-xs-8">
                                        <div class="checkbox icheck">
                                            <label>
                                            <input type="checkbox"> I agree to the <a href="#">terms</a>
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                            <div class="row">

                                    <button type="submit" class="theme_button block_button color1">Register</button>

                                </div>

                                <!-- /.col -->

                                <!-- /.col -->
                            </div>
                        </form>
                        <p class="divider_20 text-center">
                            <a href="{{ url('/login') }}" class="text-center">I already have a membership</a>
                        </p>
                    </div>
                    <!-- .with_background -->
                    <p class="divider_20 text-center">
                        Not registered?
                        <a href="{{ url('/register') }}">Create an account</a>.
                    </p>
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
</section>
@endsection
