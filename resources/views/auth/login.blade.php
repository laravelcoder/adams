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
                                    <form method="post" action="{{ url('/login') }}">
                                    {!! csrf_field() !!}
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-placeholder {{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <label for="login-email">Email address</label>
                                                    <i class="grey fa fa-envelope-o"></i>
                                                    <input type="email" class="form-control" id="login-email" name="email" value="{{ old('email') }}" placeholder="Email">
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
                                                <div class="form-group has-placeholder {{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label for="login-password">Password</label>
                                                    <i class="grey fa fa-pencil-square-o"></i>
                                                    <input type="password" class="form-control" id="login-password" name="password" placeholder="Password">
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
                                                <div class="checkbox">
                                                    <input type="checkbox" id="remember_me_checkbox">
                                                    <label for="remember_me_checkbox">Rememrber Me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="theme_button block_button color1">Sign In</button>
                                    </form>
                                </div>

                                <div class="darklinks text-center topmargin_20">

                                    <a role="button" data-toggle="collapse" href="#signin-resend-password" aria-expanded="false" aria-controls="signin-resend-password">
                                        Forgot your password?
                                    </a>

                                </div>
                                <div class="collapse form-inline-button" id="signin-resend-password">
                                    <form class="form-inline topmargin_20" method="post" action="{{ url('/password/email') }}">
                                     {!! csrf_field() !!}

                                        <div class="form-group">
                                            <label class="sr-only">Enter your e-mail</label>
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder="E-mail">
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <button type="submit" class="theme_button with_icon">
                                            <i class="fa fa-share"></i> Send Password Reset Link
                                        </button>
                                    </form>
                                </div>


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
            </section>
@endsection
