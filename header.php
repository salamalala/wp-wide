<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wide
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script>
  (function(d) {
    var tkTimeout=3000;
    if(window.sessionStorage){if(sessionStorage.getItem('useTypekit')==='false'){tkTimeout=0;}}
    var config = {
      kitId: 'dqj8pyu',
      scriptTimeout: tkTimeout
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+"wf-inactive";if(window.sessionStorage){sessionStorage.setItem("useTypekit","false")}},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+="wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/main-min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="body__wrapper">

		<header role="header" class="header">

			<a class="header__logo" href="<?php echo get_home_url(); ?>">
			</a>

      <div class="nav">
        <a class="nav__menu-button" id="js-mobile-menu" href="javascript:void(0)">Menu</a>
        <nav role="navigation" id="nav">
            <?php

            $args = array(
              'container'       => 'ul',
              'menu_class'      => 'nav__list show',
              'menu_id'         => 'js-navigation-menu',
              'depth'           => 0,
              'walker'          => new My_Sub_Menu()
              );
            wp_nav_menu( $args )

            ?>
        </nav>
      </div>

      <!-- polylang plugin language switcher -->
      <ul class="language"><?php pll_the_languages();?></ul>

		</header>

    <main role="main" class="main">
