<?php
/*
Template Name: Contact Us
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


<div class="wrap1100">
  <div class="row full-w">

	<?php $BSec1 = get_field('contactus_map_contact'); ?>
	<div class="col-md-5 col-sm-12 col-xs-12">
	  <?php echo ($BSec1["contactus_map_contact-content"]); ?>
	  <?php echo ($BSec1["contactus_map_contact_ocd"]); ?>
	</div>
	<div class="col-md-7 col-sm-12 col-xs-12">
	   <div id="contact-information">
		<?php $formSec = get_field('contactus_edit_form'); ?>
		<div class="row padding-40 styled-form p-top0">
		  <?php echo ($formSec["contactus_edit_form-form_content"]); ?>
		  <?php echo ($formSec["contactus_edit_form-form_data"]); ?>
		</div>
	   </div>
	</div>
  </div>
</div>

</div><!-- custom-temp -->	
<?php get_footer(); ?>
