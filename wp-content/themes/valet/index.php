<?php
	get_header();

	get_template_part('template-parts/hero-section/hero');

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
	          	<?php
	            	get_template_part('template-parts/customer_quotes');
	          		// dynamic_sidebar('customer_quotes'); // from "Customer Says" widget
	          	?>
			           <!-- End Slider Testimonial -->
						</div>
				<!-- END row -->
					</div>
			</div>

		
		</div>
		<!-- END fhtco-main -->

<?php	get_footer(); ?>
