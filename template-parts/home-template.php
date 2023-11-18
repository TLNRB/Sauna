<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>

  <main id="home" >
    <?php while (have_posts()): the_post(); ?>
      <section id="about">about</section>
      <section id="services">services</section>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <section id="saunas">saunas</section>
      <section id="projects">projects</section>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <section id="contact">contact</section>
    <?php endwhile; ?>
  </main>

<?php get_footer(); ?>