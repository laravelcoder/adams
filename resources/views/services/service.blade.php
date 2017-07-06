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
							{!! $service->content !!}
						</div>
					</div>
{{-- 					<div class="row">
						<div class="col-sm-12">
							<p>
								Alcatra pork chop ground round, flank doner turkey cupim ham fatback ham hock picanha. Drumstick venison jowl pork chop prosciutto leberkas bacon short ribs meatloaf pork belly swine meatball sirloin strip steak kielbasa. Swine flank andouille beef ribs.
								Kevin salami strip steak, tail alcatra sausage burgdoggen chicken. Pork chop ground round venison jowl beef chuck andouille.
							</p>
						</div>
					</div> --}}
				</div>
			</section>
@endsection
