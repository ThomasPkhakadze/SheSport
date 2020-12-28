@extends('layouts.front')

@section('content')

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<div class="row clearfix">

						<div class="col-xl-5">
							<div class="heading-block topmargin">
								<h1>Welcome to Canvas.<br>MultiPurpose Template.</h1>
							</div>
							<p class="lead">Create a website that you are gonna be proud of. Be it Business, Portfolio, Agency, Photography, eCommerce &amp; much more.</p>
						</div>

						<div class="col-xl-7">

							<div style="position: relative; margin-bottom: 60px;" class="ohidden" data-height-xl="426" data-height-lg="567" data-height-md="470" data-height-md="287" data-height-xs="183">
								<img src="{{ asset('images/test.jpg') }}" style="position: absolute; top: 0; left: 0; " data-animate="fadeInUp" data-delay="400" alt="iPad">
							</div>

						</div>
																						
					</div>
					<div class="row ">
						<div class="col-sm-12">

							<!-- SportType Filter
							============================================= -->
							<div id="portfolio-ajax-wrap">
								<div id="portfolio-ajax-container"></div>
							</div>
		
							<div id="portfolio-ajax-loader"><img src="images/preloader-dark.gif" alt="Preloader"></div>
							<div  id="sport-type-container">
							
								<div class="sport-types" >
									<ul id="portfolio-filter" class="portfolio-filter " data-container="#portfolio">
										<li><a href="#" data-filter=".pf-icons">Football</a></li>
										<li><a href="#" data-filter=".pf-illustrations">Basketball</a></li>
										<li><a href="#" data-filter=".pf-uielements">Volleyball</a></li>
										<li><a href="#" data-filter=".pf-graphics">Tennis</a></li>
									</ul>
								</div>
								<div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
									<i class="icon-random"></i>
								</div>
			
								<div class="clear"></div>
							</div>		
						</div>
						<!-- #portfolio end -->

						<div class="col-sm-8">
							<!-- Portfolio Items
							============================================= -->
							<div id="portfolio" class="portfolio grid-container portfolio-nomargin portfolio-ajax clearfix">
		
								<article id="portfolio-item-1" data-loader="include/ajax/portfolio-ajax-image.php" class="portfolio-item pf-media pf-icons">
									<div class="portfolio-image">
										<a href="portfolio-single.html">
											<img src="images/portfolio/4/1.jpg" alt="Open Imagination">
										</a>
										<div class="portfolio-overlay">
											<a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="portfolio-single.html">Open Imagination</a></h3>
										<span><a href="#">Media</a>, <a href="#">Icons</a></span>
									</div>
								</article>
		
								<article id="portfolio-item-2" data-loader="include/ajax/portfolio-ajax-image.php" class="portfolio-item pf-illustrations">
									<div class="portfolio-image">
										<a href="portfolio-single.html">
											<img src="images/portfolio/4/2.jpg" alt="Locked Steel Gate">
										</a>
										<div class="portfolio-overlay">
											<a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
										<span><a href="#">Illustrations</a></span>
									</div>
								</article>
		
								<article id="portfolio-item-3" data-loader="include/ajax/portfolio-ajax-video.php" class="portfolio-item pf-graphics pf-uielements">
									<div class="portfolio-image">
										<a href="#">
											<img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
										</a>
										<div class="portfolio-overlay">
											<a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
										<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
									</div>
								</article>
		
								<article id="portfolio-item-4" data-loader="include/ajax/portfolio-ajax-slider.php" class="portfolio-item pf-icons pf-illustrations">
									<div class="portfolio-image">
										<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
											<div class="flexslider">
												<div class="slider-wrap">
													<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/4.jpg" alt="Morning Dew"></a></div>
													<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/4-1.jpg" alt="Morning Dew"></a></div>
												</div>
											</div>
										</div>
										<div class="portfolio-overlay" data-lightbox="gallery">
											<a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
										<span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
									</div>
								</article>
		
								<article id="portfolio-item-5" data-loader="include/ajax/portfolio-ajax-image.php" class="portfolio-item pf-uielements pf-media">
									<div class="portfolio-image">
										<a href="portfolio-single.html">
											<img src="images/portfolio/4/5.jpg" alt="Console Activity">
										</a>
										<div class="portfolio-overlay">
											<a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="portfolio-single.html">Console Activity</a></h3>
										<span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
									</div>
								</article>
		
								<article id="portfolio-item-6" data-loader="include/ajax/portfolio-ajax-gallery.php" class="portfolio-item pf-graphics pf-illustrations">
									<div class="portfolio-image">
										<div class="fslider" data-arrows="false">
											<div class="flexslider">
												<div class="slider-wrap">
													<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/6.jpg" alt="Shake It"></a></div>
													<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/6-1.jpg" alt="Shake It"></a></div>
													<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/6-2.jpg" alt="Shake It"></a></div>
													<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/6-3.jpg" alt="Shake It"></a></div>
												</div>
											</div>
										</div>
										<div class="portfolio-overlay" data-lightbox="gallery">
											<a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
										<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
									</div>
								</article>
		
								<article id="portfolio-item-7" data-loader="include/ajax/portfolio-ajax-video.php" class="portfolio-item pf-uielements pf-icons">
									<div class="portfolio-image">
										<a href="portfolio-single-video.html">
											<img src="images/portfolio/4/7.jpg" alt="Backpack Contents">
										</a>
										<div class="portfolio-overlay">
											<a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
										<span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
									</div>
								</article>
		
								<article id="portfolio-item-8" data-loader="include/ajax/portfolio-ajax-image.php" class="portfolio-item pf-graphics">
									<div class="portfolio-image">
										<a href="portfolio-single.html">
											<img src="images/portfolio/4/8.jpg" alt="Sunset Bulb Glow">
										</a>
										<div class="portfolio-overlay">
											<a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
										<span><a href="#">Graphics</a></span>
									</div>
								</article>
		
								<article id="portfolio-item-9" data-loader="include/ajax/portfolio-ajax-slider.php" class="portfolio-item pf-illustrations pf-icons">
									<div class="portfolio-image">
										<div class="fslider" data-arrows="false" data-speed="650" data-pause="3500" data-animation="fade">
											<div class="flexslider">
												<div class="slider-wrap">
													<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/9.jpg" alt="Bridge Side"></a></div>
													<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/9-1.jpg" alt="Bridge Side"></a></div>
													<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/9-2.jpg" alt="Bridge Side"></a></div>
												</div>
											</div>
										</div>
										<div class="portfolio-overlay" data-lightbox="gallery">
											<a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="portfolio-single.html">Bridge Side</a></h3>
										<span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
									</div>
								</article>
		
								<article id="portfolio-item-10" data-loader="include/ajax/portfolio-ajax-video.php" class="portfolio-item pf-graphics pf-media pf-uielements">
									<div class="portfolio-image">
										<a href="portfolio-single-video.html">
											<img src="images/portfolio/4/10.jpg" alt="Study Table">
										</a>
										<div class="portfolio-overlay">
											<a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="portfolio-single-video.html">Study Table</a></h3>
										<span><a href="#">Graphics</a>, <a href="#">Media</a></span>
									</div>
								</article>
		
								<article id="portfolio-item-11" data-loader="include/ajax/portfolio-ajax-image.php" class="portfolio-item pf-media pf-icons">
									<div class="portfolio-image">
										<a href="portfolio-single.html">
											<img src="images/portfolio/4/11.jpg" alt="Workspace Stuff">
										</a>
										<div class="portfolio-overlay">
											<a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="portfolio-single.html">Workspace Stuff</a></h3>
										<span><a href="#">Media</a>, <a href="#">Icons</a></span>
									</div>
								</article>
		
								<article id="portfolio-item-12" data-loader="include/ajax/portfolio-ajax-gallery.php" class="portfolio-item pf-illustrations pf-graphics">
									<div class="portfolio-image">
										<div class="fslider" data-arrows="false" data-speed="700" data-pause="7000">
											<div class="flexslider">
												<div class="slider-wrap">
													<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/12.jpg" alt="Fixed Aperture"></a></div>
													<div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/4/12-1.jpg" alt="Fixed Aperture"></a></div>
												</div>
											</div>
										</div>
										<div class="portfolio-overlay" data-lightbox="gallery">
											<a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
										</div>
									</div>
									<div class="portfolio-desc">
										<h3><a href="portfolio-single-gallery.html">Fixed Aperture</a></h3>
										<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
									</div>
								</article>
		
							</div>
						</div>
						<div class="col-sm-4">
							<!-- Sidebar
							============================================= -->
							<div class="sidebar nobottommargin ">
								<div class="sidebar-widgets-wrap">
									<div class="widget ">

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

							</div>
							<!-- .sidebar end -->
						</div>
					</div>
				</div>

	

			</div>

		</section>
		<!-- #content end -->

@endsection