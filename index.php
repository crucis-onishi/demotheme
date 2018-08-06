 <?php get_header(); ?>
   <div class="wrap">
     <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

<?php
	if( have_posts() ) : //1.投稿データがあるかの条件分岐
		while( have_posts() ) : // 2.表示する投稿データがあれば繰り返し処理開始
			the_post(); //3.ループ処理に必要なカウント処理等            

			get_template_part( 'content', get_post_format() );

		endwhile; // 5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了

		the_posts_pagination( array(
					'mid_size' => 3,
				) );
		  
	else : // 6.投稿データがなければ

				?><p>表示する記事がありません</p><?php // 7.ない時の処理

	endif; // 8.条件分岐終了
	?>

      </main><!-- #main -->
     </div><!-- #primary -->
<?php get_sidebar(); ?>
   </div><!-- .wrap -->
<?php get_footer();