<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}
?>

<div class="animated js_mobile_margin you_will_save"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     data-m-padding="<?= esc_attr($atts['padding_mobile'])?>"
     data-ipad-padding="<?= esc_attr($atts['padding_ipad'])?>"

     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;
     padding:<?=esc_attr($atts['padding'])?>;">
  <div class="you_will_save__block">
    You’ll save <span class="you_will_save__amount">$500.00</span> on average compared to <span class="you_will_save__br"><br></span>
  <span class="you_will_save__sentence_2">when you rent with <span class="you_will_save__space"></span> our competitors</span>
  <div class="you_will_save__image_block">
    <img class="you_will_save__image" src="<?= get_stylesheet_directory_uri() ?>/img/d8.png">
  </div>
  </div>
</div>
	