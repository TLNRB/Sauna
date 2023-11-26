<?php
/*
Template Name: Main Page Template
*/
?>

<?php get_header(); ?>

  <main>
    <?php if(have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <!----- Hero Section ---->
        <section id="home" class="flex flex-col md:flex-row md:justify-center md:gap-[4rem] md:mx-[1rem] md:bg-bgNormal md:pt-[10rem] md:rounded-b-[30px] lg:gap-[6rem] xl:gap-[8rem] xxl:gap-[10rem] xxl:mx-[2rem] xxxl:rounded-b-[35px] xxxxl:pt-[12rem]">
          <div class="pt-[7rem] flex flex-col items-center gap-[2rem] pb-[3rem] px-[1rem] bg-bgNormal sm:pt-[8rem] sm:px-[1.5rem] md:pt-[1rem] md:pb-[4rem] md:pl-[3rem] md:pr-0 md:items-start md:bg-transparent md:w-[100%] xl:gap-[2.5rem] xxl:pt-[2rem] xxl:pl-[4rem] xxxl:justify-center xxxl:py-0 xxxl:pl-[6rem] ">
            <!-- Page title -->
            <h1 class="w-[275px] text-center text-[2.5rem] font-bold leading-[3rem] uppercase sm:w-[325px] sm:text-[3rem] sm:leading-[3.25rem] md:text-left  xl:text-[4rem] xl:w-[425px] xl:leading-[4rem] xxl:w-[525px] xxl:text-[5rem] xxl:leading-[5rem] xxxxl:w-[625px] xxxxl:text-[6rem] xxxxl:leading-[6rem]">
              <?php the_title("") ?>
            </h1>
            <hr class="w-[100%] h-[2px] bg-bgSemiDark">
            <!-- Hero decription -->
            <p class="text-bgSemiDark xxxxl:text-[1.125rem]">
              <?php the_field("hero_description") ?>
            </p>
            <a href="#contact" class="mt-[1rem] py-[.375rem] px-[1rem] rounded-full border-[1.5px] border-bgSemiDark font-semibold hover:scale-105 duration-[.175s] ease-in-out xxxxl:text-[1.125rem]  xxxxl:px-[1.125rem]">
              <?php pll_e("Contact Us") ?>
            </a>
          </div>
          <!-- Hero image -->
          <div class="md:w-[100%]">
            <?php $heroImage = get_field("hero_image") ?>
            <img src="<?php echo $heroImage["url"] ?>" alt="<?php echo $heroImage["alt"] ?>" class="h-[250px] object-cover object-center rounded-b-[20px] drop-shadow-lg xs:h-[375px] sm:h-[525px] sm:rounded-b-[25px] md:w-auto md:h-[508px] md:rounded-bl-none md:rounded-tl-[30px] md:rounded-br-[30px] xl:h-[534px] xxl:h-[584px] xxxl:h-[650px] xxxl:rounded-br-[35px] xxxl:rounded-tl-[35px] xxxxl:h-[775px]">
          </div>
        </section>

        <!----- About Section ----->
        <section id="about" class="flex flex-col-reverse pt-[6rem] md:flex-row md:justify-center md:items-center md:gap-[4rem] md:py-[8rem] md:mx-[1.5rem] lg:gap-[6rem] lg:mx-[4rem] xl:gap-[8rem] xxl:gap-[10rem] xxl:py-[10rem] xxl:mx-[6rem] xxxl:mx-[8rem]">
          <!-- About image -->
          <div class="z-[-1] md:w-[100%]">
            <?php $aboutImage = get_field("about_image") ?>
            <img src="<?php echo $aboutImage["url"] ?>" alt="<?php echo $aboutImage["alt"] ?>" class="h-[250px] object-cover object-center xs:h-[375px] sm:h-[525px] md:h-[352px] md:drop-shadow-lg xl:h-[396px] xxl:h-[527px] xxxl:h-[650px] xxxxl:h-[600px]">
          </div>
          <div class="flex flex-col items-center gap-[2.5rem] mb-[4rem] px-[1rem] sm:px-[1.5rem] md:w-[100%] md:mt-[2rem] md:mb-[2.5rem] md:px-0 md:items-start xxl:mt-[2.5rem] xxl:mb-[3rem] xxxl:mt-[-1rem] xxxl:mb-0 xxxl:justify-center">
            <h2 class="w-[300px] text-center text-[2.5rem] font-bold leading-[2.75rem] uppercase sm:w-[350px] sm:text-[3rem] sm:leading-[3rem] md:text-left  xl:text-[4rem] xl:w-[425px] xl:leading-[4rem] xxxxl:w-[525px] xxxxl:text-[5rem] xxxxl:leading-[5rem]">
              <?php pll_e("About Us And Our History") ?>
            </h2>
            <!-- About description -->
            <p class="text-bgSemiDark xxxxl:text-[1.125rem]">
              <?php the_field("about_description") ?>
            </p>
          </div>
        </section>

        <!----- Services Section ----->
        <section id="services" class="mt-[-1.375rem] flex flex-col pt-[5rem] pb-[6rem] px-[1rem] bg-bgDark text-textLight rounded-t-[20px] sm:px-[1.5rem] sm:rounded-t-[25px] md:mt-[0] md:pt-[6rem] md:px-[2rem] md:rounded-t-[30px] lg:px-[4rem] xxl:py-[8rem] xxl:px-[6rem] xxxl:rounded-t-[35px] xxxl:px-[8rem] xxxxl:px-[8rem]">
          <div>
            <h2 class="text-center text-[1.75rem] font-bold leading-[2.75rem] uppercase xs:text-[2rem] sm:text-[3rem] sm:leading-[3rem] xl:text-[4rem] xl:leading-[4rem]  xxxxl:text-[5rem] xxxxl:leading-[5rem]">
              <?php pll_e("Services We Provide") ?>
            </h2>
            <!-- Services description -->
            <p class="mt-[1.5rem] text-center text-textNormal leading-tight md:text-[1.25rem] md:w-[700px] md:mx-auto xxxl:mt-[2rem] xxxl:text-[1.375rem] xxxl:w-[800px]">
              <?php the_field("services_description") ?>
            </p>
          </div>
          <!-- Services our services -->
          <?php $services = new WP_Query(
              array(
                  "post_type" => "service",
                  "posts_per_page" => -1,
                  "order" => "ASC"
              )
            );
          ?>
          <div class="mt-[5rem] flex flex-col gap-[4rem] items-center sm:flex-row sm:justify-center sm:items-start sm:flex-wrap md:mt-[6rem] xxxl:gap-[4.5rem] xxxxl:gap-[6rem]">
            <?php if($services->have_posts()): ?>
              <?php while($services->have_posts()): $services->the_post() ?>
              
                <div class="flex flex-col justify-center items-center sm:w-[350px] xxl:sm:w-[375px] xxxl:w-[400px] xxxxl:w-[450px]">
                  <!-- Service image -->
                  <div>
                    <?php $serviceImage = get_field("service_image") ?>
                    <img src="<?php echo $serviceImage["url"] ?>" alt="<?php echo $serviceImage["alt"] ?>" class="w-[100px] xxl:w-[110px]">
                  </div>
                  <!-- Service title -->
                  <h3 class="mt-[1.5rem] text-center text-[1.75rem] leading-tight font-semibold xs:text-[2rem] xxl:text-[2.5rem] xxl:mt-[2.5rem] xxxxl:text-[3rem]">
                    <?php the_title(); ?>
                  </h3>
                  <!-- Service description -->
                  <p class="mt-[1rem] text-center text-textNormal xxxl:mt-[1.25rem] xxl:text-[1.125rem]">
                    <?php the_field("service_description"); ?>
                  </p>
                </div>

              <?php endwhile; ?>
              <?php wp_reset_postdata() ?>
            <?php endif; ?>
          </div>
          <div class="mt-[4rem] flex flex-col items-center gap-[1rem] sm:flex-row sm:justify-center sm:gap-[1.25rem] lg:gap-[1.5rem] xxl:mt-[6rem]">
            <!-- Services prices -->
            <a href="<?php the_field("services_prices") ?>" download class="w-fit py-[.375rem] px-[1rem] rounded-full border-[1.5px] border-textNormal font-semibold hover:scale-105 duration-[.175s] ease-in-out xxxxl:text-[1.125rem] xxxxl:px-[1.125rem]">
              <?php pll_e("Our Prices") ?>
            </a>
            <a href="#contact" class="w-fit py-[.375rem] px-[1rem] rounded-full border-[1.5px] border-textNormal font-semibold hover:scale-105 duration-[.175s] ease-in-out xxxxl:text-[1.125rem]  xxxxl:px-[1.125rem]">
              <?php pll_e("Contact Us") ?>
            </a>
          </div>
        </section>

        <!----- Saunas Section ----->
        <section id="saunas" class="flex flex-col pt-[5rem] px-[1rem] pb-[6rem] bg-bgNormal rounded-b-[20px] sm:px-[1.25rem] sm:rounded-b-[25px] md:pt-[6rem] md:px-[2rem] md:rounded-b-[30px] lg:px-[4rem] xxl:py-[8rem] xxl:px-[6rem] xxxl:py-[10rem] xxxl:px-[8rem] xxxl:rounded-b-[35px] xxxxl:px-[8rem]">
          <div>
            <h2 class="text-center text-[2.5rem] font-bold leading-[2.75rem] uppercase sm:text-[3rem] sm:leading-[3rem] xl:text-[4rem] xl:leading-[4rem]  xxxxl:text-[5rem] xxxxl:leading-[5rem]">
              <?php pll_e("See Our Saunas") ?>
            </h2>
            <!-- Saunas description -->
            <p class="mt-[1.5rem] text-center text-bgSemiDark leading-tight md:text-[1.25rem] md:w-[550px] md:mx-auto xxxl:mt-[2rem]">
              <?php the_field("saunas_description") ?>
            </p>
          </div>
          <!-- Saunas our saunas -->
          <?php $saunas = new WP_Query(
              array(
                  "post_type" => "sauna",
                  "posts_per_page" => -1,
                  "order" => "ASC"
              )
            );
          ?>
          <div class="mt-[5rem] lg:mt-[6rem] lg:flex lg:justify-center lg:items-center lg:gap-[4rem] xl:gap-[8rem] xxl:gap-[10rem] xxxl:gap-[12rem] xxxxl:gap-[14rem]">
            <div id="sauna-container" class="flex flex-col gap-[2rem] items-center lg:gap-[2.5rem]">
              <?php if($saunas->have_posts()): ?>
                <?php while($saunas->have_posts()): $saunas->the_post() ?>
                
                  <div id="<?php the_field("sauna_id") ?>" class="flex flex-col justify-center items-center pb-[2rem] border-b-[2px] border-bgSemiDark sm:w-[500px] md:w-[600px] lg:w-[500px] lg:pb-[2.5rem] lg:items-start xl:w-[600px]">
                    <!-- Saunas title -->
                    <h3 class="text-center text-[2rem] leading-tight font-semibold xxl:text-[2.5rem] xxxxl:text-[3rem]">
                      <?php the_title(); ?>
                    </h3>
                    <!-- Saunas description -->
                    <div class="flex flex-col items-center gap-[1.25rem] mt-[1.25rem] xs:gap-[1.5rem] lg:flex-row lg:gap-[2.5rem] xl:gap-[4rem]">
                      <p class="text-bgSemiDark xxl:text-[1.125rem]">
                      <?php the_field("sauna_description"); ?>
                      </p>
                      <button onclick="showImage(`<?php the_field('sauna_id') ?>`)" class="view-button h-[55px] w-[55px] max-w-[60px] text-[.875rem] font-semibold border-[2px] border-bgSemiDark rounded-full hover:text-textLight hover:bg-bgSemiDark duration-[.25s] ease-in-out sm:h-[60px] sm:w-[60px] lg:w-[100%] xxxxl:h-[70px] xxxxl:max-w-[70px] xxxxl:text-[1rem]">
                        <?php pll_e("View") ?>
                      </button>
                    </div>
                    <!-- Saunas image -->
                    <div class="lg:hidden">
                      <?php $saunaImage = get_field("sauna_image") ?>
                      <img src="<?php echo $saunaImage["url"] ?>" alt="<?php echo $saunaImage["alt"] ?>" class="hidden w-[100%] mt-[2.5rem] object-cover sm:drop-shadow-lg">
                    </div>
                  </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata() ?>
              <?php endif; ?>
            </div>
            <!-- Saunas image on large screen -->
            <div class="hidden lg:block">
              <img id="largeScreenImage" alt="Sauna Type" class="w-[100%] object-cover sm:drop-shadow-lg xxl:h-[800px] xxxxl:h-[900px]">
            </div>
          </div>
          
        </section>

        <!----- Projects Section ----->
        <section id="projects" class="flex flex-col pt-[5rem] pb-[6rem] sm:px-[1.25rem] md:pt-[6rem] md:px-[2rem] lg:px-[4rem] xxl:py-[8rem] xxl:px-[6rem] xxxl:py-[10rem] xxxl:px-[8rem] xxxxl:px-[8rem]">
          <div class="px-[1rem] sm:px-0">
            <h2 class="text-center text-[2.5rem] font-bold leading-[2.75rem] uppercase sm:text-[3rem] sm:leading-[3rem] md:text-start xl:text-[4rem] xl:leading-[4rem]  xxxxl:text-[5rem] xxxxl:leading-[5rem]">
              <?php pll_e("Our Projects") ?>
            </h2>
            <!-- Projects description -->
            <p class="w-fit mt-[1.5rem] mx-auto text-bgSemiDark leading-tight md:w-[650px] md:mx-0 md:text-[1.25rem] xxxl:mt-[2rem] xxxl:text-[1.375rem] xxxl:w-[800px]">
              <?php the_field("projects_description") ?>
            </p>
          </div>
          <!-- Projects our projects -->
          <?php $projects = new WP_Query(
              array(
                  "post_type" => "project",
                  "posts_per_page" => -1,
                  "order" => "ASC"
              )
            );
          ?>
          <div class="mt-[6rem] flex flex-col gap-[3rem] items-center lg:flex-row lg:items-start lg:justify-center lg:flex-wrap lg:gap-[4rem] xl:gap-[5rem] xxl:gap-[6rem]">
            <?php if($projects->have_posts()): ?>
              <?php while($projects->have_posts()): $projects->the_post() ?>
              
                <div class="flex flex-col justify-center items-center sm:w-[400px] xxxxl:w-[450px]">
                  <!-- Projects image -->
                  <div>
                    <?php $projectImage = get_field("project_image") ?>
                    <img src="<?php echo $projectImage["url"] ?>" alt="<?php echo $projectImage["alt"] ?>" class="w-[100%] object-cover sm:drop-shadow-lg">
                  </div>
                  <!-- Projects title -->
                  <h3 class="mt-[1.25rem] mx-[1rem] text-center text-[2rem] leading-tight font-semibold sm:mx-0 sm:mt-[2rem] xxl:text-[2.5rem] xxl:mt-[2.5rem] xxxxl:text-[3rem]">
                    <?php the_title(); ?>
                  </h3>
                  <!-- Projects description -->
                  <p class="mt-[1rem] mx-[1rem] pb-[3rem] text-bgSemiDark border-b-[2px] border-bgSemiDark sm:mx-0 lg:border-0 xl:pb-0 xxxl:mt-[1.25rem] xxl:text-[1.125rem]">
                    <?php the_field("project_description"); ?>
                  </p>
                </div>

              <?php endwhile; ?>
              <?php wp_reset_postdata() ?>
            <?php endif; ?>
          </div>
        </section>

        <!----- Contact Section ----->
        <section id="contact" class="flex flex-col pt-[5rem] pb-[2.5rem] px-[1rem] bg-bgDark text-textLight sm:px-[1.5rem] md:pt-[6rem] md:px-[2rem] lg:px-[4rem] xxl:pt-[8rem] xxl:px-[6rem] xxxl:px-[8rem] xxxxl:pt-[10rem]">
          <div class="flex flex-col gap-[1.25rem]">
            <h2 class="text-center text-[2.5rem] font-bold leading-[3rem] uppercase sm:text-[3rem] sm:leading-[3.25rem] md:text-left xl:text-[4rem] xl:leading-[4rem] xxl:text-[5rem] xxl:leading-[5rem]">
              <?php pll_e("Contact Us") ?>
            </h2>
            <div class="w-[100%] h-[1.5px] bg-bgSemiDark md:w-[325px] lg:w-[375px] xl:w-[475px] xxl:w-[575px] xxxxl:w-[675px]"></div>
          </div>
          <div class="mt-[1.25rem] flex flex-col gap-[4rem] md:flex-row lg:gap-[6rem] xl:gap-[8rem] xxl:gap-[10rem] xxl:justify-between">
            <!-- Contact description -->
            <p class="md:w-[100%] xl:text-[1.125rem] xxl:text-[1.25rem] xxl:w-[700px] xxxxl:w-[750px]">
              <?php the_field("contact_description") ?>
            </p>
            <div class="flex flex-col gap-[4rem] md:flex-row md:gap-[2rem] xl:gap-[4rem] xl:w-fit xxxxl:gap-[5rem]">
              <div class="flex flex-col gap-[1.25rem] md:w-[175px] lg:w-[200px] xl:gap-[2rem] xl:w-[250px] xxxxl:w-[275px]">
                <h3 class="text-[1.25rem] font-semibold xl:text-[1.5rem] xxxxl:text-[1.75rem]">
                  <?php pll_e("Contact") ?>
                </h3>
                <!-- Contact email -->
                <div class="xl:text-[1.125rem] xxxxl:text-[1.25rem]">
                  <p class="text-textNormal">
                    <?php pll_e("Email") ?>:
                  </p>
                  <a href="mailto:<?php the_field("contact_email") ?>"><?php the_field("contact_email") ?></a>
                </div>
                <!-- Contact phone -->
                <div class="xl:text-[1.125rem] xxxxl:text-[1.25rem]">
                  <p class="text-textNormal">
                    <?php pll_e("Phone") ?>:
                  </p>
                  <p>
                    <?php the_field("contact_phone") ?>
                  </p>
                </div>
                <!-- Contact address -->
                <div class="xl:text-[1.125rem] xxxxl:text-[1.25rem]">
                  <p class="text-textNormal">
                    <?php pll_e("Address") ?>:
                  </p>
                  <p>
                    <?php the_field("contact_address") ?>
                  </p>
                </div>
              </div>
              <div class="flex flex-col gap-[1.25rem] md:w-[150px] lg:w-[175px]  xl:gap-[2rem] xl:w-[200px] xxxxl:w-[225px]">
                <h3 class="text-[1.25rem] font-semibold xl:text-[1.5rem] xxxxl:text-[1.75rem]">
                  <?php pll_e("Social Media") ?>
                </h3>
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
    <?php endif; ?>
  </main>

<?php get_footer(); ?>