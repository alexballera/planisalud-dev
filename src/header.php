<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!--<meta name="viewport" content="width=device-width" />-->
<meta name="viewport" content="width=320px, user-scalable=no">
<!--<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' /> -->
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php  wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
<script type="text/javascript" src="wp-includes/js/jquery/prueba.js"></script>
<script type="text/javascript" src="wp-includes/js/jquery/valida.js"></script>
<script src="wp-includes/js/jquery/jPaginate.js"></script>
<script type="text/javascript" src="wp-includes/js/jquery/jquery00.js"></script>
<script type="text/javascript" src="wp-includes/js/jquery/jquery01.js"></script>
<script type="text/javascript" src="wp-includes/js/jquery/jquery02.js"></script>
<script type="text/javascript" src="wp-includes/js/jquery/jquery.liveFilter.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVDhLxMdvQR74Ci7qrOEmWx3mDqLr0qoM">    </script>
<script type="text/javascript">
  function initialize() {
    var mapOptions = {
      center: { lat: 10.472704, lng: -66.815526},
      zoom: 8
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'),            mapOptions);      }
    var torre = new google.maps.LatLng(10.4738053, -66.8192889);    new google.maps.Marker({     position: torre,       });
    google.maps.event.addListener(gallPetersMap, 'load', initialize);
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<!--<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<style>
@-moz-document url-prefix() {
  #casita {
    cursor: pointer;
    left: -20px;
    margin-bottom: -3px;
    margin-left: 0;
    margin-top: 0;
    top: 6px;
    margin-right: 4px;
    margin-top: 6px !important;
    border: 0 none;
    display:block;
    background:url("http://www.planisalud.com/wp-includes/images/planisalud/casita-de-home.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
  }
  #casita:hover {
    background:url("http://www.planisalud.com/wp-includes/images/planisalud/casita-home-gris.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
  }
}
</style>
</head>
<div style="position: absolute; top: -999px;left: -999px;">
</div>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header row" role="banner">
		<hgroup class="col-12">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
    <div class="logoInfoContainer col-12">
      <p class="col-12 col-lg-4">
        Planisalud Medicina Prepagada, C.A. RIF. J-31237788-7. Inscrita en la Superintendencia de la Actividad Aseguradora bajo el Nº 4.
        Publicidad aprobada por la Superintendencia de la Actividad Aseguradora bajo el Nº 15.447
      </p>
      <?php /*
      <p>Planisalud Medicina Prepagada, C.A. Rif: J-31237788-7. Inscrita en la Superintendencia de la Actividad Aseguradora bajo el Nº 4.
      Publicidad aprobada por la Superintendencia de la Actividad Aseguradora bajo el Nº</p>
      */ ?>
    </div>
    <a href="http://www.planisalud.com" class="col-12 col-lg-4 logo">
      <img id="planisalud-logo" src="wp-includes/images/planisalud/planisalud-logo.png">
    </a>
    <a href="http://www.planisalud.com/?page_id=1387">
      <img id="medicina-prepagada">
    </a>
    <div id="chat-superior" class="col-12 col-lg-4">
      <div class="inner-container">
        <img src="wp-includes/images/planisalud/chat-superior2.png" style="height: 40px; width: 40px;">
        <div id="chateaconnosotros" style="left: 30px; color: #2cb4aa; position: relative; font-weight: bold; cursor: pointer; font-size: 18px; margin-left: 16px; top: -44px;">¡Chatea con nosotros!<img style=" left: 3px; top: 11px;" class ="cero"  height="58px" width="193px" alt="" />
        </div>
      </div>
    </div>
    <div align="center" id="input-header" class="col-12 col-lg-4">
      <aside class="widget widget_search" id="search-2">
        <form action="http://www.planisalud.com" class="searchform-2" id="searchform-2" method="get" role="search" autocomplete="on">
          <div>
            <label for="s" class="screen-reader-text">Buscar:</label>
            <input type="text" id="s" name="s" value="" autocomplete="off">
            <input type="submit" value="Buscar" id="searchsubmit">
          </div>
        </form>
      </aside>
    </div>
    <div id="x" style="" >
      <img  style="width: 8px; height: 8px;" src="wp-includes/images/planisalud/equis-azul.png">
    </div>
    <nav id="site-navigation" class="main-navigation" role="navigation">
      <button class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></button>
      <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
    </nav><!-- #site-navigation -->
    <?php if(function_exists('dp_breadcrumb')){echo dp_breadcrumb();} ?>
		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->
	<div id="main" class="wrapper">
