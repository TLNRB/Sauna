<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>

  <main class="mt-[4rem]" >
    <?php while (have_posts()): the_post(); ?>
      <section id="home"></section>
      <section id="about">about</section>
      <section id="services">services</section>
      
      <section id="saunas">saunas</section>
      <section id="projects">projects</section>
      
      <section id="contact">contact</section>
    <?php endwhile; ?>
  </main>

<?php get_footer(); ?>