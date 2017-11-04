<!DOCTYPE html>
<html <?php language_attributes() ?>>
	<head>
		<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ) ?>">
		<title><?php wp_title( '-', true, 'right' ); echo esc_html( get_bloginfo( 'name' ) ) ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
		<meta name="format-detection" content="telephone=no">
		<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ) ?>">
		<?php get_template_part('partials/favicons') ?>

				<link href="#" rel="publisher"/>
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<?php wp_head() ?>

		<?php
			$post_slug = $post->post_name;
			$page_slug = 'page-'.$post_slug;
			$post_id   = 'post-id-'.$post->ID;
			$classes   = array( $page_slug, $post_id );
		?>
		<!-- Google Tag Manager -->

	</head>
	<body <?php body_class( $classes ) ?>>
		<a href="#main-content" class="skiplink" tabindex="-1">Skip Navigation</a>
		<!-- Google Tag Manager (noscript) -->


		<header id="main-header">

			<?php if(wp_is_mobile()): ?>

			<div id="m-toggle" class="header-top-wrap visible-xs affix">

				<a class="visible-xs" href="/">
					<img class="visible-xs" src="<?php bloginfo('template_url');?>/images/company-name-logo-sm.png" alt="Client Name HEre">
				</a>

				<nav id="mobile-nav" class="mobile-nav-links-container">

					<button class="nav-opener" data-toggle="collapse" data-target=".navbar-collapse">        MENU                  
                            <span></span>
                            <span></span>
                            <span></span>
                            
                    </button>	

					<?php wp_nav_menu( array( 
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'theme_location'  => 'mobile-menu',
						'menu_class' 		=> 'nav navbar-nav',
						'walker'          => new Walker_Nav_Primary()

					) ) ?>

				</nav>

			</div>

			<?php endif ?>

			<div class="container">

				<div class="row">

					<div class="col-md-3">

						<a class="site-logo" href="/">

							<img class="img-responsive"  src="<?php include('images/nashville-bio-logo.svg');?>"/>

						</a>

					</div>

					<div class="col-md-8">

						<div class="pl-65">

							<nav id="nav" class="navbar">

								<?php wp_nav_menu( array( 
									'container'         => 'div',
									'theme_location'  => 'header-menu',
									'menu_class' 		=> 'nav navbar-nav',
									'walker'          => new Walker_Nav_Primary()

								) ) ?>

							</nav>

						</div>

					</div>

				</div>

			</div>

		</header>
		
<?php get_template_part('partials/banner'); ?>
