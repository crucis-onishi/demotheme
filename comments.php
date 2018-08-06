<div id="comments" class="comments-area">

	<?php
	if ( have_comments() ) :
	?>
		<h2 id="comments" class="comments-title">コメント</h2>

		<ol class="comment-list">
			<?php wp_list_comments( 'avatar_size=60' ); ?>
		</ol>
	<?php
		the_comments_pagination();
	endif; ?>
	<?php
		$args = array(
			'title_reply' => 'コメントを残す',
			'label_submit' => 'コメントを送信',
		);
		comment_form( $args );
	?>
</div><!-- #comments -->