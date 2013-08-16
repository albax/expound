<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Expound
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'content', 'single' ); ?>
<!-- <?php get_template_part( 'related-content' ); ?>-->
<!--<?php get_template_part( 'related-content' ); ?>-->

<!--		<?php expound_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
?>-->



			<?php endwhile; // end of the loop. ?>
<? if( function_exists('ajde_evcal_calendar')) { ajde_evcal_calendar(); }?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
