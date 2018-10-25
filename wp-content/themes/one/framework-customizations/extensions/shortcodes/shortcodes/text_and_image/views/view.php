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

  <div class="text_and_image__container">
    <div class="text_and_image__before_left">
    </div>
    <div class="text_and_image__left">
      <div class="text_and_image__title">
        <?= $atts['title'] ?>
      </div>
      <div class="text_and_image__text">
        <?= $atts['text'] ?>
      </div>
    </div>
    <div class="text_and_image__right">
      <img src="<?= $image ?>"/>
    </div>
    <div class="text_and_image__after_right">
    </div>
  </div>

</div>

