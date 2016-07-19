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
    var config = {
      kitId: 'dqj8pyu',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/main-min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="body__wrapper">

		<header role="header" class="header">

      <div class="header__logo">
					<a href="<?php echo get_home_url(); ?>">

            <?php if ( is_front_page() ): ?>
              <img src= "<?php
                echo get_template_directory_uri(); ?>/assets/img/svg/wide_switzerland_deflogo_white.svg"
                alt="Logo Wide Switzerland"
                >
            <?php else: ?>
              <img src= "<?php
                echo get_template_directory_uri(); ?>/assets/img/svg/wide_switzerland_deflogo.svg"
                alt="Logo Wide Switzerland"
                >
            <?php endif; ?>
					</a>
			</div>

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


      <div class="language" id="language">
        <a href="#" class="language__item language__item--active">De</a>
        <a href="#" class="language__item">En</a>
      </div>

		</header>

    <main role="main" class="main">
