<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Expound
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">

		<div class="site-branding">
				<div id="" class="" style="height:5px; border-top:5px solid #DF8E23;"></div>
				<div id="headerDate" style="float:right; margin-right:10px;">
				<?php the_time('j \d\e F \d\e Y \a \l\a\s G:i a') ?></div>
				<!-- #logo -->

                <!--<?php if($boton_video == 0 & $active_slider == 0 ){$style_logo = "position:relative; left:270px;'";} ?>-->

				<div id="logo" style="display:inline; float:left; ">
					<a href="<?php echo home_url(); ?>" title="<?php bloginfo('description')?>">
						<?php if ($logo_uploader) { ?>
            			<img src="<?php echo $logo_uploader ?>" />
            			<?php }else{ ?>
                        <img alt="<?php bloginfo('name');?>" src="<?php bloginfo('template_url'); ?>/images/logo.png" title="<?php bloginfo('description')?>">
                             <?php }?>
					</a>
				</div>
				<!-- Final #logo -->
				<div id="debate_widget" style="width:350px; height:180px;  float:left;" >
					<?php dynamic_sidebar('nuevo_widget');?>
				</div>
				<!-- Final #logo -->
				<!-- #logo -->
                <div id="tipoCambio" style="width:300px; height:180px; position:relative; float:right;">
                	<?php dynamic_sidebar('tipoCambio_widget');?>

				</div>
				<!-- Final #logo -->




			<!--<div class="site-title-group">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>-->
		</div>

		<nav id="site-navigation" class="navigation-main" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'expound' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'expound' ); ?>"><?php _e( 'Skip to content', 'expound' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 3 ) ); ?>
			<?php do_action( 'expound_navigation_after' ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="main" class="site-main">

			<div>
				<div id="my-mega-menu-widget" class="" style="float:left; width:23%;">
			<?php /* Widgetized sidebar */
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('my_mega_menu') ) : ?><?php endif; ?>
				</div>
				<div id="centroCen" class="" style="float:left; width:46%;"><?php if ( function_exists( "easingsliderlite" ) ) { easingsliderlite(); } ?></div>
				<div id="centroDer" class="" style="float:left; width:30%;"> 

<img alt="" src="http://miradorempresarial.ieduarm.org/wp-content/uploads/2013/08/menulateral.png" title="" width="207px" height="208px">

				</div>
			</div>
			