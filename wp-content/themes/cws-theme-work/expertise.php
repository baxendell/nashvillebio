<?php
/**
 * Template Name: Expertise
 */
get_header() ?>

<section id="biovu">

	<div class="left-pill"></div>

	<div class="right-pill"></div>

	<div class="container">

		<div class="row">

			<div class="col-md-9 col-md-offset-1">

				<header>

					<h2><?php the_field('offering_title') ?></h2>

				</header>

				<?php if ( have_posts() ) : ?> 

					<?php while ( have_posts() ) : the_post() ?>

						<?php the_content() ?>

				<?php endwhile; endif; ?>

			</div>

		</div>

		<div class="row">

			<div class="col-md-offset-1 col-md-5">

				<div class="pr-40">

					<div class="border-box">

						<i class="compass-icon"></i>

						<h3><!--title--></h3>

						<!--box content-->

					</div>

				</div>

			</div>

			<div class="col-md-offset-1 col-md-5">

				<div class="pr-40">

					<div class="border-box">

						<i class="compass-icon"></i>

						<h3><!--title--></h3>

						<!--box content-->

					</div>

				</div>

			</div>

		</div>

		<div class="row">

			<div id="projects" class="col-md-6 center-col text-center">

				<h2>Example Projects</h2>

				<!--projects content-->

			</div>

		</div>

	</div>

</section>

<section id="phewas" class="gray-bg">

	<div class="container">

		<div class="row">

			<div class="col-md-9 col-md-offset-1">

				<header>

					<span class="subtitle"><?php the_field('phewas_subtitle') ?></span>

					<h2><?php the_field('phewas_title') ?></h2>

				</header>

				<?php the_field('phewas_content') ?>

			</div>

		</div>

	</div>

</section>

<?php get_footer() ?>