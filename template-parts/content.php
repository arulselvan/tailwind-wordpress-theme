<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-12' ); ?>>
    <?php if ( ( function_exists('has_post_thumbnail') ) && ( has_post_thumbnail() ) ) { 
				$post_thumbnail_id = get_post_thumbnail_id();
				$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
	?>
   
    <?php if ( is_search() || is_archive() ) : ?>

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>

    <?php else : ?>

   
    <?php endif; ?>

</article>
