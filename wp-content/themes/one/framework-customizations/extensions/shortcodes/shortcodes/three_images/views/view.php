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
?>

<div class="animated js_mobile_margin "
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     data-m-padding="<?= esc_attr($atts['padding_mobile'])?>"
     data-ipad-padding="<?= esc_attr($atts['padding_ipad'])?>"

     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;
     padding:<?=esc_attr($atts['padding'])?>;">
  <div class="three_images">
    <div class="three_images1 three_images__item">
      <img src="<?= $image1 ?>"/>
      <div class="three_images__text">
        <?=$atts['text1']?>
      </div>
    </div>
    <div class="three_images2 three_images__item">
      <img src="<?= $image2 ?>"/>
      <div class="three_images__text">
        <?=$atts['text2']?>
      </div>
    </div>
    <div class="three_images3 three_images__item">
      <img src="<?= $image3 ?>"/>
      <div class="three_images__text">
        <?=$atts['text3']?>
      </div>
    </div>
  </div>
</div>
	