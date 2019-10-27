<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $this_post = $post->ID; ?>

  <!-- Single -->
  <article>
    <div class="single-post">
      <div class="container-fluid">
        <div class="row">
          <div class="single-post__column col-12 col-md-6 col-lg-5">
            <div class="single-post__headline">
              <h4><a href="<?php bloginfo('url'); ?>/the-ux-factor"><span class="icon-triangle-left"></span> The <strong>UX Factor</strong></a> / <?php the_tags('', ', ', '');?></h4>
              <h1 class="animated fadeInUp"><?php the_title(); ?></h1>
              <!-- Author -->
              <div class="single-post__headline__author">
                <div class="row">
                  <div class="d-none d-md-block col-md-3">
                    <?php echo get_avatar(get_the_author_meta('ID'), 512); ?>
                  </div>
                  <div class="col-12 col-md-9">
                    <p class="name"><span class="d-md-none">Written by: </span><?php echo get_the_author_meta('display_name'); ?></p>
                    <p class="date"><?php the_date(); ?> &#8226; <span class="time"><?php echo do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min read"]'); ?></span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Image -->
          <div class="single-post__hero col-12 col-md-6 col-lg-7 pr-0">
            <div class="hero-img lazyload" data-bgset="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('full'); } ?>"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Content -->
    <div class="container-fluid">
      <div class="row">
        <div class="post-content col-12 col-md-10 col-lg-8 mx-auto fullwidth" id="article">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </article>

  <!-- Article end -->
  <div id="article-end">
    <!-- Subscription -->
    <div class="subscription" id="other-posts">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-md-10 col-lg-8 mx-auto fullwidth">
            <div class="subscription-box">
              <div class="row">
                <div class="col-12">
                  <p class="incoming-mail">📨</p>
                  <h6>Did you find it useful?</h6>
                  <p>Then you'll love being the first one to know about our newest posts.</p>
                  <?php echo do_shortcode('[contact-form-7 title="Newsletter"]'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Author -->
    <div class="author-bio">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <p class="written">Written by:</p>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-3">
            <div class="avatar">
              <?php echo get_avatar(get_the_author_meta('ID'), 512); ?>
            </div>
          </div>
          <div class="col-12 col-md-9">
            <p class="name"><?php echo get_the_author_meta('display_name'); ?></p>
            <p class="role"><?php echo get_the_author_meta('nickname'); ?></p>
            <p class="description"><?php echo get_the_author_meta('description'); ?></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Related posts -->
    <section class="related">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="headline">
              <h6>Related <span>Insights</span></h6>
              <p>You might also like:</p>
            </div>
          </div>
        </div>
        <div class="row">
          <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
              'orderby' => 'rand',
              'post__not_in' => array($this_post)
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
  </div>

  <!-- Reading Progress -->
  <progress value="0" max="100" id="progress"></progress>
  <script type="text/javascript">
    window.onscroll = function() {readingProgress()}
    function readingProgress() {
      let winScroll = document.body.scrollTop || document.documentElement.scrollTop
      let bodyHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight
      let articleEndHeight = document.getElementById('article-end').offsetHeight
      let scrolled = (winScroll / (bodyHeight - articleEndHeight) ) * 100
      document.getElementById("progress").value = scrolled
      if (scrolled >= 100) {
        document.getElementById("progress").classList.add('done')
      }
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
    @media (min-width: 768px){
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
      .headroom--top span .vegan-burger{
        background: #fff !important;
      }
    }
  </style>

<!-- No post -->
<?php endwhile; else: ?>
<?php endif; ?>

<?php get_footer(); ?>
