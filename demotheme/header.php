<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

 <div id="page" class="site">
  <header class="site-header">
   <div class="site-branding">
    <div class="wrap">
     <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
     <p class="site-description"><?php bloginfo( 'description' ); ?></p>
    </div><!-- .wrap -->
   </div><!-- .site-branding -->

   <div class="navigation-top">
    <div class="wrap">
	 <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'demotheme' ); ?>">

	<?php wp_nav_menu(
		array(
			'theme_location' => 'top',
			'menu_id'        => 'top-menu',
		)
	); ?>

	 </nav><!-- #site-navigation -->
	
    </div><!-- wrap -->
   </div><!-- .navigation-top -->
  </header><!-- header -->

  <div class="site-content-contain">
   <div class="site-content">
