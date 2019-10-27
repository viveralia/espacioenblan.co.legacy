<?php get_header(); ?>

  <!-- Work Archive -->
  <section class="archive-work">
    <div class="container">
      <div class="row">
        <div class="col-11 col-sm-12 mx-auto headline">
          <h1>Work</h1>
          <p>Some amazing companies we've worked with lately.👏</p>
        </div>
        <!-- Tags -->
        <div class="col-12 fullwidth tags-container">
          <div class="tags">
            <div class="example-one-header scroll">
              <p class="title mb-0">Now showing:</p>
              <nav class="vertical-align-middle">
                <a href="<?php bloginfo('url'); ?>/work" class="nav-item"><span class="circle">○</span>All Work</a>
                <a href="<?php bloginfo('url'); ?>/service/branding" class="nav-item"><span class="circle">○</span>Branding</a>
                <a href="<?php bloginfo('url'); ?>/service/experience-design" class="nav-item selected"><span class="circle">●</span>Experience Design</a>
                <a href="<?php bloginfo('url'); ?>/service/development" class="nav-item"><span class="circle">○</span>Development</a>
              </nav>
            </div>
          </div>
        </div><!-- Tags end -->
      </div>
    </div>
    <div class="container-fluid showcase">
      <div class="row">
        <?php if ( have_posts() ) : while(have_posts()) : the_post(); {} ?>
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

  <!-- Reset Headroom Styles -->
  <style media="screen">
    .headroom--top {
      background: transparent !important;
      -webkit-transition: all .3s ease-out;
      -moz-transition: all .3s ease-out;
      -o-transition: all .3s ease-out;
      transition: all .3s ease-out;
    }
  </style>

<?php get_footer(); ?>
