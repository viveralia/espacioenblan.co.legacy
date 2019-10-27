<?php get_header(); ?>

  <!-- 404 -->
  <section class="error">
    <div class="container">
      <div class="row">
        <div class="col-11 mx-auto">
          <div class="row">
            <div class="col-12 col-md-10 col-lg-6 headline order-lg-2">
              <h2><span>Bingo!</span> 💎</h2>
              <h1>Looks like you just found <strong>our precious.</strong></h1>
              <p>But we were unable to find the page you are looking for.</p>
              <p>Worry no more! Here's a fesh cookie and even fresher insights from our blog:</p>
              <a href="<?php bloginfo('url'); ?>" class="btn btn-primary d-none d-lg-block">Just take me home</a>
            </div>
            <div class="col-12 col-lg-6 not-found order-lg-1">
              <span>4🍪4</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Related posts -->
  <section class="related error-related">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="headline">
            <h6>Our Freshest <span>Insights</span></h6>
            <p>Brought to you by The UX Factor.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3
          );
          $query = new WP_Query($args);
          while ($query->have_posts()) : $query->the_post();
        ?>
        <div class="col-12 col-md-6 col-lg-4">
          <article class="related-post">
            <div class="row">
              <div class="col-12">
                <a href="<?php the_permalink(); ?>">
                  <div class="img lazyload" data-bgset="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('full'); } ?>"></div>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-10">
                <div class="black-card">
                  <!-- Categories -->
                  <div class="categories">
                    <span class="icon-price-tag"></span>
                    <div class="d-inline-block">
                      <?php the_tags('', ', ', '');?>
                    </div>
                  </div>
                  <!-- Post Title -->
                  <div class="post-title">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  </div>
                  <!-- Post Date -->
                  <div class="post-date">
                    <p class="date"><?php echo get_the_date(); ?> &#8226; <span class="time"><?php echo do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min read"]'); ?></span></p>
                  </div>
                </div><!-- Black card ends -->
              </div>
            </div>
          </article>
        </div>
      <?php endwhile; wp_reset_query(); ?>
      </div>
      <div class="row">
        <div class="col-12 all-work">
          <a href="<?php bloginfo('url'); ?>/the-ux-factor" class="btn btn-primary">All insights</a>
        </div>
      </div><!-- Row ends -->
    </div>
  </section>

<?php get_footer(); ?>
