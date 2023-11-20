<?php
/*
Template Name: Main Page Template
*/
?>

<?php get_header(); ?>

  <main>
    <?php while (have_posts()): the_post(); ?>
      <!----- Hero Section ---->
      <section id="home" class="flex flex-col md:flex-row md:justify-center md:gap-[4rem] md:mx-[1rem] md:bg-bgNormal md:pt-[10rem] md:rounded-b-[30px] lg:gap-[6rem] xl:gap-[8rem] xxl:gap-[10rem] xxl:mx-[2rem] xxxl:rounded-b-[35px] xxxxl:pt-[12rem]">
        <div class="pt-[7rem] flex flex-col items-center gap-[2rem] pb-[3rem] px-[1rem] bg-bgNormal sm:pt-[8rem] sm:px-[1.5rem] md:pt-[1rem] md:pb-[4rem] md:pl-[3rem] md:pr-0 md:items-start md:bg-transparent md:w-[100%] xl:gap-[2.5rem] xxl:pt-[2rem] xxl:pl-[4rem] xxxl:justify-center xxxl:py-0 xxxl:pl-[6rem] ">
          <!-- Page title -->
          <h1 class="w-[275px] text-center text-[2.5rem] font-semibold leading-[3rem] uppercase sm:w-[325px] sm:text-[3rem] sm:leading-[3.25rem] md:text-left  xl:text-[4rem] xl:w-[425px] xl:leading-[4rem] xxl:w-[525px] xxl:text-[5rem] xxl:leading-[5rem] xxxxl:w-[625px] xxxxl:text-[6rem] xxxxl:leading-[6rem]">
            <?php the_title("") ?>
          </h1>
          <hr class="w-[100%] h-[2px] bg-bgSemiDark">
          <!-- Hero decription -->
          <p class="text-bgSemiDark xxxxl:text-[1.125rem]">
            <?php the_field("hero_description") ?>
          </p>
          <a href="#contact" class="mt-[1rem] py-[.375rem] px-[1rem] rounded-full border-[1.5px] border-bgSemiDark font-semibold hover:scale-105 duration-[.175s] ease-in-out xxxxl:text-[1.125rem]  xxxxl:px-[1.125rem]">Contact Us</a>
        </div>
        <!-- Hero image -->
        <div>
          <?php $heroImage = get_field("hero_image") ?>
          <img src="<?php echo $heroImage["url"] ?>" alt="<?php echo $heroImage["alt"] ?>" class="h-[250px] object-cover object-center rounded-b-[20px] drop-shadow-lg xs:h-[375px] sm:h-[525px] sm:rounded-b-[25px] md:h-[100%] md:rounded-bl-none md:rounded-tl-[30px] md:rounded-br-[30px] xxxl:rounded-br-[35px] xxxl:rounded-tl-[35px]">
        </div>
      </section>
      <!----- About Section ----->
      <section id="about" class="flex flex-col-reverse pt-[6rem] md:flex-row md:justify-center md:gap-[4rem] md:py-[8rem] md:mx-[1.5rem] lg:gap-[6rem] lg:mx-[4rem] xl:gap-[8rem] xxl:gap-[10rem] xxl:py-[10rem] xxl:mx-[6rem] xxxl:mx-[8rem]">
        <!-- About image -->
        <div>
          <?php $aboutImage = get_field("about_image") ?>
          <img src="<?php echo $aboutImage["url"] ?>" alt="<?php echo $aboutImage["alt"] ?>" class="h-[250px] object-cover object-center xs:h-[375px] sm:h-[525px] md:h-[100%] md:drop-shadow-lg">
        </div>
        <div class="flex flex-col items-center gap-[2.5rem] mb-[4rem] px-[1rem] sm:px-[1.5rem] md:mt-[2rem] md:mb-[2.5rem] md:px-0 md:items-start xxl:mt-[2.5rem] xxl:mb-[3rem] xxxl:mt-[-1rem] xxxl:mb-0 xxxl:justify-center">
          <h2 class="w-[275px] text-center text-[2.5rem] font-semibold leading-[2.75rem] uppercase sm:w-[325px] sm:text-[3rem] sm:leading-[3rem] md:text-left  xl:text-[4rem] xl:w-[425px] xl:leading-[4rem] xxxxl:w-[525px] xxxxl:text-[5rem] xxxxl:leading-[5rem]">About Us And Our History</h2>
          <!-- About description -->
          <p class="text-bgSemiDark xxxxl:text-[1.125rem]">
            <?php the_field("about_description") ?>
          </p>
        </div>
      </section>
      <!----- Services Section ----->
      <section id="services">services</section>
      <!----- Saunas Section ----->
      <section id="saunas">saunas</section>
      <!----- Projects Section ----->
      <section id="projects">projects</section>
      <!----- Contact Section ----->
      <section id="contact" class="flex flex-col pt-[5rem] pb-[2.5rem] px-[1rem] bg-bgDark text-textLight sm:px-[1.5rem] md:pt-[6rem] md:px-[2rem lg:px-[4rem] xxl:pt-[8rem] xxl:px-[6rem] xxxxl:pt-[10rem] xxxxl:px-[8rem]">
        <div class="flex flex-col gap-[1.25rem]">
          <h2 class="text-center text-[2.5rem] font-bold leading-[3rem] uppercase sm:text-[3rem] sm:leading-[3.25rem] md:text-left xl:text-[4rem] xl:leading-[4rem] xxl:text-[5rem] xxl:leading-[5rem] xxxxl:text-[6rem] xxxxl:leading-[6rem]">Contact Us</h2>
          <div class="w-[100%] h-[1.5px] bg-bgSemiDark md:w-[325px] lg:w-[375px] xl:w-[475px] xxl:w-[575px] xxxxl:w-[675px]"></div>
        </div>
        <div class="mt-[1.25rem] flex flex-col gap-[4rem] md:flex-row lg:gap-[6rem] xl:gap-[8rem] xxl:gap-[10rem] xxl:justify-between">
          <!-- Contact description -->
          <p class="md:w-[100%] xl:text-[1.125rem] xxl:text-[1.25rem] xxl:w-[700px] xxxxl:w-[750px]">
            <?php the_field("contact_description") ?>
          </p>
          <div class="flex flex-col gap-[4rem] md:flex-row md:gap-[2rem] xl:gap-[4rem] xl:w-fit xxxxl:gap-[5rem]">
            <div class="flex flex-col gap-[1.25rem] md:w-[175px] lg:w-[200px] xl:gap-[2rem] xl:w-[250px] xxxxl:w-[275px]">
              <h3 class="text-[1.25rem] font-semibold xl:text-[1.5rem] xxxxl:text-[1.75rem]">Contact</h3>
              <!-- Contact email -->
              <div class="xl:text-[1.125rem] xxxxl:text-[1.25rem]">
                <p class="text-textNormal">Email:</p>
                <a href="mailto:<?php the_field("contact_email") ?>"><?php the_field("contact_email") ?></a>
              </div>
              <!-- Contact phone -->
              <div class="xl:text-[1.125rem] xxxxl:text-[1.25rem]">
                <p class="text-textNormal">Phone:</p>
                <p>
                  <?php the_field("contact_phone") ?>
                </p>
              </div>
              <!-- Contact address -->
              <div class="xl:text-[1.125rem] xxxxl:text-[1.25rem]">
                <p class="text-textNormal">Address:</p>
                <p>
                  <?php the_field("contact_address") ?>
                </p>
              </div>
            </div>
            <div class="flex flex-col gap-[1.25rem] md:w-[150px] lg:w-[175px]  xl:gap-[2rem] xl:w-[200px] xxxxl:w-[225px]">
              <h3 class="text-[1.25rem] font-semibold xl:text-[1.5rem] xxxxl:text-[1.75rem]">Social Media</h3>
              <!-- Contact Facebook & Instagram -->
              <div class="flex flex-col text-textNormal xl:text-[1.125rem] xxxxl:text-[1.25rem]">
                <a href="<?php the_field("contact_facebook") ?>" target="_blank">Facebook</a>
                <a href="<?php the_field("contact_instagram") ?>" target="_blank">Instagram</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Contact copyright -->
        <p class="mt-[5rem] text-[.875rem] text-textNormal lg:text-[1rem]">
          &copy; <?php the_field("contact_copyright") ?>
        </p>
      </section>
    <?php endwhile; ?>
  </main>

<?php get_footer(); ?>