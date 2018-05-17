<?php
/*
Template Name: Web Development
*/
?>
<?php get_header(); ?>

<?php 
if (have_posts()) :
    while (have_posts()) : the_post();  ?>
	  <div class="banner-image" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
		<div class="wrap hero-single-page">
		  <?php the_content(); ?>	
		</div>
	  </div>
<?php
    endwhile;
else :
  echo '<p>No content found</p>';
endif;
?>


<?php //echo do_shortcode('[parallax-scroll id="97"]'); ?>

<div id="single-top">
	<div class="wrap">

		<h4>Prefer to speak someone local? Have a specific question about our services?</h4>
		<p>Speak with one of our consultants now. Choose your preferred contact method.</p>

			<div class="col-lg-4 col-md-4 col-sm-3 col-xs-2">
			</div><!-- col-lg-4 -->
			
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-8 st-buttons">

					<div class="col-md-6 col-sm-6 text-center">
						<a class="orange-button" href="tel:1800466546">Call Us Now</a>
					</div>
				
					<div class="col-md-6 col-sm-6 text-center">
						<a class="orange-button" href="/contact">Ask a local</a>
					</div>

			</div><!-- col-lg-4 -->
			
			<div class="col-lg-4 col-md-4 col-sm-3 col-xs-2">
			</div><!-- col-lg-4 -->
			
	
		
	</div><!-- wrap -->	
</div><!-- single top -->

<div class="wrap1100">
	
	
	<?php	$grp = get_field('web_development_website_design'); ?>
		
	<div class="row nopadding" style="background-image:url('<?php echo $grp['web_development_website_design_image'] ?>'); background-size:cover; min-height:349px;">
	</div>
	
	<!-- Website Design -->
	<div class="row nopadding row-eq-height has-c-bg">
		<div class="col-lg-8 col-md-8 col-sm-8 orange-bg no">

				<?php echo ($grp["web_development_website_design-content"]); ?>
		
		</div>
		<div class="col-lg-4 col-md-3 col-sm-4 center-align">
			
			<img class="hidden-xs" src="<?php echo $grp['web_development_website_design-icon'] ?>" alt="<?php echo $hero['web_development_website_design-']['alt']; ?>" class="img-responsive" />
			
		</div>
	</div>

	<!-- WordPress Websites -->
	<div class="row row-eq-height reverse-flex-sm">
	
		<?php	$wp = get_field('web_development_wordpress'); ?>	
	

		<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 nopadding">
		  <img src="<?php echo $wp['web_development_wordpress-image'] ?>" alt="<?php echo $wp['web_development_wordpress-image']['alt']; ?>" class="img-responsive" />	
		</div>
		<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 nopadding-sm nopadding-xs">
		 
			<div class="white-bg">
			
			
			<?php echo ($wp["web_development_wordpress-content"]); ?>

				
			</div><!-- white-bg -->
		</div>
	</div>
	
	<!-- E-Commerce Website -->
	<div class="row row-eq-height has-c-bg reverse-flex-xs" style="position:relative">
	
	<?php	$ec = get_field('web_development_e-commerce'); ?>	
	
		<div class="col-lg-7 col-md-6 col-sm-8 nopadding">
		
			<div class="white-bg has-c-bg">
			
				<?php echo ($ec["web_development_e-commerce-content"]); ?>
		
			</div><!-- white-bg -->
			
			<img class="bottom-align hide-mobile hide-sm" src="<?php echo $ec['web_development_e-commerce-icon'] ?>" alt="<?php echo $hero['image']['alt']; ?>" />

		</div>
		<div class="col-lg-5 col-md-6 col-sm-4 nopadding">

			<img src="<?php echo $ec['web_development_e-commerce-img'] ?>" alt="<?php echo $hero['image']['alt']; ?>" class="img-responsive" />			
			
		</div>
	</div>
	
	<!-- Hosting & Domain Services -->
	<div class="row row-eq-height reverse-flex-sm" style="position:relative">
	
	<?php	$hds = get_field('web_development_hosting_&_domain_services'); ?>	
	
		<div class="col-lg-4 col-md-4 col-sm-4 nopadding">
		
			<img src="<?php echo $hds['web_development_hosting_&_domain_services-image'] ?>" alt="<?php echo $hds['image']['alt']; ?>" class="img-responsive" />	

		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 nopadding ">

			<div class="white-bg">
			
				<?php echo ($hds["web_development_hosting_&_domain_services-content"]); ?>

			</div><!-- white-bg -->
				
				<img class="bottom-align hide-mobile hide-sm" src="<?php echo $hds['web_development_hosting_&_domain_services-icon'] ?>" alt="<?php echo $hds['web_development_hosting_&_domain_services-']['alt']; ?>" />
			
		</div>
	</div>
	
	<!-- Referral Partners -->
	<div class="row nopadding row-eq-height referral-org reverse-flex-xs">
		<?php	$wdb = get_field('web_development_web_development_bottom'); ?>	
		
		<div class="col-lg-7 col-md-6 col-sm-8 orange-bg">
		
				<?php echo ($wdb["web_development_web_development_bottom-content"]); ?>

		</div>
		<div class="col-lg-5 col-md-6 col-sm-4 nopadding">
		
			<img src="<?php echo $wdb['web_development_web_development_bottom-image'] ?>" alt="<?php echo $wdb['web_development_web_development_bottom-image']['alt']; ?>" class="img-responsive" />
				
			
		</div>
	</div>
	
	<div id="contact-information">
		<div class="row padding-60 text-center ">
			
			<?php echo ($wdb["web_development_web_development_bottom-contact_info"]); ?>
		
		</div>
	</div>
		
</div><!-- wrap1100 -->

<?php get_footer(); ?>
