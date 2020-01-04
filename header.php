<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tb2wp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

	<header id="header">
			<div class="container header-holder">
				<div class="logo">
					<a href="#"><img src="<?php bloginfo('template_url');?>/images/logo.png" alt="10" width="49" height="49"></a>
				</div>
				<div class="header-block">
					<nav class="navbar main-nav navbar-expand-md">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"><span></span></span>
						</button>
						<div class="collapse navbar-collapse" id="nav">
						<?php 
                wp_nav_menu( array(
                  'theme_location'  => 'primary',
                  'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                  'container'       => 'div',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id'    => 'nav',
                  'menu_class'      => 'navbar-nav mr-auto',
                  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'          => new WP_Bootstrap_Navwalker(),
              ) );
              ?>
							<!-- <ul class="navbar-nav navigation">
								<li class="nav-item active"><a class="nav-link" href="#">Network 10</a></li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">about</a>
									<ul class="dropdown-menu">
										<li>
											<a class="dropdown-link" href="#">management</a>
										</li>
										<li>
											<a class="dropdown-link" href="#">community</a>
										</li>
										<li>
											<a class="dropdown-link" href="#">contact us</a>
										</li>
									</ul>
								</li>
								<li class="nav-item"><a class="nav-link" href="#">news & insights</a></li>
								<li class="nav-item"><a class="nav-link" href="#">advertise</a></li>
								<li class="nav-item"><a class="nav-link" href="#">careers</a></li>
							</ul> -->
							<div class="top-bar bg-soft-gray">
								<div class="container">
									<ul class="list-unstyled list-header d-md-flex justify-content-md-end">
										<li class="mb-0">
											<a href="#" class="btn-widget btn-block py-2 px-md-2"><img class="d-block" src="<?php bloginfo('template_url');?>/images/logo1.png" width="61" height="24" alt="10 play"></a>
										</li>
										<li class="mb-0">
											<a href="#" class="btn-widget btn-block py-2 px-md-2"><img class="d-block" src="<?php bloginfo('template_url');?>/images/logo2.png" width="57" height="24" alt="10 daily"></a>
										</li>
										<li class="mb-0">
											<a href="#" class="btn-widget btn-block py-2 px-md-2"><img class="d-block" src="<?php bloginfo('template_url');?>/images/logo3.png" width="83" height="24" alt="10 speaks"></a>
										</li>
										<li class="mb-0">
											<a href="#" class="btn-widget btn-block py-2 px-md-2"><img class="d-block" src="<?php bloginfo('template_url');?>/images/logo4.png" width="95" height="24" alt="10 All Access"></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</nav>
					<div class="search-holder dropdown">
						<a href="#" class="search-opener dropdown-toggle caret-none d-lg-none" data-toggle="dropdown"><i class="fas fa-search"></i></a>
						<div class="search-drop dropdown-menu dropdown-lg-static">
							<form class="search-form" action="#">
								<fieldset>
									<input type="search" placeholder="Search Network 10" class="form-control">
									<button type="submit"><i class="fas fa-search"></i></button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</header>