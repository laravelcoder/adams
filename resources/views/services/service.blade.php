@extends('layouts.service')

@section('title')
{!! $service->service !!}
@endsection

@section('content')
			<section class="ls ms section_padding_100">
				<div class="container">
					<div class="row columns_padding_25">
						<div class="col-md-6">
							<img src="images/gallery/03.jpg" alt="">
						</div>
						<div class="col-md-6">
							<h2 class="section_header bottommargin_20">{!! $service->service !!}</h2>
							<hr class="divider_30_2 divider_left main_bg_color">
							{!! $service->upper_content !!}
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
						 {!! $service->lower_content !!}
						</div>
					</div>
				</div>
			</section>
@endsection
