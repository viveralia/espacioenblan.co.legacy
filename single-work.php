<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $this_post = $post->ID; ?>

  <!-- Work -->
  <article class="single-work">
    <div class="hero-img lazyload" data-bgset="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('full'); } ?>">
      <div class="overlay"></div>
    </div>
    <!-- Client Info -->
    <div class="container">
      <div class="row">
        <div class="col-11 col-lg-10 mx-auto client-info">
          <div class="row">
            <!-- Headline -->
            <div class="col-12 col-lg-6 headline">
              <h1><?php the_field( 'the_title' ); ?></h1>
              <p><?php the_title(); ?></p>
              <div class="services">
                <?php echo custom_get_terms( $post->ID, 'service' ); ?>
              </div>
            </div>
            <!-- Brief -->
            <div class="col-12 col-lg-6 text-block">
              <p><?php the_field( 'the_background' ); ?></p>
              <p><?php the_field( 'the_objective' ); ?></p>
              <a href="<?php the_field( 'site_url' ); ?>" target="_blank" class="btn btn-primary" id="launch">Launch site</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Showcase -->
    <div class="container-fluid showcase" id="article">
      <div class="row">
        <div class="col-12 col-md-8 mx-auto fullwidth">
          <div class="lazy-wrapper">
            <?php $image_1 = get_field( 'image_1' ); ?>
            <?php if ( $image_1 ) { ?>
              <img data-src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>" class="img-fluid lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-10 mx-auto">
          <div class="row">
            <div class="col-12 col-md-7 ml-auto fullwidth">
              <div class="lazy-wrapper">
                <?php $image_2 = get_field( 'image_2' ); ?>
                <?php if ( $image_2 ) { ?>
                	<img data-src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['alt']; ?>" class="img-fluid lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                <?php } ?>
              </div>
            </div>
            <div class="col-12 col-md-6 fullwidth floated">
              <div class="lazy-wrapper">
                <?php $image_3 = get_field( 'image_3' ); ?>
                <?php if ( $image_3 ) { ?>
                	<img data-src="<?php echo $image_3['url']; ?>" alt="<?php echo $image_3['alt']; ?>" class="img-fluid lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- The Process -->
      <div class="row">
        <div class="col-11 col-md-8 col-lg-6 mx-auto process">
          <p><?php the_field( 'the_process' ); ?></p>
          <p><?php the_field( 'the_result' ); ?></p>
        </div>
      </div>
      <!-- Showcase -->
      <div class="row">
        <div class="col-12 col-md-10 mx-auto">
          <div class="row">
            <div class="col-12 col-md-7 fullwidth">
              <div class="lazy-wrapper">
                <?php $image_4 = get_field( 'image_4' ); ?>
                <?php if ( $image_4 ) { ?>
                	<img data-src="<?php echo $image_4['url']; ?>" alt="<?php echo $image_4['alt']; ?>" class="img-fluid lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                <?php } ?>
              </div>
            </div>
            <div class="col-12 col-md-5 fullwidth">
              <div class="lazy-wrapper">
                <?php $image_5 = get_field( 'image_5' ); ?>
                <?php if ( $image_5 ) { ?>
                	<img data-src="<?php echo $image_5['url']; ?>" alt="<?php echo $image_5['alt']; ?>" class="img-fluid lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-8 mx-auto fullwidth mb-4">
          <div class="lazy-wrapper">
            <?php $image_6 = get_field( 'image_6' ); ?>
            <?php if ( $image_6 ) { ?>
              <img data-src="<?php echo $image_6['url']; ?>" alt="<?php echo $image_6['alt']; ?>" class="img-fluid lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </article>

  <!-- Related Work -->
  <section class="related-work" id="other-posts">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="headline">
            <h6>Related <span>Work</span></h6>
            <p>You might also like:</p>
          </div>
        </div>
        <?php
          $args = array(
            'post_type' => 'work',
            'posts_per_page' => 2,
            'orderby' => 'rand',
            'post__not_in' => array($this_post)
          );
          $query = new WP_Query($args);
          while ($query->have_posts()) : $query->the_post();
        ?>
        <article class="col-12 col-sm-6">
          <a href="<?php the_permalink(); ?>">
            <div class="img-wrapper">
              <div class="img lazyload" data-bgset="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('full'); } ?>">
                <div class="overlay">
                  <div class="text-block text-white">
                    <h4><?php the_title(); ?></h4>
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
      <div class="row">
        <div class="col-12 all-work">
          <a href="<?php bloginfo('url'); ?>/work" class="btn btn-primary btn-white">All work</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ScrollProgress -->
  <div id="readingProgress" class="readingProgress"></div>
  <script type="text/javascript">
    window.onscroll = function() {scrollProgress()}
    function scrollProgress() {
      let winScroll = document.body.scrollTop || document.documentElement.scrollTop
      let bodyHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight
      let footerHeight = document.getElementsByTagName('footer')[0].offsetHeight
      let scrolled = (winScroll / (bodyHeight - footerHeight) ) * 100
      document.getElementById("readingProgress").style.width = `${scrolled}%`
    }
  </script>

  <script type="text/javascript">
    // Show/Hide launch
    let launchButton = document.getElementById('launch')
    let launchLink = launchButton.href
    if ( launchLink[launchLink.length - 1] == '#' ) {
      launchButton.style.display = 'none'
    }
  </script>

  <!-- Share -->
  <div class="share">
    <div class="container animated" id="share">
      <div class="row">
        <div class="col-7 d-md-none left">
          <p>Share the 💖</p>
        </div>
        <div class="col-5 col-md-12 right">
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><span class="icon-facebook"></span></a>
          <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode( get_the_title() ) ?>&amp;url=<?php echo urlencode( get_permalink() ); ?>"><span class="icon-twitter"></span></a>
          <a href="https://www.linkedin.com/cws/share?url=<?php the_permalink(); ?>"><span class="icon-linkedin2"></span></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Reset Headroom Styles -->
  <style media="screen">
    .headroom--top {
      background: transparent !important;
      -webkit-transition: all .3s ease-out;
      -moz-transition: all .3s ease-out;
      -o-transition: all .3s ease-out;
      transition: all .3s ease-out;
    }
    .headroom--top .contact-button a{
      background: #fff;
      color: #1b1b1b;
    }
    .headroom--top .brand-name {
      filter: invert(100%);
    }
    .headroom--top span .vegan-burger{
      background: #fff !important;
    }
  </style>

<?php endwhile; else: ?>
<?php endif; ?>

<?php get_footer(); ?>
