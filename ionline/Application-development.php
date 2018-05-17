<?php
/*
Template Name: Application Development
*/
?>

<?php get_header(); ?>
<div class="custom-temp">
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
	
	
	<?php	$grp = get_field('app_dev_web_applications'); ?>
		
	<div class="row nopadding" style="background-image:url('<?php echo $grp['app_dev_web_applications-image'] ?>'); background-size:cover; min-height:349px;">
	</div>
	
	<!-- SEO Services -->
	<div class="row nopadding row-eq-height has-c-bg">
		<div class="col-lg-8 col-md-8 col-sm-8 orange-bg no">

				<?php echo ($grp["app_dev_web_applications-content"]); ?>
		
		</div>
		<div class="col-lg-4 col-md-3 col-sm-4 center-align">
			
			<img class="hidden-xs" src="<?php echo $grp['app_dev_web_applications-icon'] ?>" alt="<?php echo $hero['image']['alt']; ?>" class="img-responsive" />
			
		</div>
	</div>

	<!-- Google AdWords -->
	<div class="row row-eq-height reverse-flex-sm">
	
		<?php	$wp = get_field('app_dev_mobile_applications'); ?>	
	

		<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 nopadding">
		  <img src="<?php echo $wp['app_dev_mobile_applications-image'] ?>" alt="<?php echo $wp['app_dev_mobile_applications-image']['alt']; ?>" class="img-responsive" />	
		</div>
		<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 nopadding-sm nopadding-xs">
		 
			<div class="white-bg">
			
			
			<?php echo ($wp["app_dev_mobile_applications-content"]); ?>

				
			</div><!-- white-bg -->
		</div>
	</div>
	
	<!-- Facebook Advertising -->
	<div class="row row-eq-height has-c-bg reverse-flex-xs" style="position:relative">
	
	<?php	$ec = get_field('app_dev_wordpress_development'); ?>	
	
		<div class="col-lg-7 col-md-6 col-sm-8 nopadding">
		
			<div class="white-bg has-c-bg">
			
				<?php echo ($ec["app_dev_wordpress_development-content"]); ?>
		
			</div><!-- white-bg -->
			
			<img class="bottom-align hide-mobile hide-sm" src="<?php echo $ec['app_dev_wordpress_development-icon'] ?>" alt="<?php echo $hero['image']['alt']; ?>" />

		</div>
		<div class="col-lg-5 col-md-6 col-sm-4 nopadding">

			<img src="<?php echo $ec['app_dev_wordpress_development-image'] ?>" alt="<?php echo $hero['image']['alt']; ?>" class="img-responsive" />			
			
		</div>
	</div>
	
	<!-- Inbound Marketing -->
	<div class="row row-eq-height reverse-flex-sm" style="position:relative">
	
	<?php	$hds = get_field('app_dev_software_developers'); ?>	
	
		<div class="col-lg-4 col-md-4 col-sm-4 nopadding">
		
			<img src="<?php echo $hds['app_dev_software_developers-image'] ?>" alt="<?php echo $hero['image']['alt']; ?>" class="img-responsive" />	

		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 nopadding ">

			<div class="white-bg">
			
				<?php echo ($hds["app_dev_software_developers-content"]); ?>

			</div><!-- white-bg -->
				
				<img class="bottom-align hide-mobile hide-sm" src="<?php echo $hds['app_dev_software_developers-icon'] ?>" alt="<?php echo $hero['image']['alt']; ?>" />
			
		</div>
	</div>
	
	<!-- Marketing Tools -->
	<div class="row nopadding row-eq-height referral-org reverse-flex-xs">
		<?php	$wdb = get_field('app_dev_api_integration'); ?>	
		
		<div class="col-lg-7 col-md-6 col-sm-8 orange-bg">
		
				<?php echo ($wdb["app_dev_api_integration-content"]); ?>

		</div>
		<div class="col-lg-5 col-md-6 col-sm-4 nopadding">
		
			<img src="<?php echo $wdb['app_dev_api_integration-image'] ?>" alt="<?php echo $wdb['app_dev_api_integration-image']['alt']; ?>" class="img-responsive" />
				
			
		</div>
	</div>
	
	<div id="contact-information">
		<div class="row padding-60 text-center ">
			<?php	$conin = get_field('app_dev_contact_info'); ?>
			<?php echo ($conin["app_dev_contact_info-content"]); ?>
		
		</div>
	</div>
		
</div><!-- wrap1100 -->
</div>
<?php get_footer(); ?>
