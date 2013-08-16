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
			<div style="float:left; background-color:red; width:80px;">
				menu
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

		<div style="background-color:teal; outline:0px solid teal; height:260px;">

				<div id="my-mega-menu-widget" class="" style="float:left; width:16%; outline:0px solid orange;">
				<?php /* Widgetized sidebar */
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('my_mega_menu') ) : ?><?php endif; ?>
				</div>
		<div id="centroCen" class="" style="float:left; width:40%;"><?php if ( function_exists( "easingsliderlite" ) ) { easingsliderlite(); } ?></div>

		<div id="centroAgenda" class="" style="float:left; width:22%; outline:0px solid orange; background-color:#E6EADB; padding:10px;">

				<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=250&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=9r4hihvh7j2lkdbfjek81a2k2o%40group.calendar.google.com&amp;color=%23E6EADB&amp;ctz=America%2FLima" style=" border-width:0 " width="230" height="230" frameborder="0" scrolling="no"></iframe>
		</div>

		<div id="centroDer" class="" style="float:right; width:20%; background-color:#ffffff; height:255px;"> 

<img alt="" src="http://miradorempresarial.ieduarm.org/wp-content/uploads/2013/08/menulateral.png" title="" width="207px" height="208px">

		</div>
		
		</div>


<div id="main" class="site-main">
	
			
			