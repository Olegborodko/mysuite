<?php if (!defined('FW')) {
  die('Forbidden');
}

$image_1 = '';
if ( !empty( $atts['image_1'] ) && !empty($atts['image_1']['url']) ) {
  $image_1 = esc_attr($atts['image_1']['url']);
}

$image_2 = '';
if ( !empty( $atts['image_2'] ) && !empty($atts['image_2']['url']) ) {
  $image_2 = esc_attr($atts['image_2']['url']);
}

$image_3 = '';
if ( !empty( $atts['image_3'] ) && !empty($atts['image_3']['url']) ) {
  $image_3 = esc_attr($atts['image_3']['url']);
}

?>

<div class="animated js_mobile_margin my_suite_way"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;">

  <div class="my_suite_way__block">

    <div class="my_suite_way__h2_block">
      <div class="my_suite_way__h2_before">
        <div class="my_suite_way__h2_before_border"></div>
      </div>
      <div data-desktop="<?= $atts['desktop_text_top'] ?>"
           data-ipad="<?= $atts['ipad_text_top'] ?>"
           data-mobile="<?= $atts['mobile_text_top'] ?>"
           class="js_change_text my_suite_way__text_1 af_type_1_avenir_light">
      </div>
      <div class="my_suite_way__h2_after">
        <div class="my_suite_way__h2_after_border"></div>
      </div>
    </div>

    <div class="my_suite_way__block2">
      <div class="my_suite_way__images_block">
        <div class="my_suite_way__image_div">
          <img class="my_suite_way__image" src="<?= $image_1 ?>"/>
        </div>
        <div class="my_suite_way__image_div my_suite_way__image_hidden_mobile">
          <img class="my_suite_way__image" src="<?= $image_2 ?>"/>
        </div>
        <div class="my_suite_way__image_div my_suite_way__image_hidden_mobile">
          <img class="my_suite_way__image" src="<?= $image_3 ?>"/>
        </div>
      </div>
    </div>

    <div class="my_suite_way__h2_block_bottom">
      <div class="my_suite_way__h2_before_bottom">
        <div class="my_suite_way__h2_before_border_bottom"></div>
      </div>
      <div data-desktop="<?= $atts['desktop_text_bottom'] ?>"
           data-ipad="<?= $atts['ipad_text_bottom'] ?>"
           data-mobile="<?= $atts['mobile_text_bottom'] ?>"
           class="js_change_text my_suite_way__text_1_bottom af_type_1_avenir_light">
      </div>
      <div class="my_suite_way__h2_after_bottom">
        <div class="my_suite_way__h2_after_border_bottom"></div>
      </div>
    </div>
  </div>

</div>

