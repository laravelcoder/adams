<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Adams Davic P.C.</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
@yield('seo')
@yield('json-ld')
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/animations.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/fonts.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/main.css') !!}" id="color-switcher-link">
	<script src="{!! asset('js/vendor/modernizr-2.6.2.min.js') !!}"></script>

	<!--[if lt IE 9]>
	<script src="{!! asset('js/vendor/html5shiv.min.js') !!}"></script>
	<script src="{!! asset('js/vendor/respond.min.js') !!}"></script>
	<script src="{!! asset('js/vendor/jquery-1.12.4.min.js') !!}"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="./">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">Search</button>
			</form>
		</div>
	</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!-- <ul> <li>Message To User</li> </ul> -->
		</div>
	</div>
	<!-- eof .modal -->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<!-- template sections -->
			@desktop
			 @include('layouts.partials.top')
			@elsedesktop

			@enddesktop
			{{-- @include('layouts.partials.top') --}}
			@include('layouts.partials.header')
			{{-- @include('layouts.frontpage.slider') --}}
			<!--	{{-- https://youtu.be/7Hcp0BvMdPc --}}  -->

@yield('bread')

			@yield('content')

			@include('layouts.partials.footer')
			@include('layouts.partials.copy')



		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->


	<script src="{!! asset('js/compressed.js') !!}"></script>
	<script src="{!! asset('js/main.js') !!}"></script>

        <script>

function sendrequest() {
    // do the extra stuff here
    $('#requestsent').hide();
    $.ajax({
        type: "POST",
        url: "contact/sendrequest",
        data: $("#sendrequest").serialize() + "&_token={{ csrf_token() }}",
        success: function () {
            $('#sendrequest')[0].reset()
            $('#sendrequest').prepend('<div id="requestsent" class="alert alert-success" style="padding:0">'+data+'</div>');
            setTimeout(function () {
                $('#requestsent').hide();
            }, 30000);
        }
    });
    return false;
}
        </script>

</body>

</html>
