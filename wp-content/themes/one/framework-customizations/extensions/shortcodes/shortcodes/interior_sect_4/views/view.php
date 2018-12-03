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
?>

<div class="animated js_mobile_margin"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     data-m-padding="<?= esc_attr($atts['padding_mobile'])?>"
     data-ipad-padding="<?= esc_attr($atts['padding_ipad'])?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;
     padding:<?=esc_attr($atts['padding'])?>;">

  <div class="sect-4">
    <div class="sect-4__container">
      <div class="default-row">
        <div class="default-col-lg-6">
          <h2 class="sect-title"><?=$atts['title']?></h2>
          <img class="sect-4__img" src="<?=$image1?>" alt="">
          <div class="custom-rte">
            <?=$atts['text']?>
          </div>
        </div>
        <div class="default-col-lg-6 default-col-lg-6-custom">
          <img class="sect-4__img" src="<?=$image2?>" alt="">
        </div>
      </div>
    </div>
  </div>


</div>
	