<?php ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title><?php
		global $page, $paged;
		wp_title('|', true, 'right');
		bloginfo('name');
		$site_description = get_bloginfo('description', 'display');
		if ($site_description && (is_home() || is_front_page())) { echo " | $site_description"; }
		if ( $paged >= 2 || $page >= 2 ) { echo ' | ' . sprintf('Page %s', max($paged, $page)); }
		?></title>
<script>document.documentElement.className += " js";</script>
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/vnd.microsoft.icon" /> 
    <script type="text/javascript" src="http://fast.fonts.net/jsapi/61089ced-ff88-45ca-8a21-5245fa8173cc.js"></script>    

	<?php wp_head(); ?>
</head>

<!--[if IE 8]><body <?php body_class('ie8'); ?>><![endif]-->
<!--[if IE 9]><body <?php body_class('ie9'); ?>><![endif]-->
<!--[if !IE]><!--><body <?php body_class(); ?>><!-- <![endif]-->

<!--<div id="headNav">
    <a href="javascript:smallFontSize();" class="size-small" title="Schrift kleiner darstellen">aA-</a> 
    <a href="javascript:normalFontSize();" class="size-normal" title="Schrift in normaler Größe darstellen">aA</a>
    <a href="javascript:largeFontSize();" class="size-large" title="Schrift größer darstellen">aA+</a> 
    </div>-->
<div id="headNav">    
 <?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('headNav') ) : ?>
<?php endif; ?> 
</div>

<div id="wrapper" class="size-normal">
    
    
  <header id="header">    
        <div id="headline">
          <h2><a href="/">Integrationsbetrieb<br />
          Gartenschau Kaiserslautern</a></h2>
          <h3>28. März bis 31. Oktober</h3>
        </div>
    
        <h1><a href="/"><img src="<?php bloginfo('template_directory'); ?>/img/logo_gartenschau.png" width="288" height="320" id="logo" /></a></h1>        
  </header>


<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>