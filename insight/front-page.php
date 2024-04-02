<?php get_header() ?>
<section id="home" class="banner" style="background-image: url(<?php echo get_field('banner_image')?>)">
      <div class="container">
        <div class="banner__wrapper">
          <h1><?php echo get_field('website_title')?>
          </h1>
          <div class="banner__btn">
            <a href="" class="btn bg--transparent">See Projects</a>
            <a href="" class="btn bg--primary">Inquire</a>
          </div>
        </div>
      </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="cards">
      <div class="container">
        <div class="cards__title">
          <h2>Services</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
        </div>
        <div class="cards__wrapper">

        <?php 
          $args = array(
          'post_type' => 'ServicesPost', 
          'posts_per_page' => -1,
            );
            $newQuery = new WP_Query($args)
            ?>

              <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
              <div class="cards__item">
                  <div class="cards__item__wrapper">
                    <div class="cards__item__text">
                      <h3><?php echo get_field('services_title')?></h3>
                      <p><?php echo get_field('services_content')?></p>
                      <ul>
                        <li><?php echo get_field('services_li_1')?></li>
                        <li><?php echo get_field('services_li_2')?></li>
                        <li><?php echo get_field('services_li_3')?></li>
                        <li><?php echo get_field('services_li_4')?></li>
                      </ul>
                    </div>
                  </div>
                  <a href=""><?php echo get_field('services_btn')?></a>
                  </div>
                <?php echo get_the_post_thumbnail() ?>
                   
                    <?php
                    endwhile;
                    else :
                        echo "no available content yet";
                    endif;
                    wp_reset_postdata();
            ?>
          
          <!-- <div class="cards__item">
            <div class="cards__item__wrapper">
              <div class="cards__item__text">
                <h3>Full Design</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum
                  molestias eveniet iste ipsam laborum consectetur odit autem
                  necessitatibus nisi maxime.
                </p>
                <ul>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                </ul>
              </div>
            </div>
            <a href="">More Details</a>
          </div>
          <div class="cards__item">
            <div class="cards__item__wrapper">
              <div class="cards__item__text">
                <h3>Ala Carte</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum
                  molestias eveniet iste ipsam laborum consectetur odit autem
                  necessitatibus nisi maxime.
                </p>
                <ul>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                </ul>
              </div>
            </div>
            <a href="">More Details</a>
          </div> -->
        </div>
      </div>
    </section>
    <!-- PROJECTS -->
    <section id="projects" class="projects">
      <div class="projects__wrapper">
      <?php 
          $args = array(
          'post_type' => 'ProjectPost', 
          'posts_per_page' => -1,
            );
            $newQuery = new WP_Query($args)
            ?>

              <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
              <div class="projects__item">
                <div class="cue"></div>
                  <img src="<?php echo get_field('project_image')?>" alt="" />
                  <div class="projects__item__text">
                  <h3><?php echo get_field('project_title')?></h3>
                  <p><?php echo get_field('project_content')?></p>
                  <a href="" class="btn bg--primary"><?php echo get_field('project_btn')?></a>
                </div>
                </div>
                <?php echo get_the_post_thumbnail() ?>
                   
                    <?php
                    endwhile;
                    else :
                        echo "no available content yet";
                    endif;
                    wp_reset_postdata();
            ?>
      </div>
    </section>
  <!-- END OF PROJECTS -->
    <section id="contacts" class="contacts">
      <div class="container">
        <div class="contacts__title">
          <h2>Contacts</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates,
            omnis!
          </p>
        </div>
        <div class="contacts__wrapper">
          <div class="contacts__form">
            <input type="text" placeholder="Name" />
            <input type="text" placeholder="Email" />
            <textarea name="" id="" cols="30" rows="10">Message</textarea>
            <a href="" class="btn bg--primary">Send Message</a>
          </div>
          <div class="contacts__social">
            <table>
              <tr>
                <td><i class="fa-solid fa-map-pin"></i></td>
                <td><?php echo get_field('contact_address')?></td>
              </tr>

              <tr>
                <td><i class="fa-solid fa-phone"></i></td>
                <td><?php echo get_field('contact_number')?></td>
              </tr>

              <tr>
                <td><i class="fa-solid fa-envelope"></i></td>
                <td><?php echo get_field('contact_email')?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section>
    <?php get_footer()?>