<?php
/*
Template Name: Seo Services
*/
?>
<?php get_header(); ?>

<?php 
if (have_posts()) :
    while (have_posts()) : the_post();  ?>
	  <div class="banner-image seo-services-bg" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
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

<?php //echo do_shortcode('[parallax-scroll id="429"]'); ?>

<div class="wrap960 seo-services">
  <div class="row nopadding">
	<div class="col-lg-12 col-md-12">
		<div class="col-md-6 col-sm-8">
		<?php $seo = get_field('seo_services_section'); ?>
			<h4><?php echo $seo['seo-services-title']; ?></h4>
		
			<?php echo $seo['seo-services-content']; ?>
		</div>
		
		<div class="col-md-6 col-sm-4 text-right">
			<p><img src="<?php echo $seo['seo-services-image']; ?>" alt="<?php echo $seo['seo-services-image']['alt']; ?>" class="img-responsive"></p>
		</div>
		
		<div class="col-md-6 col-sm-6">
			<h5 class="text-center">On-Page</h5>
			<p><?php echo $seo['seo-services-on-page']; ?></p>
		</div>
		<div class="col-md-6 col-sm-6">
			<h5 class="text-center">Off-Page</h5>
			<p><?php echo $seo['seo-services-off-page']; ?></p>
		</div>
		
		<div class="clearfix"></div>
		
	</div><!-- col-md-10 -->	
		
  </div><!-- row -->

</div>

<div class="wrap960 seo-services-sec2">
  <div class="row nopadding">
  
	<ul class="nav nav-tabs col">
		<li class="active"><a href="#wd-tab1" role="tab" data-toggle="tab"><?php $tab1 = get_field('seo-services-tab1'); echo $tab1['seo-services-tab1-title']; ?></a></li>
		<li><a href="#wd-tab2" role="tab" data-toggle="tab"><?php $tab2 = get_field('seo-services-tab2'); echo $tab2['seo-services-tab2-title']; ?></a></li>
		<li><a href="#wd-tab3" role="tab" data-toggle="tab"><?php $tab3 = get_field('seo-services-tab3'); echo $tab3['seo-services-tab3-title']; ?></a></li>
		<li><a href="#wd-tab4" role="tab" data-toggle="tab"><?php $tab4 = get_field('seo-services-tab4'); echo $tab4['seo-services-tab4-title']; ?></a></li>
		<li><a href="#wd-tab5" role="tab" data-toggle="tab"><?php $tab5 = get_field('seo-services-tab5'); echo $tab5['seo-services-tab5-title']; ?></a></li>
	</ul>
	
	<div class="tab-content">
		<div class="tab-pane active" role="tabpanel" id="wd-tab1">
			<?php $tab1 = get_field('seo-services-tab1'); ?>
			<div class="row">
				<div class="col-md-6 col-sm-5">
					<p><img src="<?php echo $tab1['seo-services-tab1-image']; ?>" alt="<?php echo $tab1['seo-services-tab1-image']['alt']; ?>" class="img-responsive"></p>
				</div>
				<div class="col-md-6 tab-pane-text">
					<h4><?php  echo $tab1['seo-services-tab1-title']; ?></h4>
					<p><?php  echo $tab1['seo-services-tab1-content']; ?></p> 
				</div>
			</div><!-- row -->
		</div><!-- tab-panel-->
		
		<div class="tab-pane" role="tabpanel" id="wd-tab2">
		<?php $tab2 = get_field('seo-services-tab2'); ?>
			<div class="row">
				<div class="col-md-6 col-sm-5">
					<p><img src="<?php echo $tab2['seo-services-tab2-image']; ?>" alt="<?php echo $tab2['seo-services-tab2-image']['alt']; ?>" class="img-responsive"></p>
				</div>
				<div class="col-md-6 tab-pane-text">
					<h4><?php  echo $tab2['seo-services-tab2-title']; ?></h4>
					<p><?php  echo $tab2['seo-services-tab2-content']; ?></p> 
				</div>
			</div><!-- row -->
		</div><!-- tab-panel-->
		
		<div class="tab-pane" role="tabpanel" id="wd-tab3">
			<?php $tab3 = get_field('seo-services-tab3'); ?>
			<div class="row">
				<div class="col-md-6 col-sm-5">
					<p><img src="<?php echo $tab3['seo-services-tab3-image']; ?>" alt="<?php echo $tab3['seo-services-tab3-image']['alt']; ?>" class="img-responsive"></p>
				</div>
				<div class="col-md-6 tab-pane-text">
					<h4><?php  echo $tab3['seo-services-tab3-title']; ?></h4>
					<p><?php  echo $tab3['seo-services-tab3-content']; ?></p> 
				</div>
			</div><!-- row -->
		</div><!-- tab-panel-->
		
		<div class="tab-pane" role="tabpanel" id="wd-tab4">
			<?php $tab4 = get_field('seo-services-tab4'); ?>
			<div class="row">
				<div class="col-md-6 col-sm-5">
					<p><img src="<?php echo $tab4['seo-services-tab4-image']; ?>" alt="<?php echo $tab4['seo-services-tab4-image']['alt']; ?>" class="img-responsive"></p>
				</div>
				<div class="col-md-6 tab-pane-text">
					<h4><?php  echo $tab4['seo-services-tab4-title']; ?></h4>
					<p><?php  echo $tab4['seo-services-tab4-content']; ?></p> 
				</div>
			</div><!-- row -->
		</div><!-- tab-panel-->	
		
		<div class="tab-pane" role="tabpanel" id="wd-tab5">
			<?php $tab5 = get_field('seo-services-tab5'); ?>
			<div class="row">
				<div class="col-md-6 col-sm-5">
					<p><img src="<?php echo $tab5['seo-services-tab5-image']; ?>" alt="<?php echo $tab5['seo-services-tab5-image']['alt']; ?>" class="img-responsive"></p>
				</div>
				<div class="col-md-6 tab-pane-text">
					<h4><?php  echo $tab5['seo-services-tab5-title']; ?></h4>
					<p><?php  echo $tab5['seo-services-tab5-content']; ?></p> 
				</div>
			</div><!-- row -->
		</div><!-- tab-panel-->	
	
	</div><!-- tab-content -->

  </div>
  
  <div class="row nopadding">
	<?php $mOrg = get_field('seo-services-mid_orange_box'); ?>
	<div class="col-lg-12 col-md-12 col-sm-12 orange-bg no text-center">
		<h4><?php  echo $mOrg['seo-services-mid_orange_box_title']; ?></h4>
		<?php  echo $mOrg['seo-services-mid_orange_box_content']; ?>
		<a class="margin-auto" href="<?php  echo $mOrg['seo-services-mid_orange_box_learn_more']; ?>">Learn More</a>
	</div>	
  </div>
  
  <div class="row p-top60">
		<div class="col-md-6 col-sm-6">
			<?php $bsce = get_field('seo-services-behind_the_scenes'); ?>
			<h4><?php  echo $bsce['seo-services-behind_the_scenes_title']; ?></h4>
			<?php  echo $bsce['seo-services-behind_the_scenes_content']; ?>
			
			<?php $offlink = get_field('seo-services-offsite_link_profile'); ?>
			<h4 class="m-top40"><?php  echo $offlink['seo-services-offsite_link_profile_title']; ?></h4>
			<?php  echo $offlink['seo-services-offsite_link_profile_content']; ?>
			
		</div>
		<div class="col-md-6 col-sm-6">
			<p><img src="<?php  echo $bsce['seo-services-behind_the_scenes_Image']; ?>" alt="<?php echo $bsce['seo-services-behind_the_scenes_Image']['alt']; ?>" class="img-responsive"></p>
			<div class="orange-bg no text-center m-top60">
				<?php  echo $offlink['seo-services-offsite_link_profile_orange_box']; ?>
			</div>
		</div>
			
  </div>
  
  <div class="row seo-icon-set">
	<!-- icons area -->
	<div class="col-md-12">
		<div class="col-md-4 col-sm-4 col-xs-12">
		  <?php $icon1 = get_field('seo-services-icon1'); ?>
			<div class="orange-bg text-center">
			<img src="<?php echo $icon1['seo-services-icon1_img']; ?>" alt="<?php echo $icon1['seo-services-icon1_img']['alt']; ?>" class="img-responsive" class="img-responsive"/>
			<h5><?php echo $icon1['seo-services-icon1_title']; ?></h5>
			</div>
			<p><?php echo $icon1['seo-services-icon1_content']; ?></p>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<?php $icon2 = get_field('seo-services-icon2'); ?>
			<div class="orange-bg text-center">
			<img src="<?php echo $icon2['seo-services-icon2_img']; ?>" alt="<?php echo $icon2['seo-services-icon2_img']['alt']; ?>" class="img-responsive" class="img-responsive"/>
			<h5><?php echo $icon2['seo-services-icon2_title']; ?></h5>
			</div>
			<p><?php echo $icon2['seo-services-icon2_content']; ?></p>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<?php $icon3 = get_field('seo-services-icon3'); ?>
			<div class="orange-bg text-center">
			<img src="<?php echo $icon3['seo-services-icon3_img']; ?>" alt="<?php echo $icon3['seo-services-icon3_img']['alt']; ?>" class="img-responsive" class="img-responsive"/>
			<h5><?php echo $icon3['seo-services-icon3_title']; ?></h5>
			</div>
			<p><?php echo $icon3['seo-services-icon3_content']; ?></p>
		</div>
		
	</div>
			
  </div>
  
  
  
  
</div>

<div class="text-center gray-strap">
	<?php $keywd = get_field('seo-services-keyword_research'); ?>
	<?php echo $keywd['seo-services-keyword_research_content']; ?>  
</div>

<div class="wrap960 seo-services-sec2">
  <div class="row nopadding">
	<?php $seostgy = get_field('seo-services-seo_strategy'); ?>	
	<div class="col-md-12">
	  <img src="<?php echo $seostgy['seo-services-seo_strategy_image']; ?>" alt="<?php echo $seostgy['seo-services-seo_strategy_image']['alt']; ?>" class="img-responsive" />
	  
		<br />
		
	  <div class="border-gray text-center">	
		<h4><?php echo $seostgy['seo-services-seo_strategy_title']; ?></h4>
		<?php echo $seostgy['seo-services-seo_strategy_content']; ?>
	  </div>
	  
	  <div class="row multicolor-box">
	  <?php $linkbuild = get_field('seo-services-link_building_seo'); ?>
		  <div class="col-md-6 org">
			<?php echo $linkbuild['seo-services-link_building_seo_orange_box']; ?>
		  </div>
		  <div class="col-md-6">
			<?php echo $linkbuild['seo-services-link_building_seo_gray_box']; ?>
		  </div>
	  </div>
	  
	  <div class="col-md-12 text-center styled-form">
	    <?php $seoform = get_field('seo-services-form'); ?>
		<?php echo $seoform['seo-services-form_title']; ?>	
		<?php echo $seoform['seo-services-form_form_content']; ?>	
	  </div>
	  
	</div>
	
  </div>
</div>

<?php get_footer(); ?>
