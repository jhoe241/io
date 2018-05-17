<?php
/*
Template Name: Digital Marketing
*/
?>

<?php get_header(); ?>
<div class="custom-temp">
<?php 
if (have_posts()) :
    while (have_posts()) : the_post();  ?>
	  <div class="banner-image digital-market-bg" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
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
						<a class="orange-button margin-auto" href="tel:1800466546">Call Us Now</a>
					</div>
				
					<div class="col-md-6 col-sm-6 text-center">
						<a class="orange-button margin-auto" href="/contact">Ask a local</a>
					</div>

			</div><!-- col-lg-4 -->
			
			<div class="col-lg-4 col-md-4 col-sm-3 col-xs-2">
			</div><!-- col-lg-4 -->
			
	
		
	</div><!-- wrap -->	
</div><!-- single top -->

<div class="wrap1100">
	
	
	<?php	$grp = get_field('digital-marketing-seo'); ?>
		
	<div class="row nopadding" style="background-image:url('<?php echo $grp['digital-marketing-seo-image'] ?>'); background-size:cover; min-height:349px;">
	</div>
	
	<!-- SEO Services -->
	<div class="row nopadding row-eq-height has-c-bg">
		<div class="col-lg-8 col-md-8 col-sm-8 orange-bg no">

				<?php echo ($grp["digital-marketing-seo-content"]); ?>
		
		</div>
		<div class="col-lg-4 col-md-3 col-sm-4 center-align">
			
			<img class="hidden-xs" src="<?php echo $grp['digital-marketing-seo-icon'] ?>" alt="<?php echo $hero['image']['alt']; ?>" class="img-responsive" />
			
		</div>
	</div>

	<!-- Google AdWords -->
	<div class="row row-eq-height reverse-flex-sm">
	
		<?php	$wp = get_field('digital-marketing-google-adw'); ?>	
	

		<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 nopadding">
		  <img src="<?php echo $wp['digital-marketing-google-adw-image'] ?>" alt="<?php echo $wp['digital-marketing-google-adw-image']['alt']; ?>" class="img-responsive" />	
		</div>
		<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 nopadding-sm nopadding-xs">
		 
			<div class="white-bg">
			
			
			<?php echo ($wp["digital-marketing-google-adw-content"]); ?>

				
			</div><!-- white-bg -->
		</div>
	</div>
	
	<!-- Facebook Advertising -->
	<div class="row row-eq-height has-c-bg reverse-flex-xs" style="position:relative">
	
	<?php	$ec = get_field('digital-marketing-fb'); ?>	
	
		<div class="col-lg-7 col-md-6 col-sm-8 nopadding">
		
			<div class="white-bg has-c-bg">
			
				<?php echo ($ec["digital-marketing-fb-content"]); ?>
		
			</div><!-- white-bg -->
			
			<img class="bottom-align hide-mobile hide-sm" src="<?php echo $ec['digital-marketing-fb-icon'] ?>" alt="<?php echo $hero['image']['alt']; ?>" />

		</div>
		<div class="col-lg-5 col-md-6 col-sm-4 nopadding">

			<img src="<?php echo $ec['digital-marketing-fb-img'] ?>" alt="<?php echo $hero['image']['alt']; ?>" class="img-responsive" />			
			
		</div>
	</div>
	
	<!-- Inbound Marketing -->
	<div class="row row-eq-height reverse-flex-sm" style="position:relative">
	
	<?php	$hds = get_field('digital-marketing-inbound-marketing'); ?>	
	
		<div class="col-lg-4 col-md-4 col-sm-4 nopadding">
		
			<img src="<?php echo $hds['digital-marketing-inbound-marketing-image'] ?>" alt="<?php echo $hero['image']['alt']; ?>" class="img-responsive" />	

		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 nopadding ">

			<div class="white-bg">
			
				<?php echo ($hds["digital-marketing-inbound-marketing-content"]); ?>

			</div><!-- white-bg -->
				
				<img class="bottom-align hide-mobile hide-sm" src="<?php echo $hds['digital-marketing-inbound-marketing-icon'] ?>" alt="<?php echo $hero['image']['alt']; ?>" />
			
		</div>
	</div>
	
	<!-- Marketing Tools -->
	<div class="row nopadding row-eq-height referral-org reverse-flex-xs">
		<?php	$wdb = get_field('digital-marketing-marketing_tools'); ?>	
		
		<div class="col-lg-7 col-md-6 col-sm-8 orange-bg">
		
				<?php echo ($wdb["digital-marketing-marketing_tools-content"]); ?>

		</div>
		<div class="col-lg-5 col-md-6 col-sm-4 nopadding">
		
			<img src="<?php echo $wdb['digital-marketing-marketing_tools-image'] ?>" alt="<?php echo $wdb['digital-marketing-marketing_tools-image']['alt']; ?>" class="img-responsive" />
				
			
		</div>
	</div>
	
	<div id="contact-information">
		<div class="row padding-60 text-center ">
			<?php	$conin = get_field('digital-marketing-contact_details'); ?>
			<?php echo ($conin["digital-marketing-contact_details-content"]); ?>
		
		</div>
	</div>
		
</div><!-- wrap1100 -->
</div>
<?php get_footer(); ?>
