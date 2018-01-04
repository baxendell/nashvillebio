<?php
/**
 * Template Name: Technology
 */
get_header() ?>

<section id="biovu">

	<div class="left-pill"></div>

	<div class="right-pill"></div>

	<div class="container">

		<div class="row">

			<div class="col-md-9 col-md-offset-1">

				<header>

					<span class="subtitle"><?php the_field('biovu_subtitle') ?></span>

					<h2><?php the_field('biovu_title') ?></h2>

				</header>

				<?php if ( have_posts() ) : ?> 

					<?php while ( have_posts() ) : the_post() ?>

						<?php the_content() ?>

				<?php endwhile; endif; ?>


			</div>

		</div>

		<div class="row">

			<div id="in-depth">

				<h2 class="text-center">An In-depth Look at BioVU</h2>

				<div class="in-depth-grid clearfix hidden-xs hidden-sm">

					<div class="in-depth-item">

						<h3>2.6<span>M</span> </h3>
						<p>De-identified Clinical<br/> Record Accessible</p>

					</div>

					<div class="in-depth-item">

						<h3>250<span>K</span> </h3>
						<p>Clinical records with linked DNA sample and potential for plasma collection</p>

					</div>

					<div class="in-depth-item">

						<h3>10 <span>Years</span> </h3>
						<p>Average Length of<br/> Clinical Data</p>

					</div>

					<div class="in-depth-item">

						<h3>$50<span>M+</span> </h3>
						<p>invested to create BioVU over the last 10 years</p>

					</div>


					<div class="in-depth-item">

						<h3>180 </h3>
						<p>Peer-reviewed publications showing utility of BioVU and related methods</p>

					</div>

				</div>

				<div class="col-md-9 col-md-offset-1">

					<p>Better understanding the mechanisms of disease can help scientists discover new treatment approaches and preventative measures; successfully tackling this breadth of disease is only possible with a dataset like BioVU.</p>

				</div>


			</div>

			<div class="row">
				<div class="col-md-9 col-md-offset-1">
					<h3>Methodology</h3>
					<p>Samples are donated via opt-in process and consented for translational research and scanned via a custom-developed sample acceptance program that includes automated exclusion based on specific criteria.</p>

					<p>Once a sample passes the necessary criteria, it is accepted by the program. Acceptance of a sample triggers the encryption program to assign a unique research ID number to the sample. Genetic samples are linked to the corresponding EHRs in which identifying information has been deleted to protect patient privacy.</p>

					<div class="col-md-8 col-md-offset-2">
						<img class="img-responsive alignnone wp-image-63 size-full" style="margin-top: 100px; margin-bottom: 100px;" src="http://nashvillebio.wpengine.com/wp-content/uploads/2017/11/tech-method.png" />
					</div>
				
				</div>
			
			</div>

			<div class="col-md-9 col-md-offset-1">

				<?php the_field('biovu_content') ?>

			</div>

		</div>

		<div class="row">

<!--
			<div class="col-md-7 center-col">

				<div class="disclaimer-box">

					<p>Records are linked to genetic samples through natural language processing to generate novel insights</p>

					<p>BioVU is unbiased, in that all diseases are included, in contrast to most clinical trials that exclude individuals with complex comorbidities or elderly patients</p>

					<p>Prospectively collected and stored DNA greatly reduces timeline to identify patient samples</p>

					<p>BioVU is EMR-derived, enabling real-world phenotypes to be derived electronically in a highly cost-efficient manner</p>

					<p>Unique algorithms identify phenotypes through combination of billing codes, clinical notes, medications, and lab/test results</p>

				</div>

			</div>
-->

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