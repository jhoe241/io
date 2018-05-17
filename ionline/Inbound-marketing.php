<?php
/*
Template Name: Inbound Marketing
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
  <?php	$ibm_section1 = get_field('inbm_inbound_marketing'); ?>
  <div class="row inbm-sec1">
    <div class="col-md-12 col-sm-12 full-w margin-auto">
	  <img class="text-center img-responsive" src="<?php echo ($ibm_section1["inbm_inbound_marketing-image"]); ?>" alt="" />
    </div>
	<div class="col-md-9 col-sm-12 margin-auto text-center">
	<div class="white-bg p-bottom30">
	  <?php echo ($ibm_section1["inbm_inbound_marketing-content"]); ?>
	</div>
    </div>
	<div class="col-md-12 col-sm-12 border-b"></div>
	
  </div>
  
  <!-- Section 2 -->
  <?php	$ibm_section2 = get_field('inbm_what_im'); ?>
  <div class="row p-top40">
    <div class="col-md-9 col-sm-12 margin-auto text-center">
	  <div class="white-bg p-top0">
		<?php echo ($ibm_section2["inbm_what_im-content_1"]); ?>
	  </div>
	</div>
	
	<div class="multibox-list multibox-list3 m-top0">
		<?php echo ($ibm_section2["inbm_what_im-content_2"]); ?>
	</div>
	
  </div>
  
</div><!-- wrap960 --> 

<!-- Section 3 -->
<?php $ibm_section3 = get_field('inbm_what_does_im'); ?>  
<div class="text-center">
  <img src="<?php echo ($ibm_section3["inbm_what_does_im-image"]); ?>" alt="Inbound Marketing" class="img-responsive">
</div>
  
<div class="wrap960">  
  <div class="row p-top60 nopadding-xs">
    <div class="col-md-8 col-sm-10 col-xs-12 m-top40 margin-auto nopadding">
	  <?php echo ($ibm_section3["inbm_what_does_im-content"]); ?>
    </div>
  </div>
</div>
  
<div class="text-center gray-strap m-top40 m-bottom0">
  <?php echo ($ibm_section3["inbm_what_does_im-gray_strap"]); ?>
</div>



<div class="wrap960">

<!-- Section 4 -->
<?php $ibm_section4 = get_field('inbm_do_iam'); ?>
  <img class="img-responsive" src="<?php echo ($ibm_section4["inbm_do_iam-image"]); ?>" alt="Inbound Marketing Methodology"/>
  <div class="col-md-5 col-sm-7 col-xs-12 p-top20 margin-auto text-center">
    <?php echo ($ibm_section4["inbm_do_iam-content"]); ?>
  </div>
  
  
<!-- Section 5 -->
<?php $ibm_section5 = get_field('inbm_bs_content'); ?>  
  <img class="img-responsive" src="<?php echo ($ibm_section5["inbm_bs_content-image"]); ?>" alt="Inbound Methodology"/>
<div class="multibox-list multibox-list2 multibox-list4 m-top20">
	<?php echo ($ibm_section5["inbm_bs_content-mbc"]); ?>
</div>		
</div><!-- wrap960 --> 

<div class="org-bg text-center org-strap m-bottom30">
<?php echo ($ibm_section5["inbm_bs_content-orange_strap"]); ?>
</div>



<!-- Form --> 
<?php	$ibm_form = get_field('inbm_form_section'); ?>

<div class="wrap960">
  <div class="row">	
	<div id="contact-information">
		<div class="row p-top20 text-center styled-form">
		  	<?php echo ($ibm_form["inbm_form_section-form_content"]); ?>
			<?php echo ($ibm_form["inbm_form_section-form_data"]); ?>			
		</div>
    </div>
  </div>
</div>
	
	




<?php get_footer(); ?>