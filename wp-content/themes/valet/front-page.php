<?php 
/*
	Template Name: Home
*/
 ?>

<?php
	get_header();

<<<<<<< HEAD
	get_template_part('slider');
=======
	get_template_part('template-parts/hero-section/hero');
>>>>>>> 14f3a3c2c39fb1be7cf5ca369cf56587a6151d0d

?>

		<div id="fh5co-main">
			
			<div class="fh5co-cards">
				<div class="container-fluid">
					<div class="row animate-box">
						<div class="col-md-12 heading text-center"><h2><?php echo $valet['op-title']; ?></h2></div>
					</div>

					<div class="row">
						<?php 
							$outsanding_products = new WP_Query(array(
								'post_type' => 'valet_op',
								'posts_per_page' => 4
							));
							while($outsanding_products->have_posts()) : $outsanding_products->the_post();
						?>
						<div class="col-lg-3 col-md-6 col-sm-6 animate-box">
							<a class="fh5co-card" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('op-thumb', ['style' => 'margin: 0 auto', 'class' => 'img-responsive', 'alt' => 'Outstanding Product-01']); ?>
								<div class="fh5co-card-body">
									<h3><?php the_title(); ?></h3>
									<p><?php the_content(); ?></p>
								</div>
							</a>
						</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						

					</div>
				</div>
			</div>

			<div class="container">
				
				<div class="row text-center" id="fh5co-features">
					<div class="col-md-12 heading animate-box"><h2><?php echo $valet['awf-title']; ?></h2></div>
					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box">
						<div class="fh5co-feature-icon">
							<i class="<?php echo $valet['awf-icon'][0]; ?>"></i>
						</div>
						<h3 class="heading"><?php echo $valet['awf-header'][0]; ?></h3>
						<p><?php echo $valet['awf-desc'][0]; ?></p>
					</div>
					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box"> 
						<div class="fh5co-feature-icon">
							<i class="<?php echo $valet['awf-icon'][1]; ?>"></i>
						</div>
						<h3 class="heading"><?php echo $valet['awf-header'][1]; ?></h3>
						<p><?php echo $valet['awf-desc'][1]; ?></p>
					</div>

					<div class="clearfix visible-sm-block"></div>

					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box"> 
						<div class="fh5co-feature-icon">
							<i class="<?php echo $valet['awf-icon'][2]; ?>"></i>
						</div>
						<h3 class="heading"><?php echo $valet['awf-header'][2]; ?></h3>
						<p><?php echo $valet['awf-desc'][2]; ?></p>
					</div>

					<div class="clearfix visible-md-block visible-lg-block"></div>

					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box">
						<div class="fh5co-feature-icon">
							<i class="<?php echo $valet['awf-icon'][3]; ?>"></i>
						</div>
						<h3 class="heading"><?php echo $valet['awf-header'][3]; ?></h3>
						<p><?php echo $valet['awf-desc'][3]; ?></p>
					</div>

					<div class="clearfix visible-sm-block"></div>

					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box"> 
						<div class="fh5co-feature-icon">
							<i class="<?php echo $valet['awf-icon'][4]; ?>"></i>
						</div>
						<h3 class="heading"><?php echo $valet['awf-header'][4]; ?></h3>
						<p><?php echo $valet['awf-desc'][4]; ?></p>
					</div>
					<div class="col-md-4 col-sm-6 text-center fh5co-feature feature-box"> 
						<div class="fh5co-feature-icon">
							<i class="<?php echo $valet['awf-icon'][5]; ?>"></i>
						</div>
						<h3 class="heading"><?php echo $valet['awf-header'][5]; ?></h3>
						<p><?php echo $valet['awf-desc'][5]; ?></p>
					</div>
				</div>
				<!-- END row -->
				
			</div>
			<!-- END container -->

			<div class="animate-box fh5co-product-2">
				<?php 
							$featured_services = new WP_Query(array(
								'post_type' => 'valet_fServices',
								'posts_per_page' => 4
							));
							while($featured_services->have_posts()) : $featured_services->the_post();
						?>
				<div class="fh5co-half img" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_large_6.jpg);">
					
				</div>
				<div class="fh5co-half">
					<h3><?php the_title(); ?></h3>

					<p><?php the_content() ?></p>
					<p><a href="#" class="btn btn-outline btn-md">Get Started</a></p>
				</div>
				<?php
						endwhile;
						wp_reset_postdata();
				?>
			</div>

			<div id="fh5co-testimonial">
					<div class="container">
						<div class="row">
							<!-- Start Slider Testimonial -->
	            <!-- <h2 class="fh5co-uppercase-heading-sm text-center animate-box">Customer Says...</h2>
	            <div class="fh5co-spacer fh5co-spacer-xs"></div>
	            <div class="owl-carousel-fullwidth animate-box">
		            <div class="item">
		              <p class="text-center quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained. &rdquo; <cite class="author">&mdash; Ferdinand A. Porsche</cite></p>
		            </div>
		            <div class="item">
		              <p class="text-center quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while. &rdquo;<cite class="author">&mdash; Steve Jobs</cite></p>
		            </div>
		            <div class="item">
		              <p class="text-center quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly. &rdquo;<cite class="author">&mdash; Frank Chimero</cite></p>
		            </div>
	          	</div> -->
	          	<?php
	          		dynamic_sidebar('customer_quotes');
	          	?>
			           <!-- End Slider Testimonial -->
						</div>
				<!-- END row -->
					</div>
			</div>

		
		</div>
		<!-- END fhtco-main -->

<?php	get_footer(); ?>
