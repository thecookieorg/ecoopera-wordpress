<?php
/** home-page.php
 *
 * Template Name: Contact-Calgary
 *
 * @author 	pradeep sharma
 * @package The Bootstrap
 * @since	1.3.0	- 29.04.2012
 */

get_header(); ?>

<div style="margin-top: 88px;">
<div class="main_content">
<div class="row animated fadeInLeft">
<div class="span24 margin_main_container">
<?php //tha_content_before(); ?>
<?php tha_content_top();

the_post();
get_template_part( '/partials/content', 'home' );
//comments_template( '', true );

tha_content_bottom(); ?>
<?php tha_content_after(); ?>
<?php dynamic_sidebar('confootermenu'); ?> 
</div>

<div class="span3 margin_main_container">
<img src="<?php echo get_template_directory_uri(); ?>/img/contact-us-title.png">
<?php dynamic_sidebar('calegary'); ?> 
</div>
</div>
</div>

<?php  
get_footer();

