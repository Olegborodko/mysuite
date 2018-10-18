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

?>

<div class="animated home_top js_mobile_margin <?=$mobile_align?>"
     data-animated="<?= $animated?>"
     data-m-top="<?= $m_margin_top?>"
     data-m-bottom="<?= $m_margin_bottom?>"
     style="margin-top: <?= $margin_top ?>;
     margin-bottom: <?= $margin_bottom ?>;
     text-align: <?= $align ?>">
  <div class="home_top__small_text"><?=$atts['small_text']?></div>
  <div class="home_top__title fw-hidden-xs fw-hidden-sm-md fw-visible-lg">
    <?=$atts['title_desktop']?>
  </div>
  <div class="home_top__title fw-hidden-xs fw-visible-sm-md fw-hidden-lg">
    <?=$atts['title_ipad']?>
  </div>
  <div class="home_top__title fw-visible-xs fw-hidden-sm-md fw-hidden-lg">
    <?=$atts['title_mobile']?>
  </div>
  <div class="home_top__buttons">
    <a href="<?=$button_url_1?>" class="home_top__button1"><?=$button_title_1?></a>
    <span class="home_top__or">or</span>
    <a href="<?=$button_url_2?>" class="home_top__button2"><?=$button_title_2?></a>
  </div>
  <div class="home_top__arrow_down">
    <i class="fa fa-chevron-down" aria-hidden="true"></i>
    <i class="fa fa-chevron-down" aria-hidden="true"></i>
  </div>
</div>

