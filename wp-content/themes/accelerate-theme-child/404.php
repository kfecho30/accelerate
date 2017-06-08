<?php
/**
 * The template for displaying 404 errors.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main" class="error">
			<h2>Abandon Ship: 404 Error</h2>
			<img src="https://pbs.twimg.com/media/ClGHY7JWkAAT7CS.jpg" class="whale"/>
			<a class="button" id="four" href="<?php echo home_url(); ?>">Come back to dry land</a>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
