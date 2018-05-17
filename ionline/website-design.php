<?php
/*
Template Name: Website Design
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
	  <?php	$wde = get_field('website_design_wdexperts'); ?>
	  <img src="<?php echo ($wde["website_design_wdexperts-image"]); ?>" alt="Web Site Expert" class="img-responsive" />
	  <h4 class="orange-text text-center"><?php echo ($wde["website_design_wdexperts-title"]); ?></h4>
	  <?php echo ($wde["website_design_wdexperts-content"]); ?>
	</div>	
	
	<div class="col-md-12 col-sm-12 full-w p-top0">
	  
	  <?php	$wdoffer = get_field('website_design_owd_offerings'); ?>
	  <h5 class="orange-text text-center"><?php echo ($wdoffer["website_design_owd_offerings-title"]); ?></h5>
	  <div class="text-center"><?php echo ($wdoffer["website_design_owd_offerings-content"]); ?></div>
	  
	</div>	
	
  </div><!-- row -->	
</div><!-- wrap960 -->	

<div class="text-center">
<img src="<?php echo ($wdoffer["website_design_owd_offerings-image_banner"]); ?>" alt="Web Site design offerings" class="img-responsive" />
</div>

<div class="wrap960 text-center m-top60 wd_img_content">
   <?php echo ($wdoffer["website_design_owd_offerings-content_for_image"]); ?>
</div><!-- wrap960 -->

<div class="text-center gray-strap">
  <h4><?php echo ($wdoffer["gray_full_strap_content"]); ?></h4>
</div>

<div class="wrap960">
	<?php	$wdosoffer = get_field('website_design_os_offer'); ?>
    <div class="row">
		<div class="col-md-9 col-sm-10 col-xs-12 text-center wd_other_serv">
			<h4><?php echo ($wdosoffer["website_design_os_offer-title"]); ?></h4>
			<?php echo ($wdosoffer["website_design_os_offer-content"]); ?>
		</div>
   </div><!-- row -->
</div><!-- wrap960 -->	

<div class="text-center">
	<img src="<?php echo ($wdosoffer["website_design_os_offer-image"]); ?>" alt="Services" class="img-responsive" />
</div>

<div class="wrap960">
  <div class="row">				
		<div class="col-md-12">
		    
			<div class="multibox-list multibox-list2">
			  <?php echo ($wdosoffer["website_design_os_offer-multi-colored_box_content"]); ?>
			</div>
			
		</div>
	</div><!-- row -->
</div><!-- wrap960 -->

<div class="org-bg text-center org-strap">
<h4 class="margin-0"><?php echo ($wdosoffer["website_design_os_offer-orange_strap_content"]); ?></h4>
</div>

<div class="wrap960">
  <div class="row">	
	<div id="contact-information">
		<div class="row padding-40 text-center styled-form">
			<?php	$wdfe = get_field('website_design_form_edit'); ?>
			<?php echo ($wdfe["website_design_form_edit-content"]); ?>
			<?php echo ($wdfe["website_design_form_edit-form_content_area"]); ?>
		</div>
	</div>
  </div><!-- row -->	
</div><!-- wrap960 -->		

</div>
<?php get_footer(); ?>
