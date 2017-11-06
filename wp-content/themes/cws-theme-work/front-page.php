<?php
/**
 * Front-page
 *
 * Front page action hooks in inc/front-page-hooks.php
 */

get_header();

?>

<section id="home-sec-1">

	<div class="container">

		<div class="row">

			<div class="col-md-8 no-pad center-col">

				<header class="text-center">

					<span class="subtitle"><?php the_field('section_1_subtitle') ?></span>

					<h2><?php the_field('section_1_title') ?></h2>

				</header>

			</div>

		</div>

		<div class="row">

			<div class="technology-grid">

				<div class="technology-item">

					<img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/icons/advancing-icon.png" data-at2x="<?php bloginfo('template_url');?>/images/icons/advancing-icon@2x.png" />
					<h3>Advancing</h3>
					<p>Translational and Precision Medicine</p>

				</div>

				<div class="technology-item">

					<img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/icons/solving-icon.png" data-at2x="<?php bloginfo('template_url');?>/images/icons/solving-icon@2x.png" />
					<h3>Solving</h3>
					<p>Complex Genomic and Bioinformatics Problems </p>

				</div>

				<div class="technology-item">

					<img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/icons/accelerate-icon.png" data-at2x="<?php bloginfo('template_url');?>/images/icons/accelerate-icon@2x.png" />
					<h3>Accelerating</h3>
					<p>Rational Drug Development and Use</p>

				</div>

				<div class="technology-item">

					<img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/icons/enable-icon.png" data-at2x="<?php bloginfo('template_url');?>/images/icons/enable-icon@2x.png" />
					<h3>Enabling</h3>
					<p>Clinically Meaningful Discoveries </p>

				</div>

				<div class="technology-item">

					<img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/icons/identify-icon.png" data-at2x="<?php bloginfo('template_url');?>/images/icons/identify-icon@2x.png" />
					<h3>Identifying</h3>
					<p>Patients Most Likely to Benefit from Treatment</p>

				</div>

			</div>

			<div class="text-center">

				<a class="ocean-blue-border-btn btn" href="#">Learn More</a>

			</div>

		</div>

	</div>

</section>

<section id="home-sec-2" class="lt-blue-bg">

	<div class="container">

		<div class="row">

			<header class="col-md-offset-1 col-md-10">

				<span class="subtitle"><?php the_field('section_2_subtitle') ?></span>

				<h2><?php the_field('section_2_title') ?></h2>				

			</header>

		</div>

		<div class="row">

			<div class="col-md-offset-1 col-md-6">

				<?php the_field('section_2_content') ?>

				<a class="ocean-blue-border-btn btn" href="#">Learn More</a>

			</div>

			<div class="col-md-4">

				<div class="text-center">

					<img class="circle-target"  src="<?php bloginfo('template_url');?>/images/home/circle-thing.png" data-at2x="<?php bloginfo('template_url');?>/images/home/circle-thing@2x.png" />

				</div>

			</div>

		</div>

	</div>

</section>

<section id="home-sec-3">

	<div class="container">

		<div class="row">

			<header class="col-md-6 center-col text-center">

				<h2><?php the_field('section_3_title') ?></h2>

				<p><?php the_field('section_3_snippet') ?></p>

			</header>

			<img class="circles"  src="<?php bloginfo('template_url');?>/images/home/circles.png" data-at2x="<?php bloginfo('template_url');?>/images/home/circles@2x.png" />

		</div>

		<div class="row">

			<div class="col-md-6 no-pad center-col text-center">

				<?php the_field('section_3_content') ?>

				<a class="ocean-blue-border-btn btn" href="#">Learn More</a>

			</div>

		</div>

	</div>

</section>

<?php get_footer() ?>

