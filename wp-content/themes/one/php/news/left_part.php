<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$category_name = ( get_query_var( 'category_name' ) ) ? get_query_var( 'category_name' ) : '';

$my_posts = new WP_Query;

$myposts = $my_posts->query( array(
'post_type' => 'post',
'posts_per_page' => 7,
'order' => 'ASC',
'paged' => $paged,
'category_name' => $category_name
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

<?php

$categories = get_categories( array(
'type'         => 'post',
'child_of'     => 0,
'parent'       => '',
'orderby'      => '',
'order'        => 'ASC',
//'hide_empty'   => 1,
//'hierarchical' => 1,
//'exclude'      => '',
//'include'      => '',
'number'       => 0,
'taxonomy'     => 'category',
'pad_counts'   => false,
) );

//echo "<pre>";
//var_dump($categories);
//echo "</pre>";

global $wp;
$link = home_url( $wp->request );
$link_to_category = home_url( $wp->request ) . "/?category_name=";

global $post;
$page_slug = $post->post_name;
$url=get_site_url().'/'.$page_slug;
$url_with_category = $url."/?category_name=";
?>

  <div class="news__top_title">
    Blog
  </div>
  <div class="news__filter">
    <div id="js_news__filter_button" class="news__filter_button js_news__filter_button">
      <?php if ($category_name==''){ ?>
        Show All <i class="fa fa-angle-down" aria-hidden="true"></i>
      <?php }else{ ?>
        <?=get_category_by_slug($category_name)->name?> <i class="fa fa-angle-down" aria-hidden="true"></i>
      <?php } ?>
    </div>
    <div class="news__filter_submenu js_news__filter_submenu">
      <?php if ($category_name!=''){ ?>
        <a href="<?=$url?>">Show All</a>
      <?php } ?>

      <?php
      function strposX($haystack, $needle, $number) {
        // decode utf8 because of this behaviour: https://bugs.php.net/bug.php?id=37391
        preg_match_all("/$needle/", utf8_decode($haystack), $matches, PREG_OFFSET_CAPTURE);
        return $matches[0][$number-1][1];
      }

      foreach( $categories as $el ){
        if ($category_name != $el->slug) {
          echo $pos;
          ?>
          <a href="<?= $url_with_category . $el->slug ?>"><?= $el->cat_name ?></a>
          <?php
        }
      }

      ?>
    </div>
  </div>



<?php
$i = true;
foreach( $myposts as $post ){
  $post_id = $post -> ID;
  $image = get_the_post_thumbnail_url($post_id);
  if ($i){
    ?>
    <a href="<?=get_the_permalink($post_id)?>" class="news__post_big">
      <img src="<?=$image?>"/>
      <div class="news__post_big_block_description">
        <div class="news__post_big_date">
          <?=get_the_date('F j,Y',$post_id);?>
        </div>
        <div class="news__post_big_title">
          <?=$post -> post_title;?>
        </div>
        <div class="news__post_big_description">
          <?=get_field( "description", $post_id );?>
        </div>
      </div>


    </a>

    <div class="news__center_block">
    <?php
    $i = false;
    continue;
  }
  ?>
  <a href="<?=get_the_permalink($post_id)?>" class="news__center_item">

    <div class="news__center_image_block">
      <img src="<?=$image?>"/>
      <div class="news__center_shadow"></div>
      <div class="news__center_read_more">
        <div class="news__center_read_more_title">
          READ MORE
        </div>
        <div class="news__center_read_more_arrow">
        </div>
      </div>
    </div>

    <div class="news__center_description">
      <div class="news__center_date">
        <?=get_the_date('F j,Y',$post_id);?>
      </div>
      <div class="news__center_title">
        <?=$post -> post_title;?>
      </div>
    </div>
  </a>
  <?php
}

?>
  </div>

<?php wp_reset_postdata(); ?>