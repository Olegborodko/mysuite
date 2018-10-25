<?php if (!defined('FW')) {
  die('Forbidden');
}

$image_1 = '';
if ( !empty( $atts['image_1'] ) && !empty($atts['image_1']['url']) ) {
  $image_1 = esc_attr($atts['image_1']['url']);
}

$image_2 = '';
if ( !empty( $atts['image_2'] ) && !empty($atts['image_2']['url']) ) {
  $image_2 = esc_attr($atts['image_2']['url']);
}

$image_3 = '';
if ( !empty( $atts['image_3'] ) && !empty($atts['image_3']['url']) ) {
  $image_3 = esc_attr($atts['image_3']['url']);
}

$image_ico = '';
if ( !empty( $atts['image_ico'] ) && !empty($atts['image_ico']['url']) ) {
  $image_ico = esc_attr($atts['image_ico']['url']);
}


?>

<div class="animated js_mobile_margin hotel_style_living"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;">

  <div class="hotel_style_living__block">
    <div class="hotel_style_living__ico">
      <img src="<?= $image_ico ?>"/>
    </div>
    <h2 class="af_h2">
      <?= $atts['title'] ?>
    </h2>
    <div data-desktop="<?= $atts['desktop_text_1'] ?>"
         data-ipad="<?= $atts['ipad_text_1'] ?>"
         data-mobile="<?= $atts['mobile_text_1'] ?>"
         class="js_change_text hotel_style_living__text_1 af_type_1_avenir_light">
    </div>
    <div class="hotel_style_living__images_block">
      <img class="hotel_style_living__image" src="<?= $image_1 ?>"/>
      <img class="hotel_style_living__image" src="<?= $image_2 ?>"/>
      <img class="hotel_style_living__image" src="<?= $image_3 ?>"/>
    </div>
    <div data-desktop="<?= $atts['desktop_text_2'] ?>"
         data-ipad="<?= $atts['ipad_text_2'] ?>"
         data-mobile="<?= $atts['mobile_text_2'] ?>"
         class="js_change_text hotel_style_living__text_2 af_type_1_avenir_light">
    </div>
  </div>

</div>

