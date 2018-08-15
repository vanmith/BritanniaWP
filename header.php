<!DOCTYPE html>
<html>
<head>
	<title>Britannia Car Finance</title>

	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,400,500,700,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

	<?php wp_head(); ?>

</head>
<body>
	<div id="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<a href="/" class="top-car-nav top-car-nav-active"><i class="fas fa-car"></i> Car Deals</a>
					<a href="#" class="top-car-nav"><i class="fas fa-shuttle-van"></i> Van Deals</a>
				</div>
				<div class="col-lg-6">
					<ul class="list-inline pull-right">
						<li><a href="/special-offers">Special Offers</a></li>
						<li><a href="/about">About Us</a></li>
						<li><a href="/news">News</a></li>
						<li><a href="/guide-lease">Guide to Leasing</a></li>
						<li><a href="/comparison-tool">Comparison Tool</a></li>
						<li><a href="/contact">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<header class="container-fluid">
		<div id="header-inner" class="container">
			<div class="row">
				<div class="col-lg-6">
					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" id="logo"></a>
				</div>
				<div class="col-lg-6">
					<p id="phone-number">Call: <a href="tel:01614407272">0161 440 7272</a></p>
				</div>
			</div>
		</div>
	</header>
	<div id="nav-bar">
		<div class="container">
			<div class="row">
				<nav id="main-nav">
					<ul id="responsivenav" class="second-nav list-inline">
						<li>
							<a onclick="manuSearch()">Manufacturers <i class="fas fa-angle-right"></i></a>
							<div id="manuDrop" class="dropdown-content">
							    <ul class="list-inline">
							    	<li class="manu-logo">
							    		<a href="#">
							    			<img src="<?php echo get_template_directory_uri(); ?>/img/logos/bmw.png">
							    			BMW
							    		</a>
							    	</li>
							    	<li class="manu-logo">
							    		<a href="#">
							    			<img src="<?php echo get_template_directory_uri(); ?>/img/logos/merc.png">
							    			Merc
							    		</a>
							    	</li>
							    	<li class="manu-logo">
							    		<a href="#">
							    			<img src="<?php echo get_template_directory_uri(); ?>/img/logos/merc.png">
							    			Merc
							    		</a>
							    	</li>
							    	<li class="manu-logo">
							    		<a href="#">
							    			<img src="<?php echo get_template_directory_uri(); ?>/img/logos/merc.png">
							    			Merc
							    		</a>
							    	</li>
							    	<li class="manu-logo">
							    		<a href="#">
							    			<img src="<?php echo get_template_directory_uri(); ?>/img/logos/merc.png">
							    			Merc
							    		</a>
							    	</li>
							    	<li class="manu-logo">
							    		<a href="#">
							    			<img src="<?php echo get_template_directory_uri(); ?>/img/logos/merc.png">
							    			Merc
							    		</a>
							    	</li>
							    	<li class="manu-logo">
							    		<a href="#">
							    			<img src="<?php echo get_template_directory_uri(); ?>/img/logos/merc.png">
							    			Merc
							    		</a>
							    	</li>
							    	<li class="manu-logo">
							    		<a href="#">
							    			<img src="<?php echo get_template_directory_uri(); ?>/img/logos/merc.png">
							    			Merc
							    		</a>
							    	</li>
							    </ul>
							    <a href="#" class="manu-all">Browse All Manufacturers</a>
						  	</div>
						</li>
						<li>
							<a onclick="modSearch()">Model Search <i class="fas fa-angle-right"></i></a>
							<div id="modSearch" class="dropdown-content">
							    <p>Manufacturer</p>
							    <select>
							    	<option>---</option>
							    	<option>BMW</option>
							    	<option>Merc</option>
							    </select>
							    <p>Model</p>
							    <select>
							    	<option>---</option>
							    </select>
						  	</div>
						</li>
						<li>
							<a onclick="budSearch()">Budget Search <i class="fas fa-angle-right"></i></a>
							<div id="budSearch" class="dropdown-content">
							    <ul class="list-inline">
							    	<li class="manu-logo">
							    		<a href="#">
							    			<img src="<?php echo get_template_directory_uri(); ?>/img/logos/bmw.png">
							    			BMW
							    		</a>
							    	</li>
							    	<li class="manu-logo">
							    		<a href="#">
							    			<img src="<?php echo get_template_directory_uri(); ?>/img/logos/merc.png">
							    			Merc
							    		</a>
							    	</li>
							    </ul>
							    <a href="#" class="manu-all">Browse All Manufacturers</a>
						  	</div>
						</li>
						<li>
							<a onclick="bodSearch()">Body Type Search <i class="fas fa-angle-right"></i></a>
							<div id="bodSearch" class="dropdown-content">
							    <ul class="list-inline">
							    	<li class="manu-logo">
							    		<a href="#">
							    			<img src="<?php echo get_template_directory_uri(); ?>/img/logos/bmw.png">
							    			BMW
							    		</a>
							    	</li>
							    	<li class="manu-logo">
							    		<a href="#">
							    			<img src="<?php echo get_template_directory_uri(); ?>/img/logos/merc.png">
							    			Merc
							    		</a>
							    	</li>
							    	<li class="manu-logo">
							    		<a href="#">
							    			<img src="<?php echo get_template_directory_uri(); ?>/img/logos/merc.png">
							    			Merc
							    		</a>
							    	</li>
							    </ul>
							    <a href="#" class="manu-all">Browse All Manufacturers</a>
						  	</div>
						</li>
						<li><a href="">Advanced Search <i class="fas fa-angle-right"></i></a></li>
					</ul>
					<a href="#" onclick="responsiveNav()" class="responsivenavopener">Search <i class="fas fa-bars"></i></a>
				</nav>
			</div>
		</div>
	</div>
	<div class="container">
		
	</div>

