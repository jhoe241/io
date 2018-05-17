<?php
/*
Template Name: FAQ
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
  <div class="row m-top60">

	<?php $faq = get_field('faq'); ?>
	<div class="col-md-12 col-sm-12 col-xs-12 m-bottom40">
	  
	  <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><?php echo ($faq["faq-q1"]); ?></a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php echo ($faq["faq-ans1"]); ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><?php echo ($faq["faq-q2"]); ?></a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo ($faq["faq-ans2"]); ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><?php echo ($faq["faq-q3"]); ?></a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo ($faq["faq-ans3"]); ?>
                </div>
            </div>
        </div>
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapsefourth"><?php echo ($faq["faq-q4"]); ?></a>
                </h4>
            </div>
            <div id="collapsefourth" class="panel-collapse collapse">
                <div class="panel-body">
                    <?php echo ($faq["faq-ans4"]); ?>
                </div>
            </div>
        </div>
		
    </div>
	<p><strong>Note:</strong> Click on the linked Question text to expand or collapse Answer panels.</p>

	</div>
	
  </div>
</div>

</div><!-- custom-temp -->	
<?php get_footer(); ?>
