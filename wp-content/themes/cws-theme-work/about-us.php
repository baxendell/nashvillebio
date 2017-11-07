<?php
/**
 * Template Name: About Us
 */
get_header() ?>

<section id="history">

	<div class="left-pill">
		<svg 
		 xmlns="http://www.w3.org/2000/svg"
		 xmlns:xlink="http://www.w3.org/1999/xlink"
		 width="575px" height="350px">
		<path fill-rule="evenodd"  fill="rgb(135, 212, 196)"
		 d="M350.000,0.000 L800.000,0.000 C993.300,0.000 1150.000,156.701 1150.000,350.000 C1150.000,543.300 993.300,700.000 800.000,700.000 L350.000,700.000 C156.701,700.000 -0.000,543.300 -0.000,350.000 C-0.000,156.701 156.701,0.000 350.000,0.000 Z"/>
		</svg>

	</div>

	<div class="right-pill"></div>

	<div class="container">

		<div class="row">

			<div class="col-md-9 center-col">

				<header>

					<span class="subtitle"><?php the_field('history_subtitle') ?></span>

					<h2><?php the_field('history_title') ?></h2>

				</header>

				<?php the_field('history_content') ?>

			</div>

		</div>

	</div>

</section>

<section id="team" class="lt-blue-bg">

	<div class="container">

		<div class="row">

			<div class="col-md-offset-1 col-md-6">

				<header>

					<span class="subtitle"><?php the_field('team_subtitle') ?></span>

					<h2><?php the_field('team_title') ?></h2>

				</header>

				 <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active"><a href="#mgmt" aria-controls="mgm" role="tab" data-toggle="tab">Management</a></li>
				    <li role="presentation"><a href="#board" aria-controls="board" role="tab" data-toggle="tab">Board of Directors</a></li>
				    <li role="presentation"><a href="#sab" aria-controls="sab" role="tab" data-toggle="tab">Scientific Advisory Board</a></li>
				  </ul>				

			</div>

		</div>

		<div class="row">

			<div class="col-md-offset-1 col-md-11">

				<div class="tab-content">
				    <div role="tabpanel" class="tab-pane fade in active" id="mgmt">

				    	<div class="team-member">

				    		<!--image-->
				    		<h3><!--name--></h3>
				    		<h4><!--job title--></h4>

				    		<a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

			    		</div>
				    	
				    </div>

				    <div role="tabpanel" class="tab-pane fade" id="board">

				    	<div class="team-member">

				    		<!--image-->
				    		<h3><!--name--></h3>
				    		<h4><!--job title--></h4>

				    		<a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

			    		</div>

				    	
				    </div>
				    <div role="tabpanel" class="tab-pane fade" id="sab">

				    	<div class="team-member">

				    		<!--image-->
				    		<h3><!--name--></h3>
				    		<h4><!--job title--></h4>

				    		<a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

			    		</div>

		    		</div>

			    </div>
		  	</div>

	  	</div>

  	</div>

</section>

<section id="publications">

	<div class="left-pill"></div>

	<div class="right-pill"></div>

	<div class="container">

		<div class="row">

			<div class="col-md-9 center-col">

				<header>

					<h2><?php the_field('publications_title') ?></h2>

				</header>

				<?php the_field('publications_content') ?>

			</div>

		</div>

	</div>

</section>

<?php get_footer() ?>