<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="car-title"><?php the_field('car_name'); ?></h1>
		</div>
		<div class="col-lg-8">
	        <div id="carousel" class="carousel slide" data-ride="carousel">
	            <div class="carousel-inner">
	            	<div class="item active">
	            		<img src="<?php the_field('open_image'); ?>">
	            	</div>
	                <?php
					if( have_rows('slideshow') ):
						while ( have_rows('slideshow') ) : the_row(); ?>
			                <div class="item">
			                    <img src="<?php echo the_sub_field('slideshow_image'); ?>">
			                </div>
	                	<?php endwhile;
					else :
					endif;?>
	            </div>
	        </div>
	        <div class="clearfix">
	        <div id="thumbcarousel" class="carousel slide" data-interval="false">
	            <div class="carousel-inner">
	                <div class="item active">
	                    <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="<?php the_field('open_image'); ?>"></div>
	                	<?php
						if( have_rows('slideshow') ):
							while ( have_rows('slideshow') ) : the_row(); ?>
				                <div data-target="#carousel" data-slide-to="<?php echo get_row_index(); ?>" class="thumb"><img src="<?php echo the_sub_field('slideshow_image'); ?>"></div>
		                	<?php endwhile;
						else :
						endif;?>
	                </div><!-- /item -->
	            </div><!-- /carousel-inner -->
	            <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
	                <span class="glyphicon glyphicon-chevron-left"></span>
	            </a>
	            <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
	                <span class="glyphicon glyphicon-chevron-right"></span>
	            </a>
	        </div> <!-- /thumbcarousel -->
	    </div><!-- /clearfix -->
		</div>
		<div class="col-lg-4">
			<div class="car-details">
				<div class="">
					<div class="col-md-6 alter-price">
						<p>Contract Type</p>
						<button class="business-button">Business</button>
						<button class="personal-button">Personal</button>
					</div>	
					<div class="col-md-6">
						<p>Contract Length</p>
						<button class="contract-length-1">24</button>
						<button class="contract-length-2">36</button>
						<button class="contract-length-3">47</button>
					</div>
				</div>
				<div class="col-md-12">
					<p>Monthly Rental: £<b><?php the_field('monthly_rental'); ?></b> + VAT</p>
					<p>Inital Rental: £<b><?php the_field('initial_rental'); ?></b> + VAT</p>
					<p>Contract Term: <?php the_field('contract_term'); ?></p>
					<p>Annual mileage: <?php the_field('mileage'); ?></p>
				</div>
				<div>
					<button href="" class="quote-button">Get a Quote</button>
					<button href="" class="call-back-button">Call Back Request</button>
				</div>
			</div>
		</div>
		<div id="vehicle-details" class="col-lg-8">
			<table>
				<tr id="header">
				    <th colspan="2">Vehicle Information</th>
				</tr>
				<tr>
				 <td>0-62 mph</td>
				 <td>Fast</td>
				</tr>
				<tr>
				  <td>Fuel Consumption</td>
				  <td>Bad</td>
				</tr>
				<tr>
				  <td>CO2 Emission</td>
				  <td>Too damm high</td>
				</tr>
				<tr>
				  <td>Transmission</td>
				  <td>Autobitchboy</td>
				</tr>
				<tr>
				  <td>Engine Size</td>
				  <td>Big</td>
				</tr>
			</table>
		</div>
		<div id="vehicle-salepoints" class="col-lg-4">
			
		</div>
		<div class="col-lg-12" id="small-print">
			<h3>The Small Print</h3>
			<p>All offers are subject to change at any time, you must be 18 or over and finance is subject to status, vehicle availability and terms and conditions apply. We can introduce you to a limited number of finance companies, a commission may be received. Failure to maintain payments may result in termination of your agreement and the vehicle being returned, this could affect your credit rating and make it more difficult to obtain credit in the future. All prices correct at time of publication.</p>	
			<p>All vehicle images and descriptions are for illustration and reference purposes only and are not necessarily an accurate representation of the vehicle on offer.</p>
			<p>VAT at 20% may be payable.</p>
			<p>You should try and estimate the distance you will travel as accurately as possible to try and avoid excess mileage charges at the end of your contract.</p>
		</div>
	</div>
</div>

<?php get_footer(); ?>