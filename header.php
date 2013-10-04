<?php
/**
 * Header Template
 *
 * Please do not edit this file. This file is part of the Cyber Chimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category CyberChimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.cyberchimps.com/
 */
?>
	<!DOCTYPE html>
	<!--[if lt IE 7]>
	<html class="ie ie6 lte9 lte8 lte7" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if IE 7]>
	<html class="ie ie7 lte9 lte8 lte7" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if IE 8]>
	<html class="ie ie8 lte9 lte8" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if IE 9]>
	<html class="ie ie9" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if gt IE 9]>
	<html <?php language_attributes(); ?>> <![endif]-->
	<!--[if !IE]><!-->
<html <?php language_attributes(); ?>>
	<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=3.0, width=device-width"/>

		<title><?php wp_title( '' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

		<!-- IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/inc/js/html5.js" type="text/javascript"></script>
		<![endif]-->

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

<?php do_action( 'cyberchimps_before_wrapper' ); ?>

	<header class="container-full-width" id="cc_header">

		<div class="container">

			<div class="container-fluid">

				<div class="row-fluid">

					<div class="span4">

						<?php cyberchimps_logo_description(); ?>

					</div>
					<!-- span 4 -->


					<?php do_action( 'cyberchimps_before_navigation' ); ?>

					<div class="span8">
						<?php do_action( 'cyberchimps_header_display' ); ?>
						<nav id="navigation" role="navigation">
							<div class="main-navigation navbar<?php echo ( cyberchimps_get_option( 'cyberchimps_skin_color' ) == 'default' ) ? ' navbar-inverse' : ''; ?>">
								<div class="navbar-inner">

									<?php /* hide collapsing menu if not responsive */
									if (cyberchimps_get_option( 'responsive_design' )): ?>
									<div class="nav-collapse collapse">
										<div class="container">
											<?php endif; ?>
											<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav', 'walker' => new cyberchimps_walker(), 'fallback_cb' => 'cyberchimps_fallback_menu' ) ); ?>

											<?php if( cyberchimps_get_option( 'searchbar' ) == "1" ) {
												get_search_form();
											} ?>

											<?php /* hide collapsing menu if not responsive */
											if (cyberchimps_get_option( 'responsive_design' )): ?>
										</div>
										<!-- container -->
									</div>
								<!-- collapse -->
								<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
									<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</a>
								<?php endif; ?>

								</div>
								<!-- .navbar-inner .row-fluid -->
							</div>
							<!-- main-navigation navbar -->
						</nav>
						<!-- #navigation -->
					</div>
					<!-- span 8 -->
				</div>
				<!-- .row-fluid -->
			</div>
			<!-- .container fluid -->
		</div>
		<!-- .container -->
	</header><!-- container full width -->

<?php do_action( 'cyberchimps_after_navigation' ); ?>

<?php if( cyberchimps_secondary_menu_title() != '' || has_nav_menu( 'secondary' ) ): ?>
	<div class="container-full-width" id="second_menu">
		<div class="container">
			<div class="container-fluid">
				<div class="row-fluid">
					<?php
					if( has_nav_menu( 'secondary' ) ) {
						?>
						<div class="title <?php echo $span = ( has_nav_menu( 'secondary' ) ) ? 'span5' : 'span12'; ?>">
							<?php echo ( 'post' == get_post_type() && !is_single() || is_search() ) ? '<h1>' : '<h2>'; ?>
							<?php echo cyberchimps_secondary_menu_title(); ?>
							<?php echo ( 'post' == get_post_type() && !is_single() || is_search() ) ? '</h1>' : '</h2>'; ?>
						</div>
					<?php
					}?>

					<?php if( has_nav_menu( 'secondary' ) ): ?>
						<div class="span7">
							<nav id="navigation" role="navigation">
								<div class="second-navigation navbar">
									<div class="navbar-inner">

										<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'depth' => 1, 'menu_class' => 'nav', 'walker' => new cyberchimps_walker(), 'fallback_cb' => 'cyberchimps_fallback_menu' ) ); ?>

									</div>
									<!-- .navbar-inner .row-fluid -->
								</div>
								<!-- main-navigation navbar -->
							</nav>
							<!-- #navigation -->
						</div><!--span7 -->
					<?php endif; ?>

				</div>
				<!-- row fluid -->
			</div>
			<!-- .container fluid -->
		</div>
		<!-- container -->
	</div><!-- #second-menu -->
<?php endif; ?>