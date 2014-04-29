<?php
/** 
 *
 * Template Name: CES People
 *
 * @author 	pradeep sharma
 * @package The Bootstrap
 * @since	1.3.0	- 29.04.2012
 */

get_header(); ?>


<div class="main_content">
<div class="row animated fadeInLeft">
<div style="margin-top: 30px;" class="span2 margin_main_container" id="scrollingDiv">
<h4>CES People</h4>

<?php 
wp_nav_menu( array(
'container'			=>	'div',
'container_id'	=>	'cssmenu',
'container_class'	=>	'',
'theme_location'	=>	'people-menu',
'depth'				=>	3,
'fallback_cb'		=>	false,
'walker'			=>	new The_Bootstrap_Nav_sedebar,
) ); ?>

</div>
				
				

<div class="span6 margin_main_container">
<?php //tha_content_before(); ?>
<?php tha_content_top();

the_post();
get_template_part( '/partials/content', 'people' );
//comments_template( '', true );

tha_content_bottom(); ?>
<?php tha_content_after(); ?>
</div>	
<div class="span16 margin_main_container">
<?php the_post_thumbnail( $size, $attr ); ?> 
</div>
</div></div>

<?php   
get_footer();

