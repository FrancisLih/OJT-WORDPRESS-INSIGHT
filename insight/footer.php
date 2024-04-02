<?php wp_footer() ?>
<section class="footer">
      <div class="container">
        <div class="footer__wrapper">
          <div class="footer__social">
            <ul>
              <li>
                <a href=""><i class="<?php echo get_field('social_4')?>"></i></a>
              </li>
              <li>
                <a href=""><i class="<?php echo get_field('social_3')?>"></i></a>
              </li>
              <li>
                <a href=""><i class="<?php echo get_field('social_2')?>"></i></a>
              </li>
              <li>
                <a href=""><i class="<?php echo get_field('social_1')?>"></i></a>
              </li>
            </ul>
          </div>
          <img src="<?php echo get_field('website_logo')?>" alt="" />
          <p>All rights reserved.</p>
        </div>
      </div>
    </section>
    <script src="./script.js"></script>
    <script>
      const headerNav = document.querySelector(".header__nav");
    const burgerBtn = document.querySelector(".toggle__menu");
    burgerBtn.addEventListener("click", () => {
      burgerBtn.classList.toggle("open");
      headerNav.classList.toggle("open");
    });

    const header = document.querySelector(".header");
    window.console.log(scrollY);
    window.addEventListener("scroll", () => {
      if (window.scrollY >= 100) {
        header.classList.add("dark");
      } else {
        header.classList.remove("dark");
      }
    });

    </script>
  </body>
</html>