
<div class="banner-slider">
			<div class="flexslider">
				<div class="banner-info">
					<p>We always Pretty</p>
					<h3>Makeup Art be Gorgeous</h3>
				</div>
				<ul class="slides">
					<li data-thumb="<?php echo $this->base_url; ?>images/1.jpg">
						<img src="<?php echo $this->base_url; ?>images/1.jpg" alt="" />
					</li>
					<li data-thumb="<?php echo $this->base_url; ?>images/2.jpg">
						<img src="<?php echo $this->base_url; ?>images/2.jpg" alt="" />
					</li>
					<li data-thumb="<?php echo $this->base_url; ?>images/3.jpg">
						<img src="<?php echo $this->base_url; ?>images/3.jpg" alt="" />
					</li>
				</ul>
			</div>
			<!-- FlexSlider -->
			<script defer src="<?php echo $this->base_url; ?>js/jquery.flexslider.js"></script>

			<script>
				// Can also be used with $(document).ready()
				$(window).load(function () {
					$('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					});
				});
			</script>
		</div>

	</div>
	<!--about-->
	<div class="about" id="about">
		<div class="col-md-6 main-bnr-text">
			<h5>Hello, We are Day Spa!!</h5>
			<h3>Client Consultation</h3>
			<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare
				quam littera gothica, quam nunc putamus ui sequitur mutationem consuetudium lectorum. parum claram</p>
			<a href="#" class="btn btn-1">Make an appointment</a>
		</div>
		<div class="col-md-6  main-bnr-bg"> </div>
		<div class="clearfix"> </div>
	</div>
	<!--services-->
	<div class="welcome" id="service">
		<div class="container">
			<h2>Beauty Care and Health Information</h2>
			<div class="tip-main">
				<div class="col-md-4 top-grid">
					<i class="glyphicon glyphicon-user"></i>
					<h4 class="ser">Beauty Center</h4>
					<p class="ser">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac tempus eros, non
						tempus massa. Vivamus ut nisl mauris.</p>
				</div>
				<div class="col-md-4 top-grid">
					<i class="glyphicon glyphicon-eye-open"></i>
					<h4 class="ser">Spa Center</h4>
					<p class="ser">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac tempus eros, non
						tempus massa. Vivamus ut nisl mauris.</p>
				</div>
				<div class="col-md-4 top-grid">
					<i class="glyphicon glyphicon-tint"></i>
					<h4 class="ser">Hair Salon</h4>
					<p class="ser">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac tempus eros, non
						tempus massa. Vivamus ut nisl mauris. </p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--team-->
	<div class="staff" id="team">
		<div class="container">
			<h3 class="tittle">Our Experts</h3>
			<div class="team">
				<div class="col-md-3 staff2">
					<div class="view view-fifth">
						<div class="mask1"><img src="<?php echo $this->base_url; ?>images//t3.jpg" alt="image" class="img-responsive zoom-img" /></div>
						<div class="mask">
							<a class="popup-with-zoom-anim" href="#small-dialog2">
								<div class="info"><i class="glyphicon glyphicon-zoom-in"></i></div>
							</a>
							<div id="small-dialog2" class="mfp-hide">
								<div class="pop_up2">
									<img src="<?php echo $this->base_url; ?>images//t3.jpg" class="img-responsive" alt="" />
									<h3>About</h3>
									<p class="popup_desc">Mirum est notare quam littera gothica, quam nunc putamus parum
										claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et
										quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant
										sollemnes </p>
								</div>
							</div>
						</div>
						<h3><a href="#">Jessi</a></h3>
						<p>Lorem ipsum dolor sit amet. Integer gravida velit quis dolor tristiqumsan.</p>
						<ul class="s_social">
							<li><a href=""> <i class="fb1"> </i> </a></li>
							<li><a href=""><i class="tw1"> </i> </a></li>
							<li><a href=""><i class="linked1"> </i> </a></li>
							<li><a href=""><i class="google1"> </i> </a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 staff2">
					<div class="view view-fifth">
						<div class="mask1"><img src="<?php echo $this->base_url; ?>images//t1.jpg" alt="image" class="img-responsive zoom-img" /></div>
						<div class="mask">
							<a class="popup-with-zoom-anim" href="#small-dialog1">
								<div class="info"><i class="glyphicon glyphicon-zoom-in"></i></div>
							</a>
							<div id="small-dialog1" class="mfp-hide">
								<div class="pop_up2">
									<img src="<?php echo $this->base_url; ?>images//t1.jpg" class="img-responsive" alt="" />
									<h3>About</h3>
									<p class="popup_desc">Mirum est notare quam littera gothica, quam nunc putamus parum
										claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et
										quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant
										sollemnes </p>
								</div>
							</div>
						</div>
						<h3><a href="#">Amanda Doe</a></h3>
						<p>Lorem ipsum dolor sit amet Integer gravida velit quis dolor tristiqumsan.</p>
						<ul class="s_social">
							<li><a href=""> <i class="fb1"> </i> </a></li>
							<li><a href=""><i class="tw1"> </i> </a></li>
							<li><a href=""><i class="linked1"> </i> </a></li>
							<li><a href=""><i class="google1"> </i> </a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 staff2">
					<div class="view view-fifth">
						<div class="mask1"><img src="<?php echo $this->base_url; ?>images//t2.jpg" alt="image" class="img-responsive zoom-img" /></div>
						<div class="mask">
							<a class="popup-with-zoom-anim" href="#small-dialog2">
								<div class="info"><i class="glyphicon glyphicon-zoom-in"></i></div>
							</a>
							<div id="small-dialog2" class="mfp-hide">
								<div class="pop_up2">
									<img src="<?php echo $this->base_url; ?>images//t2.jpg" class="img-responsive" alt="" />
									<h3>About</h3>
									<p class="popup_desc">Mirum est notare quam littera gothica, quam nunc putamus parum
										claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et
										quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant
										sollemnes </p>
								</div>
							</div>
						</div>
						<h3><a href="#">Jenny</a></h3>
						<p>Lorem ipsum dolor sit amet Integer gravida velit quis dolor tristiqumsan.</p>
						<ul class="s_social">
							<li><a href=""> <i class="fb1"> </i> </a></li>
							<li><a href=""><i class="tw1"> </i> </a></li>
							<li><a href=""><i class="linked1"> </i> </a></li>
							<li><a href=""><i class="google1"> </i> </a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 staff2">
					<div class="view view-fifth">
						<div class="mask1"><img src="<?php echo $this->base_url; ?>images//t4.jpg" alt="image" class="img-responsive zoom-img" /></div>
						<div class="mask">
							<a class="popup-with-zoom-anim" href="#small-dialog3">
								<div class="info"><i class="glyphicon glyphicon-zoom-in"></i></div>
							</a>
							<div id="small-dialog3" class="mfp-hide">
								<div class="pop_up2">
									<img src="<?php echo $this->base_url; ?>images//t4.jpg" class="img-responsive" alt="" />
									<h3>About</h3>
									<p class="popup_desc">Mirum est notare quam littera gothica, quam nunc putamus parum
										claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et
										quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant
										sollemnes </p>
								</div>
							</div>
						</div>
						<h3><a href="#">Lilly</a></h3>
						<p>Lorem ipsum dolor sit amet Integer gravida velit quis dolor tristiqumsan.</p>
						<ul class="s_social">
							<li><a href=""> <i class="fb1"> </i> </a></li>
							<li><a href=""><i class="tw1"> </i> </a></li>
							<li><a href=""><i class="linked1"> </i> </a></li>
							<li><a href=""><i class="google1"> </i> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//team-->
	<div class="packages">
		<div class="container">
			<h3 class="tittle pack">Other Packages</h3>
			<div class="package-top">
				<div class="col-md-6 p-left">

					<div class="package1">
						<h5>Fairness treatment</h5>
						<ul class="list-default">
							<li>Lorem ipsum dolor sit amet, consectetur</li>
							<li>adipiscing eliteger gravida velit quis dolo</li>
							<li>Pellentesque elit tortor</li>
						</ul>
						<strong class="price"><small>$</small>75</strong>
						<div class="clearfix"> </div>
					</div><!-- end package -->

					<div class="package">
						<h5>Steam Bath</h5>
						<ul class="list-default">
							<li>Lorem ipsum dolor sit amet, consectetur</li>
							<li>adipiscing eliteger gravida velit quis dolo</li>
							<li>Pellentesque elit tortor</li>
						</ul>
						<strong class="price"><small>$</small>50</strong>
						<div class="clearfix"> </div>
					</div><!-- end package -->

					<div class="package2">
						<h5>Lorem Ipsum treatment</h5>
						<ul class="list-default">
							<li>Lorem ipsum dolor sit amet, consectetur</li>
							<li>adipiscing eliteger gravida velit quis dolo</li>
							<li>Pellentesque elit tortor</li>
						</ul>
						<strong class="price"><small>$</small>99</strong>
						<div class="clearfix"> </div>
					</div><!-- end package -->

				</div>
				<div class="col-md-6 p-right">

					<div class="package1">
						<h5>Oil Massage</h5>
						<ul class="list-default">
							<li>Lorem ipsum dolor sit amet, consectetur</li>
							<li>adipiscing eliteger gravida velit quis dolo</li>
							<li>Pellentesque elit tortor</li>
						</ul>
						<strong class="price"><small>$</small>75</strong>
						<div class="clearfix"> </div>
					</div><!-- end package -->

					<div class="package">
						<h5>Beauty Treatment</h5>
						<ul class="list-default">
							<li>Lorem ipsum dolor sit amet, consectetur</li>
							<li>adipiscing eliteger gravida velit quis dolo</li>
							<li>Pellentesque elit tortor</li>
						</ul>
						<strong class="price"><small>$</small>50</strong>
						<div class="clearfix"> </div>
					</div><!-- end package -->

					<div class="package2 wow fadeInLeft animated" data-wow-offset="150" data-wow-delay="400m"
						style="visibility: visible;-webkit-animation-delay: 400m; -moz-animation-delay: 400m; animation-delay: 400m;">
						<h5>Fairness Treatment</h5>
						<ul class="list-default">
							<li>Lorem ipsum dolor sit amet, consectetur</li>
							<li>adipiscing eliteger gravida velit quis dolo</li>
							<li>Pellentesque elit tortor</li>
						</ul>
						<strong class="price"><small>$</small>99</strong>
						<div class="clearfix"> </div>
					</div><!-- end package -->

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--start-news-->
	<div class="news" id="news">
		<div class="container">
			<h3 class="tittle">News</h3>
			<div class="news-top">
				<div class="col-md-4 news-grid">
					<a href="#"><img src="<?php echo $this->base_url; ?>images//n2.jpg" class="img-responsive" alt="/"> </a>
					<a class="news" href="#"> New Post With Image</a>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
						totam rem aperiam, eaque ipsa quae ab illo inventore...</p>
					<div class="bog_post_info infoPost">
						<span class="datePost"><a href="#" class="post_date">Aug 30, 2015</a></span>
						<span class="commentPost"><a class="icon-comment-1" title="Comments - 2" href="#"><i
									class="glyphicon glyphicon-comment"></i>2</a></span>
						<span class="likePost"><i class="glyphicon glyphicon-heart"></i><a class="icon-heart"
								title="Likes - 4" href="#">4</a></span>
					</div>
				</div>
				<div class="col-md-4 news-grid">
					<a href="#"><img src="<?php echo $this->base_url; ?>images//n1.jpg" class="img-responsive" alt="/"> </a>
					<a class="news" href="#">Skin Care for Teen Skin</a>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
						totam rem aperiam, eaque ipsa quae ab illo inventore...</p>
					<div class="bog_post_info infoPost">
						<span class="datePost"><a href="#" class="post_date">Aug 30, 2015</a></span>
						<span class="commentPost"><a class="icon-comment-1" title="Comments - 2" href="#"><i
									class="glyphicon glyphicon-comment"></i>2</a></span>
						<span class="likePost"><i class="glyphicon glyphicon-heart"></i><a class="icon-heart"
								title="Likes - 4" href="#">4</a></span>
					</div>
				</div>
				<div class="col-md-4 news-grid">
					<a href="#"><img src="<?php echo $this->base_url; ?>images//n3.jpg" class="img-responsive" alt="/"> </a>
					<a class="news" href="#"> New Post With Image</a>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
						totam rem aperiam, eaque ipsa quae ab illo inventore...</p>
					<div class="bog_post_info infoPost">
						<span class="datePost"><a href="#" class="post_date">Aug 30, 2015</a></span>
						<span class="commentPost"><a class="icon-comment-1" title="Comments - 2" href="#"><i
									class="glyphicon glyphicon-comment"></i>2</a></span>
						<span class="likePost"><i class="glyphicon glyphicon-heart"></i><a class="icon-heart"
								title="Likes - 4" href="#">4</a></span>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--start-products-->
	<div class="products">
		<div class="container">
			<h3 class="tittle pro">We are Use only Herbal Products</h3>
			<p>From Standard Brands only</p>

		</div>
	</div>
	<!--start-gallery-->
	<div class="gallery" id="gallery">
		<div class="container">
			<h3 class="tittle">Gallery</h3>
			<div class="top-gallery">
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/g1.jpg" class="swipebox"><img src="<?php echo $this->base_url; ?>images//g1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>Day Spa</h4>
							<p>Welcome</p>

						</div>
					</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/g2.jpg" class="swipebox"><img src="<?php echo $this->base_url; ?>images//g2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>Day Spa</h4>
							<p>Welcome</p>

						</div>
					</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/g3.jpg" class="swipebox"><img src="<?php echo $this->base_url; ?>images//g3.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>Day Spa</h4>
							<p>Welcome</p>

						</div>
					</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/g4.jpg" class="swipebox"><img src="<?php echo $this->base_url; ?>images//g4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>Day Spa</h4>
							<p>Welcome</p>

						</div>
					</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/g5.jpg" class="swipebox"><img src="<?php echo $this->base_url; ?>images//g5.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>Day Spa</h4>
							<p>Welcome</p>

						</div>
					</a>
				</div>
				<div class="col-md-4 gallery-grid gallery1">
					<a href="images/g6.jpg" class="swipebox"><img src="<?php echo $this->base_url; ?>images//g6.jpg" class="img-responsive" alt="/">
						<div class="textbox">
							<h4>Day Spa</h4>
							<p>Welcome</p>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//gallery-->
	<div class="testimonials" id="test">
		<div class="container">
			<h3 class="tittle what">What Our Clients Say</h3>
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="testi-text">
							<div class="testi-img">
								<img src="<?php echo $this->base_url; ?>images//client2.jpg" alt="" />
							</div>
							<h4>- John, Model</h4>
							<p>Duis vitae feugiat lorem. Mauris eget ipsum sapien. Praesent euismod nec risus id tempor
								In sit amet sapien eros. Integer in tincidunt velit. Ut in tincidunt</p>
						</div>
					</li>
					<li>
						<div class="testi-text">
							<div class="testi-img">
								<img src="<?php echo $this->base_url; ?>images//client.jpg" alt="" />
							</div>
							<h4>- Jenny, Model</h4>
							<p>Vitae duis feugiat lorem. Mauris eget ipsum sapien. Praesent euismod nec risus id tempor
								In sit amet sapien eros. Integer in tincidunt velit. Ut in tincidunt</p>
						</div>
					</li>
					<li>
						<div class="testi-text">
							<div class="testi-img">
								<img src="<?php echo $this->base_url; ?>images//client2.jpg" alt="" />
							</div>
							<h4>- John, Model</h4>
							<p>Praesent vitae feugiat lorem. Mauris eget ipsum sapien.Duis euismod nec risus id tempor
								In sit amet sapien eros. Integer in tincidunt velit. Ut in tincidunt</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--banner-text Slider starts Here-->
	<script src="<?php echo $this->base_url; ?>js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 3
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>

	<!--contact -->
	<div id="contact" class="contact">
		<div class="container">
			<h3 class="tittle">Contact Us</h3>
			<div class="col-md-6 box">
				<!--contact-form-->
				<form>
					<p class="your-para">Your Name :</p>
					<input type="text" value="" onfocus="this.value='';"
						onblur="if (this.value == '') {this.value ='';}">
					<p class="your-para">Your Mail :</p>
					<input type="text" value="" onfocus="this.value='';"
						onblur="if (this.value == '') {this.value ='';}">
					<p class="your-para">Your Message :</p>
					<textarea cols="77" rows="6" onfocus="this.value='';"
						onblur="if (this.value == '') {this.value = '';}"></textarea>

					<ul class="actions">
						<li><input type="submit" class="style1" value="Send" /></li>
						<li><input type="reset" class="style2" value="Reset" /></li>
					</ul>
				</form>
			</div>
			<div class="col-md-6 contact-info">
				<h6>Lorem ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor.</h6>
				<p>Lorem ipsum dolor sit amet. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
					ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, iece of
					classical Latin literature from 45 BC, making it over 2000 years old.</p>
				<div class="con-text">
					<h3><i class="icon glyphicon glyphicon-home"></i>Mailing Address</h3>
					<address>
						<strong>Twitter, Inc.</strong><br>
						795 Folsom Ave, Suite 600<br>
						San Francisco, CA 94107<br>
						<abbr title="Phone">P :</abbr> (123) 456-7890
					</address>
				</div>
				<div class="con-text">
					<h3><i class="icon glyphicon glyphicon-envelope"></i>Email</h3>
					<p class="mail">
						<a href="mailto:info@example.com">mail@example.com</a>
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//contact-->
