@extends('layouts.front')

@section('content')


	
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Blog</h1>
				<span>Our Latest News</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Blog</li>
				</ol>
			</div>

		</section><!-- #page-title end -->



		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					
				</div>

			</div>

		</section><!-- #content end -->


		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">


	{{-- ajax shuffle 
		============================================= --}}
		
		<div class="container">
			<div class="row">
				<div class="col-12" style="width:100%">
					<div id="portfolio-ajax-wrap">
						<div id="portfolio-ajax-container"></div>
					</div>
			
					<div id="portfolio-ajax-loader"><img src="'-dark.gif" alt="Preloader"></div>
			
					<!-- Portfolio Filter
					============================================= -->
					<ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio" style="width:100%;">
			
						<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
						<li><a href="#" data-filter=".tennis">Penis</a></li>
						<li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
						<li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
						<li><a href="#" data-filter=".pf-media">Media</a></li>
						<li><a href="#" data-filter=".pf-graphics">Graphics</a></li>
			
					</ul><!-- #portfolio-filter end -->
			
					<div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
						<i class="icon-random"></i>
					</div>
			
					<div class="clear"></div>
				</div>
			</div>
		</div>

		






					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin col_last clearfix">

						<!-- Posts
						============================================= -->
						<div id="posts" class="small-thumbs">

							<!-- Portfolio Items
							============================================= -->
							<div id="portfolio" class="portfolio grid-container portfolio-nomargin portfolio-ajax clearfix">						
								<article id="portfolio-item-1" data-loader="include/ajax/portfolio-ajax-image.php" class="portfolio-item tennis pf-icons" style="width: 100%;">
									<div class="container">
										<div class="row m-5">
											@foreach ($posts as $post)
												<div class="col-4">
													<div class="portfolio-image" >
														<a href="#">
															<img src="{{ asset($post->image) }}" alt="Open Imagination" >
														</a>
														<div class="portfolio-overlay">
															<a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
														</div>
													</div>
												</div>
												<div class="col-8">
													<div class="entry clearfix ">
														{{-- <div class="entry-image">
															<a href="{{ asset($post->image) }}" data-lightbox="image"><img class="image_fade" src="{{ asset($post->image) }}" alt="Standard Post with Image" height="130px;"></a>
														</div> --}}
														<div class="entry-c">
															<div class="entry-title">
																<h2><a href="#">{{ $post->title }}</a></h2>
															</div>
															<ul class="entry-meta clearfix">
																<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
																<li><a href="#"><i class="icon-user"></i> {{ $post->author->name }}</a></li>
																<li><i class="icon-folder-open"></i> <a href="#">{{ $post->sport_type }}</a>, <a href="#">{{ $post->tag }}</a></li>
																<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
																<li><a href="#"><i class="icon-camera-retro"></i></a></li>
															</ul>
															<div class="entry-content">
																<p>{{ $post->body }}</p>
																<a href="#"class="more-link">Read More</a>
															</div>
														</div>
													</div>
												</div>
											@endforeach
										</div>
									</div>
								</article>
							</div><!-- #portfolio end -->
							

						    {{-- <div class="entry clearfix">
								<div class="entry-image">
									<iframe src="http://player.vimeo.com/video/87701971" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="blog-single-full.html">This is a Standard post with an Embedded Video</a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> 16th Feb 2014</li>
										<li><a href="#"><i class="icon-user"></i> admin</a></li>
										<li><i class="icon-folder-open"></i> <a href="#">Videos</a>, <a href="#">News</a></li>
										<li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 19</a></li>
										<li><a href="#"><i class="icon-film"></i></a></li>
									</ul>
									<div class="entry-content">
										<p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt soluta iste repellendus officia in neque veniam debitis placeat quo unde reprehenderit eum facilis vitae.</p>
										<a href="blog-single-full.html"class="more-link">Read More</a>
									</div>
								</div>
							</div>

							<div class="entry clearfix">
								<div class="entry-image">
									<div class="fslider" data-arrows="false" data-lightbox="gallery">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="'/10.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'l/10.jpg" alt="Standard Post with Gallery"></a></div>
												<div class="slide"><a href="'/20.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'l/20.jpg" alt="Standard Post with Gallery"></a></div>
												<div class="slide"><a href="'/21.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'l/21.jpg" alt="Standard Post with Gallery"></a></div>
											</div>
										</div>
									</div>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="blog-single-small.html">This is a Standard post with a Slider Gallery</a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> 24th Feb 2014</li>
										<li><a href="#"><i class="icon-user"></i> admin</a></li>
										<li><i class="icon-folder-open"></i> <a href="#">Gallery</a>, <a href="#">Media</a></li>
										<li><a href="blog-single-small.html#comments"><i class="icon-comments"></i> 21</a></li>
										<li><a href="#"><i class="icon-picture"></i></a></li>
									</ul>
									<div class="entry-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem eligendi fuga. Maiores, sunt eveniet doloremque porro hic exercitationem distinctio sequi adipisci.</p>
										<a href="blog-single-small.html"class="more-link">Read More</a>
									</div>
								</div>
							</div>

							<div class="entry clearfix">
								<div class="entry-c">
									<div class="entry-image">
										<blockquote>
											<p>"When you are courting a nice girl an hour seems like a second. When you sit on a red-hot cinder a second seems like an hour. That's relativity."</p>
											<footer>Albert Einstein</footer>
										</blockquote>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> 3rd Mar 2014</li>
										<li><a href="#"><i class="icon-user"></i> admin</a></li>
										<li><i class="icon-folder-open"></i> <a href="#">Quotes</a>, <a href="#">People</a></li>
										<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 23</a></li>
										<li><a href="#"><i class="icon-quote-left"></i></a></li>
									</ul>
								</div>
							</div>

							<div class="entry clearfix">
								<div class="entry-image clearfix">
									<div class="portfolio-single-image masonry-thumbs grid-4" data-big="3" data-lightbox="gallery">
										<a href="'/2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'l/2.jpg" alt=""></a>
										<a href="'/3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'l/3.jpg" alt=""></a>
										<a href="'/6-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'l/6-1.jpg" alt=""></a>
										<a href="'/6-2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'l/6-2.jpg" alt=""></a>
										<a href="'/12.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'l/12.jpg" alt=""></a>
										<a href="'/12-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'l/12-1.jpg" alt=""></a>
										<a href="'/13.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'l/13.jpg" alt=""></a>
										<a href="'/18.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'l/18.jpg" alt=""></a>
										<a href="'/19.jpg" data-lightbox="gallery-item"><img class="image_fade" src="'l/19.jpg" alt=""></a>
									</div>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="blog-single-thumbs.html">This is a Standard post with Masonry Thumbs Gallery</a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> 3rd Mar 2014</li>
										<li><a href="#"><i class="icon-user"></i> admin</a></li>
										<li><i class="icon-folder-open"></i> <a href="#">Gallery</a>, <a href="#">Media</a></li>
										<li><a href="blog-single-thumbs.html#comments"><i class="icon-comments"></i> 21</a></li>
										<li><a href="#"><i class="icon-picture"></i></a></li>
									</ul>
									<div class="entry-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem eligendi fuga.</p>
										<a href="blog-single-thumbs.html"class="more-link">Read More</a>
									</div>
								</div>
							</div>

							<div class="entry clearfix">
								<div class="entry-c">
									<div class="entry-image">
										<a href="http://themeforest.net" class="entry-link" target="_blank">
											Themeforest.net
											<span>- http://themeforest.net</span>
										</a>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> 17th Mar 2014</li>
										<li><a href="#"><i class="icon-user"></i> admin</a></li>
										<li><i class="icon-folder-open"></i> <a href="#">Links</a>, <a href="#">Suggestions</a></li>
										<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 26</a></li>
										<li><a href="#"><i class="icon-link"></i></a></li>
									</ul>
								</div>
							</div>

							<div class="entry clearfix">
								<div class="entry-c">
									<div class="entry-image">
										<div class="card">
											<div class="card-body">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, fuga optio voluptatibus saepe tenetur aliquam debitis eos accusantium! Vitae, hic, atque aliquid repellendus accusantium laudantium minus eaque quibusdam ratione sapiente.
											</div>
										</div>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> 21st Mar 2014</li>
										<li><a href="#"><i class="icon-user"></i> admin</a></li>
										<li><i class="icon-folder-open"></i> <a href="#">Status</a>, <a href="#">News</a></li>
										<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 11</a></li>
										<li><a href="#"><i class="icon-align-justify2"></i></a></li>
									</ul>
								</div>
							</div>

							<div class="entry clearfix">
								<div class="entry-image clearfix">
									<iframe width="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115823769&amp;auto_play=false&amp;hide_related=true&amp;visual=true"></iframe>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="blog-single.html">This is an Embedded Audio Post</a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> 28th Apr 2014</li>
										<li><a href="#"><i class="icon-user"></i> admin</a></li>
										<li><i class="icon-folder-open"></i> <a href="#">Audio</a>, <a href="#">General</a></li>
										<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 16</a></li>
										<li><a href="#"><i class="icon-music2"></i></a></li>
									</ul>
									<div class="entry-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem eligendi fuga.</p>
										<a href="blog-single.html"class="more-link">Read More</a>
									</div>
								</div>
							</div> --}}

						</div><!-- #posts end -->

						<!-- Pagination
						============================================= -->
						<div class="row mb-3">
							<div class="col-12">
								<a href="#" class="btn btn-outline-secondary float-left">&larr; Older</a>
								<a href="#" class="btn btn-outline-dark float-right">Newer &rarr;</a>
							</div>
						</div>
						<!-- .pager end -->

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin clearfix">
						<div class="sidebar-widgets-wrap">

							{{-- <div class="widget widget-twitter-feed clearfix">

								<h4>Twitter Feed</h4>
								<ul class="iconlist twitter-feed" data-username="envato" data-count="2">
									<li></li>
								</ul>

								<a href="#" class="btn btn-secondary btn-sm fright">Follow Us on Twitter</a>

							</div> --}}

							<div class="widget clearfix">

								<h4>Flickr Photostream</h4>
								<div id="flickr-widget" class="flickr-feed masonry-thumbs" data-id="613394@N22" data-count="16" data-type="group" data-lightbox="gallery"></div>

							</div>

							<div class="widget clearfix">

								<div class="tabs nobottommargin clearfix" id="sidebar-tabs">

									<ul class="tab-nav clearfix">
										<li><a href="#tabs-1">Popular</a></li>
										<li><a href="#tabs-2">Recent</a></li>
										<li><a href="#tabs-3"><i class="icon-comments-alt norightmargin"></i></a></li>
									</ul>

									<div class="tab-container">

										<div class="tab-content clearfix" id="tabs-1">
											<div id="popular-post-list-sidebar">

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="'small/3.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
														</div>
														<ul class="entry-meta">
															<li><i class="icon-comments-alt"></i> 35 Comments</li>
														</ul>
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="'small/2.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
														</div>
														<ul class="entry-meta">
															<li><i class="icon-comments-alt"></i> 24 Comments</li>
														</ul>
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="'small/1.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
														</div>
														<ul class="entry-meta">
															<li><i class="icon-comments-alt"></i> 19 Comments</li>
														</ul>
													</div>
												</div>

											</div>
										</div>
										<div class="tab-content clearfix" id="tabs-2">
											<div id="recent-post-list-sidebar">

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="'small/1.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
														</div>
														<ul class="entry-meta">
															<li>10th July 2014</li>
														</ul>
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="'small/2.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
														</div>
														<ul class="entry-meta">
															<li>10th July 2014</li>
														</ul>
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="'small/3.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
														</div>
														<ul class="entry-meta">
															<li>10th July 2014</li>
														</ul>
													</div>
												</div>

											</div>
										</div>
										<div class="tab-content clearfix" id="tabs-3">
											<div id="recent-post-list-sidebar">

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="'tar.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="'tar.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="'tar.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...
													</div>
												</div>

											</div>
										</div>

									</div>

								</div>

							</div>

							<div class="widget clearfix">

								<h4>Portfolio Carousel</h4>
								<div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												<a href="#">
													<img src="'/4/3.jpg" alt="Mac Sunglasses">
												</a>
												<div class="portfolio-overlay">
													<a href="http://vimeo.com/89396394" class="center-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
												</div>
											</div>
											<div class="portfolio-desc center nobottompadding">
												<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
												<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
											</div>
										</div>
									</div>

									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												<a href="portfolio-single.html">
													<img src="'/4/1.jpg" alt="Open Imagination">
												</a>
												<div class="portfolio-overlay">
													<a href="'/1.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
												</div>
											</div>
											<div class="portfolio-desc center nobottompadding">
												<h3><a href="portfolio-single.html">Open Imagination</a></h3>
												<span><a href="#">Media</a>, <a href="#">Icons</a></span>
											</div>
										</div>
									</div>

								</div>


							</div>

							<div class="widget clearfix">

								<h4>Tag Cloud</h4>
								<div class="tagcloud">
									<a href="#">general</a>
									<a href="#">videos</a>
									<a href="#">music</a>
									<a href="#">media</a>
									<a href="#">photography</a>
									<a href="#">parallax</a>
									<a href="#">ecommerce</a>
									<a href="#">terms</a>
									<a href="#">coupons</a>
									<a href="#">modern</a>
								</div>

							</div>

						</div>

					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->



@endsection