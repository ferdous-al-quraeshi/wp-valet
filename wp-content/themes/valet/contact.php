<?php
/*
  Template Name: Contact Us
*/
  get_header();
  get_template_part('template-parts/hero-section/hero');?>

  <section id="fh5co-main" class="contact-us">
    <?php
      the_post();
      the_content();?>
  </section>

<?php get_footer();?>
