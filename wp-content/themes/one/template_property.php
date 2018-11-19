<?php
/*
Template Name: Property
*/
  get_header('property');
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

<div class="property">
  <div class="property__top_image">

  </div>

</div>

<?php
get_footer();
