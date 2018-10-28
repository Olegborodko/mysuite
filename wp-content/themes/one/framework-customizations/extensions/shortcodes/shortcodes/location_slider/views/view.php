<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

?>

<div class="animated js_mobile_margin location_slider"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;">

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
          <div class="location_slider__top_text">
            <?=esc_attr($value['top_text'])?>
          </div>
          <div class="location_slider__big_text">
            <?=esc_attr($value['big_text'])?>
          </div>

          <a href="<?=esc_attr($value['link'])?>" class="location_slider__image_block">
            <img class="location_slider__image" src="<?=$image?>"/>
            <div class="location_slider__address_1">
              <?=esc_attr($value['address_1'])?>
            </div>
            <div class="location_slider__address_2">
              <?=esc_attr($value['address_2'])?>
            </div>
          </a>
        </div>

      <?php } ?>
    </div>

    <div class="swiper-button-next location_slider__button_next"></div>
    <div class="swiper-button-prev location_slider__button_prev"></div>

<!--    <div class="swiper-pagination location_slider__pagination"></div>-->
  </div>


</div>
	