<?php
/*
  Template Name: Contact Us
*/
  get_header();
  get_template_part('template-parts/hero-section/hero');?>

  <section id="fh5co-main" class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <?php
            the_post();
            the_content();?>
        </div>
        <div class="col-md-4">
          <h3><?php dynamic_sidebar('right_sidebar'); ?>...</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, harum autem quaerat vitae cupiditate, aspernatur est fugit, commodi optio itaque voluptatum! Beatae quae delectus deserunt est ab in sequi blanditiis!</p>
          <p>
            <a href="#">info@freehtml5.co</a>
          </p>
        </div>
      </div>
    </div>
  </section>

<?php get_footer();?>