<?php if (!defined('FW')) {
  die('Forbidden');
}

$button_title_1 = '';
if ( ! empty( $atts['button_title_1'] ) ) {
  $button_title_1 = esc_attr($atts['button_title_1']);
}

$button_url_1 = '';
if ( ! empty( $atts['button_url_1'] ) ) {
  $button_url_1 = esc_attr($atts['button_url_1']);
}

$button_title_2 = '';
if ( ! empty( $atts['button_title_2'] ) ) {
  $button_title_2 = esc_attr($atts['button_title_2']);
}

$button_url_2 = '';
if ( ! empty( $atts['button_url_2'] ) ) {
  $button_url_2 = esc_attr($atts['button_url_2']);
}

$margin_top = '0';
if ( ! empty( $atts['margin_top'] ) ) {
  $margin_top = esc_attr($atts['margin_top']);
}

$margin_bottom = '0';
if ( ! empty( $atts['margin_bottom'] ) ) {
  $margin_bottom = esc_attr($atts['margin_bottom']);
}

$m_margin_top = '0';
if ( ! empty( $atts['m_margin_top'] ) ) {
  $m_margin_top = esc_attr($atts['m_margin_top']);
}

$m_margin_bottom = '0';
if ( ! empty( $atts['m_margin_bottom'] ) ) {
  $m_margin_bottom = esc_attr($atts['m_margin_bottom']);
}

$animated = '';
if ( ! empty( $atts['animated'] ) ) {
  $animated = esc_attr($atts['animated']);
}

$arrow_url = '';
if ( ! empty( $atts['arrow_url'] ) ) {
  $arrow_url = esc_attr($atts['arrow_url']);
}

?>

<div class="animated home_top js_mobile_margin <?=$mobile_align?>"
     data-animated="<?= $animated?>"
     data-m-top="<?= $m_margin_top?>"
     data-m-bottom="<?= $m_margin_bottom?>"
     style="margin-top: <?= $margin_top ?>;
     margin-bottom: <?= $margin_bottom ?>;
     text-align: <?= $align ?>">

  <div data-desktop="<?=esc_attr($atts['small_text_desktop'])?>"
       data-ipad="<?=esc_attr($atts['small_text_ipad'])?>"
       data-mobile="<?=esc_attr($atts['small_text_mobile'])?>"
       class="home_top__small_text js_change_text">
  </div>

  <div
    data-desktop="<?=esc_attr($atts['title_desktop'])?>"
    data-ipad="<?=esc_attr($atts['title_ipad'])?>"
    data-mobile="<?=esc_attr($atts['title_mobile'])?>"
    class="home_top__title js_change_text">
  </div>

  <div class="home_top__buttons">
    <a href="<?=$button_url_1?>" class="button_white home_top__button1"><?=$button_title_1?></a>
    <span class="home_top__or">or</span>
    <a href="<?=$button_url_2?>" class="button_transparent home_top__button2"><?=$button_title_2?></a>
  </div>

  <div class="fw-text-center home_top__arrow_down_block">
    <a href="<?=$arrow_url?>" class="home_top__arrow_down">
      <i class="fa fa-angle-down" aria-hidden="true"></i>
      <i class="fa fa-angle-down home_top__down_2" aria-hidden="true"></i>
    </a>
  </div>

</div>

