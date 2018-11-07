<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

?>

<div class="animated js_mobile_margin filter"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;">

  <div class="filter__title">
    Available Suits
    <div class="filter_ico">
      <img src="<?= get_stylesheet_directory_uri() ?>/img/filter_ico.png"/>
    </div>
  </div>

  <div class="filter__block">
    <?php
      require_once( 'filter__block_left.php' );
      require_once( 'filter__block_center.php' );
      require_once( 'filter__block_right.php' );
    ?>

    <div class="filter__buttons">
      <div class="filter__button_clear">
        Clear all
      </div>
      <div class="filter__button_filter">
        Filter
      </div>
    </div>
  </div>


</div>
	