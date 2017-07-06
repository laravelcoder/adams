@extends('layouts.site')

@section('content')
			<section id="about" class="ls ms section_padding_0 columns_padding_0 section_about">
				<div class="container-fluid">
					<div class="row">

						<div class="col-md-6 section_padding_top_60 section_padding_bottom_65">

							<div class="container-left-half">
								<div class="row">
									<div class="col-xs-12">

										<div class="section_number with_divider grey">
											<span>01</span>
										</div>
										<h2 class="section_header highlight">Welcome to The Adams Davis</h2>
										<p>At Adams Davis our philosophy is “We’re in this together.”</p>
										<p>
											We are a law firm of real trial attorneys who will fight aggressively for your rights. Everything we do begins and ends with the client. We understand that each situation is unique and during this stressful time you need someone you can trust. The Personal Injury Law Firm of Adams Davis P.C. will become your partner in the legal process.
										</p>
										<div class="topmargin_60 content-justify vertical-center">
											<div>
												<p class="small-text grey margin_0">derren davis</p>
												<p class="highlight">Accedent Trial Attorney</p>
											</div>
											{{-- <img src="images/signature.png" alt=""> --}}
										</div>

									</div>
								</div>
							</div>
							<!-- .container-left-half -->

						</div>
						<!-- .col-* -->
						<div class="col-md-6 hidden-sm hidden-xs">
							<div class="container-right-half">
								<div class="row">
									<div class="col-xs-12 text-center">
										<div class="bg_image_half cs"></div>
										<img src="images/person.png" alt="">
									</div>
								</div>
							</div>
						</div>
						<!-- .col-* -->

					</div>
				</div>
			</section>

			<section id="services" class="ds section_padding_50 section_services parallax">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="section_number with_divider grey">
								<span>02</span>
							</div>
							<h2 class="section_header">Practice Areas</h2>
							<p>When it comes to righting wrongs for victims of accidents, negligence, or any other area we work in, our attorneys at Adams Davis fight aggressively for your rights. When we take on your case, you become a critical part of our legal team and we work with you every step of the way. </p>
							<p>
						</div>
					</div>
					<div class="row columns_padding_25 columns_margin_bottom_60 topmargin_30">
						<div class="col-md-4 col-sm-6">
							<div class="teaser media">
								<div class="media-left">
									<div class="teaser_icon highlight size_normal">
										<i class="flaticon-people-2"></i>

										{{-- <i class="flaticon-accident-9"></i> --}}
									</div>
								</div>
								<div class="media-body toppadding_5">
									<h3 class="muli">
										<a href="#">Personal Injury</a>
									</h3>
									<hr class="divider_30_3 divider_left divider_10 main_bg_color">
									<p>In our many years' experience as personal injury Trial lawyers in Utah, we have obtained verdicts and settlements for thousands of clients, inside and outside the courtroom.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="teaser media">
								<div class="media-left">
									<div class="teaser_icon highlight size_normal">
										<i class="icon-building"></i>
									</div>
								</div>
								<div class="media-body toppadding_5">
									<h3 class="muli">
										<a href="#">Wrongful Death</a>
									</h3>
									<hr class="divider_30_3 divider_left divider_10 main_bg_color">
									<p>We represent grieving families who have lost loved ones due to someone
						 else's act of negligence, seeking maximum financial recovery for those families. </p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 clear-sm">
							<div class="teaser media">
								<div class="media-left">
									<div class="teaser_icon highlight size_normal">
										<i class="flaticon-car-collision"></i>
									</div>
								</div>
								<div class="media-body toppadding_5">
									<h3 class="muli">
										<a href="#">Vehicle Accidents</a>
									</h3>
									<hr class="divider_30_3 divider_left divider_10 main_bg_color">
									<p>Whether you were rear-ended or hit by a large commercial big rig, our firm exists to represent and protect the rights of all auto accident victims.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 clear-lg clear-md">
							<div class="teaser media">
								<div class="media-left">
									<div class="teaser_icon highlight size_normal">
										<i class="icon-themis"></i>
									</div>
								</div>
								<div class="media-body toppadding_5">
									<h3 class="muli">
										<a href="service-single.html">FELA Claims</a>
									</h3>
									<hr class="divider_30_3 divider_left divider_10 main_bg_color">
									<p>Swine boudin fatback, pancetta picanha landjaeger turducken shank capicola rump turkey.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 clear-sm">
							<div class="teaser media">
								<div class="media-left">
									<div class="teaser_icon highlight size_normal">
										<i class="flaticon-brain-inside-human-head"></i>
									</div>
								</div>
								<div class="media-body toppadding_5">
									<h3 class="muli">
										<a href="#">Brain Injuries</a>
									</h3>
									<hr class="divider_30_3 divider_left divider_10 main_bg_color">
									<p>Injuries suffered as a result of TBI can be severe and life altering. If you or a loved one has suffered a brain injury, contact us we can help.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="teaser media">
								<div class="media-left">
									<div class="teaser_icon highlight size_normal">
										<i class="flaticon-fire"></i>
									</div>
								</div>
								<div class="media-body toppadding_5">
									<h3 class="muli">
										<a href="service-single.html">Catastrophic Injuries</a>
									</h3>
									<hr class="divider_30_3 divider_left divider_10 main_bg_color">
									<p>Catastrophic injuries like spinal cord injuries, and burns can be  debilitating and even life threatening. We fight to recover compensation for those clients.</p>
								</div>
							</div>
						</div>



						<div class="col-md-4 col-sm-6">
							<div class="teaser media">
								<div class="media-left">
									<div class="teaser_icon highlight size_normal">
										<i class="flaticon-accident-2"></i>
									</div>
								</div>
								<div class="media-body toppadding_5">
									<h3 class="muli">
										<a href="#">Premises Accidents</a>
									</h3>
									<hr class="divider_30_3 divider_left divider_10 main_bg_color">
									<p>Slips and falls, negligent security, sidewalk falls, and unsafe building injuries are just a few examples of premises liability cases we handle.</p>
								</div>
							</div>
						</div>


						<div class="col-md-4 col-sm-6">
							<div class="teaser media">
								<div class="media-left">
									<div class="teaser_icon highlight size_normal">
										<i class="flaticon-accident-8"></i>
									</div>
								</div>
								<div class="media-body toppadding_5">
									<h3 class="muli">
										<a href="#">Construction Accidents</a>
									</h3>
									<hr class="divider_30_3 divider_left divider_10 main_bg_color">
									<p>We represent the rights of Salt lake City construction workers injured by falls, electrocutions, falling debris, and other on-the-job accidents.</p>
								</div>
							</div>
						</div>


						<div class="col-md-4 col-sm-6">
							<div class="teaser media">
								<div class="media-left">
									<div class="teaser_icon highlight size_normal">
										<i class="flaticon-bite"></i>
									</div>
								</div>
								<div class="media-body toppadding_5">
									<h3 class="muli">
										<a href="service-single.html">Dog Bites</a>
									</h3>
									<hr class="divider_30_3 divider_left divider_10 main_bg_color">
									<p>Each year, many innocent children and adults are seriously injured or even suffer wrongful death as a result of dog bite attacks. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="team" class="ls ms section_padding_top_50 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="section_number with_divider grey">
								<span>03</span>
							</div>
							<h2 class="section_header highlight">Our Attorneys</h2>
							<p>Personal Injury Attorneys Ready To Fight For You. We Provide Extremely Aggressive Representation. Let Us Help!</p>
							<p>

								<div class="owl-carousel topmargin_60 bottommargin_0" data-nav="true" data-dots="true" data-responsive-lg="3" data-responsive-md="3">

									<div class="vertical-item content-absolute content-hover text-center">
										<div class="item-media">
											<img src="{!! asset('images/team_rectangle/DarrenDavis.png') !!}" alt="Salt Lake Trial Attorney" />
										</div>
										<div class="item-content ds">
											<h6 class="muli text-uppercase inline-block rightmargin_5 bottommargin_0">
												Darren Davis
											</h6>
											<span class="highlight">Co Founder</span>
											<div class="content-body">

												<div class="divider_20">
													<a class="social-icon theme-color-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
													<a class="social-icon theme-color-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
													<a class="social-icon theme-color-icon soc-youtube" href="#" title="" data-toggle="tooltip" data-original-title="Youtube"></a>
													<a class="social-icon theme-color-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
												</div>
												<p class="grey">
													Darren Davis is a co-founder of Adams Davis, P.C. and represents plaintiffs in injury cases.
												</p>
												<p class="topmargin_30">
													<a href="team-single.html" class="theme_button color1">Read more</a>
												</p>
											</div>
										</div>
									</div>

									<div class="vertical-item content-absolute content-hover text-center">
										<div class="item-media">
											<img src="images/team_rectangle/SamAdams.png" alt="Personal Injury Lawyer" />
										</div>
										<div class="item-content ds">
											<h6 class="muli text-uppercase inline-block rightmargin_5 bottommargin_0">
												Sam Adams
											</h6>
											<span class="highlight">Co Founder</span>
											<div class="content-body">

												<div class="divider_20">
													<a class="social-icon theme-color-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
													<a class="social-icon theme-color-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
													<a class="social-icon theme-color-icon soc-youtube" href="#" title="" data-toggle="tooltip" data-original-title="Youtube"></a>
													<a class="social-icon theme-color-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
												</div>
												<p class="grey">
													Sam Adams is a co-founder of Adams Davis, P.C. and represents plaintiffs in injury cases.
												</p>
												<p class="topmargin_30">
													<a href="team-single.html" class="theme_button color1">Read more</a>
												</p>
											</div>
										</div>
									</div>

									<div class="vertical-item content-absolute content-hover text-center">
										<div class="item-media">
											<img src="images/team_rectangle/BrettBlood.png" alt="Utah Personal Injury Attorney At Law" />
										</div>
										<div class="item-content ds">
											<h6 class="muli text-uppercase inline-block rightmargin_5 bottommargin_0">
												Brett Blood
											</h6>
											<span class="highlight">Associate Attorney</span>
											<div class="content-body">

												<div class="divider_20">
													<a class="social-icon theme-color-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
													<a class="social-icon theme-color-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
													<a class="social-icon theme-color-icon soc-youtube" href="#" title="" data-toggle="tooltip" data-original-title="Youtube"></a>
													<a class="social-icon theme-color-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
												</div>
												<p class="grey">
													Brett began his personal injury practice in late 2006 at Keith Barton & Associates.
												</p>
												<p class="topmargin_30">
													<a href="team-single.html" class="theme_button color1">Read more</a>
												</p>
											</div>
										</div>
									</div>

									<div class="vertical-item content-absolute content-hover text-center">
										<div class="item-media">
											<img src="images/team_rectangle/YorkMajor.png" alt="Personal Injury Attorney for Utah" />
										</div>
										<div class="item-content ds">
											<h6 class="muli text-uppercase inline-block rightmargin_5 bottommargin_0">
												York Major
											</h6>
											<span class="highlight">Associate Attorney</span>
											<div class="content-body">

												<div class="divider_20">
													<a class="social-icon theme-color-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
													<a class="social-icon theme-color-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
													<a class="social-icon theme-color-icon soc-youtube" href="#" title="" data-toggle="tooltip" data-original-title="Youtube"></a>
													<a class="social-icon theme-color-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
												</div>
												<p class="grey">
													York Major is a premier injury and complex tort litigation attorney.
												</p>
												<p class="topmargin_30">
													<a href="team-single.html" class="theme_button color1">Read more</a>
												</p>
											</div>
										</div>
									</div>

									<div class="vertical-item content-absolute content-hover text-center">
										<div class="item-media">
											<img src="images/team_rectangle/ChristianCueva.png" alt="" />
										</div>
										<div class="item-content ds">
											<h6 class="muli text-uppercase inline-block rightmargin_5 bottommargin_0">
												Christian Cueva
											</h6>
											<span class="highlight">Associate Attorney</span>
											<div class="content-body">

												<div class="divider_20">
													<a class="social-icon theme-color-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
													<a class="social-icon theme-color-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
													<a class="social-icon theme-color-icon soc-youtube" href="#" title="" data-toggle="tooltip" data-original-title="Youtube"></a>
													<a class="social-icon theme-color-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
												</div>
												<p class="grey">
													 His practice focuses on representing individuals against the faceless machinery of Insurance Companies, Corporations, and the State.
												</p>
												<p class="topmargin_30">
													<a href="team-single.html" class="theme_button color1">Read more</a>
												</p>
											</div>
										</div>
									</div>

								</div>
						</div>
					</div>

				</div>
			</section>

			<section class="cs section_padding_100 section_action parallax">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header highlight">20 Years of Experience in Various Cases</h2>
							<p>It is not exhaustive since throught our experience we understand that a client’s needs are always diverse and dynamic.</p>
							<p>
								<p class="topmargin_50">
									<a href="#" class="theme_button">Free consultation</a>
								</p>
						</div>
					</div>
				</div>
			</section>

			<section id="team" class="ls ms section_padding_top_50 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="section_number with_divider grey">
								<span>05</span>
							</div>
							<h2 class="section_header highlight">Supporting Staff</h2>

							<p>

								<div class="owl-carousel topmargin_60 bottommargin_0" data-nav="true" data-dots="true" data-responsive-lg="5" data-responsive-md="5">

									<div class="vertical-item content-absolute content-hover text-center">
										<div class="item-media">
											<img src="images/team_rectangle/AudreyTaoipu.png" alt="Personal Injury Lawyer" />
										</div>
										<div class="item-content ds">
											<h6 class="muli text-uppercase inline-block rightmargin_5 bottommargin_0">
												Audrey Taoipu
											</h6>
											<span class="highlight">Paralegal</span>
											<div class="content-body">

												<div class="divider_20">
													<a class="social-icon theme-color-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
													<a class="social-icon theme-color-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
													<a class="social-icon theme-color-icon soc-youtube" href="#" title="" data-toggle="tooltip" data-original-title="Youtube"></a>
													<a class="social-icon theme-color-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
												</div>
												<p class="grey">
													Audrey has been working in the legal field for eight years and has an Associates Degree in Paralegal Studies.
												</p>
												<p class="topmargin_30">
													<a href="team-single.html" class="theme_button color1">Read more</a>
												</p>
											</div>
										</div>
									</div>

									<div class="vertical-item content-absolute content-hover text-center">
										<div class="item-media">
											<img src="{!! asset('images/team_rectangle/AshliGallegos.png') !!}" alt="Salt Lake Trial Attorney" />
										</div>
										<div class="item-content ds">
											<h6 class="muli text-uppercase inline-block rightmargin_5 bottommargin_0">
												Ashli Gallegos
											</h6>
											<span class="highlight">Paralegal Assistant</span>
											<div class="content-body">

												<div class="divider_20">
													<a class="social-icon theme-color-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
													<a class="social-icon theme-color-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
													<a class="social-icon theme-color-icon soc-youtube" href="#" title="" data-toggle="tooltip" data-original-title="Youtube"></a>
													<a class="social-icon theme-color-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
												</div>
												<p class="grey">
													Ashli joined Adams Davis P.C. this year as a paralegal assistant. She enjoys shopping as well as spending time boating and camping.
												</p>
												<p class="topmargin_30">
													<a href="team-single.html" class="theme_button color1">Read more</a>
												</p>
											</div>
										</div>
									</div>



									<div class="vertical-item content-absolute content-hover text-center">
										<div class="item-media">
											<img src="images/team_rectangle/ErickaEwell.png" alt="Utah Personal Injury Attorney At Law" />
										</div>
										<div class="item-content ds">
											<h6 class="muli text-uppercase inline-block rightmargin_5 bottommargin_0">
												Ericka Ewell
											</h6>
											<span class="highlight">Paralegal</span>
											<div class="content-body">

												<div class="divider_20">
													<a class="social-icon theme-color-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
													<a class="social-icon theme-color-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
													<a class="social-icon theme-color-icon soc-youtube" href="#" title="" data-toggle="tooltip" data-original-title="Youtube"></a>
													<a class="social-icon theme-color-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
												</div>
												<p class="grey">
													Ericka has been with the firm for four years.  She works as a litigation paralegal. Erica enjoys reading, dancing and camping.
												</p>
												<p class="topmargin_30">
													<a href="team-single.html" class="theme_button color1">Read more</a>
												</p>
											</div>
										</div>
									</div>

									<div class="vertical-item content-absolute content-hover text-center">
										<div class="item-media">
											<img src="images/team_rectangle/BrandieVanginkle.png" alt="Personal Injury Attorney for Utah" />
										</div>
										<div class="item-content ds">
											<h6 class="muli text-uppercase inline-block rightmargin_5 bottommargin_0">
												Brandie Vanginkle
											</h6>
											<span class="highlight">Paralegal</span>
											<div class="content-body">

												<div class="divider_20">
													<a class="social-icon theme-color-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
													<a class="social-icon theme-color-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
													<a class="social-icon theme-color-icon soc-youtube" href="#" title="" data-toggle="tooltip" data-original-title="Youtube"></a>
													<a class="social-icon theme-color-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
												</div>
												<p class="grey">
													Brandie has 13 years of experience working as a paralegal. She handles litigation and claims for Brett Blood.
												</p>
												<p class="topmargin_30">
													<a href="team-single.html" class="theme_button color1">Read more</a>
												</p>
											</div>
										</div>
									</div>

									<div class="vertical-item content-absolute content-hover text-center">
										<div class="item-media">
											<img src="images/team_rectangle/YocelinRamirez.png" alt="" />
										</div>
										<div class="item-content ds">
											<h6 class="muli text-uppercase inline-block rightmargin_5 bottommargin_0">
												Yocelin Ramirez
											</h6>
											<span class="highlight">Paralegal</span>
											<div class="content-body">

												<div class="divider_20">
													<a class="social-icon theme-color-icon soc-facebook" href="#" title="" data-toggle="tooltip" data-original-title="Facebook"></a>
													<a class="social-icon theme-color-icon soc-twitter" href="#" title="" data-toggle="tooltip" data-original-title="Twitter"></a>
													<a class="social-icon theme-color-icon soc-youtube" href="#" title="" data-toggle="tooltip" data-original-title="Youtube"></a>
													<a class="social-icon theme-color-icon soc-google" href="#" title="" data-toggle="tooltip" data-original-title="Google"></a>
												</div>
												<p class="grey">
													 Yocelin has been with the firm as a legal assistant for two years. In addition to legal experience, she has a background in social work. She is bilingual in Spanish and English.
												</p>
												<p class="topmargin_30">
													<a href="team-single.html" class="theme_button color1">Read more</a>
												</p>
											</div>
										</div>
									</div>

								</div>
						</div>
					</div>

				</div>
			</section>

			<section id="why_us" class="ls ms section_padding_50">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="section_number with_divider grey">
								<span>04</span>
							</div>
							<h2 class="section_header highlight">Why Choose Us</h2>
							<p>Pork chop sirloin kielbasa swine short ribs, t-bone pork belly T-bone leberkas frankfurter pork belly kielbasa beef ribs.</p>
							<p>
						</div>
					</div>
					<div class="row columns_margin_bottom_60">
						<div class="col-lg-4 col-md-4">
							<div class="teaser media media-sm-block text-right">
								<div class="media-body media-middle">
									<h3 class="muli">
										<a href="service-single.html">Great Discount</a>
									</h3>
									<hr class="divider_30_3 divider_right divider_10 main_bg_color">
									<p>Tempor ribeye eiusmod, filet mignon aliqua est sed non labo</p>
								</div>
								<div class="media-right media-middle">
									<div class="teaser_icon highlight size_normal">
										<i class="icon-policeman"></i>
									</div>
								</div>
							</div>

							<div class="teaser media media-sm-block text-right topmargin_40">
								<div class="media-body media-middle">
									<h3 class="muli">
										<a href="service-single.html">Community Service</a>
									</h3>
									<hr class="divider_30_3 divider_right divider_10 main_bg_color">
									<p>Ut bacon filet mignon frankfurter venison shank sed quis</p>
								</div>
								<div class="media-right media-middle">
									<div class="teaser_icon highlight size_normal">
										<i class="icon-contract"></i>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 text-center">
							<img src="images/themis.png" alt="" />
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="teaser media media-sm-block">
								<div class="media-left media-middle">
									<div class="teaser_icon highlight size_normal">
										<i class="icon-police"></i>
									</div>
								</div>
								<div class="media-body media-middle">
									<h3 class="muli">
										<a href="service-single.html">Great Discount</a>
									</h3>
									<hr class="divider_30_3 divider_left divider_10 main_bg_color">
									<p>Tempor ribeye eiusmod, filet mignon aliqua est sed non labo</p>
								</div>
							</div>

							<div class="teaser media media-sm-block topmargin_40">
								<div class="media-left media-middle">
									<div class="teaser_icon highlight size_normal">
										<i class="icon-lawyer"></i>
									</div>
								</div>
								<div class="media-body media-middle">
									<h3 class="muli">
										<a href="service-single.html">Community Service</a>
									</h3>
									<hr class="divider_30_3 divider_left divider_10 main_bg_color">
									<p>Ut bacon filet mignon frankfurter venison shank sed quis</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

			<section id="consultation" class="ds section_padding_0 section_about">
				<div class="container-fluid">
					<div class="row row_columns_padding_0">

						<div class="col-md-6 col-md-push-6 section_padding_top_60 section_padding_bottom_65">
							<div class="container-right-half">
								<div class="row">
									<div class="col-md-11 col-md-offset-1">

										<div class="section_number with_divider grey">
											<span>05</span>
										</div>
										<h2 class="section_header highlight">Free Consultation</h2>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>

										<form method="post" action="./">
											<div class="row columns_margin_bottom_30">
												<div class="col-sm-6">
													<div class="form-group">
														<label for="first-name" class="sr-only">First Name
															<span class="required">*</span>
														</label>
														<input type="text" aria-required="true" size="30" value="" name="first-name" id="first-name" class="form-control" placeholder="First Name">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label for="last-name" class="sr-only">Last Name
															<span class="required">*</span>
														</label>
														<input type="text" aria-required="true" size="30" value="" name="last-name" id="last-name" class="form-control" placeholder="Last Name">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label for="email" class="sr-only">Your E-Mail</label>
														<input type="text" size="30" value="" name="email" id="email" class="form-control" placeholder="Your E-Mail">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label for="phone" class="sr-only">Phone Number
															<span class="required">*</span>
														</label>
														<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Your Phone">
													</div>
												</div>
												<div class="col-sm-12">
													<div class="form-group select-group">
														<label for="phone" class="sr-only">Practice Area
															<span class="required">*</span>
														</label>
														<div class="input-group">
															<select aria-required="true" id="month" name="mounth" class="choice empty form-control">
																<option value="" disabled selected data-default>Practice Area</option>
																<option value="january">January</option>
																<option value="february">February</option>
																<option value="march">March</option>
															</select>
															<i class="fa fa-angle-down" aria-hidden="true"></i>
														</div>
													</div>
												</div>
												<div class="col-sm-12">
													<div class="form-group">
														<label for="comment" class="sr-only">Your Message</label>
														<textarea rows="1" cols="45" name="comment" id="comment" class="form-control" placeholder="Your Message"></textarea>
													</div>
												</div>
											</div>
											<p class="form-submit">
												<button type="submit" id="submit" name="submit" class="theme_button color1">Send request</button>
											</p>
										</form>

									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-md-pull-6 text-center text-md-right">
							<img src="images/person2.jpg" alt="" />
						</div>

					</div>
				</div>
			</section>

			<section id="news" class="ls ms section_padding_top_50 section_padding_bottom_100 columns_margin_bottom_30">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="section_number with_divider grey">
								<span>06</span>
							</div>
							<h2 class="section_header highlight">Latest News</h2>
							<p>In cupidatat adipisicing, elit pancetta sed ipsum. Capicola veniam sausage short ribs cow, aliqua eiusmod kielbasa.</p>
							<p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<article class="vertical-item content-padding post format-standard with_background text-center bottom-color-border">

								<div class="item-media entry-thumbnail">
									<img src="images/gallery/01.jpg" alt="">
									<div class="media-links">
										<a class="abs-link" title="" href="blog-single-right.html"></a>
									</div>
								</div>

								<div class="item-content entry-content">
									<header class="entry-header">

										<div class="entry-date small-text">
											<a href="blog-right.html" rel="bookmark">
												<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
													December 25, 2016
												</time>
											</a>
										</div>

										<h3 class="entry-title">
											<a href="blog-single-right.html" rel="bookmark">Speak Directly With An Attorney</a>
										</h3>
										<!-- .entry-meta -->

										<hr class="divider_60_2 main_bg_color transparent divider_30">

									</header>
									<!-- .entry-header -->

									<p>Ut bacon filet mignon frankfurter venison shank sed quis short ribs lorem. Shank shankle incididunt.</p>


								</div>
								<!-- .item-content.entry-content -->
							</article>
							<!-- .post -->
						</div>

						<div class="col-md-4">
							<article class="vertical-item content-padding post format-standard with_background text-center bottom-color-border">

								<div class="item-media entry-thumbnail">
									<img src="images/gallery/04.jpg" alt="">
									<div class="media-links">
										<a class="abs-link" title="" href="blog-single-right.html"></a>
									</div>
								</div>

								<div class="item-content entry-content">
									<header class="entry-header">

										<div class="entry-date small-text">
											<a href="blog-right.html" rel="bookmark">
												<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
													November 13, 2016
												</time>
											</a>
										</div>

										<h3 class="entry-title">
											<a href="blog-single-right.html" rel="bookmark">Child Abuse Cases Are Our First Priority</a>
										</h3>
										<!-- .entry-meta -->

										<hr class="divider_60_2 main_bg_color transparent divider_30">

									</header>
									<!-- .entry-header -->

									<p>Ex sausage chicken andouille non capicola pork loin landjaeger shank. Occaecat landjaeger cillum rump.</p>


								</div>
								<!-- .item-content.entry-content -->
							</article>
							<!-- .post -->
						</div>

						<div class="col-md-4">
							<article class="vertical-item content-padding post format-standard with_background text-center bottom-color-border">

								<div class="item-media entry-thumbnail">
									<img src="images/gallery/03.jpg" alt="">
									<div class="media-links">
										<a class="abs-link" title="" href="blog-single-right.html"></a>
									</div>
								</div>

								<div class="item-content entry-content">
									<header class="entry-header">

										<div class="entry-date small-text">
											<a href="blog-right.html" rel="bookmark">
												<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
													October 19, 2016
												</time>
											</a>
										</div>

										<h3 class="entry-title">
											<a href="blog-single-right.html" rel="bookmark">Barrister Convicted Of Forgery Disbarred</a>
										</h3>
										<!-- .entry-meta -->

										<hr class="divider_60_2 main_bg_color transparent divider_30">

									</header>
									<!-- .entry-header -->

									<p>Filet mignon sirloin sausage est hamburger lorem consectetur turkey occaecat swine laboris laborum.</p>


								</div>
								<!-- .item-content.entry-content -->
							</article>
							<!-- .post -->
						</div>

					</div>
				</div>
			</section>
@endsection
