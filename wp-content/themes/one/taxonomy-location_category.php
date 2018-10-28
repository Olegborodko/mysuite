<?php
get_header();

$this_cat = $wp_query->get_queried_object();
//var_dump($this_cat);

$newargs = get_posts(array(
'post_type' => 'locations',
'tax_query' => array(
array(
'taxonomy' => 'location_category',
'field' => 'slug',
'terms' => $this_cat->slug
)
)
));

foreach( $newargs as $term ){
  ?>
<br>
  <br>
  <br>
  <br>
  <a href="<?=get_permalink($term->ID)?>"><?=$term->post_title?></a>
  <?php
}



get_footer();