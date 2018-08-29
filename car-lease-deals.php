<?php 
/*
Template Name: Car Lease Deals
*/ 
?>

<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div id="wrapper" class="col-lg-12">
			<h1 class="car-leasing-title">Car Lease Offers</h1>
			<?php
				if( have_rows('deals') ):
				while ( have_rows('deals') ) : the_row(); ?>
					<div class="col-lg-4">
						<div class="car-wrapper">
							<a href="<?php echo the_sub_field('deal_link_'); ?>"><p class="car-strap"><?php echo the_sub_field('car_strap'); ?></p></a>
							<a href="<?php echo the_sub_field('deal_link_'); ?>"><img src="<?php echo the_sub_field('car_image'); ?>" alt=""></a>
							<div class="car-content-wrapper">
								<a href="<?php echo the_sub_field('deal_link_'); ?>"><p class="car-title"><?php echo the_sub_field('car_name'); ?></p></a>
								<a href="<?php echo the_sub_field('deal_link_'); ?>"><p class="car-bch"><?php echo the_sub_field('car_bch_price'); ?> + VAT Based on <?php echo the_sub_field('car_bch_term'); ?> <?php echo the_sub_field('car_bch_miles'); ?>MPA</p></a>
								<a href="<?php echo the_sub_field('deal_link_'); ?>"><p class="car-pch"><?php echo the_sub_field('car_pch_price'); ?> inc VAT Based on <?php echo the_sub_field('car_pch_term'); ?> <?php echo the_sub_field('car_pch_miles'); ?>MPA</p></a>
							</div>
						</div>
					</div>
					<?php endwhile;
				else :
			endif;?>
		</div>
	</div>
</div>

<?php get_footer(); ?>