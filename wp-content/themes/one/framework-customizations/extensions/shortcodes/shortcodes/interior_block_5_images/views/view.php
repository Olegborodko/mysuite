<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}
?>

<div class="animated js_mobile_margin"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     data-m-padding="<?= esc_attr($atts['padding_mobile'])?>"
     data-ipad-padding="<?= esc_attr($atts['padding_ipad'])?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;
     padding:<?=esc_attr($atts['padding'])?>;">

  <div class="sect-6">
    <div class="default-container">
      <div class="default-row default-custom-row">
        <div class="sect-6__col">
          <h2 class="sect-title"><?=$atts['title']?></h2>
        </div>

        <?php

        foreach ( $atts['items'] as $key => $value ) {
        $image = '';
        if ( !empty( $value['image'] ) && !empty($value['image']['url']) ) {
          $image = esc_attr($value['image']['url']);
        }

        ?>

        <div class="sect-6__col">
          <article class="article-card">
            <a href="<?=$value['link']?>" class="article-card__image"
               style="background-image: url(<?=$image?>);">
            </a>
            <h3 class="article-card__title">
              <a href="<?=$value['link']?>">
                <?=$value['title']?>
              </a>
            </h3>
            <div class="article-card__description">
              <?=$value['text']?>
            </div>
          </article>
        </div>

        <?php } ?>

      </div>
    </div>
  </div>


</div>
	