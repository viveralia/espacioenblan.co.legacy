<?php get_header(); ?>

  <!-- Blog Archive -->
  <section class="archive-work archive-blog">
    <div class="container">
      <div class="row">
        <div class="col-11 col-sm-12 mx-auto headline">
          <h1>The <strong>UX Factor</strong></h1>
          <p>Hot insights from our blog. 🔥</p>
        </div>
        <!-- Tags -->
        <div class="col-12 fullwidth tags-container">
          <div class="tags">
            <div class="example-one-header scroll">
              <p class="title mb-0">Now showing:</p>
              <nav class="vertical-align-middle">
                <a href="<?php bloginfo('url'); ?>/the-ux-factor" class="nav-item"><span class="circle">○</span>All Insights</a>
                <a href="<?php bloginfo('url'); ?>/tag/business" class="nav-item"><span class="circle">○</span>Business</a>
                <a href="<?php bloginfo('url'); ?>/tag/design" class="nav-item"><span class="circle">○</span>Design</a>
                <a href="<?php bloginfo('url'); ?>/tag/development" class="nav-item selected"><span class="circle">●</span>Development</a>
                <a href="<?php bloginfo('url'); ?>/tag/marketing" class="nav-item"><span class="circle">○</span>Marketing</a>
              </nav>
            </div>
          </div>
        </div><!-- Tags end -->
      </div>
    </div>
    <div class="container related">
      <div class="row">
        <?php if ( have_posts() ) : while(have_posts()) : the_post(); {} ?>
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
      <?php endwhile; else : ?>
      <?php endif; ?>
      </div>
    </div>
    <!-- Pagination -->
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="pagination"><?php wp_pagenavi(); ?></div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
