<?php
/*
Template Name: Software Developer
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
  <?php	$Softd = get_field('softd_sec1'); ?>
  <div class="row inbm-sec1">
    <div class="col-md-12 col-sm-12 full-w margin-auto">
	  <img class="text-center img-responsive" src="<?php echo ($Softd["softd_sec1-image"]); ?>" alt="" />
    </div>
	<div class="col-md-7 col-sm-12 margin-auto text-center">
	<div class="p-top40 p-bottom30">
	  <?php echo ($Softd["softd_sec1-content"]); ?>
	</div>
    </div>
	<div class="col-md-12 col-sm-12 border-b"></div>
	
  </div>
  
  <!-- Section 2 -->
  <?php	$Softd_section_2 = get_field('softd_sec2'); ?>
  <div class="row p-top40 p-bottom60">
    <div class="col-md-6 col-sm-7 col-sm-12">
	  <div class="p-top0">
		<?php echo ($Softd_section_2["softd_sec2-content"]); ?>
	  </div>
	</div>
	<div class="col-md-6 col-sm-5 col-sm-12 m-top20-xs">
	  <img src="<?php echo ($Softd_section_2["softd_sec2-image"]); ?>" alt="" class="img-responsive">
	</div>
	
  </div>
  
</div><!-- wrap960 --> 

<!-- Section 3 -->
<?php $Softd_section_3 = get_field('softd_sec3'); ?>
<div class="full-w org-bg p-bottom60">  
<div class="wrap960">
  <?php echo ($Softd_section_3["softd_sec3-content"]); ?>
</div><!-- wrap960 -->
</div>

<!-- Section 4 -->
<?php $Softd_section_4 = get_field('softd_sec4'); ?>  
<div class="wrap960">  
  <div class="row p-top60">
    <div class="col-md-6 col-sm-5 col-xs-12">
		<img src="<?php echo ($Softd_section_4["softd_sec4-image"]); ?>" class="img-responsive" alt=""/>
	</div>
    <div class="col-md-6 col-sm-7 col-xs-12 softd-css_sec">
	  <?php echo ($Softd_section_4["softd_sec4-content"]); ?>
    </div>
  </div>
</div>

<?php $Softd_section_gs = get_field('softd_sec4_gray_strap'); ?>    
<div class="text-center gray-strap m-top40 m-bottom0">
  <?php echo ($Softd_section_gs["softd_sec4_gray_strap-content"]); ?>
</div>


<!-- Form --> 
<?php	$Softd_form = get_field('softd_form_sec'); ?>

<div class="wrap960">
  <div class="row">	
	<div id="contact-information">
		<div class="row p-top20 text-center styled-form">
		  <?php echo ($Softd_form["softd_form_sec-content"]); ?>
		  <?php echo ($Softd_form["softd_form_sec-form_data"]); ?>
		</div>
    </div>
  </div>
</div>
	
</div>	


<?php get_footer(); ?>