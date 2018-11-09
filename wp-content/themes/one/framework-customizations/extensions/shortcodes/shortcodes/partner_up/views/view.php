<?php if (!defined('FW')) {
  die('Forbidden');
}

$ico = '';
if ( !empty( $atts['ico'] ) && !empty($atts['ico']['url']) ) {
  $ico = esc_attr($atts['ico']['url']);
}

$desktop_background = '';
if ( !empty( $atts['desktop_background'] ) && !empty($atts['desktop_background']['url']) ) {
  $desktop_background = esc_attr($atts['desktop_background']['url']);
}

$ipad_background = '';
if ( !empty( $atts['ipad_background'] ) && !empty($atts['ipad_background']['url']) ) {
  $ipad_background = esc_attr($atts['ipad_background']['url']);
}

$mobile_background = '';
if ( !empty( $atts['mobile_background'] ) && !empty($atts['mobile_background']['url']) ) {
  $mobile_background = esc_attr($atts['mobile_background']['url']);
}
?>

<div class="animated js_mobile_margin partner_up"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     data-b-ipad="<?= $ipad_background ?>"
     data-b-mobile="<?= $mobile_background ?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;
     background: url(<?= $desktop_background ?>);">

  <div class="partner_up__block">
    <div class="partner_up__ico">
      <img src="<?=$ico?>"/>
    </div>
    <div class="partner_up__top_text af_small_top">
      <?= $atts['top_text'] ?>
    </div>
    <h3 class="partner_up__title af_h3">
      <?= $atts['title'] ?>
    </h3>
    <div class="partner_up__under_title af_type_1_avenir_light">
      <?= $atts['under_title'] ?>
    </div>
    <div class="partner_up__contacts">
      <div class="partner_up__email">
        <i class="fa fa-at" aria-hidden="true"></i> <?= $atts['email'] ?>
      </div>
    </div>
  </div>

  <?php
    if (esc_attr($atts['show_footer']) == "yes"){
      echo "<div class='partner_up__footer'>";
      $logo_black = false;
      require_once( get_stylesheet_directory() . '/php/part_code/footer.php' );
      echo "</div>";
    }
  ?>

</div>

