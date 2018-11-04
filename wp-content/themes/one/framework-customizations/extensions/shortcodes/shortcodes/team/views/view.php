<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

?>

<div class="animated js_mobile_margin team"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;">


  <?php
  foreach ( $atts['items'] as $key => $value ) {
    $image = '';
    if ( !empty( $value['image'] ) && !empty($value['image']['url']) ) {
      $image = esc_attr($value['image']['url']);
    }

//    $smile = '';
//    if ( !empty( $value['smile'] ) && !empty($value['smile']['url']) ) {
//      $smile = esc_attr($value['smile']['url']);
//    }
    ?>

    <a href="<?=$value['link']?>" class="team__item">
      <img class="team__image" src="<?=$image?>"/>

      <div class="team__under_image">
        <div class="team__position">
          <?=$value['position']?>
        </div>
        <div class="team__name">
          <!-- <img class="team__smail" src="--><?//=$smile?><!--"/> -->
          <?=$value['name']?>
        </div>
        <div class="team__text">
          <span>
          <?=$value['text']?>
          </span>
        </div>
      </div>

    </a>
  <?php } ?>

</div>
	