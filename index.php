<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CC_Com_2020
 */

get_header();
?>

<main id="primary" class="site-main">

  <!-- Begin: Bulma Hero -->
  <section class="hero is-primary is-medium">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          <?php echo get_the_title(); ?>
        </h1>
      </div>
    </div>
  </section>
  <!-- Begin: Bulma Hero -->

  <!-- Begin: Main Content Area Section -->
  <section class="section">
    <div class="container">

      <div class="columns is-variable">

        <div class="column is-12 maincontentarea">

          <p>index.php file here</p>

          <?php the_content(); ?>

        </div>

      </div>

    </div>
  </section>
  <!-- End: Main Content Area Section -->

</main><!-- #main -->

<?php
get_footer();