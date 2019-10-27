<?php get_header(); ?>

  <!-- Index -->
  <section class="index">
    <div class="container">
      <div class="row">
        <!-- Headline -->
        <div class="col-12 text-center headline">
          <h1>The <strong>UX Factor</strong></h1>
          <p>News and insights from our blog.</p>
        </div>
      </div>
      <?php if ( have_posts() ) : while(have_posts()) : the_post(); {} ?>
      <!-- Article -->
      <article>
        <div class="row">
          <!-- Post Image -->
          <div class="col-12 col-md-10 col-lg-7 fullwidth post-img">
            <a href="<?php the_permalink(); ?>">
              <div style="background: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('full'); } ?>') no-repeat center; background-size:cover" class="single-img"></div>
            </a>
          </div>
        </div>
        <div class="row">
          <!-- Black card -->
          <div class="col-10 col-md-7 col-lg-5 fullwidth card-container">
            <div class="black-card reveal">
              <!-- Categories -->
              <div class="categories">
                <span class="icon-price-tag"></span>
                <div class="d-inline-block">
                  <?php the_category();?>
                </div>
              </div>
              <!-- Post Title -->
              <div class="post-title">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              </div>
              <!-- Post Date -->
              <div class="post-date">
                <p class="date"><?php echo get_the_date(); ?> &#8226; <span class="time"><?php echo do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min read"]'); ?></span></p>
              </div>
            </div>
          </div>
        </div>
      </article>
      <!-- No post -->
      <?php endwhile; else : ?>
      <?php endif; ?>

      <!-- Pagination -->
      <section class="row">
        <div class="col-12">
          <div class="pagination"><?php wp_pagenavi(); ?></div>
        </div>
      </section>

    </div>
  </section>

<?php get_footer(); ?>
