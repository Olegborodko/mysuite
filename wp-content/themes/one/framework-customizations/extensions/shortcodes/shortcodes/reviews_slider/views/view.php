<?php if (!defined('FW')) {
  die('Forbidden');
}

$desktop_background = '';
if ( !empty( $atts['desktop_background'] ) && !empty($atts['desktop_background']['url']) ) {
  $desktop_background = esc_attr($atts['desktop_background']['url']);
}

$ipad_background = '';
if ( !empty( $atts['ipad_background'] ) && !empty($atts['ipad_background']['url']) ) {
  $ipad_background = esc_attr($atts['ipad_background']['url']);
}

$mobile_background = '';
if ( !empty( $atts['mobile_background'] ) && !empty($atts['mobile_background']['url']) ) {
  $mobile_background = esc_attr($atts['mobile_background']['url']);
}
?>

<div class="animated js_mobile_margin reviews_slider"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     data-b-ipad="<?= $ipad_background ?>"
     data-b-mobile="<?= $mobile_background ?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;
     background-image:url(<?= $desktop_background ?>);">

  <div class="swiper-container reviews_slider__container reviews_slider__js">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper reviews_slider__wrapper">
      <!-- Slides -->

      <?php
      foreach ( $atts['items'] as $key => $value ) {
        $image_person = '';
        if ( !empty( $value['image_person'] ) && !empty($value['image_person']['url']) ) {
          $image_person = esc_attr($value['image_person']['url']);
        }
        ?>
        <div class="swiper-slide reviews_slider__slide">
          <img class="reviews_slider__image" src="<?=$image_person?>"/>
          <div class="reviews_slider__text">
            <?=$value['text']?>
          </div>
          <div class="reviews_slider__name">
            <?=$value['name']?>
          </div>
          <div class="reviews_slider__location">
            <?=$value['location']?>
          </div>
        </div>

      <?php } ?>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination reviews_slider__pagination"></div>

    <!-- Add Arrows -->
    <div class="swiper-button-next reviews_slider__button_next"></div>
    <div class="swiper-button-prev reviews_slider__button_prev"></div>
  </div>


</div>

