<footer class="footer py-[1.5rem] bg-[#0EA2A6]">
      <div class="container">
        <div
          class="footer__wrapper flex flex-col justify-center items-center lg:flex-row lg:justify-between"
        >
          <ul class="flex">
            <li>
              <a href=""><i class="fa-brands fa-facebook-f"></i></a>
            </li>
            <li>
              <a href=""><i class="fa-brands fa-twitter"></i></a>
            </li>
            <li>
              <a href=""><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li>
              <a href=""><i class="fa-brands fa-linkedin"></i></a>
            </li>
            <li>
              <a href=""><i class="fa-brands fa-google-plus-g"></i></a>
            </li>
            <li>
              <a href=""><i class="fa-brands fa-github"></i></a>
            </li>
          </ul>
          <p class="text-[1.3rem] text-white pt-2 lg:text-[1.5rem] lg:pt-0">
            ©Karl Cydrick C. Raynes - 2023
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
