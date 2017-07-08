@extends('layouts.blog')

@section('title')
Adams Davis Blog Articles Updates and News
@endsection

@section('content')

	{{-- 		<section class="page_breadcrumbs cs parallax section_padding_top_40 section_padding_bottom_40">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Right sidebar</h2>
							<ol class="breadcrumb">
								<li>
									<a href="./">
										Home
									</a>
								</li>
								<li>
									<a href="#">Blog</a>
								</li>
								<li class="active">Right sidebar</li>
							</ol>
						</div>
					</div>
				</div>
			</section> --}}


			<section class="ls ms section_padding_top_100 section_padding_bottom_75">
				<div class="container">

					{{-- @include('blog.partials.slider') --}}
					{{-- @include('blog.partials.highlight') --}}


					<div class="row columns_padding_25">

						<div class="col-sm-7 col-md-8 col-lg-8">
						@foreach($posts as $post)


							<article class="vertical-item content-padding post format-standard with_background bottom-color-border" itemscope itemtype="http://schema.org/Article">
								@if($post->image)
								<div class="item-media entry-thumbnail" itemprop="associatedMedia">
								<a class="abs-link" title="{!! $post->title !!}" href="{!! url('blog/'. $post->slug .'/') !!}">
									<img src="{!! url('uploads/blog') !!}/{{ $post->image }}" alt="{!! $post->title !!} image">
								</a>
									<div class="media-links">
										<a class="abs-link" title="" href="{!! url('blog/'. $post->slug .'/') !!}"></a>
									</div>
								</div>
								@else

								<img class="image_fade" src="http://lorempixel.com/800/350/abstract/" style="border: 1px solid #bdc3c7;" alt="{!! $post->title !!} image" itemprop="image" />

								@endif
								<div class="item-content entry-content">
									<header class="entry-header">

										<div class="entry-meta item-meta content-justify">
											<span>
												<span class="entry-date">

														<time class="entry-date" datetime="{!! $post->updated_at !!}">
															{!! date('F d, Y', strtotime($post->updated_at)) !!}
														</time>

												</span>
											</span>

										</div>
										<!-- .entry-meta -->

										<h3 class="entry-title">
											<a href="{!! url('blog/'. $post->slug .'/') !!}" rel="bookmark">{!! $post->title !!}</a>
										</h3>

										<hr class="divider_60_2 divider_left main_bg_color transparent divider_20">
										<!-- .entry-meta -->

									</header>
									<!-- .entry-header -->

									{{-- {!! $post->content !!} --}}
									{!! str_limit(strip_tags($post->content), $word = 400, $end = '...') !!}


								</div>
								<!-- .item-content.entry-content -->
							</article>

						@endforeach




							<div class="row topmargin_40">
								<div class="col-sm-12 text-center">
									<ul class="pagination">
										<li>
											<a href="#">
												<span class="sr-only">Prev</span>
												<i class="fa  fa-angle-left"></i>
											</a>
										</li>
										<li class="active">
											<a href="#">1</a>
										</li>
										<li>
											<a href="#">2</a>
										</li>
										<li>
											<a href="#">3</a>
										</li>
										<li>
											<a href="#">4</a>
										</li>
										<li>
											<a href="#">5</a>
										</li>
										<li>
											<a href="#">
												<span class="sr-only">Next</span>
												<i class="fa fa-angle-right"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
						<!--eof .col-sm-8 (main content)-->

						<!-- sidebar -->
						@include('blog.sidebar')

						<!-- eof aside sidebar -->

					</div>
				</div>
			</section>
@endsection


@section('seo')
    <meta name="title" content="Adams Davis Blog Updates and News | Adams Davis P.C.">
    <meta name="description" content="Find details about different cases and types of lawsuits in the personal injury practice area at Adams Davis.">
    <meta name="keywords" content="">
    <meta name="author"content="Adams Davis P.C."/>
    <meta property='og:site_name' value='Adams Davis P.C.'/>
    <meta property='og:title' content='Adams Davis Blog Articles Updates and News on FaceBook' />
    <meta property='og:url' content='{!! Request::url() !!}' />
    <meta property="og:description" content="Find details about different cases and types of lawsuits in the personal injury practice area at Adams Davis." />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Adams Davis Blog Articles Updates and News on Twitter" />
    <meta name="twitter:description" content="Find details about different cases and types of lawsuits in the personal injury practice area at Adams Davis." />
    <meta name="twitter:site" content="@adamsdavis" />
@endsection

@section('json-ld')

    <script type="application/ld+json">
    {
       "@context":"http:\/\/schema.org\/",
       "name":"Adams Davis Blog Articles Updates and News",
       "@type":"Article",
       "author":"Adams Davis P.C.",
       "ArticleSection":"Blog Section",
       "datePublished":"2017-01-01 12:00:00",
       "Publisher":"Adams Davis P.C.",
       "url":"{!! Request::url() !!}"
    }
    </script>

@endsection
