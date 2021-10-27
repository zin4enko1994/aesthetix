<?php get_header(); ?>
<?php $home_field = get_fields(); ?>
	<section class="main-slider">
		<div class="left"></div>
		<div class="sliders stick-dots">
			<div class="slide ">
				<div class="slide__img">
					<img src="" alt=""
						 data-lazy="http://dev-aesthetix.webcap.com/wp-content/uploads/2020/02/home-slide1.png"
						 class="full-image animated" data-animation-in="zoomInImage"/>
				</div>
				<div class="slide__content one">
					<div class="slide__content--headings first">
						<h2 class="animated" data-animation-in="fadeInUp"> We make the ordinary in you extra ordinary</h2>
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="slide__img">
					<img src="" alt=""
						 data-lazy="http://dev-aesthetix.webcap.com/wp-content/uploads/2020/02/home-slide2.png"
						 class="full-image animated" data-animation-in="zoomInImage"/>
				</div>
				<div class="slide__content two">
					<div class="slide__content--headings second">
						<h2 class="animated" data-animation-in="fadeInUp">Amazing body and facial <a href="#">aesthetics</a>
						</h2>
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="slide__img">
					<img src="" alt=""
						 data-lazy="http://dev-aesthetix.webcap.com/wp-content/uploads/2020/02/home-slide3.png"
						 class="full-image animated" data-animation-in="zoomInImage"/>
				</div>
				<div class="slide__content three">
					<div class="slide__content--headings third">
						<h2 class="animated" data-animation-in="fadeInUp">Welcome</h2>
						<p class="animated" data-animation-in="fadeInUp" data-delay-in="0.3">At Antwerp Aesthetics we
							provide a comprehensive range of high-quality laser treatments, radiofrequency and non-surgical
							treatments that can be tailored specifically to your individual needs. All treatments are
							performed by our nurses who are fully trained and committed to providing outstanding care and
							treatment.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="right"></div>
	</section>
	<section class="services">
		<div class="container">
			<div class="title-wrapper wow fadeInUpBig">
				<h2>
					<span><?php echo $home_field['services_subtitle'] ?></span><?php echo $home_field['services_title'] ?>
				</h2>
				<p><?php echo $home_field['services_description'] ?></p>
			</div>
			<div class="services-tabs">
				<ul class="tabs clearfix" data-tabgroup="first-tab-group">
					<li><a href="#tab1" class="active"><?php echo $home_field['tab_name_one'] ?></a></li>
					<li><a href="#tab2"><?php echo $home_field['tab_name_two'] ?></a></li>
					<li><a href="#tab3"><?php echo $home_field['tab_name_three'] ?></a></li>
					<li><a href="#tab4"><?php echo $home_field['tab_name_four'] ?></a></li>
					<li><a href="#tab5"><?php echo $home_field['tab_name_five'] ?></a></li>
					<li><a href="#tab6"><?php echo $home_field['tab_name_six'] ?></a></li>
				</ul>
				<section id="first-tab-group" class="tabgroup">
					<div class="contentBlock" id="tab1">
						<div class="image" style="background-image: url(<?php echo get_field('image_one') ['url'] ?>);">
						</div>
						<div class="text">
							<h3><?php echo $home_field['tab_name_one'] ?></h3>
							<div class="description">
								<?php echo $home_field['description_one'] ?>
							</div>
							<div class="button">
								<a href="<?php echo $home_field['link_one'] ?>">Read more</a>
								<a href="/aesthetix/book-an-appointment/">Book appointment</a>
							</div>
						</div>
					</div>
					<div class="contentBlock" id="tab2">
						<div class="image" style="background-image: url(<?php echo get_field('image_two') ['url'] ?>);">
						</div>
						<div class="text">
							<h3><?php echo $home_field['tab_name_two'] ?></h3>
							<div class="description">
								<?php echo $home_field['description_two'] ?>
							</div>
							<div class="button">
								<a href="<?php echo $home_field['link_two'] ?>">Read more</a>
								<a href="/aesthetix/book-an-appointment/">Book appointment</a>
							</div>
						</div>
					</div>
					<div class="contentBlock" id="tab3">
						<div class="image"
							 style="background-image: url(<?php echo get_field('image_three') ['url'] ?>);">
						</div>
						<div class="text">
							<h3><?php echo $home_field['tab_name_three'] ?></h3>
							<div class="description">
								<?php echo $home_field['description_three'] ?>
							</div>
							<div class="button">
								<a href="<?php echo $home_field['link_three'] ?>">Read more</a>
								<a href="aesthetix/book-an-appointment/">Book appointment</a>
							</div>
						</div>
					</div>
					<div class="contentBlock" id="tab4">
						<div class="image"
							 style="background-image: url(<?php echo get_field('image_four') ['url'] ?>);">
						</div>
						<div class="text">
							<h3><?php echo $home_field['tab_name_four'] ?></h3>
							<div class="description">
								<?php echo $home_field['description_four'] ?>
							</div>
							<div class="button">
								<a href="<?php echo $home_field['link_four'] ?>">Read more</a>
								<a href="/aesthetix/book-an-appointment/">Book appointment</a>
							</div>
						</div>
					</div>
					<div class="contentBlock" id="tab5">
						<div class="image" style="background-image: url('<?php echo get_field('image_five') ['url'] ?>')">
						</div>
						<div class="text">
							<h3><?php echo $home_field['tab_name_five'] ?></h3>
							<div class="description">
								<?php echo $home_field['description_five'] ?>
							</div>
							<div class="button">
								<a href="<?php echo $home_field['link_five'] ?>">Read more</a>
								<a href="/aesthetix/book-an-appointment/">Book appointment</a>
							</div>
						</div>
					</div>
					<div class="contentBlock" id="tab6">
						<div class="image" style="background-image: url('<?php echo get_field('image_six') ['url'] ?>')">
						</div>
						<div class="text">
							<h3><?php echo $home_field['tab_name_six'] ?></h3>
							<div class="description">
								<?php echo $home_field['description_six'] ?>
							</div>
							<div class="button">
								<a href="<?php echo $home_field['link_six'] ?>">Read more</a>
								<a href="/aesthetix/book-an-appointment/">Book appointment</a>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</section>
	<section class="price">
		<div class="top-price">
			<div class="container">
				<h2 class="wow slideInRight"><?php echo $home_field['price_title'] ?></h2>
				<p class="wow slideInLeft"><?php echo $home_field['price_description'] ?></p>
			</div>
		</div>
		<div class="table-price">
			<div class="container">
				<div class="price-tabs">
					<ul class="tabs clearfix" data-tabgroup="second-tab-group">
						<li><a href="#tab_one" class="active"><?php echo $home_field['first_tab'] ?></a></li>
						<li><a href="#tab_two"><?php echo $home_field['second_tab'] ?></a></li>
						<li><a href="#tab_three"><?php echo $home_field['third_tab'] ?></a></li>
						<li><a href="#tab_four"><?php echo $home_field['fourth_tab'] ?></a></li>
					</ul>
					<section id="second-tab-group" class="tabgroup">
						<div class="contentBlock" id="tab_one">
							<div class="consultation">
								<div class="name">Consultation</div>
								<div class="cost">FREE</div>
							</div>
							<div class="prices">
								<ul>
									<?php
									$price = get_field('list_one');
									if (isset($price) && !empty($price)) {
										foreach ($price as $key => $value) {
											?>
											<li>
												<div class="top">
													<div class="name"><?php echo $value['service_name'] ?></div>
													<div class="cost"><?php echo $value['service_price'] ?></div>
												</div>
												<p><?php echo $value['service_description'] ?></p>
											</li>
											<?php
										}
									}
									?>
								</ul>
							</div>
						</div>
						<div class="contentBlock" id="tab_two">
							<!-- <div class="consultation">
								<div class="name">Consultation</div>
								<div class="cost">FREE</div>
							</div> -->
							<div class="prices">
								<ul>
									<?php
									$price = get_field('list_two');
									if (isset($price) && !empty($price)) {
										foreach ($price as $key => $value) {
											?>
											<li>
												<div class="top">
													<div class="name"><?php echo $value['service_name'] ?></div>
													<div class="cost"><?php echo $value['service_price'] ?></div>
												</div>
												<p><?php echo $value['service_description'] ?></p>
											</li>
											<?php
										}
									}
									?>
								</ul>
							</div>
						</div>
						<div class="contentBlock" id="tab_three">
							<!-- <div class="consultation">
								<div class="name">Consultation</div>
								<div class="cost">FREE</div>
							</div> -->
							<div class="prices">
								<ul>
									<?php
									$price = get_field('list_three');
									if (isset($price) && !empty($price)) {
										foreach ($price as $key => $value) {
											?>
											<li>
												<div class="top">
													<div class="name"><?php echo $value['service_name'] ?></div>
													<div class="cost"><?php echo $value['service_price'] ?></div>
												</div>
												<p><?php echo $value['service_description'] ?></p>
											</li>
											<?php
										}
									}
									?>
								</ul>
							</div>
						</div>
						<div class="contentBlock" id="tab_four">
							<div class="prices">
								<ul>
									<?php
									$price = get_field('list_four');
									if (isset($price) && !empty($price)) {
										foreach ($price as $key => $value) {
											?>
											<li>
												<div class="top">
													<div class="name"><?php echo $value['service_name'] ?></div>
													<div class="cost"><?php echo $value['service_price'] ?></div>
												</div>
												<p><?php echo $value['service_description'] ?></p>
											</li>
											<?php
										}
									}
									?>
								</ul>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>
	<section class="banner">
		<div class="wrapper">
			<h2 class="wow rollIn"><a href="/aesthetix/pricing/#banner-block"> <span>O% Interest Free</span> Payment Plans </a></h2>
			<p class="wow rotateInUpRight">Are you considering Cosmetic, Aesthetic, Orthodontic or Dental Implant work, but not sure about the best way
				to pay for it? If so, you might be interested in the interest free payment plans we offer to fund your
				treatment.</p>
		</div>
	</section>
	<section class="about"
			 style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/img/background/home-about.png"
			 alt="About background">
		<div class="container">
			<div class="salon">
				<a target="_blank"
				   href="https://www.google.co.uk/maps/uv?hl=en&pb=!1s0x4877d56b444709e7%3A0x676108cd72853c73!3m1!7e115!4shttps%3A%2F%2Fpicasaweb.google.com%2Flh%2Fsredir%3Funame%3D114442573916111925320%26id%3D6461551085544333762%26target%3DPHOTO!15sCAESAggI&imagekey=!1e10!2sAF1QipPMedCpeutd4hP0rlzctivJdBhzNONw7Cl0HRyY&sa=X&ved=0ahUKEwjn7Y_AxPfWAhUmDMAKHdyoCwMQoioIkwQwZA&activetab=panorama"
				   class="image"
				   style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/images/salon-img.png"
				   alt="ABOUT Antwerp AesthetiX"></a>
				<div class="text wow zoomInRight">
					<h2><?php echo $home_field['about_title'] ?></h2>
					<div class="description">
						<p><?php echo $home_field['about_description'] ?></p>
					</div>
					<div class="button">
						<!-- <a href="#">Read more</a> -->
						<a href="/aesthetix/team/">Meet the Team</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_template_part( 'template-part/find-us' );  ?>
<?php get_footer(); ?>
