<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<div class="animated js_mobile_margin partners_logo"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     data-m-padding="<?= esc_attr($atts['padding_mobile'])?>"
     data-ipad-padding="<?= esc_attr($atts['padding_ipad'])?>"
     data-ipad-mobile-align="<?=esc_attr($atts['is_mobile_center_align'])?>"

     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;
     padding:<?=esc_attr($atts['padding'])?>;">
  <div class="partners_logo__block">
    <?php
    foreach ( $atts['items'] as $key => $value ) {
      $image = '';
      if ( !empty( $value['image'] ) && !empty($value['image']['url']) ) {
        $image = esc_attr($value['image']['url']);
      }
      ?>
      <div class="partners_logo__item">
        <a href="<?=$value['url']?>">
          <img class="slider_type1__image" src="<?=$image?>"/>
        </a>
      </div>
    <?php } ?>
  </div>
</div>
	