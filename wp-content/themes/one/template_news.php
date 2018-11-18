<?php
/*
Template Name: News
*/
get_header();
?>

<?php
while ( have_posts() ) :
  the_post();

  get_template_part( 'template-parts/zero', 'page' );

  // If comments are open or we have at least one comment, load up the comment template.
//  if ( comments_open() || get_comments_number() ) :
//    comments_template();
//  endif;

endwhile; // End of the loop.
?>

<section class="news">
  <div class="fw-container r_c_white_and_shadow_news">
    <div class="fw-row">
      <div class="fw-col-xs-12 fw-col-lg-12">
        <div class="news__block">
          <div class="news__left">
            <?php require( get_stylesheet_directory() . '/php/news/left_part.php' ); ?>

            <div class="pagination">
              <?php require( get_stylesheet_directory() . '/php/news/pagination.php' ); ?>
            </div>
          </div>
          <div class="news__right">
            <?php require( get_stylesheet_directory() . '/php/news/right_part.php' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
