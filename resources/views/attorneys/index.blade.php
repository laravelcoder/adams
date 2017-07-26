@extends('layouts.base')

@section('title')
Our Attorneys | Adams Daveis P.C.
@endsection

@section('content')
			<section class="page_breadcrumbs cs parallax section_padding_top_40 section_padding_bottom_40">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Attorneys</h2>
							<ol class="breadcrumb">
								<li>
									<a href="./">
										Home
									</a>
								</li>
								<li>
									<a href="#">Pages</a>
								</li>
								<li class="active">Attorneys</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls ms section_padding_top_100 section_padding_bottom_50 columns_margin_bottom_60">
				<div class="container">
					<div class="row">

    @foreach($lawyers as $lawyer)
						<div class="col-md-4 col-sm-2">
							<div class="vertical-item content-absolute content-hover text-center">
								<div class="item-media">

								@if($lawyer->image)
                        		<img src="{!! url('/images/lawyer') !!}/{!! $lawyer->image !!}" alt="{!! $lawyer->image !!} section" />
			                    @else
			                    <img class="image_fade" src="http://lorempixel.com/371/585/people/" style="border: 1px solid #bdc3c7;" alt="{!! $lawyer->name !!} image" itemprop="image" />
			                    @endif
								</div>
								<div class="item-content ds">
									<h6 class="muli text-uppercase inline-block rightmargin_5 bottommargin_0">
										{!! $lawyer->name !!}
									</h6>
									<span class="highlight">{!! $lawyer->title !!}</span>
									<div class="content-body">

										<div class="divider_20">
											<a class="social-icon theme-color-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
											<a class="social-icon theme-color-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
											<a class="social-icon theme-color-icon soc-youtube" href="#" title="" data-toggle="tooltip" data-original-title="Youtube"></a>
											<a class="social-icon theme-color-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
										</div>
										<p class="grey">
											Pork chop sirloin kielbasa swine short ribs, t-bone pork belly. T-bone leberkas frankfurter.
										</p>
										<p class="topmargin_30">
											<a href="team-single.html" class="theme_button color1">Read more</a>
										</p>
									</div>
								</div>
							</div>
						</div>
						<!-- .col-* -->
@endforeach


					</div>
				</div>
			</section>

@endsection


@section('seo')
@endsection

@section('json-ld')
@endsection
