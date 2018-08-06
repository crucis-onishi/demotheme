 <?php get_header(); ?>
   <div class="wrap">
     <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

			<?php
			//ループ開始
			while ( have_posts() ) : the_post();

				get_template_part( 'content', 'page' );

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // ループ終了
			?>

      </main><!-- #main -->
     </div><!-- #primary -->
<?php get_sidebar(); ?>
   </div><!-- .wrap -->
<?php get_footer();