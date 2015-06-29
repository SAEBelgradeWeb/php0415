<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package vencanje
 */

?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8" />
	<title><?php bloginfo('name') ?></title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
	<meta name="author" content="" />

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
   

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" />

    
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php wp_head(); ?>
</head>


<body>

<div id="bodychild">
	
	<div id="outercontainer">
    	
        <!-- HEADER -->
        <div id="outerheader">
        	<div class="shadow-l"></div>
            <div class="shadow-r"></div>
        	<div class="container">
            
            <header id="top">
            	<div class="row">
                    <div id="logo" class="twelve columns">
                    	<span class="desc"><?php bloginfo('description') ?></span>
                        <a href="index.html"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="row">
                    <section id="navigation" class="twelve columns">
       

                        <?php
                        wp_nav_menu(array(
                        	'theme_location' => 'gornji_meni',
                        	'container' => 'nav',
                        	'container_id' => 'nav-wrap',
                        	'menu_class' => 'sf-menu',
                        	'menu_id' => 'topnav'                     
                        ));
                         ?>
                    </section>
                </div>
                <div class="clear"></div>
            </header>
            
            </div>
        </div>
        <!-- END HEADER -->