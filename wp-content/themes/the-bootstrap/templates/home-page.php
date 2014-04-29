<?php
/** home-page.php
 *
 * Template Name: Home Page
 *
 * @author 	pradeep sharma
 * @package The Bootstrap
 * @since	1.3.0	- 29.04.2012
 */

get_header(); ?>

<!-- slider start-------------------------------------------------->		
<div class="row animated fadeInLeft" style="margin-top: 117px;">
<div class="span12">
<!-- slide show starts here -->
<div id="slideshow">



<div style="display: block;">
<a href="http://cesengineering.ca/news/"><img src="<?php echo get_template_directory_uri(); ?>/banner/4.png" alt="CES Engineering Fourth News Image"></a> </div>
<div style="display: none;"><a href="http://cesengineering.ca/news/"><img src="<?php echo get_template_directory_uri(); ?>/banner/5.png" alt="CES Engineering Fifth News Image"></a>	</div>
<div style="display: none;"><a href="http://cesengineering.ca/news/"><img src="<?php echo get_template_directory_uri(); ?>/banner/1.png" alt="CES Engineering First News Image"></a></div>
<div style="display: none;"><a href="http://cesengineering.ca/news/"><img src="<?php echo get_template_directory_uri(); ?>/banner/2.png" alt="CES Engineering Second News Image"></a></div>
<div style="display: block;"><a href="http://cesengineering.ca/news/"><img src="<?php echo get_template_directory_uri(); ?>/banner/3.png" alt="CES Engineering Third News Image"></a></div>
</div>
<!-- slide show ends here -->
</div>
</div>	
<!-- slider end-------------------------------------------------->



<?php //tha_content_before(); ?>
<?php tha_content_top();

the_post();
get_template_part( '/partials/content', 'home' );
//comments_template( '', true );

tha_content_bottom(); ?>
<?php tha_content_after(); ?>

<?php  
get_footer();

