<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

?>

<div class="animated js_mobile_margin"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;
     text-align: <?= esc_attr($atts['align']) ?>;">
  <a class="g_button" href="<?= esc_attr($atts['link']) ?>">
    <?= esc_attr($atts['text']) ?>
  </a>
</div>
	