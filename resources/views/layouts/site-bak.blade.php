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

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" id="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
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
			<!--
		<ul>
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">


			<!-- template sections -->

@include('layouts.fp.slider')

			<!--	{{-- https://youtu.be/7Hcp0BvMdPc --}}  -->
			<header class="page_header header_darkgrey header_transparent table_section table_section_md toggler_right">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<a href="./" class="logo top_logo">
								<img src="images/logo.png" alt="">
								<span class="logo_text">
									<span class="playfair title">Adams Davis</span>
									<span class="highlight">ACCIDENT TRIAL ATTORNEYS</span>
								</span>
							</a>
							<!-- header toggler -->
							<span class="toggle_menu">
								<span></span>
							</span>
						</div>
						<div class="col-md-8 text-right">
							<!-- main nav start -->
							<nav class="mainmenu_wrapper">
								<ul class="mainmenu nav sf-menu">
									<li class="active">
										<a href="index.html">Home</a>
										<ul>
											<li>
												<a href="index.html">MultiPage</a>
											</li>
											<li>
												<a href="index_singlepage.html">Single Page</a>
											</li>
											<li>
												<a href="admin_index.html">Admin Dashboard</a>
											</li>
										</ul>
									</li>

									<li>
										<a href="about.html">Pages</a>
										<ul>

											<!-- features -->
											<li>
												<a href="shortcodes_teasers.html">Shortcodes &amp; Widgets</a>
												<ul>
													<li>
														<a href="shortcodes_typography.html">Typography</a>
													</li>
													<li>
														<a href="shortcodes_buttons.html">Buttons</a>
													</li>
													<li>
														<a href="shortcodes_pricing.html">Pricing</a>
													</li>
													<li>
														<a href="shortcodes_teasers.html">Teasers</a>
													</li>
													<li>
														<a href="shortcodes_progress.html">Progress</a>
													</li>
													<li>
														<a href="shortcodes_tabs.html">Tabs &amp; Collapse</a>
													</li>
													<li>
														<a href="shortcodes_bootstrap.html">Bootstrap Elements</a>
													</li>
													<li>
														<a href="shortcodes_widgets.html">Widgets</a>
													</li>
													<li>
														<a href="shortcodes_animation.html">Animation</a>
													</li>
													<li>
														<a href="shortcodes_icons.html">Template Icons</a>
													</li>
													<li>
														<a href="shortcodes_socialicons.html">Social Icons</a>
													</li>
												</ul>
											</li>
											<!-- eof features -->

											<li>
												<a href="about.html">About</a>
											</li>

											<li>
												<a href="services.html">Our Services</a>
												<ul>
													<li>
														<a href="services.html">Services</a>
													</li>
													<li>
														<a href="service-single.html">Single Service</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="timetable.html">Timetable</a>
											</li>


											<!-- shop -->
											<li>
												<a href="shop-right.html">Shop</a>
												<ul>
													<li>
														<a href="shop-right.html">Shop</a>
													</li>
													<li>
														<a href="product-right.html">Single Product</a>
													</li>
													<li>
														<a href="cart-right.html">Shopping Cart</a>
													</li>
													<li>
														<a href="checkout-right.html">Checkout</a>
													</li>
													<li>
														<a href="register.html">Registration</a>
													</li>
												</ul>
											</li>
											<!-- eof shop -->


											<!-- events -->
											<li>
												<a href="events-left.html">Events</a>
												<ul>
													<li>
														<a href="events-left.html">Left Sidebar</a>
													</li>
													<li>
														<a href="events-right.html">Right Sidebar</a>
													</li>
													<li>
														<a href="events-full.html">Full Width</a>
													</li>
													<li>
														<a href="event-single-left.html">Single Event</a>
														<ul>
															<li>
																<a href="event-single-left.html">Left Sidebar</a>
															</li>
															<li>
																<a href="event-single-right.html">Right Sidebar</a>
															</li>
															<li>
																<a href="event-single-full.html">Full Width</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											<!-- eof events -->

											<li>
												<a href="comingsoon1.html">Comingsoon</a>
												<ul>
													<li>
														<a href="comingsoon1.html">Comingsoon</a>
													</li>
													<li>
														<a href="comingsoon2.html">Comingsoon 2</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="faq.html">FAQ</a>
												<ul>
													<li>
														<a href="faq.html">FAQ</a>
													</li>
													<li>
														<a href="faq2.html">FAQ 2</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="404.html">404</a>
												<ul>
													<li>
														<a href="404.html">404</a>
													</li>
													<li>
														<a href="4042.html">404 2</a>
													</li>
												</ul>
											</li>

										</ul>
									</li>
									<!-- eof pages -->

									<li>
										<a href="about.html">About</a>
										<ul>
											<li>
												<a href="about.html">About</a>
											</li>
											<li>
												<a href="team.html">Attorneys</a>
												<ul>
													<li>
														<a href="team.html">Attorneys</a>
													</li>
													<li>
														<a href="team-single.html">Team Member</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>

									<li>
										<a href="#">Features</a>
										<div class="mega-menu">
											<ul class="mega-menu-row">
												<li class="mega-menu-col">
													<a href="#">Headers</a>
													<ul>
														<li>
															<a href="header1.html">Header Type 1</a>
														</li>
														<li>
															<a href="header2.html">Header Type 2</a>
														</li>
														<li>
															<a href="header3.html">Header Type 3</a>
														</li>
														<li>
															<a href="header4.html">Header Type 4</a>
														</li>
														<li>
															<a href="header5.html">Header Type 5</a>
														</li>
														<li>
															<a href="header6.html">Header Type 6</a>
														</li>
														<li>
															<a href="header7.html">Header in Menu</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a href="#">Side Menus</a>
													<ul>
														<li>
															<a href="header_side1.html">Slide Left Light</a>
														</li>
														<li>
															<a href="header_side2.html">Slide Right Light</a>
														</li>
														<li>
															<a href="header_side3.html">Push Left Light</a>
														</li>
														<li>
															<a href="header_side4.html">Push Right Light</a>
														</li>
														<li>
															<a href="header_side5.html">Slide Left Dark</a>
														</li>
														<li>
															<a href="header_side6.html">Slide Right Dark</a>
														</li>
														<li>
															<a href="header_side7.html">Push Left Dark</a>
														</li>
														<li>
															<a href="header_side8.html">Push Right Dark</a>
														</li>
														<li>
															<a href="header_side_superfish.html">Superfish Menu</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a href="breadcrumbs1.html">Breadcrumbs</a>
													<ul>
														<li>
															<a href="breadcrumbs1.html">Breadcrumbs 1</a>
														</li>
														<li>
															<a href="breadcrumbs2.html">Breadcrumbs 2</a>
														</li>
														<li>
															<a href="breadcrumbs3.html">Breadcrumbs 3</a>
														</li>
														<li>
															<a href="breadcrumbs4.html">Breadcrumbs 4</a>
														</li>
														<li>
															<a href="breadcrumbs5.html">Breadcrumbs 5</a>
														</li>
														<li>
															<a href="breadcrumbs6.html">Breadcrumbs 6</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a href="footer1.html">Footers</a>
													<ul>
														<li>
															<a href="footer1.html">Footer Type 1</a>
														</li>
														<li>
															<a href="footer2.html">Footer Type 2</a>
														</li>
														<li>
															<a href="footer3.html">Footer Type 3</a>
														</li>
														<li>
															<a href="footer4.html">Footer Type 4</a>
														</li>
														<li>
															<a href="footer5.html">Footer Type 5</a>
														</li>
														<li>
															<a href="footer6.html">Footer Type 6</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a href="copyright1.html">Copyrights</a>

													<ul>
														<li>
															<a href="copyright1.html">Copyrights 1</a>
														</li>
														<li>
															<a href="copyright2.html">Copyrights 2</a>
														</li>
														<li>
															<a href="copyright3.html">Copyrights 3</a>
														</li>
														<li>
															<a href="copyright4.html">Copyrights 4</a>
														</li>
														<li>
															<a href="copyright5.html">Copyrights 5</a>
														</li>
													</ul>
												</li>

											</ul>
										</div>
										<!-- eof mega menu -->
									</li>
									<!-- eof features -->

									<!-- blog -->
									<li>
										<a href="blog-right.html">Blog</a>
										<ul>

											<li>
												<a href="blog-right.html">Right Sidebar</a>
											</li>
											<li>
												<a href="blog-left.html">Left Sidebar</a>
											</li>
											<li>
												<a href="blog-full.html">No Sidebar</a>
											</li>
											<li>
												<a href="blog-mosaic.html">Blog Grid</a>
											</li>

											<li>
												<a href="blog-single-right.html">Post</a>
												<ul>
													<li>
														<a href="blog-single-right.html">Right Sidebar</a>
													</li>
													<li>
														<a href="blog-single-left.html">Left Sidebar</a>
													</li>
													<li>
														<a href="blog-single-full.html">No Sidebar</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="blog-single-video-right.html">Video Post</a>
												<ul>
													<li>
														<a href="blog-single-video-right.html">Right Sidebar</a>
													</li>
													<li>
														<a href="blog-single-video-left.html">Left Sidebar</a>
													</li>
													<li>
														<a href="blog-single-video-full.html">No Sidebar</a>
													</li>
												</ul>
											</li>

										</ul>
									</li>
									<!-- eof blog -->

									<!-- gallery -->
									<li>
										<a href="gallery-regular.html">Gallery</a>
										<ul>
											<!-- Gallery regular -->
											<li>
												<a href="gallery-regular.html">Gallery Regular</a>
												<ul>
													<li>
														<a href="gallery-regular.html">1 column</a>
													</li>
													<li>
														<a href="gallery-regular-2-cols.html">2 columns</a>
													</li>
													<li>
														<a href="gallery-regular-3-cols.html">3 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery regular -->

											<!-- Gallery full width -->
											<li>
												<a href="gallery-fullwidth.html">Gallery Full Width</a>
												<ul>
													<li>
														<a href="gallery-fullwidth.html">2 column</a>
													</li>
													<li>
														<a href="gallery-fullwidth-3-cols.html">3 columns</a>
													</li>
													<li>
														<a href="gallery-fullwidth-4-cols.html">4 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery full width -->

											<!-- Gallery extended -->
											<li>
												<a href="gallery-extended.html">Gallery Extended</a>
												<ul>
													<li>
														<a href="gallery-extended.html">1 column</a>
													</li>
													<li>
														<a href="gallery-extended-2-cols.html">2 columns</a>
													</li>
													<li>
														<a href="gallery-extended-3-cols.html">3 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery extended -->

											<!-- Gallery carousel -->
											<li>
												<a href="gallery-carousel.html">Gallery Carousel</a>
												<ul>
													<li>
														<a href="gallery-carousel.html">1 column</a>
													</li>
													<li>
														<a href="gallery-carousel-2-cols.html">2 columns</a>
													</li>
													<li>
														<a href="gallery-carousel-3-cols.html">3 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery carousel -->

											<!-- Gallery tile -->
											<li>
												<a href="gallery-tile.html">Gallery Tile</a>
											</li>
											<!-- eof Gallery tile -->

											<!-- Gallery left sidebar -->
											<li>
												<a href="gallery-left.html">Gallery Left Sidebar</a>
												<ul>
													<li>
														<a href="gallery-left.html">1 column</a>
													</li>
													<li>
														<a href="gallery-left-2-cols.html">2 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery left sidebar -->

											<!-- Gallery right sidebar -->
											<li>
												<a href="gallery-right.html">Gallery Right Sidebar</a>
												<ul>
													<li>
														<a href="gallery-right.html">1 column</a>
													</li>
													<li>
														<a href="gallery-right-2-cols.html">2 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery right sidebar -->

											<!-- Gallery item -->
											<li>
												<a href="gallery-single.html">Gallery Item</a>
												<ul>
													<li>
														<a href="gallery-single.html">Style 1</a>
													</li>
													<li>
														<a href="gallery-single2.html">Style 2</a>
													</li>
													<li>
														<a href="gallery-single3.html">Style 3</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery item -->
										</ul>
									</li>
									<!-- eof Gallery -->

									<!-- contacts -->
									<li>
										<a href="contact.html">Contact</a>
										<ul>
											<li>
												<a href="contact.html">Contact 1</a>
											</li>
											<li>
												<a href="contact2.html">Contact 2</a>
											</li>
											<li>
												<a href="contact3.html">Contact 3</a>
											</li>
											<li>
												<a href="contact4.html">Contact 4</a>
											</li>
										</ul>
									</li>
									<!-- eof contacts -->
								</ul>
							</nav>
							<!-- eof main nav -->
						</div>
					</div>
				</div>
			</header>

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

			<footer class="page_footer ds section_padding_top_65 section_padding_bottom_50 columns_padding_25">
				<div class="container">

					<div class="row">

						<div class="col-md-4 col-sm-6">

							<a href="./" class="logo bottommargin_10">
								<img src="images/logo.png" alt="">
								<span class="logo_text">
									<span class="playfair title">Adams Davis</span>
									<span class="highlight">Accident Trial Attorneys</span>
								</span>
							</a>

							<p>
								Ut bacon filet mignon frankfurter venison shank sed quis short ribs lorem. Shank and incididunt ea bacon. doner boudin short loin excepteur pork. belly qui ribeye salami
							</p>

							<p>
								<a href="#" class="social-icon theme-color-icon soc-twitter"></a>
								<a href="#" class="social-icon theme-color-icon soc-facebook"></a>
								<a href="#" class="social-icon theme-color-icon soc-google"></a>
								<a href="#" class="social-icon theme-color-icon soc-linkedin"></a>
								<a href="#" class="social-icon theme-color-icon soc-pinterest"></a>
							</p>

						</div>

						<div class="col-md-4 col-sm-6">
							<div class="widget widget_text topmargin_20">
								<h3 class="widget-title">Get In Touch</h3>
								<hr class="divider_60_2 main_bg_color divider_left">
								<div class="media small-teaser">
									<div class="media-left">
										<i class="fa fa-map-marker highlight fontsize_18"></i>
									</div>
									<div class="media-body">
										2551 Alfred Drive Brooklyn, NY
									</div>
								</div>
								<div class="media small-teaser">
									<div class="media-left">
										<i class="fa fa-envelope highlight fontsize_18"></i>
									</div>
									<div class="media-body greylinks underlined-links">
										<a href="mailto:contact@adamsdavis.com">contact@adamsdavis.com</a>
									</div>
								</div>
								<div class="media small-teaser">
									<div class="media-left">
										<i class="fa fa-phone highlight fontsize_18"></i>
									</div>
									<div class="media-body">
										718-250-4467
									</div>
								</div>
								<div class="media small-teaser">
									<div class="media-left">
										<i class="fa fa-clock-o highlight fontsize_18"></i>
									</div>
									<div class="media-body">
										24 hours a day, 7 days a week
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-12">
							<div class="topmargin_20">
								<div class="widget widget_twitter">
									<h3 class="widget-title">Latest Tweets</h3>
									<hr class="divider_60_2 main_bg_color divider_left">
									<div class="twitter"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>

			<section class="cs page_copyright table_section section_padding_15">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p>&copy; 2017 The Justice All Rights Reserved</p>
						</div>
					</div>
				</div>
			</section>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>


</body>

</html>
