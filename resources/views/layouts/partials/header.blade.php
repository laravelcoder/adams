			<header class="page_header header_darkgrey table_section table_section_md columns_margin_0 toggler_right">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<a href="{!! url('/') !!}" class="logo top_logo">
								{{-- <img src="{!! asset('images/logo.png') !!}" alt=""> --}}
								<span class="logo_text">
									<span class="playfair title">Adams Davis P.C.</span>
									<span class="highlight">--- ACCIDENT TRIAL ATTORNEYS ---</span>
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
									{!! $primary->asUl(array('class' => 'mainmenu nav sf-menu', 'data-in'=> 'fadeIn', 'data-out' => 'fadeOut')) !!}
							</nav><!-- eof main nav -->
						</div>
					</div>
				</div>
			</header>