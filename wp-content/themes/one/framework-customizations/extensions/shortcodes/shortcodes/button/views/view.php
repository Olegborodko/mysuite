<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<div class="animated js_mobile_margin <?=$align_class?>"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     data-m-padding="<?= esc_attr($atts['padding_mobile'])?>"
     data-ipad-padding="<?= esc_attr($atts['padding_ipad'])?>"
     data-ipad-mobile-align="<?=esc_attr($atts['is_mobile_center_align'])?>"

     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;
     text-align: <?= esc_attr($atts['align']) ?>;
     padding:<?=esc_attr($atts['padding'])?>;">
  <a class="g_button" href="<?= esc_attr($atts['link']) ?>">
    <?= esc_attr($atts['text']) ?>
  </a>
</div>
	