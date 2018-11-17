<div class="news__top_title">
  Press
</div>

<?php

$my_press = new WP_Query;

$myposts_press = $my_press->query( array(
'post_type' => 'post',
'posts_per_page' => 5,
'order' => 'ASC',
  //category_name
) );

foreach( $myposts_press as $post ){
  $post_id = $post -> ID;
  ?>
<div class="news__press_item">
  <div class="news__press_date">
    <?=get_the_date('F j,Y',$post_id)?>
  </div>
  <div class="news__press_title">
    <a href="<?=get_the_permalink($post_id)?>">
      <?=$post -> post_title?>
    </a>
  </div>
  <div class="news__press_category">
    <div class="news__press_category_title">
    <?=get_the_category($post_id)[0]->cat_name?>
    </div>
    <a href="<?=get_the_permalink($post_id)?>" class="news__press_category_arrow">
    </a>
  </div>


</div>
  <?php
}

wp_reset_postdata();