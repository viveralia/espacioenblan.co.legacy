<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- About -->
    <article class="page-about">
      <!-- Heading -->
      <div class="container">
        <div class="row">
          <div class="col-11 col-md-12 col-lg-11 mx-auto">
            <div class="headline">
              <div class="row">
                <div class="col-12 col-md-6">
                  <h1><?php the_field( 'headline' ); ?></h1>
                </div>
                <div class="col-12 col-md-6">
                  <p><?php the_field( 'tagline' ); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Image -->
      <div class="hero-img lazyload" data-bgset="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('full'); } ?>"></div>
      <!-- Main Content -->
      <main class="container">
        <div class="row">
          <div class="col-11 col-md-8 col-lg-7 mx-auto">
            <div class="text-block">
              <h2><?php the_title(); ?></h2>
              <p><?php the_field( 'about_us' ); ?></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 fullwidth col-md-9 mx-auto">
            <div class="lazy-wrapper">
              <?php $image_1 = get_field( 'image_1' ); ?>
              <?php if ( $image_1 ) { ?>
                <img data-src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>" class="img-fluid lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-11 col-md-8 col-lg-7 mx-auto">
            <div class="text-block">
              <h2>Our Approach</h2>
              <p><?php the_field( 'our_approach' ); ?><a href="<?php bloginfo('url'); ?>/services" class="btn-secondary"> explore our services.</a></p>
              <a href="<?php bloginfo('url'); ?>/contact" class="btn btn-primary">Start a project</a>
            </div>
          </div>
        </div>
      </main>
    </article>

    <!-- Related posts -->
    <section class="related error-related">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="headline">
              <h6><span>Discover</span> how we think</h6>
              <p>Fresh insights from our blog:</p>
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

  <?php endwhile; else: ?>
  <?php endif; ?>

<?php get_footer(); ?>
