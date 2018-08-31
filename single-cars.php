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
	    <div id="vehicle-details">
			<!--<table>
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
			</table>-->
		</div>
		<div class="proptable col-md-6">
			<h4>Vehicle details</h4>
			<div class="lc wi160">Engine size:</div>
			<div class="rc wi100">2 litre</div><div class="lc wi160">Doors:</div>
			<div class="rc wi100">2</div><div class="lc wi160">Body type:</div>
			<div class="rc wi100">Coupe</div><div class="lc wi160">Fuel type:</div>
			<div class="rc wi100">Diesel</div><div class="lc wi160">Fuel delivery:</div>
			<div class="rc wi100">Turbo</div><div class="lc wi160">Transmission type:</div>
			<div class="rc wi100">Automatic</div><div class="lc wi160">Drivetrain:</div>
			<div class="rc wi100">Rear Wheel Drive</div><div class="lc wi160">Number of Seats:</div>
			<div class="rc wi100">4</div><div class="lc wi160">Insurance Group:</div>
			<div class="rc wi100">34E</div><div class="lc wi160"> NCAP Overall Rating <span class="ttip" data-csstooltip="The Euro NCAP rating is a safety ranking system ranging from 1 to 5, the higher the rating the better."><img src="https://www.britanniacarfinance.co.uk/gfx/colour/14/ttipicon.png" class="bg_a1"></span>:</div>
			<div class="rc wi100">5</div><div class="lc wi160"> CO2 Emissions <span class="ttip" data-csstooltip="The CO2 emissions from a vehicle effects the Benefit in Kind (BIK) value and can effect the amount of personal tax payable."><img src="https://www.britanniacarfinance.co.uk/gfx/colour/14/ttipicon.png" class="bg_a1"></span>:</div>
			<div class="rc wi100">132 g/km</div><div class="lc wi160">Top Speed:</div>
			<div class="rc wi100">150 mph</div><div class="lc wi160">Fuel Economy Combined:</div>
			<div class="rc wi100">56.5 mpg</div><div class="lc wi160">Brake Horse Power:</div>
			<div class="rc wi100">194 bhp</div><div class="lc wi160">0-60 mph:</div>
			<div class="rc wi100">7.4 secs</div><div class="lc wi160">Pay load:</div>
			<div class="rc wi100">565.00 kg</div>
		</div>

		<div class="proptable col-md-6">
			<h4>Finance details</h4>
			<div class="lc wi150"> Contract term <span class="ttip" data-csstooltip="This is the length of the contract. Early cancellation of the contract could incur charges."><img src="https://www.britanniacarfinance.co.uk/gfx/colour/14/ttipicon.png" class="bg_a1"></span>:</div>
			<div class="rc wi100">24 months</div>

			<div class="lc wi150"> Rental profile <span class="ttip" data-csstooltip="The rental profile typically dictates the number of monthly rentals required, consisting of one initial rental followed by a number of monthly rentals. i.e. 1+23 would be a 2 year contract where the initial rental is the same as the standard monthly payment. 3+35 would be a 3 year contract where the initial rental would be 3 times the standard monthly rental."><img src="https://www.britanniacarfinance.co.uk/gfx/colour/14/ttipicon.png" class="bg_a1"></span>:</div>
			<div class="rc wi100">9 + 23</div>
			<div class="lc wi150"> Annual mileage <span class="ttip" data-csstooltip="When leasing a vehicle the mileage is taken into consideration. The total mileage is the annual mileage multiplied by the length of the contract in years. If at the end of the contract the total mileage is exceeded it is likely you would be charged an excess mileage charge."><img src="https://www.britanniacarfinance.co.uk/gfx/colour/14/ttipicon.png" class="bg_a1"></span>:</div>
			<div class="rc wi100">8000</div>
			<div class="lc wi150">23 monthly rentals of:</div>
			<div class="rc wi100">£399<span class="pence">.99</span></div>
			<div class="lc wi150">Initial rental:</div>
			<div class="rc wi100">£3599<span class="pence">.91</span></div>
			<div class="lc wi150"> Processing fee <span class="ttip" data-csstooltip="The processing fee is charged by ourselves to cover the administration for setting up of the contract. This fee will be collected separately. Other fees such as a Finance doc fee may also be applicable."><img src="https://www.britanniacarfinance.co.uk/gfx/colour/14/ttipicon.png" class="bg_a1"></span>:</div>
			<div class="rc wi100">£250<span class="pence">.00</span></div>
			<div class="lc wi150"> Finance doc fee <span class="ttip" data-csstooltip="The finance documentation fee is charged by the finance company who provides the finance for the vehicle. This fee will be collected separately. Other fees such as a processing fee may also be applicable."><img src="https://www.britanniacarfinance.co.uk/gfx/colour/14/ttipicon.png" class="bg_a1"></span>:</div>
			<div class="rc wi100">£0<span class="pence">.00</span></div>
			<div class="lc wi150">Manufacturer RRP:</div>
			<div class="rc wi100">£63495<span class="pence">.00</span></div>
			<div class="lc wi150"> P11D <span class="ttip" data-csstooltip="The P11D value of your car is used to calculate the amount of company car tax you may need to pay."><img src="https://www.britanniacarfinance.co.uk/gfx/colour/14/ttipicon.png" class="bg_a1"></span>:</div>
			<div class="rc wi100">£63440<span class="pence">.00</span></div>
			<div class="lc wi150"> Benefit in kind (BIK) <span class="ttip" data-csstooltip="This is any benefit which employees receive from employment but are not included in a salary. As such, it is subject to income tax (for the employee) and employer Class 1A National Insurance Contributions. Factors effecting this value include: CO2 emissions, fuel type and the vehicle's P11D value."><img src="https://www.britanniacarfinance.co.uk/gfx/colour/14/ttipicon.png" class="bg_a1"></span>:</div>
			<div class="rc wi100">£8247<span class="pence">.00</span></div>
			<div class="lc wi150">BIK @ 20% tax:</div>
			<div class="rc wi100">£137<span class="pence">.45</span> pcm</div>
			<div class="lc wi150">BIK @ 40% tax:</div>
			<div class="rc wi100">£274<span class="pence">.90</span> pcm</div>
		</div>
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
					<div class="col-md-12">
						<p>Initial Rental</p>
						<button class="initial-rental-1">3</button>
						<button class="initial-rental-2">6</button>
						<button class="initial-rental-3">9</button>
					</div>
					<div class="col-md-12">
						<p>Miles Requires:</p></p><input id="ex2" type="text" class="span2" value="" data-slider-min="5000" data-slider-max="20000" data-slider-step="5" data-slider-value="[5000,10000]"/></b>
					</div>
					<div class="col-md-12">
						<p>Are you interested in vehicle maintenance?</p>
					</div>
					<div class="col-md-6 remove-right">
						<div class="yes-main">
							<input type="checkbox">
							<p><b>Yes</b> - I want to reduce potential stress with vehicle maintenance and servicing.</p>
						</div>
					</div>
					<div class="col-md-6 remove-left">
						<div class="no-main">
							<input type="checkbox">
							<p><b>No</b> - I understand I will be responsible for the maintenance and servicing</p>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<h4>Vehicle Options</h4>
					<!-- Trigger/Open The Modal -->
					<p>Choose paint colour </p>
					<button id="myBtn">Select Colour</button>

					<!-- The Modal -->
					<div id="myModal" class="modal">

					  <!-- Modal content -->
					  <div class="modal-content">
					    <ul>
					    	<li><input type="checkbox"> Red</li>
					    	<li><input type="checkbox"> Blue</li>
					    	<li><input type="checkbox"> Grey</li>
					    </ul>
					    <span class="close">&times;</span>
					  </div>

					</div>
				</div>
				<div class="col-md-12">
					<p>Monthly Rental: £<b><?php the_field('monthly_rental'); ?></b> + VAT</p>
					<p>Inital Rental: £<b><?php the_field('initial_rental'); ?></b> + VAT</p>
					<p>Contract Term: <?php the_field('contract_term'); ?></p>
					<p>Annual mileage: <?php the_field('mileage'); ?></p>
				</div>
				<div>
					<button href="" id="show" class="quote-button">Get a Quote</button>
					<div class="center hideform">
						<button id="close">X</button>
		    				<?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>
						</div>
					<button href="" class="call-back-button">Call Back Request</button>
				</div>
			</div>
		</div>
		
		<div id="vehicle-salepoints" class="col-lg-12">
			
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