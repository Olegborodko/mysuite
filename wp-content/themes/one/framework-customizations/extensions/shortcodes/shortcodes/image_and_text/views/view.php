<?php if (!defined('FW')) {
  die('Forbidden');
}

$image = '';
if ( !empty( $atts['image'] ) && !empty($atts['image']['url']) ) {
  $image = esc_attr($atts['image']['url']);
}
?>

<div class="animated js_mobile_margin"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;">

  <div class="image_and_text__container">
    <div class="image_and_text__before_left">
    </div>
    <div class="image_and_text__left">
      <div class="image_and_text__title">
        <?= $atts['title'] ?>
      </div>
      <div class="image_and_text__text">
        <?= $atts['text'] ?>
      </div>
    </div>
    <div class="image_and_text__right">
      <img src="<?= $image ?>"/>
    </div>
    <div class="image_and_text__after_right">
    </div>
  </div>

</div>

