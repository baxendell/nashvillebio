<?php
/**
 * Template Name: About Us
 */
get_header() ?>

<section id="history">

	<div class="left-pill"></div>

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

			<div class="col-md-offset-1 col-md-7 col-lg-offset-1 col-lg-6">

				<header>

					<span class="subtitle"><?php the_field('team_subtitle') ?></span>

					<h2><?php the_field('team_title') ?></h2>

					<p><?php the_field('team_excerpt') ?></p>

				</header>

				 <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				  	<li role="presentation" class="active"><a href="#management" aria-controls="mgm" role="tab" data-toggle="tab">Management</a></li>
				  	<li role="presentation"><a href="#board" aria-controls="board" role="tab" data-toggle="tab">Board of Directors</a></li>
				    <!--<li role="presentation"><a href="#sab" aria-controls="sab" role="tab" data-toggle="tab">Scientific Advisory Board</a></li>-->
				  </ul>				

			</div>

		</div>

		<div class="row">

			<div class="col-md-offset-1 col-md-11">

				<div class="tab-content">

					<?php
					$_terms = get_terms( array('team_category') );
					$i = 0;
					foreach ($_terms as $term) :
						$i++;
					    $term_slug = $term->slug;
					    $_posts = new WP_Query( array(
					                'post_type'         => 'team',
					                'posts_per_page'    => -1,
					                'orderby' => 'menu_order',
					                'order' => 'ASC',
					                'tax_query' => array(
					                    array(
					                        'taxonomy' => 'team_category',
					                        'field'    => 'slug',
					                        'terms'    => $term_slug,
					                    ),
					                ),
					            ));

					    if($i == 2) {
					    	$active = 'active';
					    } else {
					    	$active = '';
					    }
			            ?>
				    <div role="tabpanel" class="tab-pane fade in <?php echo $active; ?>" id="<?php echo $term->slug; ?>">
					    <?php
					    if( $_posts->have_posts() ) : while ( $_posts->have_posts() ) : $_posts->the_post();
					        ?>
				    	<div class="team-member">
				    		<div class="team-image">

				    			<?php the_post_thumbnail( array(211, 211) ); ?>

			    			</div>
				    		<h3><?php the_title() ?></h3>
				    		<h4><?php the_field('position') ?></h4>
				    		<?php if(get_field('linkedin_link')): ?>
				    		<a class="linkedin" href="<?php the_field('linkedin_link') ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

				    		<?php endif ?>

			    		</div>
					        <?php endwhile; endif; wp_reset_postdata(); ?>
				    </div>
				    <?php endforeach; ?>

			    </div>
		  	</div>

	  	</div>

  	</div>

</section>

<section id="publications">

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