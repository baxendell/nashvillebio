<?php
/**
 * Template Name: Partnering
 */
get_header() ?>

<section id="partnering">

	<div class="left-pill"></div>

	<div class="right-pill"></div>

	<div class="container">

		<div class="row">

			<div class="col-md-5 col-md-offset-1">

				<h2>Partnering With Us</h2>

				<?php if ( have_posts() ) : ?> 

					<?php while ( have_posts() ) : the_post() ?>

						<?php the_content() ?>

				<?php endwhile; endif; ?>

			</div>

			<div class="col-md-5 text-center">

				<h3>The Right Indication.<br/><span class="line-2">The Right Patient Population.</span><br/><span class="line-3">The Right Trial Endpoints.</span></h3>

			</div>


		</div>

		<div id="our-offerings" class="row">

			<h2 class="text-center">Our Offerings</h2>

			<div class="col-md-offset-1 col-md-10">

				<div class="border-box">

					<i class="compass-icon"></i>

					<?php the_field('left_box_content') ?>

				</div>

				<div class="border-box">

					<i class="pill-icon"></i>

					<?php the_field('center_box_content') ?>

				</div>

				<div class="border-box">

					<i class="pill-icon"></i>

					<?php the_field('right_box_content') ?>

				</div>

			</div>

		</div>

	</div>

</section>

<section id="efforts" class="lt-blue-bg">

	<div class="container">

		<div class="row">

			<div class="col-md-6 center-col text-center">

				<h2>Our Efforts</h2>

				<?php the_field('efforts_content') ?>

				<a class="ocean-blue-border-btn btn" href="#">View Case Studies</a>

			</div>

		</div>

	</div>

</section>

<?php get_footer() ?>