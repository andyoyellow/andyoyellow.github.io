<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Sidekick
 * @since Sidekick 1.0
 */

$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'sidekick-panoramic' );

// If there is an image and it is wider than or equal to 1500, and at smaller
// than or equal to 500, add class and show image.
if ( $image && $image[1] >= 1500 && $image[2] <= 500 ) : ?>

<div class="hentry-wrap featured">
	<?php the_post_thumbnail( 'sidekick-panoramic' ); ?>

<?php else : ?>

<div class="hentry-wrap">

<?php endif; ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'sidekick' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->

		<?php edit_post_link( __( 'Edit', 'sidekick' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
	</article><!-- #post-<?php the_ID(); ?> -->
</div><!-- .hentry-wrap -->
