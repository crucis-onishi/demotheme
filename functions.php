<?php

function demotheme_setup() {

	// テーマサポート
	add_theme_support( 'automatic-feed-links' ); // フィードリンクをサポート
	add_theme_support( 'title-tag' ); // タイトルタグをサポート
	add_theme_support( 'post-thumbnails' ); // アイキャッチ画像をサポート
	
	// カスタムメニューをサポート＆メニューの選択位置登録
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'demotheme' ),
		'social' => __( 'Social Links Menu', 'demotheme' ),
	) );

	// HTML5をサポート
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// 投稿フォーマットをサポート
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );
}
add_action( 'after_setup_theme', 'demotheme_setup' );

// コンテンツ幅
if ( ! isset( $content_width ) ) {
        $content_width = 580;
    }

// タイトル出力
function demo_title( $title ) {
	if ( is_front_page() && is_home() ) { //トップページなら
		$title = get_bloginfo( 'name', 'display' );
	} elseif ( is_singular() ) { //シングルページなら
		$title = single_post_title( '', false );
	}
	return $title;
}
add_filter( 'pre_get_document_title', 'demo_title' );

// スタイルシート、スクリプト読み込み
function demo_script() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'demo_script' );

// ウィジェット
function demo_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'メインサイドバー用ウィジェット', 'demotheme' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'メインサイドバー用のウィジェットです。', 'demotheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => __( '予備用ウィジェット', 'demotheme' ),
		'id'            => 'sidebar-2',
		'description'   => __( '予備用のウィジェットです。', 'demotheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'demo_widgets_init' );