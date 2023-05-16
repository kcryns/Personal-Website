<footer class="footer py-[1.5rem] bg-[#0EA2A6]">
      <div class="container">
        <div
          class="footer__wrapper flex flex-col justify-center items-center lg:flex-row lg:justify-between"
        >
          <ul class="flex">
          <?php if( have_rows('footer_social') ): ?>
            <?php while( have_rows('footer_social')) : the_row();  ?>

                <?php $sub_value = get_sub_field('icon')?>
                <?php $link = get_sub_field('link')?>
            <li>
              <a href="<?php echo $link ?>"><i class="<?php echo $sub_value ?>"></i></a>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>
            
          </ul>
          <p class="text-[1.3rem] text-white pt-2 lg:text-[1.5rem] lg:pt-0">
            <?php echo get_field('copyright');?>
          </p>
        </div>
      </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script>
      var slider = tns({
        container: ".slider_1",
        items: 1,
        slideBy: "page",
        autoplay: true,
        axis: "horizontal",
        controls: false,
        nav: true,
        autoplayPosition: false,
        autoplayButton: false,
        responsive: {
          900: {
            items: 3,
            slideBy: 1,
            center: true,
          },
        },
      });

      var slider = tns({
        container: ".slider_2",
        items: 1,
        slideBy: "page",
        autoplay: true,
        axis: "horizontal",
        controls: false,
        nav: true,
        autoplayPosition: false,
        autoplayButton: false,
        responsive: {
          900: {
            items: 3,
            slideBy: true,
          },
        },
      });

      
    </script>
    <script src="./script.js"></script>
    
  </body>
  <?php wp_footer(); ?>
</html>
