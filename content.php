<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php
		the_content( '続きを読む' );
		
		wp_link_pages(
			array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'demotheme' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);
		?>
		
	</div><!-- .entry-content -->
</article><!-- #post-## -->
	<p class="tags"><?php the_tags(); ?></p>