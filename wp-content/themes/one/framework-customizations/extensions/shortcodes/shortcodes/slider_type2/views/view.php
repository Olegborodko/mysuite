<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

?>

<div class="animated js_mobile_margin slider_type2"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;">

  <div class="slider_type2__before"></div>
  <div class="swiper-container slider_type2__center slider_type2__js">
    <div class="swiper-wrapper slider_type2__wrapper">

      <?php
      foreach ( $atts['items'] as $key => $value ) {
        $image = '';
        if ( !empty( $value['image'] ) && !empty($value['image']['url']) ) {
          $image = esc_attr($value['image']['url']);
        }
        ?>
        <div class="swiper-slide slider_type2__slide">
          <img class="slider_type2__image" src="<?=$image?>"/>
<!--          <div class="slider_type1__title">-->
<!--            --><?//=$value['title']?>
<!--          </div>-->
        </div>

      <?php } ?>
    </div>

    <div class="fw-visible-xs fw-visible-sm-md fw-hidden-lg swiper-button-next slider_type2__button_next"></div>
    <div class="fw-visible-xs fw-visible-sm-md fw-hidden-lg swiper-button-prev slider_type2__button_prev"></div>

    <div class="swiper-pagination slider_type2__pagination"></div>
  </div>
  <div class="slider_type2__after"></div>

</div>
	