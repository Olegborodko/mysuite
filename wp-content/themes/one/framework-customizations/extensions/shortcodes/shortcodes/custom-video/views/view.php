<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}



?>
<div
data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
data-m-padding="<?= esc_attr($atts['padding_mobile'])?>"
data-ipad-padding="<?= esc_attr($atts['padding_ipad'])?>"
style="margin-top: <?= esc_attr($atts['margin_top']) ?>;
text-align: <?= esc_attr($atts['align']) ?>;
padding:<?=esc_attr($atts['padding'])?>;"

class="js_video_player js_mobile_margin custom_video">
  <video id="test_v" width="100%" style="max-width:<?= esc_attr($atts['max_width']) ?>">
    <source src="<?=trim( $atts['url'] )?>" type="video/mp4" />
  </video>
  <div class="custom_video__play">
    <img src="<?= get_stylesheet_directory_uri() ?>/img/video_play.png">
  </div>
</div>