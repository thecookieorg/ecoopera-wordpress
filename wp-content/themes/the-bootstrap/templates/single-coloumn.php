<?php
/** home-page.php
 *
 * Template Name: single coloum Page
 *
 * @author 	pradeep sharma
 * @package The Bootstrap
 * @since	1.3.0	- 29.04.2012
 */

get_header(); ?>

<div style="margin-top: 124px;">

<?php //tha_content_before(); ?>
<?php tha_content_top();

the_post();
get_template_part( '/partials/content', 'home' );
//comments_template( '', true );

tha_content_bottom(); ?>
<?php tha_content_after(); ?>
</div>

<?php  
get_footer();

