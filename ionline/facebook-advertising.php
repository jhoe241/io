<?php
/*
Template Name: Facebook Advertising
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
	  <?php	$fb_adv = get_field('fb_adv_facebook_advertising'); ?>
	  <img src="<?php echo ($fb_adv["fb_adv_facebook_advertising-image"]); ?>" alt="Web Site Expert" class="img-responsive" />
	  <h2 class="text-center p-top60 h1"><?php echo ($fb_adv["fb_adv_facebook_advertising-title"]); ?></h2>
	  <div class="col-md-9 col-sm-10 col-xs-12 margin-auto text-center">
	    <?php echo ($fb_adv["fb_adv_facebook_advertising-content"]); ?>
	  </div>	
	</div>	
	
	<div class="col-md-12 col-sm-12 p-top0">
	  
	  <?php	$fb_adv_tgt = get_field('fb_adv_facebook_targeting'); ?>
	  <div class="col-md-7 col-sm-8 col-xs-12 margin-auto text-center">
	    <?php echo ($fb_adv_tgt["fb_adv_facebook_targeting-content"]); ?>
	  </div>
	  
	</div>	
	
  </div><!-- row -->	
  
  <div class="row seo-icon-set">
	<!-- icons area -->
	<div class="col-md-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
		  <?php $icon1 = get_field('fb_adv_icon1'); ?>
			<div class="orange-bg text-center">
			<img src="<?php echo $icon1['fb_adv_icons-icon_image_1']; ?>" alt="<?php echo $icon1['fb_adv_icons-icon_image_1']['alt']; ?>" class="img-responsive" class="img-responsive"/>
			<h5><?php echo $icon1['fb_adv_icons-title_1']; ?></h5>
			</div>
			<div class="demographics-content"><?php echo $icon1['fb_adv_icons-content_1']; ?></div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
		  <?php $icon1 = get_field('fb_adv_icon2'); ?>
			<div class="orange-bg text-center">
			<img src="<?php echo $icon1['fb_adv_icons-icon_image_2']; ?>" alt="<?php echo $icon1['fb_adv_icons-icon_image_2']['alt']; ?>" class="img-responsive" class="img-responsive"/>
			<h5><?php echo $icon1['fb_adv_icons-title_2']; ?></h5>
			</div>
			<p><?php echo $icon1['fb_adv_icons-content_2']; ?></p>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
		  <?php $icon1 = get_field('fb_adv_icon3'); ?>
			<div class="orange-bg text-center">
			<img src="<?php echo $icon1['fb_adv_icons-icon_image_3']; ?>" alt="<?php echo $icon1['fb_adv_icons-icon_image_3']['alt']; ?>" class="img-responsive" class="img-responsive"/>
			<h5><?php echo $icon1['fb_adv_icons-title_3']; ?></h5>
			</div>
			<div class="social-data"><?php echo $icon1['fb_adv_icons-content_3']; ?></div>
		</div>
		
	</div>
			
  </div>
  
</div><!-- wrap960 -->

<div class="text-center">
	<?php	$icn_baner = get_field('fb_adv_icon_banner'); ?>
	<img src="<?php echo ($icn_baner["fb_adv_icon_banner-image"]); ?>" alt="Facebook Advertising" class="img-responsive" />
</div>

<div class="wrap960">
  <div class="row seo-icon-set">
	<!-- icons area -->
	<div class="col-md-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
		  <?php $icon1 = get_field('fb_adv_icon4'); ?>
			<div class="orange-bg text-center">
			<img src="<?php echo $icon1['fb_adv_icons-icon_image_4']; ?>" alt="<?php echo $icon1['fb_adv_icons-icon_image_4']['alt']; ?>" class="img-responsive" class="img-responsive"/>
			<h5><?php echo $icon1['fb_adv_icons-title_4']; ?></h5>
			</div>
			<div class="social-data"><?php echo $icon1['fb_adv_icons-content_4']; ?></div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
		  <?php $icon1 = get_field('fb_adv_icon5'); ?>
			<div class="orange-bg text-center">
			<img src="<?php echo $icon1['fb_adv_icons-icon_image_5']; ?>" alt="<?php echo $icon1['fb_adv_icons-icon_image_5']['alt']; ?>" class="img-responsive" class="img-responsive"/>
			<h5><?php echo $icon1['fb_adv_icons-title_5']; ?></h5>
			</div>
			<p><?php echo $icon1['fb_adv_icons-content_5']; ?></p>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
		  <?php $icon1 = get_field('fb_adv_icon6'); ?>
			<div class="orange-bg text-center">
			<img src="<?php echo $icon1['fb_adv_icons-icon_image_6']; ?>" alt="<?php echo $icon1['fb_adv_icons-icon_image_6']['alt']; ?>" class="img-responsive" class="img-responsive"/>
			<h5><?php echo $icon1['fb_adv_icons-title_6']; ?></h5>
			</div>
			<p><?php echo $icon1['fb_adv_icons-content_6']; ?></p>
		</div>
		
	</div>
			
  </div>
  
</div><!-- wrap960 -->

<div class="wrap960 border-b text-center">
  <div class="row margin-0">
    <div class="col-md-8 margin-auto p-top20">
      <h5 class="orange-text margin-0">This wealth of data also means that many business owners are not sure how to successfully target their audiences, or even what their related data points are.</h5>
	</div>
  </div>
</div><!-- wrap960 -->

<div class="wrap960">
  <div class="row margin-0">
	<?php $sec1 = get_field('fb_adv_mid_section_1'); ?>
	<?php echo $sec1['fb_adv_mid_section_1-content']; ?>
  </div>	
  
  <div class="row margin-0 fb-ids">
	<?php $sec2 = get_field('fb_adv_mid_section_2'); ?>
	<div class="col-md-6 col-sm-6 col-xs-12 pull-left">
	  <img src="<?php echo $sec2['fb_adv_mid_section_2-image']; ?>" alt="" class="img-responsive"/>
	</div>
	<div class="col-md-5 col-sm-6 col-xs-12 pull-right p-top40">
	<?php echo $sec2['fb_adv_mid_section_2-content']; ?>
	</div>
  </div>
  
  <div class="row p-top60 margin-0">
    <?php $sec3 = get_field('fb_adv_mid_section_3'); ?>
	<?php echo $sec3['fb_adv_mid_section_3-content']; ?>
  </div>	
  
  <div class="row p-top40 margin-0">
    <?php $sec4 = get_field('fb_adv_mid_section_4'); ?>
	<?php echo $sec4['fb_adv_mid_section_4-content']; ?>
  </div>	

</div><!-- wrap960 -->
  
  
<div class="text-center gray-strap">
<?php      $graystrap = get_field('fb_adv_mid_gray_strap'); ?>
<?php echo $graystrap['fb_adv_mid_gray_strap-content']; ?>
</div>

<div class="wrap960">
  <div class="row">	
	<div id="contact-information">
		<div class="row p-top20 text-center styled-form">
		    <?php      $form = get_field('fb_adv_form_area_edit'); ?>
			<?php echo $form['fb_adv_form_area_edit-content']; ?>
			<?php echo $form['fb_adv_form_area_edit_form_code']; ?>
        </div>
    </div>
  </div>
</div><!-- wrap960 -->  
  
</div><!-- //custom-temp -->



<?php get_footer(); ?>
