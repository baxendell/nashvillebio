<?php
/**
 * Banner Partial
 */

?>

<div id="banner">

	<div class="container">

		<div class="row">

			<div class="col-md-10 center-col">

				<h1 class="banner-title">

					<?php if(get_field('banner_title')) {
						the_field('banner_title');
						} else {
							the_title();
						} 
					?>

				</h1>
				<?php if(is_front_page()): ?>

				<a class="blue-border-btn btn" href="#">Learn More</a>

				<?php endif ?>

			</div>

		</div>

	</div>

</div>

