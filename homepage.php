<?php 
/*
Template Name: Homepage
*/ 
?>

<?php get_header(); ?>

<div class="container-fluid" id="top-strap-ad" >
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<h1 id="main-heading">View the best car lease offers</h1>
				<span id="main-subheading">Our very latest car leasing deals</span><br>	
				<button id="main-button">View Our Specials</button>
			</div>
			<div class="col-lg-4">
				
			</div>
		</div>
	</div>
</div>
<div class="container-fluid" id="top-strap-ad-bottom-bar">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="bottom-bar-pros" style="background-image: url(<?php the_field('bottom_bar_pro_1_image'); ?>);">
					<span class="bottom-bar-pros-title"><?php the_field('bottom_bar_pro_1'); ?></span><br>
					<span class="bottom-bar-pros-sub"><?php the_field('bottom_bar_pro_1_expla'); ?></span>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="bottom-bar-pros" style="background-image: url(<?php the_field('bottom_bar_pro_2_image'); ?>);">
					<span class="bottom-bar-pros-title"><?php the_field('bottom_bar_pro_2'); ?></span><br>
					<span class="bottom-bar-pros-sub"><?php the_field('bottom_bar_pro_2_expla'); ?></span>				
				</div>
			</div>
			<div class="col-lg-4">
				<div class="bottom-bar-pros" style="background-image: url(<?php the_field('bottom_bar_pro_3_image'); ?>);">
					<span class="bottom-bar-pros-title"><?php the_field('bottom_bar_pro_3'); ?></span><br>
					<span class="bottom-bar-pros-sub"><?php the_field('bottom_bar_pro_3_expla'); ?></span>				
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container" id="main-content-wrapper">
	<div class="row">
		<div class="col-lg-7">
			<h2>Drive a new car for less</h2>
			<?php echo get_post_field('post_content', $post->ID); ?>
			<h5>Check out the latest Audi Q8</h5>
			<iframe width="100%" height="315" src="https://www.youtube.com/embed/NZfYC4lgEFc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
		<div class="col-lg-1">

		</div>
		<div class="col-lg-4">
			<?php

			// check if the repeater field has rows of data
			if( have_rows('timeline') ):

			 	// loop through the rows of data
			    while ( have_rows('timeline') ) : the_row(); ?>
			   	<div id="timeline" style="background-image: url('<?php the_sub_field('timeline_image'); ?>');">
			        <span class="timeline-title"><?php the_sub_field('timeline_title'); ?></span>
					<p class="timeline-text"><?php the_sub_field('timeline_text'); ?></p>
				</div>
			   <?php endwhile;

			else :

			    // no rows found

			endif;

			?>
		</div>
	</div>
</div>
<div class="container-fluid five-boxes">
	<div class="container">
		<div class="col-lg-3">
			<div class="moreinfo-wrapper">
				<img src="<?php echo get_template_directory_uri(); ?>/img/about-us.png" alt="About Us">
				<div class="moreinfo-inner">
					<h3>About Us</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos ullam fuga, modi ad quaerat, consequatur iure, quia quo dolor explicabo fugiat quod ut soluta omnis asperiores. Alias ut, voluptates delectus.</p>
					<button href="#" class="learn-more-button">Learn More</button>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="moreinfo-wrapper">
				<img src="<?php echo get_template_directory_uri(); ?>/img/about-us.png" alt="About Us">
				<div class="moreinfo-inner">
					<h3>About Us</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos ullam fuga, modi ad quaerat, consequatur iure, quia quo dolor explicabo fugiat quod ut soluta omnis asperiores. Alias ut, voluptates delectus.</p>
					<button href="#" class="learn-more-button">Learn More</button>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="moreinfo-wrapper">
				<img src="<?php echo get_template_directory_uri(); ?>/img/about-us.png" alt="About Us">
				<div class="moreinfo-inner">
					<h3>About Us</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos ullam fuga, modi ad quaerat, consequatur iure, quia quo dolor explicabo fugiat quod ut soluta omnis asperiores. Alias ut, voluptates delectus.</p>
					<button href="#" class="learn-more-button">Learn More</button>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="moreinfo-wrapper">
				<img src="<?php echo get_template_directory_uri(); ?>/img/about-us.png" alt="About Us">
				<div class="moreinfo-inner">
					<h3>About Us</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos ullam fuga, modi ad quaerat, consequatur iure, quia quo dolor explicabo fugiat quod ut soluta omnis asperiores. Alias ut, voluptates delectus.</p>
					<button href="#" class="learn-more-button">Learn More</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container" id="home-about-section">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="about-leasing-heading">About Car Leasing</h2>
			<?php the_field('about'); ?>

			<button id="main-button">Learn More</button>
		</div>
	</div>
</div>
<div class="container" id="home-manufacts">
		<div class="row">
			<div class="col-lg-12 manulink-title">
				<h3>Manufactors we work with</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/alfa_romeo.png">
					<p>Alfa Romeo</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/audi.png">
					<p>Audi</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/bmw.png">
					<p>BMW</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/citroen.png">
					<p>Citroen</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/fiat.png">
					<p>Fiat</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/ford.png">
					<p>Ford</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/honda.png">
					<p>Honda</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/hyundai.png">
					<p>Hyundai</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/jaguar.png">
					<p>Jaguar</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/kia.png">
					<p>Kia</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/land_rover.png">
					<p>Land Rover</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/lexus.png">
					<p>Lexus</p>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/mazda.png">
					<p>Mazda</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/merc.png">
					<p>Mercedes Benz</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/mini.png">
					<p>Mini</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/mitsubishi.png">
					<p>Mitsubishi</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/nissan.png">
					<p>Nissan</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/peugeot.png">
					<p>Peugeot</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/porsche.png">
					<p>Porsche</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/renault.png">
					<p>Renault</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/seat.png">
					<p>Seat</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/smart.png">
					<p>Smart</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/skoda.png">
					<p>Skoda</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/tesla.png">
					<p>Tesla</p>
				</a>
			</div>
			
		</div>
		<div class="row">
			<div class="col-lg-4">
				
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/toyota.png">
					<p>toyota</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/vauxhall.png">
					<p>Vauxhall</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/volvo.png">
					<p>Volvo</p>
				</a>
			</div>
			<div class="col-lg-1 manulink">
				<a href="">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logos/vw.png">
					<p>VW</p>
				</a>
			</div>
			<div class="col-lg-4">
				
			</div>
		</div>
</div>
<div class="container-fluid change-background">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 faqs">
				<h2>Frequently Asked Questions</h2>
				<?php

				// check if the repeater field has rows of data
				if( have_rows('faqs') ):

				 	// loop through the rows of data
				    while ( have_rows('faqs') ) : the_row(); ?>
				   	<div class="faq">
						<div class="faq_question"><h3><?php the_sub_field('faq_question'); ?></h3></div>
						<div class="faq_answer_container">
							<div class="faq_answer"><p><?php the_sub_field('faq_answer'); ?></p></div>
						</div>		
					</div>
				   <?php endwhile;

				else :

				    // no rows found

				endif;

				?>
				<a href="">View all Questions</a>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid parallax">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 testimonials">
				<h2>Testimonials</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div id="testimonials">
					<q>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</q>
					<p>By Carol G.</p>
				</div>
				<div id="testimonials-bottom"></div>
			</div>
			<div class="col-lg-4">
				<div id="testimonials">
					<q>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</q>
					<p>By Carol G.</p>
				</div>
				<div id="testimonials-bottom"></div>
			</div>
			<div class="col-lg-4">
				<div id="testimonials">
					<q>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...</q>
					<p>By Carol G.</p>
				</div>
				<div id="testimonials-bottom"></div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid change-background">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 faqs">
				<h2>Our Services</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<div class="service-box">
					<h4>Service 1</h4>
					<p>Service Slogan</p>
					<a>Learn More</a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="service-box">
					<h4>Service 1</h4>
					<p>Service Slogan</p>
					<a>Learn More</a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="service-box">
					<h4>Service 1</h4>
					<p>Service Slogan</p>
					<a>Learn More</a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="service-box">
					<h4>Service 1</h4>
					<p>Service Slogan</p>
					<a>Learn More</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container blogger">
	<div class="row">
		<div class="col-lg-12 faqs">
			<h2>Recent Posts</h2>
		</div>
		<div class="col-lg-4">
			<div id="blog-wrapper">
				<a href="#" class="blog-link">
					<img src="<?php echo get_template_directory_uri(); ?>/img/post-img.png">
					<h3>Blog post title 1</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
				</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div id="blog-wrapper">
				<a href="#" class="blog-link">
					<img src="<?php echo get_template_directory_uri(); ?>/img/post-img.png">
					<h3>Blog post title 1</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
				</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div id="blog-wrapper">
				<a href="#" class="blog-link">
					<img src="<?php echo get_template_directory_uri(); ?>/img/post-img.png">
					<h3>Blog post title 1</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
				</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>