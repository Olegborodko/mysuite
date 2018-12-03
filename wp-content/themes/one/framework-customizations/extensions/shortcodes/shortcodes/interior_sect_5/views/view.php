<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$image1 = '';
if ( !empty( $atts['image1'] ) && !empty($atts['image1']['url']) ) {
  $image1 = esc_attr($atts['image1']['url']);
}

$image2 = '';
if ( !empty( $atts['image2'] ) && !empty($atts['image2']['url']) ) {
  $image2 = esc_attr($atts['image2']['url']);
}

$image3 = '';
if ( !empty( $atts['image3'] ) && !empty($atts['image3']['url']) ) {
  $image3 = esc_attr($atts['image3']['url']);
}

$image4 = '';
if ( !empty( $atts['image4'] ) && !empty($atts['image4']['url']) ) {
  $image4 = esc_attr($atts['image4']['url']);
}
?>

<div class="animated js_mobile_margin"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     data-m-padding="<?= esc_attr($atts['padding_mobile'])?>"
     data-ipad-padding="<?= esc_attr($atts['padding_ipad'])?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;
     padding:<?=esc_attr($atts['padding'])?>;">

  <div class="sect-5">
    <div class="sect-5__container">
      <div class="sect-5__img-col sect-5__img-col-custom">
        <img src="<?=$image1?>" alt="">
      </div>

      <div class="default-container">
        <div class="default-row">
          <div class="default-col-md-6 default-col-md-6-custom sect-5__col-1">
            <img src="<?=$image2?>" alt="">
          </div>

          <div class="default-col-md-6 default-col-md-6-custom sect-5__col-2">
            <div class="custom-slider-wrapper">
              <div id="custom-slider" class="custom-slider">
                <?php foreach ( $atts['items'] as $key => $value ) { ?>
                  <div class="slick-slide">
                    <div>
                      <h2 class="sect-title"><?=$value['title']?></h2>
                      <div class="custom-slider__text custom-rte">
                        <?=$value['text']?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>

              <div id="custom-slider-nav" class="custom-slider__nav"></div>
            </div>

            <img src="<?=$image3?>" alt="">
          </div>
        </div>
      </div>
      <div class="sect-5__img-col sect-5__img-col-custom">
        <img src="<?=$image4?>" alt="">
      </div>
    </div>
  </div>


</div>
	