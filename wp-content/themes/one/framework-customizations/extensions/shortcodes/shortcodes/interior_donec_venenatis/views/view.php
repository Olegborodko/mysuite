<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$image1 = '';
if ( !empty( $atts['image1'] ) && !empty($atts['image1']['url']) ) {
  $image1 = esc_attr($atts['image1']['url']);
}

$image2 = '';
if ( !empty( $atts['image2'] ) && !empty($atts['image2']['url']) ) {
  $image2 = esc_attr($atts['image2']['url']);
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

  <div class="sect-3" style="background-image: url(<?=$background?>)">
    <div class="default-container">
      <h2 class="sect-title sect-3__title"><?=$atts['title']?></h2>

      <div class="default-row default-row-custom">
        <div class="sect-3__col sect-3__col--1">
          <img class="sect-3__img-1 hidden-md" src="<?=$image1?>" alt="">
          <div class="custom-rte hidden-md">

              <?=$atts['text1']?>


              <?=$atts['text2']?>

          </div>
            <div class="sect-3__col--mobile custom-rte">

                <?=$atts['text1']?>

              <img src="<?=$image1?>" alt="">
              <img src="<?=$image2?>" alt="">

                <?=$atts['text2']?>

            </div>
          </div>

          <div class="sect-3__col sect-3__col--2 hidden-md">
            <img class="sect-3__img-2" src="<?=$image2?>" alt="">
          </div>
        </div>
      </div>
    </div>


  </div>
	