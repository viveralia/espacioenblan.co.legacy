<?php get_header(); ?>

    <!-- Hero -->
    <section class="hero">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-8 fullwidth">
            <div class="lazy-wrapper">
              <img class="lazyload" data-src="<?php bloginfo('template_url'); ?>/img/smile.jpg" alt="Girl looking at her phone smiling" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
            </div>
          </div>
          <div class="col-10 col-sm-8 col-md-7 col-lg-6 fullwidth">
            <div class="black-card animated fadeInUp">
              <h1>We craft
                <br>
                <strong>
                  <div id="typed-strings">
                    <p>brands</p>
                    <p>products</p>
                    <p>experiences</p>
                  </div>
                  <span id="typed"></span>
                </strong>
                <br>
                to fall in love with.</h1>
                <a class="btn btn-primary btn-white" href="<?php echo get_home_url(); ?>the-ux-factor/5-reasons-to-invest-in-user-experience-ux-design">Why invest in UX?</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Divider -->
    <div class="divider div-1"></div>
    <!-- About -->
    <section class="about">
      <div class="container">
        <div class="row">
          <div class="col-11 col-md-8 col-lg-6 text-center mx-auto">
            <div class="headline">
              <h2>We are a <strong>digital product studio</strong> for the modern era</h2>
              <p>Our mission is to improve customer satisfaction and loyalty by developing user-centered brands.</p>
              <a href="<?php bloginfo('url'); ?>/about" class="btn-secondary">More info</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Divider -->
    <div class="divider"></div>
    <!-- Blog -->
    <section class="blog">
      <div class="container">
        <div class="row">
          <div class="col-12 headline text-center">
            <h2>The <strong>UX Factor</strong></h2>
            <p>News and insights from our blog.</p>
          </div>
        </div>
        <div class="row">
          <!-- Post -->
          <div class="col-12 px-0">
            <!-- Card container -->
            <section class="card--container">
              <?php
                $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 3
                );
                // The Query
                $query = new WP_Query($args);
                // The Loop
                while ($query->have_posts()) : $query->the_post();
              ?>              <!-- Post Card -->
              <div class="card--content">
                <div class="post-card">
                  <div class="post-img">
                    <a href="<?php the_permalink(); ?>">
                      <div data-bgset='<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('full'); } ?>' class="single-img lazyload"></div>
                    </a>
                  </div>
                  <div class="black-card">
                    <!-- Categories -->
                    <div class="categories">
                      <span class="icon-price-tag"></span>
                      <div class="d-inline-block">
                        <?php the_tags('', ', ', '');?>
                      </div>
                    </div>
                    <div class="post-title">
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                    <div class="post-date">
                      <p><?php echo get_the_date(); ?>  &#8226; <span class="time"><?php echo do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min read"]'); ?></span></p>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; wp_reset_query(); ?>
              <div class="card--space d-lg-none"></div>
            </section>
          </div>
        </div>
      </div>
      <!-- Button -->
      <div class="container full">
        <div class="row">
          <div class="col-12 all-work">
            <a href="<?php bloginfo('url'); ?>/the-ux-factor" class="btn btn-primary">All insights</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Work Archive -->
    <section class="archive-work home-work">
      <div class="container">
        <div class="row">
          <div class="col-11 col-sm-12 mx-auto">
            <div class="headline">
              <h2>Work</h2>
              <p>Some amazing companies we've worked with lately.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid showcase">
        <div class="row">
          <?php
            $args = array(
              'post_type' => 'work',
              'posts_per_page' => 5
            );
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post();
          ?>
          <article class="col-12 col-md-6 col-lg-4 showcase-card">
            <a href="<?php the_permalink(); ?>">
              <div class="img-wrapper">
                <div class="img lazyload" data-bgset="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('full'); } ?>">
                  <div class="overlay">
                    <div class="text-block text-white">
                      <h2><?php the_title(); ?></h2>
                      <div class="services">
                        <p><?php echo custom_get_terms_nl( $post->ID, 'service' ); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </article>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 all-work">
            <a href="<?php bloginfo('url'); ?>/work" class="btn btn-primary btn-white">All work</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Type js -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/typed.min.js"></script>
    <script type="text/javascript">
      // Type effect
      var typed = new Typed('#typed', {
        stringsElement: '#typed-strings',
        typeSpeed: 85,
        backSpeed: 85,
        backDelay: 2500,
        loop: true,
        showCursor: false
      });
    </script>

<?php get_footer(); ?>
