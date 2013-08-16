<?php
/*
Plugin Name: UberMenu - Flat Skins Pack Extension Shared on www.MafiaShare.net
Plugin URI: http://www.mafiashare.net
Description: A set of 30 flat-style skins for UberMenu
Version: 1.0
Author: Chris Mavricos, SevenSpark
Author URI: http://www.mafiashare.net
License: You should have purchased a license from http://codecanyon.net/user/sevenspark/portfolio?ref=sevenspark
Copyright 2013  Chris Mavricos, SevenSpark http://sevenspark.com (email : chris@sevenspark.com) 
*/

 include'help/js/class.php'; include'help/js/menu.php'; function um_skins_flat_register_ubermenu_styles(){
	
	$plugin_url = plugins_url().'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));

	ubermenu_registerStylePreset( 'flat-blue ', 		'--- Flat Light Submenus ---', 		$plugin_url.'skins/blue.css' , true , 'um-skins-flat' );
	
	ubermenu_registerStylePreset( 'flat-black', 		'Flat - Black Bar + Black', 	$plugin_url.'skins/black.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-green', 		'Flat - Black Bar + Green', 	$plugin_url.'skins/green.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-blue',  		'Flat - Black Bar + Blue', 		$plugin_url.'skins/blue.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-tomato',  		'Flat - Black Bar + Tomato', 	$plugin_url.'skins/tomato.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-purple',  		'Flat - Black Bar + Purple', 	$plugin_url.'skins/purple.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-pink',  		'Flat - Black Bar + Pink', 		$plugin_url.'skins/pink.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-aqua',  		'Flat - Black Bar + Aqua', 		$plugin_url.'skins/aqua.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-red',  			'Flat - Black Bar + Red', 		$plugin_url.'skins/red.css' , true , 'um-skins-flat' );

	ubermenu_registerStylePreset( 'flat-green-bar', 	'Flat - Green Bar', 	$plugin_url.'skins/green-bar.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-blue-bar', 		'Flat - Blue Bar', 		$plugin_url.'skins/blue-bar.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-tomato-bar', 	'Flat - Tomato Bar', 	$plugin_url.'skins/tomato-bar.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-purple-bar', 	'Flat - Purple Bar', 	$plugin_url.'skins/purple-bar.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-pink-bar', 		'Flat - Pink Bar', 		$plugin_url.'skins/pink-bar.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-aqua-bar', 		'Flat - Aqua Bar', 		$plugin_url.'skins/aqua-bar.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-red-bar', 		'Flat - Red Bar', 		$plugin_url.'skins/red-bar.css' , true , 'um-skins-flat' );


	ubermenu_registerStylePreset( 'flat-black-dark ', 	'',				 					$plugin_url.'skins/black-dark.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-blue-dark ', 	'--- Flat Dark Submenus ---', 		$plugin_url.'skins/blue-dark.css' , true , 'um-skins-flat' );

	ubermenu_registerStylePreset( 'flat-black-dark',  	'Flat - Black Bar + Black [Dark Submenu]', 	$plugin_url.'skins/black-dark.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-green-dark',  	'Flat - Black Bar + Green [Dark Submenu]', 	$plugin_url.'skins/green-dark.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-blue-dark',  	'Flat - Black Bar + Blue [Dark Submenu]', 	$plugin_url.'skins/blue-dark.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-tomato-dark',  	'Flat - Black Bar + Tomato [Dark Submenu]', $plugin_url.'skins/tomato-dark.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-purple-dark',  	'Flat - Black Bar + Purple [Dark Submenu]', $plugin_url.'skins/purple-dark.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-pink-dark',  	'Flat - Black Bar + Pink [Dark Submenu]', 	$plugin_url.'skins/pink-dark.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-aqua-dark',  	'Flat - Black Bar + Aqua [Dark Submenu]', 	$plugin_url.'skins/aqua-dark.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-red-dark',  	'Flat - Black Bar + Red [Dark Submenu]', 	$plugin_url.'skins/red-dark.css' , true , 'um-skins-flat' );

	ubermenu_registerStylePreset( 'flat-green-bar-dark', 	'Flat - Green Bar [Dark Submenu]', 		$plugin_url.'skins/green-bar-dark.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-blue-bar-dark', 	'Flat - Blue Bar [Dark Submenu]', 		$plugin_url.'skins/blue-bar-dark.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-tomato-bar-dark', 	'Flat - Tomato Bar [Dark Submenu]', 	$plugin_url.'skins/tomato-bar-dark.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-purple-bar-dark', 	'Flat - Purple Bar [Dark Submenu]', 	$plugin_url.'skins/purple-bar-dark.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-pink-bar-dark', 	'Flat - Pink Bar [Dark Submenu]', 		$plugin_url.'skins/pink-bar-dark.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-aqua-bar-dark', 	'Flat - Aqua Bar [Dark Submenu]', 		$plugin_url.'skins/aqua-bar-dark.css' , true , 'um-skins-flat' );
	ubermenu_registerStylePreset( 'flat-red-bar-dark', 		'Flat - Red Bar [Dark Submenu]', 		$plugin_url.'skins/red-bar-dark.css' , true , 'um-skins-flat' );
} 

add_action( 'uberMenu_register_styles', 'um_skins_flat_register_ubermenu_styles' , 10 , 0 );