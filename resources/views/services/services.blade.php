@extends('layouts.service')

@section('title')
	Area's of Practice
@endsection

@section('content')

	<section class="page_breadcrumbs cs parallax section_padding_top_40 section_padding_bottom_40">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>Services</h2>
					<ol class="breadcrumb">
						<li> <a href="./"> Home</a> </li>
						{{--<li> <a href="#">Pages</a> </li>--}}
						<li class="active">Services</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="ls ms section_padding_top_100 section_padding_bottom_50">
		<div class="container">
			<div class="row columns_padding_25 columns_margin_bottom_60">
				@foreach($services as $service)
				<div class="col-md-4 col-sm-6 to_animate" data-animation="pullDown">
					<div class="teaser media">
						<div class="media-left">
							<div class="teaser_icon highlight size_normal">
								<i class="{!! $service->icon_class !!}"></i>
							</div>
						</div>
						<div class="media-body toppadding_5">
							<h3 class="muli">
								<a href="service-single.html">{!! $service->service !!}</a>
							</h3>
							<hr class="divider_30_3 divider_left divider_10 main_bg_color">
							<p>{!! $service->intro !!}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>


@endsection