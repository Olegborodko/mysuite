<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$image = '';
if ( !empty( $atts['image'] ) && !empty($atts['image']['url']) ) {
  $image = esc_attr($atts['image']['url']);
}

?>

<div class="animated js_mobile_margin title_with_image"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;
     text-align: <?= esc_attr($atts['align']) ?>;
     max-width: <?= esc_attr($atts['max_width']) ?>">
  <div class="title_with_image__image_block">
    <img src="<?=$image?>"/>
  </div>
  <div class="title_with_image__title_block">
    <?php if (esc_attr($atts['additional_style'])=="wave"){  ?>
      <div class="title_with_image__left">
      </div>
    <?php } ?>

    <?php if (esc_attr($atts['additional_style'])=="ipad_line"){  ?>
      <div class="title_with_image__left_ipad_line">
      </div>
    <?php } ?>

    <div class="title_with_image__center"
    <?php if (esc_attr($atts['additional_style'])==""){ echo "style='width:100%'"; }  ?>>
      <h2 class="af_h2">
        <?= esc_attr($atts['title']) ?>
      </h2>
    </div>
    <?php if (esc_attr($atts['additional_style'])=="wave"){  ?>
      <div class="title_with_image__right">
      </div>
    <?php } ?>

    <?php if (esc_attr($atts['additional_style'])=="ipad_line"){  ?>
      <div class="title_with_image__right_ipad_line">
      </div>
    <?php } ?>

  </div>

</div>
	