<?php
/*
Template Name: Basic layout
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
  <div class="row">

	<div class="col-md-12 col-sm-12 full-w border-b">
	  <?php $BSec1 = get_field('basic_section_1'); ?>
	  <img src="<?php echo ($BSec1["basic_section_1-image"]); ?>" alt="Web Site Expert" class="img-responsive">
	  <?php echo ($BSec1["basic_section_1-content"]); ?>
	</div>
	<div class="col-md-12 col-sm-12">
	    <?php $BSec2 = get_field('basic_section_2'); ?>
		<?php echo ($BSec2["basic_section_2-content"]); ?>
	</div>
  </div>
</div>

<div class="org-bg text-center org-strap m-top30">
  <div class="wrap960">
	<h4 class="margin-0"><?php echo ($BSec2["basic_section_2-full_strap"]); ?></h4>
  </div>
</div>

<div class="wrap960">
  <div class="row">	
	<div id="contact-information">
		<?php $BformSec = get_field('basic_form_section'); ?>
		<div class="row padding-40 text-center styled-form">
		<?php echo ($BformSec["basic_form_section-content"]); ?>
		<?php echo ($BformSec["basic_form_section-form_data"]); ?>

		</div>
	</div>
  </div><!-- row -->	
</div><!-- wrap960 -->

</div><!-- custom-temp -->	
<?php get_footer(); ?>
