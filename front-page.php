
<?php get_header(); ?>
<?php
$homepage_id = get_option('page_on_front');
?>

<section
      id="banner"
      class="banner bg-[#0ea2a6] h-[100vh] pt-[6rem] text-center overflow-hidden relative lg:flex lg:items-center"
    >
      <div class="container">
        <div
          class="banner__wrapper lg:flex lg:justify-between lg:flex-row-reverse lg:items-center"
        >
          <div
            class="circle h-[40rem] w-[40rem] rounded-[50%] border-[rgb(250,250,250,.7)] border-[5px] absolute top-[-18rem] right-[-20rem] lg:h-[84rem] lg:w-[84rem] lg:top-0 lg:right-[-40rem]"
          ></div>
          <div
            class="circle1 h-[40rem] w-[40rem] rounded-[50%] border-[rgb(250,250,250,.7)] border-[5px] absolute top-[-24rem] left-[-10rem] hidden lg:block"
          ></div>
          <img
            src="<?php echo get_template_directory_uri()?> ./img/Banner.png"
            alt=""
            class="w-[17.5rem] mx-auto z-0 lg:w-[35rem] lg:mx-0 relative"
          />
          <div class="banner__text lg:text-start lg:pb-[5rem] z-10">
            <ul
              class="flex justify-center lg:justify-start text-center lg:mb-[1.5rem]"
            >
            <?php if( have_rows('social',$homepage_id ) ): ?>

            <?php while( have_rows('social',$homepage_id )) : the_row();  ?>

             <?php $sub_value = get_sub_field('icon')?>
             <?php $link = get_sub_field('icon_link')?>
              <li>
              <a href="<?php echo $link ?>"><i class="<?php echo $sub_value ?>"></i></a>
              </li>
              <?php endwhile; ?>
                <?php endif; ?>
            
            </ul>
            <h1
              class="uppercase text-white text-[2.3rem] font-[650] border-b-[3px] max-w-[25rem] mx-auto lg:text-[4rem] lg:max-w-none"
            >
              <span class="text-black"><?php echo get_field('banner_title_span'); ?></span> <?php echo get_field('banner_title'); ?>
            </h1>
            <h2
              class="uppercase text-white font-[700] leading-[2.5rem] lg:text-[2rem] lg:leading-[4rem]"
            >
            <?php echo get_field('banner_subtitle_1'); ?> <span class="text-black"><?php echo get_field('banner_subtitle_span'); ?></span> <?php echo get_field('banner_subtitle_2'); ?>
            </h2>
            <p
              class="text-white text-justify text-[1.1rem] leading-[2.3rem] max-w-[25rem] mx-auto mt-[2rem] lg:mx-0 lg:text-[1.3rem] lg:max-w-[33rem]"
            >
            <?php echo get_field('banner_paragraph'); ?>
            </p>
            <div class="banner__button">
              <a
                href="#skill"
                class="btn font-[600] text-[1.4rem] mt-[3rem] px-[.9rem] py-[.4rem] bg-transparent border-white text-white border-[2px] hidden lg:inline-block hover:text-[#0EA2A6] hover:bg-white ease-in duration-100"
                >Explore More</a
              >
              <a
                href="#contact"
                class="btn font-[600] text-[1.4rem] mt-[3rem] px-[2.5rem] lg:ml-[2rem] border-[2px] border-white hover:bg-transparent hover:text-white ease-in duration-100"
                >Hire Me</a
              >
            </div>
          </div>
          <div class="circle2 absolute left-0 bottom-0">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </section>
    <section id="skill" class="skill">
      <div class="container">
        <div class="skill__wrapper my-[5rem]">
          <h2
            class="text-[#0EA2A6] border-b-[3px] border-[#0EA2A6] text-[2rem] font-[700] max-w-[9rem] text-center mx-auto"
          >
            <span class="text-black"><?php echo get_field('skill_title_span'); ?></span> <?php echo get_field('skill_title'); ?>
          </h2>
          <div
            class="skill__card grid grid-cols-2 gap-[2rem] mt-[4rem] lg:grid-cols-4 lg:gap-y-[4rem]"
          >
          <?php

          $args = array(
              'post_type' => 'Skillspost',
              'posts_per_page' => 8,
          );
          $newQuery = new WP_Query($args)
          ?>
          <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

            <div class="card relative">
            <?php echo get_the_post_thumbnail(); ?>
              <div class="card__content">
              <?php
                    $image = get_field('hover_img');
                    if(!empty($image)):
                    ?>

                    <img src="<?php echo esc_url($image['url']) ?>" alt="">
          
                    <?php endif; ?>
              
                <h3><?php the_title(); ?></h3>
                <p>
                <?php the_content(); ?>
                </p>
              </div>
            </div>

            <?php 
                
              endwhile;
                  else:
                      echo "no available post";
                  endif;
                  wp_reset_postdata();       
                  ?>
          </div>
        </div>
      </div>
    </section>
    <section id="service" class="services bg-[#0EA2A6] py-[5rem]">
      <div class="container">
        <div class="services__wrapper">
          <h3
            class="text-white border-b-[3px] border-white text-[2rem] font-[700] max-w-[12rem] text-center mx-auto"
          >
          <?php echo get_field('service_title'); ?>
          </h3>
          <div class="services__card mt-[4rem] lg:grid lg:grid-cols-3">

          <?php

          $args = array(
              'post_type' => 'Servicepost',
              'posts_per_page' => 3,
          );
          $newQuery = new WP_Query($args)
          ?>
          <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

            <div
              class="services__card__content flex justify-center items-center"
            >
              <div class="services__content__text">
                <i class="<?php echo get_field('service_card_icon');?>"></i>
                <h4><?php the_title(); ?></h4>
                <p>
                <?php the_content(); ?>
                </p>
                <a href="<?php echo get_the_permalink();?>">Read More...</a>
              </div>
            </div>
            <?php 
                
              endwhile;
                  else:
                      echo "no available post";
                  endif;
                  wp_reset_postdata();
                  
                  ?>
          </div>
        </div>
      </div>
    </section>
    <section id="project" class="projects py-[5rem]">
      <div class="container">
        <div
          class="projects__wrapper flex flex-col justify-center items-center"
        >
          <h2
            class="section__title text-[#0EA2A6] border-b-[3px] border-[#0EA2A6] text-[2rem] font-[700] max-w-10rem] text-center mx-auto"
          >
          <?php echo get_field('project_title'); ?>
          </h2>
          <div class="projects__tab h-[33rem]">
            <div class="projects__nav py-[2rem] relative">
              <ul class="flex">
                <li id="project-1" class="project__nav active">
                  <a href="javascript:void(0)">SASS</a>
                </li>
                <li id="project-2" class="project__nav">
                  <a href="javascript:void(0)">Tailwind</a>
                </li>
                <li id="project-3" class="project__nav">
                  <a href="javascript:void(0)">Wordress</a>
                </li>
                <li id="project-4" class="project__nav">
                  <a href="javascript:void(0)">Javascript</a>
                </li>
              </ul>
            </div>
            <div class="projects__content">
              <div id="project-1-content" class="project-tab__content active">
                <div class="slider_1">

                <?php
                $args = array(
                    'post_type' => 'Sasspost',
                    'posts_per_page' => 4,
                );
                $newQuery = new WP_Query($args)
                ?>
                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

                  <div class="projects__card">
                    <div class="projects__card__content p-[1.2rem]">
                      <?php echo get_the_post_thumbnail();?>
                      <h3><?php the_title(); ?></h3>
                      <div class="flex justify-between items-center mt-[3rem]">
                        <div class="logo_text flex items-center">
                        <?php
                          $image = get_field('project_logo');
                          if(!empty($image)):
                          ?>
                          <img src="<?php echo esc_url($image['url']) ?>" alt="">
                          <?php endif; ?>
                          <h4>SASS</h4>
                        </div>
                        <a href="" class="border-[2px] rounded-[50%]  "
                          ><i
                            class="<?php echo get_field('link');?> p-[.8rem] text-white"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>

                  <?php           
                endwhile;
                  else:
                      echo "no available post";
                  endif;
                  wp_reset_postdata();
                  ?>

                </div>
              </div>
              <div id="project-2-content" class="project-tab__content">
              <?php
                $args = array(
                    'post_type' => 'tailwindpost',
                    'posts_per_page' => 1,
                );
                $newQuery = new WP_Query($args)
                ?>
                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

                  <div class="projects__card">
                    <div class="projects__card__content p-[1.2rem]">
                      <?php echo get_the_post_thumbnail();?>
                      <h3><?php the_title(); ?></h3>
                      <div class="flex justify-between items-center mt-[3rem]">
                        <div class="logo_text flex items-center">
                        <?php
                          $image = get_field('project_logo');
                          if(!empty($image)):
                          ?>
                          <img src="<?php echo esc_url($image['url']) ?>" alt="">
                          <?php endif; ?>
                          <h4>SASS</h4>
                        </div>
                        <a href="" class="border-[2px] rounded-[50%] "
                          ><i
                            class="<?php echo get_field('link');?> p-[.8rem] text-white"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>

                  <?php           
                endwhile;
                  else:
                      echo "no available post";
                  endif;
                  wp_reset_postdata();
                  ?>
              </div>
              <div
                id="project-3-content"
                class="project-tab__content max-w-[21.8rem]"
              >
                <div class="slider_2">
                <?php
                $args = array(
                    'post_type' => 'Wordpresspost',
                    'posts_per_page' => 2,
                );
                $newQuery = new WP_Query($args)
                ?>
                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                  <div class="projects__card">
                    <div class="projects__card__content p-[1.2rem]">
                    <?php echo get_the_post_thumbnail();?>
                      <h3><?php the_title(); ?></h3>
                      <div class="flex justify-between items-center mt-[3rem]">
                        <div class="logo_text flex items-center">
                        <?php
                          $image = get_field('project_logo');
                          if(!empty($image)):
                          ?>
                          <img src="<?php echo esc_url($image['url']) ?>" alt="">
                          <?php endif; ?>
                          <h4>Wordpress</h4>
                        </div>
                        <a href="" class="border-[2px] rounded-[50%] "
                          ><i
                            class="<?php echo get_field('link');?> p-[.8rem] text-white"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <?php           
                endwhile;
                  else:
                      echo "no available post";
                  endif;
                  wp_reset_postdata();
                  ?>
                  <!-- <div class="projects__card">
                    <div class="projects__card__content p-[1.2rem]">
                      <img src="./img/cvd-card.png" alt="" />
                      <h3 class="leading-[2rem]">Creative Visual Design</h3>
                      <div class="flex justify-between items-center mt-[2rem]">
                        <div class="logo_text flex items-center">
                          <img src="./img/wordpress-card-logo.png" alt="" />
                          <h4>Wordpress</h4>
                        </div>
                        <a href="" class="border-[2px] rounded-[50%] "
                          ><i
                            class="fa-solid fa-up-right-from-square p-[.8rem] text-white"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
              <div id="project-4-content" class="project-tab__content">
              <?php
                $args = array(
                    'post_type' => 'Javascriptpost',
                    'posts_per_page' => 1,
                );
                $newQuery = new WP_Query($args)
                ?>
                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

                  <div class="projects__card">
                    <div class="projects__card__content p-[1.2rem]">
                      <?php echo get_the_post_thumbnail();?>
                      <h3><?php the_title(); ?></h3>
                      <div class="flex justify-between items-center mt-[3rem]">
                        <div class="logo_text flex items-center">
                        <?php
                          $image = get_field('project_logo');
                          if(!empty($image)):
                          ?>
                          <img src="<?php echo esc_url($image['url']) ?>" alt="">
                          <?php endif; ?>
                          <h4>SASS</h4>
                        </div>
                        <a href="" class="border-[2px] rounded-[50%] "
                          ><i
                            class="<?php echo get_field('link');?> p-[.8rem] text-white"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>

                  <?php           
                endwhile;
                  else:
                      echo "no available post";
                  endif;
                  wp_reset_postdata();
                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="contact bg-[#0EA2A6] py-[5rem]">
      <div class="container">
        <div class="contact__wrapper">
          <h3
            class="section__title text-white border-b-[3px] border-white text-[2rem] font-[700] max-w-[12rem] text-center mx-auto lg:text-start lg:mx-0"
          >
          <?php echo get_field('contact_title');?>
          </h3>
          <p
            class="text-white text-[1.2rem] font-[600] max-w-[30rem] text-center mx-auto lg:text-start lg:mx-0 lg:max-w-none"
          >
           <?php echo get_field('contact_subtitle');?>
          </p>
          <div class="contact__content lg:grid lg:grid-cols-5">
            <div
              class="contact__left flex flex-col justify-center items-center lg:justify-start lg:items-start lg:col-span-2"
            >
              <ul class="">
              <?php if( have_rows('contact_info') ): ?>
            <?php while( have_rows('contact_info')) : the_row();  ?>

                <?php $sub_value = get_sub_field('contact_info_icon')?>
                <?php $text = get_sub_field('contact_info_text')?>
                <li>
                  <a href=""><i class="<?php echo $sub_value ?>"></i></a>
                  <p><?php echo $text ?></p>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
              </ul>
              <a
                href=""
                class="btn px-[1rem] text-[1.4rem] font-[600] border-[3px] border-white hover:border-[3px] hover:bg-transparent hover:text-white ease-in duration-100"
                >Download CV</a
              >
            </div>
            <div class="contact__right lg:col-span-3">
              <form action="">
              <?php echo do_shortcode('[contact-form-7 id="120" title="Contact form 1"]')?>             
              </form>
              <!-- <a
                href=""
                class="btn px-[1rem] text-[1.4rem] font-[600] text-white bg-transparent border-[3px] border-white mt-[2rem] hover:text-[#0EA2A6] hover:bg-white ease-in duration-100"
                >Send Message</a
              > -->
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>