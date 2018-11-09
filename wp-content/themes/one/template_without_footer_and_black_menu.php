<?php
/*
Template Name: Without footer and black menu
*/
  get_header('black');
?>

<?php
while ( have_posts() ) :
  the_post();

  get_template_part( 'template-parts/zero', 'page' );

  // If comments are open or we have at least one comment, load up the comment template.
  if ( comments_open() || get_comments_number() ) :
    comments_template();
  endif;

endwhile; // End of the loop.
?>

<?php
get_footer('without_footer');
