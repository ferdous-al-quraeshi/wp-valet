<?php
<<<<<<< HEAD

/*
Template Name: Contact Us
 */

  get_header();

  get_template_part('slider');

  get_template_part('template-parts/contact-form');

  get_footer();

?>
=======
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
>>>>>>> 14f3a3c2c39fb1be7cf5ca369cf56587a6151d0d
