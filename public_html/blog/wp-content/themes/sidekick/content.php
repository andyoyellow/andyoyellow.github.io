<?php
/**
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
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php superhero_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sidekick' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'sidekick' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
				<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( ', ', 'sidekick' ) );
					if ( $categories_list && superhero_categorized_blog() ) :
				?>
				<span class="cat-links">
					<?php printf( __( 'Posted in %1$s', 'sidekick' ), $categories_list ); ?>
				</span>
				<?php endif; // End if categories ?>

				<?php
					/* translators: used between list items, there is a space after the comma */
					$tags_list = get_the_tag_list( '', __( ', ', 'sidekick' ) );
					if ( $tags_list ) :
				?>
				<span class="sep"> | </span>
				<span class="tags-links">
					<?php printf( __( 'Tagged %1$s', 'sidekick' ), $tags_list ); ?>
				</span>
				<?php endif; // End if $tags_list ?>
			<?php endif; // End if 'post' == get_post_type() ?>

			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="sep"> | </span>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'sidekick' ), __( '1 Comment', 'sidekick' ), __( '% Comments', 'sidekick' ) ); ?></span>
			<?php endif; ?>

			<?php edit_post_link( __( 'Edit', 'sidekick' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div><!-- .hentry-wrap -->