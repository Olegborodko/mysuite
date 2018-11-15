<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<div class="animated js_mobile_margin social_icons_fixed"
     data-animated="<?= esc_attr($atts['animated']) ?>"

     data-left-ipad="<?= esc_attr($atts['left_ipad']) ?>"
     data-left-mobile="<?= esc_attr($atts['left_mobile']) ?>"
     data-top-ipad="<?= esc_attr($atts['top_ipad']) ?>"
     data-top-mobile="<?= esc_attr($atts['top_mobile']) ?>"

     style="left:<?= esc_attr($atts['left_desktop']) ?>;
     top:<?= esc_attr($atts['top_desktop']) ?>"
>

  <?php
  function microseconds() {
    $mt = explode(' ', microtime());
    return ((int)$mt[1]) * 1000000 + ((int)round($mt[0] * 1000000));
  }

  foreach ( $atts['items'] as $key => $value ) {
    $microseconds = microseconds();
    ?>
    <a href="<?=$value['url']?>" class="social_icons_fixed__link">
      <div data-social-class="js_social_icon_fixed__<?=$microseconds?>" data-social-fixed="<?=$value['icon_code']?>"
           class="social_icons_fixed__icon js_social_icon_fixed js_social_icon_fixed__<?=$microseconds?>"></div>
    </a>
  <?php } ?>


</div>
	