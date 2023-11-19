<?php
/*
Template Name: Main Page Template
*/
?>

<?php get_header(); ?>

  <main class="" >
    <?php while (have_posts()): the_post(); ?>
      <section id="home" class="flex flex-col md:flex-row md:justify-center md:gap-[4rem] md:mx-[1rem] md:bg-bgNormal md:pt-[10rem] md:rounded-b-[30px] md:drop-shadow-md lg:gap-[6rem] xl:gap-[8rem] xxl:gap-[10rem] xxl:mx-[2rem] xxxl:rounded-b-[35px] xxxxl:pt-[12rem]">
        <div class="pt-[7rem] flex flex-col items-center gap-[2rem] pb-[3rem] px-[1rem] bg-bgNormal sm:pt-[8rem] sm:px-[1.5rem] md:pt-[1rem] md:pb-[4rem] md:pl-[3rem] md:pr-0 md:items-start md:bg-transparent md:w-[100%] xl:gap-[2.5rem] xxl:pt-[2rem] xxl:pl-[4rem] xxxl:justify-center xxxl:py-0 xxxl:pl-[6rem] ">
          <h1 class="w-[250px] text-center text-[2.5rem] font-semibold leading-[3rem] sm:w-[300px] sm:text-[3rem] sm:leading-[3.25rem] md:text-left xl:text-[4rem] xl:w-[400px] xl:leading-[4rem] xxl:w-[500px] xxl:text-[5rem] xxl:leading-[5rem] xxxxl:w-[600px] xxxxl:text-[6rem] xxxxl:leading-[6rem]"><?php the_title("") ?></h1>
          <hr class="w-[100%] h-[2px] bg-bgSemiDark">
          <p class="text-bgSemiDark xxxxl:text-[1.25rem]"><?php the_field("hero_description") ?></p>
          <a href="#contact" class="mt-[1rem] py-[.375rem] px-[1rem] rounded-full border-[1.5px] border-bgSemiDark font-semibold hover:scale-105 duration-[.175s] ease-in-out xxxxl:text-[1.125rem]  xxxxl:px-[1.125rem]">Contact Us</a>
        </div>
        <div>
          <?php $heroImage = get_field("hero_image") ?>
          <img src="<?php echo $heroImage["url"] ?>" alt="<?php echo $heroImage["alt"] ?>" class="h-[250px] object-cover object-center rounded-b-[20px] drop-shadow-lg xs:h-[375px] sm:h-[525px] sm:rounded-b-[25px] md:h-[100%]  md:rounded-bl-none md:rounded-tl-[30px] md:rounded-br-[30px] md:drop-shadow-none xxxl:rounded-br-[35px] xxxl:rounded-tl-[35px]">
        </div>
      </section>
      <section id="about">about</section>
      <section id="services">services</section>
      
      <section id="saunas">saunas</section>
      <section id="projects">projects</section>
      
      <section id="contact">contact</section>
    <?php endwhile; ?>
  </main>

<?php get_footer(); ?>