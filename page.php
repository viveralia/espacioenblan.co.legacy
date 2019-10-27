<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Page -->
    <section class="page">
      <div class="container">
        <div class="row">
          <div class="col-11 col-md-10 col-lg-9 mx-auto">
            <div class="row">
              <div class="col-9 col-md-8">
                <div class="headline">
                  <h1><?php the_title(); ?></h1>
                </div>
              </div>
            </div>
            <div class="text">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- No post -->
<?php endwhile; else: ?>
<?php endif; ?>

<?php get_footer(); ?>
