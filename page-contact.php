<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- Contact -->
  <section class="contact">
    <div class="container">
      <div class="row">
        <!-- Headline -->
        <div class="col-11 col-sm-12 headline mx-auto">
          <h1>Hello, <span id="name">amigo</span> 🎉</h1>
          <h2>Ready to create something awesome?</h2>
        </div>
        <!-- Send message -->
        <div class="col-11 col-sm-12 col-lg-8 form mx-auto">
          <!-- <form>
            <input type="text" id="nameInput" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
            <textarea name="info" rows="8" cols="10" placeholder="Tell us more about the project"></textarea>
            <input type="submit" value="Submit" class="btn btn-primary">
          </form> -->
          <?php the_content(); ?>
        </div>
        <!-- Direct contact -->
        <div class="col-12 col-lg-4 fullwidth">
          <div class="direct">
            <p>Or contact us directly via:</p>
            <a href="tel:+5215531758255">+52 55 3175 8255</a>
            <a href="mailto:hola@espacioenblan.co">hola@espacioenblan.co</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript">
    // Change Name
    let name = document.getElementById('name')
    let input = document.getElementById('nameInput')
    function nameChange() {
      if (input.value == '' || input.value == null) {
        name.innerHTML = 'amigo'
      } else {
        name.innerHTML = input.value
      }
    }
    input.addEventListener('change', nameChange)
    // Hide Contact Button
    let contactButton = document.getElementsByClassName('contact-button')[0]
    contactButton.classList.add('fadeOut')
    function hideButton() {
      contactButton.style.display = 'none'
    }
    window.setTimeout(hideButton, 2000)
  </script>

<!-- No post -->
<?php endwhile; else: ?>
<?php endif; ?>

<?php get_footer(); ?>
