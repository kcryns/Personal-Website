
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
            <?php echo get_field('banner_subtitle'); ?> <span class="text-black"><?php echo get_field('banner_subtitle_span'); ?></span> <?php echo get_field('banner_subtitle_2'); ?>
            </h2>
            <p
              class="text-white text-justify text-[1.1rem] leading-[2.3rem] max-w-[25rem] mx-auto mt-[2rem] lg:mx-0 lg:text-[1.3rem] lg:max-w-[33rem]"
            >
            <?php echo get_field('banner_paragraph'); ?>
            </p>
            <div class="banner__button">
              <a
                href=""
                class="btn font-[600] text-[1.4rem] mt-[3rem] px-[.9rem] py-[.4rem] bg-transparent border-white text-white border-[2px] hidden lg:inline-block hover:text-[#0EA2A6] hover:bg-white ease-in duration-100"
                >Explore More</a
              >
              <a
                href=""
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
              <?php echo get_field('hover_img'); ?>
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
            <!-- <div class="card relative">
              <img
                src="./img/BW-css.png"
                alt=""
                class="skill_img w-[2rem] absolute scale-[4.7] top-[40%] ease-in duration-[300ms]"
              />
              <div class="card__content">
                <img src="./img/c-css.png" alt="" />
                <h3>CSS</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur. Purus viverra tempor
                  tempor leo. Nullam faucibus turpis gravida id
                </p>
              </div>
            </div>
            <div class="card relative">
              <img
                src="./img/BW-javascript.png"
                alt=""
                class="skill_img w-[2.5rem] absolute scale-[4.7] top-[40%] ease-in duration-[300ms]"
              />
              <div class="card__content">
                <img src="./img/c-js.png" alt="" />
                <h3>Javascript</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur. Purus viverra tempor
                  tempor leo. Nullam faucibus turpis gravida id
                </p>
              </div>
            </div>
            <div class="card relative">
              <img
                src="./img/BW-sass.png"
                alt=""
                class="skill_img w-[2rem] absolute scale-[4.7] top-[40%] ease-in duration-[300ms]"
              />
              <div class="card__content">
                <img src="./img/c-sass.png" alt="" />
                <h3>SASS</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur. Purus viverra tempor
                  tempor leo. Nullam faucibus turpis gravida id
                </p>
              </div>
            </div>
            <div class="card relative">
              <img
                src="./img/BW-wordpress.png"
                alt=""
                class="skill_img w-[2rem] absolute scale-[4.7] top-[40%] ease-in duration-[300ms]"
              />
              <div class="card__content">
                <img src="./img/c-wordpress.png" alt="" />
                <h3>Wordpress</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur. Purus viverra tempor
                  tempor leo. Nullam faucibus turpis gravida id
                </p>
              </div>
            </div>
            <div class="card relative">
              <img
                src="./img/BW-tailwind.png"
                alt=""
                class="skill_img w-[2rem] absolute scale-[4.7] top-[40%] ease-in duration-[300ms]"
              />
              <div class="card__content">
                <img src="./img/c-tailwind.png" alt="" />
                <h3>Tailwind</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur. Purus viverra tempor
                  tempor leo. Nullam faucibus turpis gravida id
                </p>
              </div>
            </div>
            <div class="card relative">
              <img
                src="./img/BW-figma.png"
                alt=""
                class="skill_img w-[2rem] absolute top-[40%] ease-in duration-[300ms] scale-[3.5]"
              />
              <div class="card__content">
                <img src="./img/c-figma.png" alt="" />
                <h3>Figma</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur. Purus viverra tempor
                  tempor leo. Nullam faucibus turpis gravida id
                </p>
              </div>
            </div>
            <div class="card relative">
              <img
                src="./img/BW-github.png"
                alt=""
                class="skill_img w-[2rem] absolute scale-[4.7] top-[40%] ease-in duration-[300ms]"
              />
              <div class="card__content">
                <img src="./img/c-github.png" alt="" />
                <h3>Github</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur. Purus viverra tempor
                  tempor leo. Nullam faucibus turpis gravida id
                </p>
              </div>
            </div> -->
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
            <span class="text-black">My</span> Services
          </h3>
          <div class="services__card mt-[4rem] lg:grid lg:grid-cols-3">
            <div
              class="services__card__content flex justify-center items-center"
            >
              <div class="services__content__text">
                <i class="fa-solid fa-pen-ruler"></i>
                <h4>UI/UX Design</h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur. Ut pulvinar id
                  vestibulum id placerat. Bibendum at eu vitae risus pharetra
                  cursus
                </p>
                <a href="">Read More...</a>
              </div>
            </div>
            <div
              class="services__card__content flex justify-center items-center"
            >
              <div class="services__content__text">
                <i class="fa-solid fa-pen-ruler"></i>
                <h4>UI/UX Design</h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur. Ut pulvinar id
                  vestibulum id placerat. Bibendum at eu vitae risus pharetra
                  cursus
                </p>
                <a href="">Read More...</a>
              </div>
            </div>
            <div
              class="services__card__content flex justify-center items-center"
            >
              <div class="services__content__text">
                <i class="fa-solid fa-pen-ruler"></i>
                <h4>UI/UX Design</h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur. Ut pulvinar id
                  vestibulum id placerat. Bibendum at eu vitae risus pharetra
                  cursus
                </p>
                <a href="">Read More...</a>
              </div>
            </div>
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
            <span class="text-black">My</span> Projects
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
                  <div class="projects__card">
                    <div class="projects__card__content p-[1.2rem]">
                      <img src="./img/foodfactory-card.png" alt="" />
                      <h3>Food Factory</h3>
                      <div class="flex justify-between items-center mt-[3rem]">
                        <div class="logo_text flex items-center">
                          <img src="./img/sass-card-logo.png" alt="" />
                          <h4>SASS</h4>
                        </div>
                        <a href="" class="border-[2px] rounded-[50%]"
                          ><i
                            class="fa-solid fa-up-right-from-square p-[.8rem] text-white"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="projects__card">
                    <div class="projects__card__content p-[1.2rem]">
                      <img src="./img/wondertour-card.png" alt="" />
                      <h3>Wonder Tour</h3>
                      <div class="flex justify-between items-center mt-[3rem]">
                        <div class="logo_text flex items-center">
                          <img src="./img/sass-card-logo.png" alt="" />
                          <h4>SASS</h4>
                        </div>
                        <a href="" class="border-[2px] rounded-[50%]"
                          ><i
                            class="fa-solid fa-up-right-from-square p-[.8rem] text-white"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="projects__card">
                    <div class="projects__card__content p-[1.2rem]">
                      <img src="./img/vsc-card.png" alt="" />
                      <h3>Visual Studio Code</h3>
                      <div class="flex justify-between items-center mt-[3rem]">
                        <div class="logo_text flex items-center">
                          <img src="./img/sass-card-logo.png" alt="" />
                          <h4>SASS</h4>
                        </div>
                        <a href="" class="border-[2px] rounded-[50%]"
                          ><i
                            class="fa-solid fa-up-right-from-square p-[.8rem] text-white"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="projects__card">
                    <div class="projects__card__content p-[1.2rem]">
                      <img src="./img/spotify-card.png" alt="" />
                      <h3>Spotify</h3>
                      <div class="flex justify-between items-center mt-[3rem]">
                        <div class="logo_text flex items-center">
                          <img src="./img/sass-card-logo.png" alt="" />
                          <h4>SASS</h4>
                        </div>
                        <a href="" class="border-[2px] rounded-[50%]"
                          ><i
                            class="fa-solid fa-up-right-from-square p-[.8rem] text-white"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="project-2-content" class="project-tab__content">
                <div class="projects__card">
                  <div class="projects__card__content p-[1.2rem]">
                    <img src="./img/spotifypremium-card.png" alt="" />
                    <h3>Spotify Premium</h3>
                    <div class="flex justify-between items-center mt-[3rem]">
                      <div class="logo_text flex items-center">
                        <img src="./img/tailwind-card-logo.png" alt="" />
                        <h4>Tailwind</h4>
                      </div>
                      <a href="" class="border-[2px] rounded-[50%]"
                        ><i
                          class="fa-solid fa-up-right-from-square p-[.8rem] text-white"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                id="project-3-content"
                class="project-tab__content max-w-[21.8rem]"
              >
                <div class="slider_2">
                  <div class="projects__card">
                    <div class="projects__card__content p-[1.2rem]">
                      <img src="./img/theblog-card.png" alt="" />
                      <h3>The Blog</h3>
                      <div class="flex justify-between items-center mt-[3rem]">
                        <div class="logo_text flex items-center">
                          <img src="./img/wordpress-card-logo.png" alt="" />
                          <h4>Wordpress</h4>
                        </div>
                        <a href="" class="border-[2px] rounded-[50%]"
                          ><i
                            class="fa-solid fa-up-right-from-square p-[.8rem] text-white"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="projects__card">
                    <div class="projects__card__content p-[1.2rem]">
                      <img src="./img/cvd-card.png" alt="" />
                      <h3 class="leading-[2rem]">Creative Visual Design</h3>
                      <div class="flex justify-between items-center mt-[2rem]">
                        <div class="logo_text flex items-center">
                          <img src="./img/wordpress-card-logo.png" alt="" />
                          <h4>Wordpress</h4>
                        </div>
                        <a href="" class="border-[2px] rounded-[50%]"
                          ><i
                            class="fa-solid fa-up-right-from-square p-[.8rem] text-white"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="project-4-content" class="project-tab__content">
                <div class="projects__card">
                  <div class="projects__card__content p-[1.2rem]">
                    <img src="./img/presentmeet-card.png" alt="" />
                    <h3>Present-Meet</h3>
                    <div class="flex justify-between items-center mt-[3rem]">
                      <div class="logo_text flex items-center">
                        <img src="./img/javascript-card-logo.png" alt="" />
                        <h4>Javascript</h4>
                      </div>
                      <a href="" class="border-[2px] rounded-[50%]"
                        ><i
                          class="fa-solid fa-up-right-from-square p-[.8rem] text-white"
                        ></i
                      ></a>
                    </div>
                  </div>
                </div>
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
            Contact
            <span class="text-black">Me</span>
          </h3>
          <p
            class="text-white text-[1.2rem] font-[600] max-w-[30rem] text-center mx-auto lg:text-start lg:mx-0 lg:max-w-none"
          >
            Feel free to contact me if you have a question in your mind.
          </p>
          <div class="contact__content lg:grid lg:grid-cols-5">
            <div
              class="contact__left flex flex-col justify-center items-center lg:justify-start lg:items-start lg:col-span-2"
            >
              <ul class="">
                <li>
                  <a href=""><i class="fa-solid fa-envelope"></i></a>
                  <p>rayneskarlcydrick@gmail.com</p>
                </li>
                <li>
                  <a href=""><i class="fa-solid fa-location-dot"></i></a>
                  <p>San Joaquin, Sto. Tomas, Batangas</p>
                </li>
                <li>
                  <a href=""><i class="fa-solid fa-phone"></i></a>
                  <p>+639156045676</p>
                </li>
              </ul>
              <a
                href=""
                class="btn px-[1rem] text-[1.4rem] font-[600] border-[3px] border-white hover:border-[3px] hover:bg-transparent hover:text-white ease-in duration-100"
                >Download CV</a
              >
            </div>
            <div class="contact__right lg:col-span-3">
              <form action="">
                <div
                  class="contact__right__upper lg:grid lg:grid-cols-2 lg:gap-[2rem]"
                >
                  <input type="text" placeholder="Your Name" />
                  <br class="hidden" />
                  <input type="text" placeholder="Phone Number" />
                </div>
                <input type="email" placeholder="Email Address" />
                <br />
                <textarea
                  name=""
                  placeholder="Message"
                  id=""
                  cols="30"
                  rows="10"
                ></textarea>
                <br />
              </form>
              <a
                href=""
                class="btn px-[1rem] text-[1.4rem] font-[600] text-white bg-transparent border-[3px] border-white mt-[2rem] hover:text-[#0EA2A6] hover:bg-white ease-in duration-100"
                >Send Message</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>