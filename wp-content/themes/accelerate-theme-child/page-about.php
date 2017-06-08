<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post();
			?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .site-content -->
</section>

<section class="services">
	<div class='about-content'>
		<?php while ( have_posts() ) : the_post();
			$icon_1 = get_field('icon1');
			$icon_2 = get_field('icon2');
			$icon_3 = get_field('icon3');
			$icon_4 = get_field('icon4');
			$size = "full";?>
			<div class ="intro">
				<h5>Our Services</h5>
				<p>We take pride in our clients and the content we create for them.</p>
				<p>Here's a brief overview of our offered services.</p>
			</div>
			<div class="offering">
				<div class="service-image-left">
					<?php echo wp_get_attachment_image( $icon_1, $size ); ?>
				</div>
				<div class="service-text-right">
					<h2><?php the_field('service1'); ?></h2>
					<p><?php the_field("service1_info"); ?></p>
				</div>
			</div>
			<div class="offering">
			<div class="service-text-left">
					<h2><?php the_field('service2'); ?></h2>
					<p><?php the_field("service2_info"); ?></p>
				</div>
				<div class="service-image-right">
					<?php echo wp_get_attachment_image( $icon_2, $size ); ?>
				</div>
			</div>
			<br>
			<div class="offering">
				<div class="service-image-left">
					<?php echo wp_get_attachment_image( $icon_3, $size ); ?>
				</div>
				<div class="service-text-right">
					<h2><?php the_field('service3'); ?></h2>
					<p><?php the_field("service3_info"); ?></p>
				</div>
			</div>
			<div class="offering">
				<div class="service-text-left">
					<h2><?php the_field('service4'); ?></h2>
					<p><?php the_field("service4_info"); ?></p>
				</div>
				<div class="service-image-right">
					<?php echo wp_get_attachment_image( $icon_4, $size ); ?>
				</div>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div>
</section>

<section class="work-with-us">
	<div class="call-to-action">
      <h3>Interested in working with us?</h3>
      <a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
  </div>
</section>


<?php get_footer(); ?>
