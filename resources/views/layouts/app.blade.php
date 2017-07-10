<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Adams & Davis Admin</title>
    <meta charset="utf-8">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/animations.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/fonts.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/main.css') !!}" id="color-switcher-link">
    <link rel="stylesheet" href="{!! asset('css/bootstrap-imageupload.css') !!}">
    <script src="{!! asset('js/vendor/modernizr-2.6.2.min.js') !!}"></script>



    <!--[if lt IE 9]>
        <script src="{!! asset('js/vendor/html5shiv.min.js') !!}"></script>
        <script src="{!! asset('js/vendor/respond.min.js') !!}"></script>
        <script src="{!! asset('js/vendor/jquery-1.12.4.min.js') !!}"></script>
    <![endif]-->
    <script>

</script>

</head>

<body class="theme-dashboard">
    <!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->

    <div class="preloader">
        <div class="preloader_image"></div>
    </div>



    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">

            <!-- template sections -->

            <header class="page_header_side page_header_side_sticked active-slide-side-header ds">
                <span class="toggle_menu_side toggler_light header-slide">
                    <span></span>
                </span>
                <div class="scrollbar-macosx">
                    <div class="side_header_inner">
                        <div class="greylinks">
                            <!-- user -->

                            <div class="user-menu">
                                <div class="user-menu-media">
                                    <img src="{!! asset('images/team/01.jpg') !!}" alt="{!! Auth::user()->name !!} img">
                                </div>
                                <div class="user-menu-info">
                                    <h4>{!! Auth::user()->name !!}</h4>
                                    <small>Member since {!! Auth::user()->created_at->format('M. Y') !!}</small>
                                    <ul class="nav menu-side-click">
                                        <li class="active">
                                            <a href="#"> Administrator </a>
                                        <ul>
                                    {{--  <li> <a href="admin_profile.html"> <i class="fa fa-user"></i> Profile </a> </li> --}}
                                    {{-- <li> <a href="admin_profile_edit.html"> <i class="fa fa-edit"></i> Edit Profile </a> </li> --}}
                                    {{--     <li> <a href="admin_inbox.html"> <i class="fa fa-envelope-o"></i> Inbox </a> </li> --}}
                                                <li>
                                                    <a href="{!! url('/logout') !!}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        <i class="fa fa-sign-out"></i>
                                                        Log Out
                                                    </a>

                                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @include('layouts.admin_sidebar')

                        </div>
                    </div>
                </div>
            </header>

            <header class="page_header header_white">

                <div class="widget widget_search">
                    <form method="get" class="searchform form-inline" action="./">
                        <div class="form-group">
                            <label class="screen-reader-text" for="widget-search-header">Search for:</label>
                            <input id="widget-search-header" type="text" value="" name="search" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="theme_button">Search</button>
                    </form>
                </div>


                <div class="pull-right big-header-buttons">
                    <ul class="inline-dropdown inline-block">



                        <li class="dropdown user-dropdown-menu">
                            <a class="header-button" id="user-dropdown-menu" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                <i class="fa fa-user grey"></i>
                                <span class="header-button-text">User</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="user-dropdown-menu">
                                <ul class="nav greylinks">
                                    <li>
                                        <a href="admin_profile.html">
                                            <i class="fa fa-user"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_profile_edit.html">
                                            <i class="fa fa-edit"></i>
                                            Edit Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_inbox.html">
                                            <i class="fa fa-envelope-o"></i>
                                            Inbox
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_signin.html">
                                            <i class="fa fa-sign-out"></i>
                                            Log Out
                                        </a>
                                    </li>
                                </ul>

                            </div>

                        </li>

                        <li class="dropdown visible-xs-inline-block">
                            <a href="#" class="search_modal_button header-button">
                                <i class="fa fa-search grey"></i>
                                <span class="header-button-text">Search</span>
                            </a>
                        </li>


                    </ul>
                </div>
                <!-- eof .header_right_buttons -->

            </header>

@yield('content')


            <section class="ls">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                         Adams & Davis   &copy; Copyrights 2017 | <span class="pull-right">Developed by Affordable Programmer</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->
    <script src="{!! asset('ckeditor/ckeditor.js') !!}"></script>

    <script src="{!! asset('js/compressed.js') !!}"></script>
    <script src="{!! asset('js/vendor/Chart.bundle.min.js') !!}"></script>
    <script src="{!! asset('js/main.js') !!}"></script>
    <script src="{!! asset('js/admin-charts.js') !!}"></script>
<script src="{!! asset('js/bootstrap-imageupload.js') !!}"></script>
</body>

</html>
