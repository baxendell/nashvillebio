<?php
/**
 * Template Name: Careers
 */
get_header() ?>

<section id="careers">

	<div class="left-pill"></div>

	<div class="right-pill"></div>

	<div class="container">

		<div class="row">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

			<div class="col-md-offset-1 col-md-5">

				<h2>Our Careers</h2>

				<?php the_content() ?>

				<a class="ocean-blue-border-btn btn" href="/contact/">Contact Us</a>

			</div>

			<div class="col-md-5">

				<?php the_post_thumbnail('full', array('class'=>'img-responsive')) ?>

			</div>

			<?php endwhile; endif; ?>

		</div>

		<?php $args = array(
			'post_type' => 'careers',
			'posts_per_page'=> -1,
			'orderby' => 'menu_order',
			);

		$career_query = new WP_Query($args);

		if($career_query->have_posts()):
			$i = 0;
		?>

		<div id="openings" class="row">

			<div class="col-md-9 center-col">

				<h2 class="text-center">Current Openings</h2>

				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

				<?php while($career_query->have_posts()): $career_query->the_post(); $i++; ?>

				  <div class="panel panel-default">

				    <div class="panel-heading" role="tab" id="heading-<?php echo $i; ?>">
				      <h3 class="panel-title">
				        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#career-<?php echo $i; ?>" aria-expanded="true" aria-controls="career-<?php echo $i; ?>">
				          <?php the_title() ?>
				        </a>
				      </h3>
				    </div>
				    <div id="career-<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?php echo $i; ?>">
				      <div class="panel-body">
				        <?php the_content() ?>
				      </div>
				    </div>
				  </div>

				<?php endwhile ?>

				</div>

				<div class="border-box">

					<p>Nashville Biosciences is an equal opportunity employer and all qualified applicants will receive consideration for employment without regard to race, color, religion, sex, national origin, disability status, protected veteran status, or any other characteristic protected by applicable law. Nashville Biosciences will only accept job applications from candidates who are properly documented with authorization to work in the United States.</p>

					<p><strong>Notice to Recruiter/Staffing Agencies:</strong><br/>
					Recruiters and staffing agencies should not contact Nashville Biosciences through this page. We require that all recruiters and staffing agencies have a signed contract on file. Any resumes submitted through the web site or directly by recruiters or staffing agencies will be considered unsolicited and the company will not be responsible for any related fees.</p>

				</div>

			</div>

		</div>

		<?php endif; wp_reset_postdata(); ?>

	</div>

</section>



<?php get_footer() ?>