@extends('layouts.team')

@section('title')
@endsection

@section('bread')
			<section class="page_breadcrumbs cs parallax section_padding_top_40 section_padding_bottom_40">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>{!! $lawyer->name !!}</h2>
							<ol class="breadcrumb">
								<li>
									<a href="./">
										Home
									</a>
								</li>
								<li>
									<a href="#">Attorneys</a>
								</li>
								<li class="active">{!! $lawyer->name !!}</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
@endsection

@section('content')

			<section class="ls ms section_padding_top_100 section_padding_bottom_100 columns_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<div class="vertical-item content-absolute text-center">
								<div class="item-media">
									@if($lawyer->image)
	                        		<img src="{!! url('/images/lawyers') !!}/{!! $lawyer->image !!}" alt="{!! $lawyer->name !!} section" />
				                    @else
				                    <img class="image_fade" src="http://via.placeholder.com/371x585" style="border: 1px solid #bdc3c7;" alt="{!! $lawyer->name !!} image" itemprop="image" />
				                    @endif
								</div>
								<div class="item-content content-title ds">
									<h6 class="muli text-uppercase inline-block rightmargin_5 bottommargin_0">
										{!! $lawyer->name !!}
									</h6>
									<span class="highlight">Personal Injury Lawyer</span>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<p>
								{!! $lawyer->upper_content !!}
							</p>

							@if($lawyer->bio)
							<!-- Nav tabs -->
							<ul class="nav nav-tabs dark topmargin_40" role="tablist">
								<li class="active"> <a href="#tab1" role="tab" data-toggle="tab">Biography</a> </li>
								{{-- <li> <a href="#tab2" role="tab" data-toggle="tab">Skills</a> </li> --}}
								{{-- <li> <a href="#tab3" role="tab" data-toggle="tab">Send Message</a> </li> --}}
							</ul>

							<!-- Tab panes -->
							<div class="tab-content top-color-border ds bottommargin_40">

								<div class="tab-pane fade in active" id="tab1">
									{!! $lawyer->bio !!}
			{{-- 						<h3 class="highlight">Biography:</h3>
									<p>
										Ut wisi enim ad minim veniaquis nostrud exetation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Dutem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
										vero eros et accumsan et iusto odio dignissim qui blandit.
									</p>
									<h3 class="highlight">Professional Life:</h3>
									<p>
										Dutem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit. Praesent luptatum zzril delenit augue duis dolore te feugait
										nulla facilisi.
									</p> --}}
								</div>

								{{-- <div class="tab-pane fade" id="tab2">
									<p>
										<strong class="grey">Skill Name</strong>
									</p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="90">
											<span>90%</span>
										</div>
									</div>

									<p>
										<strong class="grey">Skill Name</strong>
									</p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="100">
											<span>100%</span>
										</div>
									</div>

									<p>
										<strong class="grey">Skill Name</strong>
									</p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="75">
											<span>75%</span>
										</div>
									</div>

									<p>
										<strong class="grey">Skill Name</strong>
									</p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="95">
											<span>95%</span>
										</div>
									</div>
								</div> --}}

							{{-- 	<div class="tab-pane fade" id="tab3">
									<form class="contact-form" method="post" action="./">
										<p class="contact-form-name">
											<!-- <label for="name">Name <span class="required">*</span></label> -->
											<input type="text" aria-required="true" size="30" value="" name="name" class="form-control" placeholder="Name">
										</p>
										<p class="contact-form-email">
											<!-- <label for="email">Email <span class="required">*</span></label> -->
											<input type="email" aria-required="true" size="30" value="" name="email" class="form-control" placeholder="Email">
										</p>
										<p class="contact-form-message">
											<!-- <label for="message">Message</label> -->
											<textarea aria-required="true" rows="8" cols="45" name="message" class="form-control" placeholder="Message"></textarea>
										</p>
										<p class="contact-form-submit topmargin40">
											<button type="submit" name="contact_submit" class="theme_button">Send Message</button>
										</p>
									</form>
								</div> --}}
							</div>
							<!-- eof .tab-content -->
							@endif
							<p>
								{!! $lawyer->lower_content !!}
							</p>

						{{-- 	<blockquote>
								“Chicken venison pastrami shankle fatback meatball pancetta beef. Ground round bacon t-bone prosciutto strip steak pork.”

								<div class="item-meta topmargin_30">
									<h5 class="small-text muli bold margin_0">
										<a href="team-single.html">Christina Aguilar</a>
									</h5>
									<p class="highlight">Founder of the Justice</p>
								</div>
							</blockquote> --}}


						</div>

					</div>
				</div>
			</section>






@endsection


@section('seo')
@endsection

@section('json-ld')
	<script type='application/ld+json'>
	{
	  "@context": "http://www.schema.org",
	  "@type": "person",
	  "name": "{!! $lawyer->name !!}",
	  "jobTitle": "Founder Attorney",
	  "url": "http://www.adamsdavis.com",
	  "address": {
	    "@type": "PostalAddress",
	    "streetAddress": "35 W. Broadway",
	    "addressLocality": "Salt Lake City",
	    "addressRegion": "Utah",
	    "postalCode": "84101",
	    "addressCountry": "United States"
	  },
	  "email": "{!! $lawyer->email !!}",
	  "telephone": "118018888888"
	}
	 </script>
@endsection
