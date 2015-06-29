<?php 

get_header();
?>
<!-- SLIDER -->
<div id="outerslider">
	<div class="container">
		<div class="row">
			<div id="slidercontainer" class="twelve columns">

				<section id="slider">
					<div id="slideritems" class="flexslider">
						<ul class="slides">
							<li>
								<img src="images/content/slide1.jpg" alt="" />
								<div class="flex-caption">
									<h1>Love is color of blind</h1>
									<p>Maecenas egestas congue nulla, eget feugiat diam<br /> eleifend in. Nunc augue mi, vestibulum.</p>
								</div>
							</li>
							<li>
								<img src="images/content/slide2.jpg" alt="" />
								<div class="flex-caption">
									<h1>Nulla porta, ipsum sit amet</h1>
									<p>Maecenas egestas congue nulla, eget feugiat diam eleifend in. Nunc augue mi, vestibulum.</p>
								</div>
							</li>
							<li>
								<img src="images/content/slide3.jpg" alt="" />
								<div class="flex-caption">
									<h1>Quisque lorem urna blandit </h1>
									<p>Maecenas egestas congue nulla, eget feugiat diam eleifend in. Nunc augue mi, vestibulum.</p>
								</div>
							</li>
						</ul>
						<img src="images/slider-shadow.png" alt="" />
					</div>
				</section>

			</div>
		</div>
	</div>
</div>
<!-- END SLIDER -->


<!-- MAIN CONTENT -->
<div id="outermain">
	<div class="container">
		<div class="row">
			<section id="maincontent" class="twelve columns">

				<section class="content">

					<div class="highlight-content">
						<h1> We're getting married August 18, 2013</h1>
					</div>

					<div id="featured" class="row">
						<div class="one_third columns">
							<img src="images/icons/icon5.png" alt="" />
							<h3>Our Wedding Location</h3>
							<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore feugiat tristique tincidunt nunc ullamcorper.</p>
						</div>
						<div class="one_third columns">
							<img src="images/icons/icon6.png" alt="" />
							<h3>Our Gift Registry</h3>
							<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore feugiat tristique tincidunt nunc ullamcorper.</p>
						</div>
						<div class="one_third columns">
							<img src="images/icons/icon7.png" alt="" />
							<h3>Honeymoon Destinantion</h3>
							<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore feugiat tristique tincidunt nunc ullamcorper.</p>
						</div>
					</div>


					<div class="separator"></div>

					<div class="row">
						<?php 
						$the_query = new WP_Query( 'category_name=about' ); ?>

						<?php if ( $the_query->have_posts() ) : ?>

							<!-- pagination here -->

							<!-- the loop -->
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

								<div class="one_half columns">
									<div class="frame10 circle">
										<?php the_post_thumbnail(); ?>
									</div>
									<div class="indentleft">
										<h3 class="title"><?php the_title(); ?></h3>
										<p><?php the_content(); ?></p>
										<a href="#" class="button">Read more <span></span></a>
									</div>
								</div>

							<?php endwhile; ?>
							<!-- end of the loop -->

							<!-- pagination here -->

							<?php wp_reset_postdata(); ?>

						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>

						
						
					</div> 


				</section>

			</section>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->

<?php

get_footer();

?>