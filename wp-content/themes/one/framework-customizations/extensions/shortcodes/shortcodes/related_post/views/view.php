<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}
?>

<div class="animated js_mobile_margin related_post"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     data-m-padding="<?= esc_attr($atts['padding_mobile'])?>"
     data-ipad-padding="<?= esc_attr($atts['padding_ipad'])?>"

     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;
     padding:<?=esc_attr($atts['padding'])?>;">

  <?php
  $my_posts = new WP_Query;

  $myposts = $my_posts->query( array(
  'post_type' => 'post',
    //'posts_per_page' => -1,
  'order' => 'ASC' //DESC
    //category_name
  ) );

  //  echo "<pre>";
  //          var_dump($myposts);
  //          echo "</pre>";
  //
  ?>




  <div class="swiper-container slider_type3__center slider_type3__js">
    <div class="related_post__top">
      <div class="related_post__title">
        Related
      </div>

      <div class="related_post__next_prev">
        <div class="swiper-button-next slider_type3__button_next"></div>
        <div class="swiper-button-prev slider_type3__button_prev"></div>
      </div>
    </div>

    <div class="swiper-wrapper slider_type3__wrapper">

      <?php
      foreach( $myposts as $post ){
        $post_id = $post -> ID;
        $image = get_the_post_thumbnail_url($post_id);
//    echo "<pre>";
//    var_dump($post);
//    echo "</pre>";
        ?>
        <div class="swiper-slide slider_type3__slide">
          <?php
          //echo $post -> id + "<------------";
          //echo get_the_post_thumbnail_url($post_id);
          ?>

          <?php if (strlen($image) > 0) { ?>
            <img src="<?=$image?>"/>
            <div class="related_post__bottom">
              <div class="related_post__date">
                <?=get_the_date('F j,Y',$post_id)?>
              </div>
              <div class="related_post__post_title">
                <?=$post -> post_title?>
              </div>
            </div>
          <?php } ?>
        </div>
        <?php
      }
      ?>



    </div>
  </div>



</div>
	