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
          <?php dynamic_sidebar('right_sidebar'); ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer();?>