<section id="team" class="ls ms section_padding_top_50 section_padding_bottom_100">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<div class="section_number with_divider grey">
					<span>03</span>
				</div>
				<h2 class="section_header highlight">Our Attorneys</h2>
				<p>We invite you to learn more about our attorneys, our experience, and the kinds of cases we have handled for our clients.</p>
				<p>
					<div class="owl-carousel topmargin_60 bottommargin_0" data-nav="true" data-dots="true" data-responsive-lg="5" data-responsive-md="3">
					@foreach($lawyers as $lawyer)

							<div class="vertical-item content-absolute content-hover text-center">
								<div class="item-media">
									<img src="{!! url('/images/lawyers') !!}/{!! $lawyer->image !!}" alt="" />
								</div>
								<div class="item-content ds">
									<h6 class="muli text-uppercase inline-block rightmargin_5 bottommargin_0">
										{!! $lawyer->name !!}
									</h6>
									<span class="highlight">{!! $lawyer->title !!}</span>
									<div class="content-body">
										<div class="divider_20">
											@if($lawyer->facebook)
											<a class="social-icon theme-color-icon soc-facebook" href="{!! $lawyer->facebook !!}" title="facebook" data-toggle="tooltip" data-original-title="Facebook"></a>
											@endif
											@if($lawyer->twitter)
												<a class="social-icon theme-color-icon soc-twitter" href="{!! $lawyer->twitter !!}" title="twitter" data-toggle="tooltip" data-original-title="Twitter"></a>
												@endif
												@if($lawyer->youtube)
													<a class="social-icon theme-color-icon soc-youtube" href="{!! $lawyer->youtube !!}" title="youtube" data-toggle="tooltip" data-original-title="Youtube"></a>
												@endif
												@if($lawyer->googleplus)
													<a class="social-icon theme-color-icon soc-google" href="{!! $lawyer->googleplus !!}" title="" data-toggle="tooltip" data-original-title="Google"></a>
												@endif
										</div>
										<p class="grey">
											{!! $lawyer->intro !!}
										</p>
										<p class="topmargin_30">
											<a href="{!! url('attorneys/'. $lawyer->slug) !!}" class="theme_button color1">Read more</a>
										</p>
									</div>
								</div>
							</div>

					@endforeach
					</div>
			</div>
		</div>
	</div>
</section>