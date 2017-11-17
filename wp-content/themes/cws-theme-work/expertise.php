<?php
/**
 * Template Name: Expertise
 */
get_header() ?>

<section id="offerings">

	<div class="left-pill"></div>

	<div class="right-pill"></div>

	<div class="container">

		<div class="row">

			<div class="col-md-9 col-md-offset-1">

				<header>

					<h2>Our Offerings</h2>

				</header>

				<?php if ( have_posts() ) : ?> 

					<?php while ( have_posts() ) : the_post() ?>

						<?php the_content() ?>

				<?php endwhile; endif; ?>

			</div>

		</div>

		<div class="row">

			<div class="col-md-offset-1 col-md-5">

				<div class="border-box sameHeight">

					<i class="compass-icon"></i>

					<?php the_field('left_box_content') ?>

				</div>

			</div>

			<div class="col-md-offset-1 col-md-5">

				<div class="border-box sameHeight">

					<i class="pill-icon"></i>

					<?php the_field('right_box_content') ?>

				</div>

			</div>

		</div>

		<div id="projects" class="row hidden-xs">

			<header class="col-md-6 center-col text-center no-pad">

				<h2>Example Projects</h2>

				<?php the_field('projects_content') ?>

			</header>

			<div class="clear"></div>

			<div class="col-lg-10 center-col">

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">

						<img src="<?php bloginfo('template_url') ?>/images/icons/target-icon-1.png" srcset="<?php bloginfo('template_url') ?>/images/icons/target-icon-1.png 1x, <?php bloginfo('template_url') ?>/images/icons/target-icon-1@2x.png 2x" />

						<h3 class="text-uppercase">Early Stage<br/> Target Prioritization</h3>

						<a href="#target" aria-controls="target" role="tab" data-toggle="tab">View Case Study</a>

					</li>

					<li role="presentation">

						<img src="<?php bloginfo('template_url') ?>/images/icons/target-icon-2.png" srcset="<?php bloginfo('template_url') ?>/images/icons/target-icon-2.png 1x, <?php bloginfo('template_url') ?>/images/icons/target-icon-2@2x.png 2x" />


						<h3 class="text-uppercase">Target Disease<br/> Deep Dives</h3>

						<a href="#deep-dive" aria-controls="deep-dive" role="tab" data-toggle="tab">View Case Study</a>

					</li>

					<li role="presentation">

						<img src="<?php bloginfo('template_url') ?>/images/icons/charts-icon.png" srcset="<?php bloginfo('template_url') ?>/images/icons/charts-icon.png 1x, <?php bloginfo('template_url') ?>/images/icons/charts-icon@2x.png 2x" />

						<h3 class="text-uppercase">Cohort Analysis<br/> and Screening</h3>

						<a href="#cohort" aria-controls="cohort" role="tab" data-toggle="tab">View Case Study</a>

					</li>

				</ul>

			</div>

		</div>

	</div>

</section>

<section id="project-tabs" class="lt-blue-bg hidden-xs">

	<div class="container">

		<div class="row">

			<div class="col-lg-10 col-lg-offset-1">

				<div class="tab-content">

					<div role="tabpanel" class="tab-pane active" id="target">
						
						<header>

							<h2>Early Stage Target Priotization</h2>

						</header>

						<div class="project-content-block">

							<div class="project-content">

								<?php the_field('early_target_row_1') ?>

							</div>

							<img src="<?php bloginfo('template_url') ?>/images/expertise/thumbprint.png" srcset="<?php bloginfo('template_url') ?>/images/expertise/thumbprint.png 1x, <?php bloginfo('template_url') ?>/images/expertise/thumbprint@2x.png 2x" />

						</div>

						<div class="project-content-block">

							<div class="project-content">

								<?php the_field('early_target_row_2') ?>

							</div>

							<img src="<?php bloginfo('template_url') ?>/images/expertise/target.png" srcset="<?php bloginfo('template_url') ?>/images/expertise/target.png 1x, <?php bloginfo('template_url') ?>/images/expertise/target@2x.png 2x" />

						</div>

						<div class="project-content-block">

							<div class="project-content">

								<?php the_field('early_target_row_3') ?>

							</div>

							<img src="<?php bloginfo('template_url') ?>/images/expertise/checklist.png" srcset="<?php bloginfo('template_url') ?>/images/expertise/checklist.png 1x, <?php bloginfo('template_url') ?>/images/expertise/checklist@2x.png 2x" />

						</div>

					</div>

					<div role="tabpanel" class="tab-pane" id="deep-dive">
						
						<header>

							<h2>Target Disease Deep Dives</h2>

						</header>

						<div class="project-content-block">

							<div class="project-content">

								<?php the_field('early_target_row_1') ?>

							</div>

							<img src="<?php bloginfo('template_url') ?>/images/expertise/thumbprint.png" srcset="<?php bloginfo('template_url') ?>/images/expertise/thumbprint.png 1x, <?php bloginfo('template_url') ?>/images/expertise/thumbprint@2x.png 2x" />

						</div>

						<div class="project-content-block">

							<div class="project-content">

								<?php the_field('early_target_row_2') ?>

							</div>

							<img src="<?php bloginfo('template_url') ?>/images/expertise/target.png" srcset="<?php bloginfo('template_url') ?>/images/expertise/target.png 1x, <?php bloginfo('template_url') ?>/images/expertise/target@2x.png 2x" />

						</div>

						<div class="project-content-block">

							<div class="project-content">

								<?php the_field('early_target_row_3') ?>

							</div>

							<img src="<?php bloginfo('template_url') ?>/images/expertise/checklist.png" srcset="<?php bloginfo('template_url') ?>/images/expertise/checklist.png 1x, <?php bloginfo('template_url') ?>/images/expertise/checklist@2x.png 2x" />

						</div>

					</div>

					<div role="tabpanel" class="tab-pane" id="cohort">
						
						<header>

							<h2>Cohort Analysis and Screening</h2>

						</header>

						<div class="project-content-block">

							<div class="project-content">

								<?php the_field('early_target_row_1') ?>

							</div>

							<img src="<?php bloginfo('template_url') ?>/images/expertise/thumbprint.png" srcset="<?php bloginfo('template_url') ?>/images/expertise/thumbprint.png 1x, <?php bloginfo('template_url') ?>/images/expertise/thumbprint@2x.png 2x" />

						</div>

						<div class="project-content-block">

							<div class="project-content">

								<?php the_field('early_target_row_2') ?>

							</div>

							<img src="<?php bloginfo('template_url') ?>/images/expertise/target.png" srcset="<?php bloginfo('template_url') ?>/images/expertise/target.png 1x, <?php bloginfo('template_url') ?>/images/expertise/target@2x.png 2x" />

						</div>

						<div class="project-content-block">

							<div class="project-content">

								<?php the_field('early_target_row_3') ?>

							</div>

							<img src="<?php bloginfo('template_url') ?>/images/expertise/checklist.png" srcset="<?php bloginfo('template_url') ?>/images/expertise/checklist.png 1x, <?php bloginfo('template_url') ?>/images/expertise/checklist@2x.png 2x" />

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>

<?php get_footer() ?>