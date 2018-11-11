<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$margin_top = '0';
if ( ! empty( $atts['margin_top'] ) ) {
  $margin_top = esc_attr($atts['margin_top']);
}

$m_margin_top = '0';
if ( ! empty( $atts['m_margin_top'] ) ) {
  $m_margin_top = esc_attr($atts['m_margin_top']);
}

$ipad_margin_top = '0';
if ( ! empty( $atts['ipad_margin_top'] ) ) {
  $ipad_margin_top = esc_attr($atts['ipad_margin_top']);
}

$class = '';
if ( ! empty( $atts['class'] ) ) {
  $class = esc_attr($atts['class']);
}

$padding = '0';
if ( ! empty( $atts['padding'] ) ) {
  $padding =  esc_attr($atts['padding']);
}

$padding_mobile = '0';
if ( ! empty( $atts['padding_mobile'] ) ) {
  $padding_mobile =  esc_attr($atts['padding_mobile']);
}

$animated = '';
if ( ! empty( $atts['animated'] ) ) {
  $animated = esc_attr($atts['animated']);
}

$max_width = '100%';
if ( ! empty( $atts['max_width'] ) ) {
  $max_width =  esc_attr($atts['max_width']);
}

$margin_left = 'initial';
$margin_right = 'initial';
if ( isset( $atts['is_center_margin_left_right'] ) && $atts['is_center_margin_left_right'] ) {
  if ($atts['is_center_margin_left_right']=='yes') {
    $margin_left = 'auto';
    $margin_right = 'auto';
  }
}

?>

<div data-animated="<?=$animated?>"
     data-m-padding="<?=$padding_mobile?>"
     data-ipad-padding="<?= esc_attr($atts['padding_ipad'])?>"
     data-ipad-top="<?=$ipad_margin_top?>"
     class="animated g_text js_mobile_margin unyson_wp_editor <?=$class?>"
     data-m-top="<?=$m_margin_top?>"
     data-im-margin-left-right="<?=esc_attr($atts['is_mobile_center_margin_left_right'])?>"

     style="margin-top: <?= $margin_top ?>;
     padding:<?=$padding?>;
     max-width:<?=$max_width?>;
     margin-left:<?=$margin_left?>;
     margin-right:<?=$margin_right?>">
  <div
  data-desktop="<?=esc_attr($atts['text'])?>"
  data-ipad="<?=esc_attr($atts['ipad_text'])?>"
  data-mobile="<?=esc_attr($atts['mobile_text'])?>"
  class="js_change_text">
  </div>
</div>
	