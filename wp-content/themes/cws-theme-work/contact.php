<?php
/**
 * Template Name: Contact
 *
 * 
 */
get_header();
 ?>

<section id="contact">

	<div class="left-pill"></div>

	<div class="right-pill"></div>

	<div class="container">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

		<div class="row">

			<div class="col-md-5 center-col text-center">

				<h2>Get in Touch</h2>

				<?php the_content() ?>

				<p class="address">Nashville Biosciences</p>

				<p>2525 West End Ave, Suite 930<br/>Nashville, TN 37203<br/>(615) 343-0212</p>

			</div>

		</div>

		<div id="map-area" class="row">

			<div class="col-md-offset-1 col-md-5 no-pad-right">

				<?php the_post_thumbnail('full', array('class'=>'img-responsive')) ?>

				<div class="bottom-contact">

					<p>Partnership Opportunities<br/><a href="mailto:customers@nashvillebiosciences.com">customers@nashvillebiosciences.com</a></p>

					<p>General Inquiries<br/><a href="mailto:info@nashvillebiosciences.com">info@nashvillebiosciences.com</a></p>

				</div>

			</div>

			<div class="col-md-5 no-pad-left">

				<?php the_field('map') ?>

				<div class="bottom-contact">

					<p>Careers Inquiries<br/><a href="mailto:careers@nashvillebiosciences.com">careers@nashvillebiosciences.com</a></p>

					<p>Media Inquiries<br/><a href="mailto:media@nashvillebiosciences.com">media@nashvillebiosciences.com</a></p>

				</div>				

			</div>

		</div>

		<?php endwhile; endif; ?>

	</div>

</section>

<?php get_footer() ?>