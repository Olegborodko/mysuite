<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

?>

<div class="animated js_mobile_margin slider_type1"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;">

  <div class="slider_type1__before"></div>
  <div class="swiper-container slider_type1__container slider_type1__js">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper slider_type1__wrapper">
      <!-- Slides -->

      <?php
      foreach ( $atts['items'] as $key => $value ) {
        $image = '';
        if ( !empty( $value['image'] ) && !empty($value['image']['url']) ) {
          $image = esc_attr($value['image']['url']);
        }
        ?>
        <div class="swiper-slide slider_type1__slide">
          <img class="slider_type1__image" src="<?=$image?>"/>
          <div class="slider_type1__title">
            <?=$value['title']?>
          </div>
        </div>

      <?php } ?>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination slider_type1__pagination"></div>

    <!-- Add Arrows -->
<!--    <div class="swiper-button-next"></div>-->
<!--    <div class="swiper-button-prev"></div>-->
<!---->
<!--    <div class="swiper-scrollbar"></div>-->
  </div>
  <div class="slider_type1__after"></div>

</div>
	