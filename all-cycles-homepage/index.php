<?php get_header(); ?>

<div class="main-container">
      <div class="main">
        <article>
          <header class="about_all-cycles">
            <p>All Cycles is a grassroots Outreach Project for Seattle community members to bring menstrual supplies to folks in need.</p>
            <p>We gather anonymous donations of pads, tampons, wet wipes and underwear of various sizes and styles for homeless or income- insecure people in Seattle of all or no genders, who have cycles.</p>
          </header>
          <section class="donation-drive_section section_inset">
            <h2>Winter Donation Drive January 1st - February 20th</h2>
            <p>Donate today at one of our Seattle Drop-Off Locations or via our Online Wishlist!</p>
            <div class="button-link">
              <a href=""><span class="fa fa-map-marker"></span> View Locations</a>
            </div>
            <div class="button-link">
              <a href=""><span class="fa fa-gift"></span> Online Wishlist</a>
            </div>
          </section>
          <section class="section_inset">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>

            <?php endwhile; else : ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
          </section>
          <section class="join_section section_wrapper">
            <h2>Join our volunteer team!</h2>
            <form class="join_form" action="">
              <input name="first-name" type="text" placeholder="First Name" required>
              <input name="last-name" type="text" placeholder="Last Name" required>
              <input name="email-address" type="email" placeholder="Email Address" required>
              <button class="join_button"><span class="fa fa-smile-o"></span> Join Team</button>
            </form>
          </section>
        </article>

      </div>
    </div>

<?php get_footer(); ?>
