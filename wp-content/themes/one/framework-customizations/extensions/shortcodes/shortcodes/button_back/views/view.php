<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}
?>

<div class="animated js_mobile_margin button_back js_button"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-left-ipad="<?= esc_attr($atts['left_ipad']) ?>"
     data-left-mobile="<?= esc_attr($atts['left_mobile']) ?>"
     data-top-ipad="<?= esc_attr($atts['top_ipad']) ?>"
     data-top-mobile="<?= esc_attr($atts['top_mobile']) ?>"

     style="left:<?= esc_attr($atts['left_desktop']) ?>;
     top:<?= esc_attr($atts['top_desktop']) ?>"
     >
  <a class="g_button_back" href="<?= esc_attr($atts['link']) ?>">
    <?= esc_attr($atts['text']) ?>
  </a>
</div>
	