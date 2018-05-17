<?php
/*
Template Name: Google Adwords
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


<div class="wrap960">
  <?php	$gadw = get_field('gadw_google_adwords'); ?>
  <div class="row">
    <div class="col-md-12 col-sm-12 full-w margin-auto">
	  <img class="text-center img-responsive" src="<?php echo ($gadw["gadw_google_adwords-image"]); ?>" alt="" />
    </div>
	<div class="col-md-9 col-sm-12 margin-auto text-center">
	<div class="white-bg">
	  <?php echo ($gadw["gadw_google_adwords-main_content"]); ?>
	</div>
	<div class="white-bg p-top0">
	  <?php echo ($gadw["gadw_google_adwords-content"]); ?>
	</div>
	
    </div>
  </div>
  
  <!-- Section 2 -->
  <?php	$gadw_section_2 = get_field('gadw_section_2'); ?>
  <div class="row">
    <div class="col-md-12 col-sm-12 full-w p-top20">
	  <img class="text-center img-responsive" src="<?php echo ($gadw_section_2["gadw_section_2_image"]); ?>" alt="" />
	  <div class="orange-bg text-center gadw">
		<?php echo ($gadw_section_2["gadw_section_2-image_content"]); ?>
	  </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-7 col-sm-10 col-xs-12 p-top20 margin-auto">
      <div class="white-bg border-b p-left0 p-right0 text-center">
		<?php echo ($gadw_section_2["gadw_section_2_content"]); ?>
	  </div>
    </div>
  </div>
  
  <!-- Section 3 -->
  <?php	$gadw_section_3 = get_field('gadw_section_3'); ?>
  <div class="row p-top40">
	<?php echo ($gadw_section_3["gadw_multibox_content"]); ?>
  </div>
  
  
    <div class="row">
	  <div class="col-md-9 col-sm-12 col-xs-12 margin-auto text-center white-bg p-top60">
		<?php echo ($gadw_section_3["gadw_insights_around_the_clock"]); ?>
	  </div>
	</div>
  
</div><!-- wrap960 --> 

<div class="text-center gray-strap m-top0">
  <?php echo ($gadw_section_3["gadw_gray_strap"]); ?>
</div>

<!-- Form --> 
<?php	$gadw_form = get_field('gadw_form_section'); ?>

<div class="wrap960">
  <div class="row">	
	<div id="contact-information">
		<div class="row text-center styled-form">
		  <?php echo ($gadw_form["gadw_form_section-content"]); ?>
		  <?php echo ($gadw_form["gadw_form_section-form_data"]); ?>
		</div>
    </div>
  </div>
</div>
	
	




<?php get_footer(); ?>