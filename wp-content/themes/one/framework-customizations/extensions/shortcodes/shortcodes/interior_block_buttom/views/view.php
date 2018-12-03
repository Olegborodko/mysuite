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

  <div class="sect-7" style="background-image: url(<?=$background?>);">
    <div class="sect-7__content">
      <h2 class="sect-title"><?=$atts['title']?></h2>
      <div class="sect-7__text">
        <?=$atts['text']?>
      </div>

      <a href="<?=$atts['url']?>"
         class="button button--white button--xl">
        <?=$atts['text_link']?>
      </a>
    </div>

  </div>
</div>
	