<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$my_posts = new WP_Query;

$myposts = $my_posts->query( array(
'post_type' => 'post',
'posts_per_page' => 7,
'order' => 'ASC',
'paged' => $paged
  //category_name
) );

//echo "<pre>";
//var_dump($myposts);
//echo "</pre>";

//foreach( $myposts as $post ){
//  $post_id = $post -> ID;
//  $image = get_the_post_thumbnail_url($post_id);
//  get_the_date('F j,Y',$post_id);
//  $post -> post_title;
//}

?>

<div class="news__top_title">
  Blog
</div>



<?php

foreach( $myposts as $post ){
  $post_id = $post -> ID;
  get_the_date('F j,Y',$post_id);
  echo $post -> post_title;
  echo get_the_permalink($post_id);
}

?>

<?php wp_reset_postdata(); ?>