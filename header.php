<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Karl - Portfolio</title>
    <link rel="stylesheet" href="./output.css" />
    <script
      src="https://kit.fontawesome.com/b2cb6cdadd.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css"
    />
  </head>
  <?php wp_head(); ?>
  <body>

    <div class="backtotop">
      <a href="#banner"
        ><span><i class="fa-solid fa-chevron-up"></i></span
      ></a>
    </div>
    <header class="header fixed bg-[#0EA2A6] w-[100%] z-90" style="
    z-index: 99;" >
      <div class="relative px-0">
        <div class="container">
          <div
            class="header__wrapper flex items-center py-[1rem] justify-between"
          >
            <img
              src="<?php echo get_template_directory_uri()?> ./img/Logo.png"
              alt=""
              class="w-[3.3rem] h-[3.3rem] lg:w-[4rem] lg:h-[4rem]"
            />
            <div class="toggle__menu lg:hidden">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div
              class="navigation absolute top-[5.3rem] bg-[rgb(0,0,0,.2)] w-[100%] h-[91vh] flex justify-end lg:static lg:bg-transparent lg:w-auto lg:h-auto"
            >
              <ul
                class="w-[70%] bg-white pt-[3rem] h-[91vh] lg:flex lg:h-auto lg:pt-0 lg:bg-transparent lg:w-auto"
              >
                <?php wp_menu_li()?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>