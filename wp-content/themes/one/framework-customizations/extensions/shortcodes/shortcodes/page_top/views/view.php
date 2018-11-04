<?php if (!defined('FW')) {
  die('Forbidden');
}

$desktop_background = '';
if ( !empty( $atts['desktop_background'] ) && !empty($atts['desktop_background']['url']) ) {
  $desktop_background = esc_attr($atts['desktop_background']['url']);
}

$ipad_background = '';
if ( !empty( $atts['ipad_background'] ) && !empty($atts['ipad_background']['url']) ) {
  $ipad_background = esc_attr($atts['ipad_background']['url']);
}

$mobile_background = '';
if ( !empty( $atts['mobile_background'] ) && !empty($atts['mobile_background']['url']) ) {
  $mobile_background = esc_attr($atts['mobile_background']['url']);
}

?>

<div class="animated js_mobile_margin page_top"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     data-b-ipad="<?= $ipad_background ?>"
     data-b-mobile="<?= $mobile_background ?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;
     background: url(<?= $desktop_background ?>);">

  <div data-desktop="<?=esc_attr($atts['small_text_desktop'])?>"
       data-ipad="<?=esc_attr($atts['small_text_ipad'])?>"
       data-mobile="<?=esc_attr($atts['small_text_mobile'])?>"
       class="page_top__small_text js_change_text">
  </div>

  <div data-desktop="<?=esc_attr($atts['title_desktop'])?>"
       data-ipad="<?=esc_attr($atts['title_ipad'])?>"
       data-mobile="<?=esc_attr($atts['title_mobile'])?>"
       class="page_top__title js_change_text">
  </div>


</div>