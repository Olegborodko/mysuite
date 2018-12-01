<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$background = '';
if ( !empty( $atts['background'] ) && !empty($atts['background']['url']) ) {
  $background = esc_attr($atts['background']['url']);
}
?>

<div class="animated js_mobile_margin"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     data-m-padding="<?= esc_attr($atts['padding_mobile'])?>"
     data-ipad-padding="<?= esc_attr($atts['padding_ipad'])?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;
     padding:<?=esc_attr($atts['padding'])?>;">

  <div class="banner-interior" style="background-image: url(<?=$background?>)">
    <div class="banner-interior__heading">
      <p class="banner-interior__slogan"><?=$atts['text_top']?></p>
      <h1 class="banner-interior__title"><?=$atts['text_title']?></h1>
    </div>
  </div>
</div>
	