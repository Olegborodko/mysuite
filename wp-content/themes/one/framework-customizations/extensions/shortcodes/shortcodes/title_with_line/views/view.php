<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

?>

<div class="animated js_mobile_margin title_with_line"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;">
  <div class="fw-container">
    <div class="fw-row">
      <div class="fw-col-xs-12 fw-col-lg-12">
        <div class="title_with_line__block">
          <div class="title_with_line__line" style="width:<?=$atts['position']?>">
          </div>
          <div class="title_with_line__title" style="width:calc(100% - <?=$atts['position']?>)">
            <?=$atts['text']?>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
	