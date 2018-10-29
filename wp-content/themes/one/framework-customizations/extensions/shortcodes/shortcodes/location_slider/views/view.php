<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$background_desktop = '';
if ( !empty( $atts['background_desktop'] ) && !empty($atts['background_desktop']['url']) ) {
  $background_desktop = esc_attr($atts['background_desktop']['url']);
}

$background_ipad = '';
if ( !empty( $atts['background_ipad'] ) && !empty($atts['background_ipad']['url']) ) {
  $background_ipad = esc_attr($atts['background_ipad']['url']);
}

$background_mobile = '';
if ( !empty( $atts['background_mobile'] ) && !empty($atts['background_mobile']['url']) ) {
  $background_mobile = esc_attr($atts['background_mobile']['url']);
}
?>

<div class="animated js_mobile_margin location_slider"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"

     data-b-ipad="<?=$background_ipad?>"
     data-b-mobile="<?=$background_mobile?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;
     background: url(<?=$background_desktop?>);">

  <div class="swiper-container location_slider__center location_slider__js">
    <div class="swiper-wrapper location_slider__wrapper">

      <?php
      foreach ( $atts['items'] as $key => $value ) {
        $image = '';
        if ( !empty( $value['image'] ) && !empty($value['image']['url']) ) {
          $image = esc_attr($value['image']['url']);
        }
        ?>
        <div class="swiper-slide location_slider__slide">
          <div class="location_slider__top_text af_small_top">
            <?=$value['top_text']?>
          </div>
          <h3 class="location_slider__big_text af_h3">
            <?=$value['big_text']?>
          </h3>

          <a href="<?=esc_attr($value['link'])?>" class="location_slider__image_block">
            <img class="location_slider__image" src="<?=$image?>"/>
            <div class="location_slider__address_1">
              <?=$value['address_1']?>
            </div>
            <div class="location_slider__address_2">
              <?=$value['address_2']?>
            </div>
            <div class="location_slider__arrow">
            </div>
          </a>
          <div class="location_slider__triangle"></div>
        </div>

      <?php } ?>
    </div>

    <div class="swiper-button-next location_slider__button_next"></div>
    <div class="swiper-button-prev location_slider__button_prev"></div>

<!--    <div class="swiper-pagination location_slider__pagination"></div>-->
  </div>

  <div class="location_slider__bottom_block">
    <div class="location_slider__bottom_text_1">
      <?=$atts['bottom_text_1']?>
    </div>
    <div class="location_slider__bottom_text_2">
      <?=$atts['bottom_text_2']?>
    </div>
  </div>


</div>
	