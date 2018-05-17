<?php
/*
Template Name: Hosting Services
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
	<?php $hs1 = get_field('hs_hosting_domain'); ?>
	<div class="col-md-12 col-sm-12 full-w">
	  <img src="<?php echo ($hs1["hs_hosting_domain-image"]); ?>" alt="Hosting" class="img-responsive">
	</div>
	<div class="col-md-12 col-sm-12">
	    <?php echo ($hs1["hs_hosting_domain-content"]); ?>
	</div>
  </div>

<div class="row m-top40 m-bottom40 margin-auto border-b">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="package-wrapper">
 <div class="col-md-4 col-sm-4 col-xs-12">
  <div class="package">
	<?php $hs2 = get_field('hs_edit_standard_pricing'); ?>
    <div class="name">STANDARD</div>
    <div class="price"><?php echo ($hs2["hs_edit_standard_pricing-monthly"]); ?></div>
    <div class="trial"><?php echo ($hs2["hs_edit_standard_pricing-annually"]); ?> Annually</div>
    <hr>
    <?php echo ($hs2["hs_edit_standard_pricing-content"]); ?>
  </div>
 </div>
  <div class="col-md-4 col-sm-4 col-xs-12"> 
  <div class="package brilliant">
    <?php $hs3 = get_field('hs_edit_turbo_pricing'); ?>
    <div class="name">Turbo</div>
    <div class="price"><?php echo ($hs3["hs_edit_turbo_pricing-monthly"]); ?></div>
    <div class="trial"><?php echo ($hs3["hs_edit_turbo_pricing-annually"]); ?> Annually</div>
    <hr>
	<?php echo ($hs3["hs_edit_turbo_pricing-content"]); ?>
      
  </div>
 </div>
<div class="col-md-4 col-sm-4 col-xs-12"> 
  <div class="package">
	<?php $hs4 = get_field('hs_edit_extended_pricing'); ?>
    <div class="name">Extended</div>
    <div class="price"><?php echo ($hs4["hs_edit_extended_pricing-monthly"]); ?></div>
    <div class="trial"><?php echo ($hs4["hs_edit_extended_pricing-annually"]); ?> Annually</div>
    <hr>
	<?php echo ($hs4["hs_edit_extended_pricing-content"]); ?>
     
  </div>
 </div>
</div>
</div>
</div>
</div>

<div class="wrap960">
  <div class="row">
	<?php $hs5 = get_field('edit_wordpress_section'); ?>
	<div class="col-md-12 col-sm-12 col-xs-12">
		<img class="img-responsive" title="WordPress Logo" src="<?php echo ($hs5["edit_wordpress_section-image"]); ?>" alt="WordPress Logo" >
	</div>
	<div class="col-md-12 col-sm-12">
	    <h4 class="text-center h3 m-top60 m-bottom0"><?php echo ($hs5["edit_wordpress_section_pricing-title"]); ?></h4>
	</div>
  </div>
  
<div class="row m-top40 m-bottom40 margin-auto">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="package-wrapper">
 <div class="col-md-4 col-sm-4 col-xs-12">
  <div class="package">
	<?php $hs6 = get_field('hs_wp_edit_basic_pricing'); ?>
    <div class="name">Basic</div>
    <div class="price"><?php echo ($hs6["hs_wp_edit_basic_pricing-monthly"]); ?></div>
    <div class="trial"><?php echo ($hs6["hs_wp_edit_basic_pricing-annually"]); ?> Annually</div>
    <hr>
	<?php echo ($hs6["hs_wp_edit_basic_pricing-content"]); ?>
      
  </div>
 </div>
  <div class="col-md-4 col-sm-4 col-xs-12"> 
  <div class="package brilliant">
	<?php $hs7 = get_field('hs_wp_edit_professional_pricing'); ?>
    <div class="name">Professional</div>
    <div class="price"><?php echo ($hs7["hs_wp_edit_professional_pricing-monthly"]); ?></div>
    <div class="trial"><?php echo ($hs7["hs_wp_edit_professional_pricing-annually"]); ?> Annually</div>
    <hr>
	<?php echo ($hs7["hs_wp_edit_professional_pricing-content"]); ?>
      
  </div>
 </div>
<div class="col-md-4 col-sm-4 col-xs-12"> 
  <div class="package">
	<?php $hs8 = get_field('hs_wp_edit_advanced_pricing'); ?>
    <div class="name">Advanced</div>
    <div class="price"><?php echo ($hs8["hs_wp_edit_advanced_pricing-monthly"]); ?></div>
    <div class="trial"><?php echo ($hs8["hs_wp_edit_advanced_pricing-annually"]); ?> Annually</div>
    <hr>
	<?php echo ($hs8["hs_wp_edit_advanced_pricing-content"]); ?>
      
  </div>
 </div>
</div>
</div>
</div>
  
  <div class="row border-b">
	<?php $hs9 = get_field('hs_wp_edit_wordpress_content'); ?>
	<div class="col-md-12 col-sm-12">
		<?php echo ($hs9["hs_wp_edit_wordpress_content-content"]); ?>
		<?php echo ($hs9["hs_wp_edit_wordpress_content-content2"]); ?>
	</div>
  </div>
  
  <div class="row border-b">
	<div class="col-md-12 col-sm-12">
		<?php $hs10 = get_field('hs_mps'); ?>
		<?php echo ($hs10["hs_mps_edit_content"]); ?>
		
	</div>
	
	<div class="col-md-7 col-sm-9 col-xs-12">
		<?php $hs11 = get_field('hs_mps_benefits'); ?>
		<?php echo ($hs11["hs_mps_benefits-content"]); ?>
			
	</div>
	<div class="col-md-5 col-sm-3 col-xs-12">
		<img class="img-responsive" title="iOnline Virtual Private Server" src="<?php echo ($hs11["hs_mps_benefits-image"]); ?>" alt="iOnline"/>
    </div>
	
	  <div class="col-md-12 col-sm-12 col-xs-12">
	    <h3 class="m-bottom20 text-center h2 title-b">iOnline Managed Server Packages</h3>
		
	    <h4 class="m-bottom40 text-center h3">Hard Drive Based</h4>
	  
		<div class="package-wrapper">
		 <div class="col-md-4 col-sm-4 col-xs-12">
		  <div class="package">
			<?php $hs12 = get_field('hs_mps_hdd_starter_pricing'); ?>
			<div class="name">Starter</div>
			<div class="price"><?php echo ($hs12["hs_mps_hdd_starter_pricing-monthly"]); ?></div>
			<div class="trial"><?php echo ($hs12["hs_mps_hdd_starter_pricing-setup"]); ?> Setup</div>
			<hr>
			<?php echo ($hs12["hs_mps_hdd_starter_pricing-content"]); ?>
			  
		  </div>
		 </div>
		 <div class="col-md-4 col-sm-4 col-xs-12">
		  <div class="package brilliant">
			<?php $hs13 = get_field('hs_mps_hdd_advanced_pricing'); ?>
			<div class="name">Advanced</div>
			<div class="price"><?php echo ($hs13["hs_mps_hdd_advanced_pricing-monthly"]); ?></div>
			<div class="trial"><?php echo ($hs13["hs_mps_hdd_advanced_pricing-setup"]); ?> Setup</div>
			<hr>
			<?php echo ($hs13["hs_mps_hdd_advanced_pricing-content"]); ?>
			  
		  </div>
		 </div>
		 <div class="col-md-4 col-sm-4 col-xs-12">
		  <div class="package">
			<?php $hs14 = get_field('hs_mps_hdd_professional_pricing'); ?>
			<div class="name">Professional</div>
			<div class="price"><?php echo ($hs14["hs_mps_hdd_professional_pricing-monthly"]); ?></div>
			<div class="trial"><?php echo ($hs14["hs_mps_hdd_professional_pricing-setup"]); ?> Setup</div>
			<hr>
			<?php echo ($hs14["hs_mps_hdd_professional_pricing-content"]); ?>
			  
		  </div>
		 </div>
		 
		</div>
	  </div>
	
	
	  <div class="col-md-12 col-sm-12 col-xs-12">
	    <h4 class="m-bottom40 m-top60 text-center h3">SSD Based</h4>
		<div class="package-wrapper">
		 <div class="col-md-4 col-sm-4 col-xs-12">
		  <div class="package">
			<?php $hs15 = get_field('hs_mps_ssd_starter_pricing'); ?>
			<div class="name">Starter</div>
			<div class="price"><?php echo ($hs15["hs_mps_ssd_starter_pricing-monthly"]); ?></div>
			<div class="trial"><?php echo ($hs15["hs_mps_ssd_starter_pricing-setup"]); ?> Setup</div>
			<hr>
			<?php echo ($hs15["hs_mps_ssd_starter_pricing-content"]); ?>
			  
		  </div>
		 </div>
		 <div class="col-md-4 col-sm-4 col-xs-12">
		  <div class="package brilliant">
			<?php $hs16 = get_field('hs_mps_ssd_advanced_pricing'); ?>
			<div class="name">Advanced</div>
			<div class="price"><?php echo ($hs16["hs_mps_ssd_advanced_pricing-monthly"]); ?></div>
			<div class="trial"><?php echo ($hs16["hs_mps_ssd_advanced_pricing-setup"]); ?> Setup</div>
			<hr>
			<?php echo ($hs16["hs_mps_ssd_advanced_pricing-content"]); ?>
			  
		  </div>
		 </div>
		 <div class="col-md-4 col-sm-4 col-xs-12">
		  <div class="package">
			<?php $hs17 = get_field('hs_mps_ssd_professional_pricing'); ?>
			<div class="name">Professional</div>
			<div class="price"><?php echo ($hs17["hs_mps_ssd_professional_pricing-monthly"]); ?></div>
			<div class="trial"><?php echo ($hs17["hs_mps_ssd_professional_pricing-setup"]); ?> Setup</div>
			<hr>
			<?php echo ($hs17["hs_mps_ssd_professional_pricing-content"]); ?>
			  
		  </div>
		 </div>
		 
		</div>
	  </div>
	
  </div>
  
  <div class="row">
	<div class="col-md-12 col-sm-12">
		<?php $hs18 = get_field('hs_edit_domain_registration'); ?>
		<?php echo ($hs18["hs_edit_domain_registration-content"]); ?>
	</div>
  </div>
  
</div>

<div class="org-bg text-center org-strap m-top30">
  <div class="wrap960">
    <?php $hs19 = get_field('hs_orange_strap'); ?>
	<h4 class="margin-0"><?php echo ($hs19["hs_orange_strap-content"]); ?></h4>
  </div>
</div>

<div class="wrap960">
  <div class="row">	
	<div id="contact-information">
	  <div class="row padding-40 text-center styled-form">
		<?php $hs20 = get_field('hs_edit_form_section'); ?>
		<?php echo ($hs20["hs_edit_form_section-content"]); ?>
		<?php echo ($hs20["hs_edit_form_section-form_data"]); ?>
	  </div>
	</div>
  </div><!-- row -->	
</div>

</div>

<?php get_footer(); ?>
