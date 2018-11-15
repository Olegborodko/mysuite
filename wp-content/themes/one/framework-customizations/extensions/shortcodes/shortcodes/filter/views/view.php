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
    require( 'filter__block_left.php' );
    require( 'filter__block_center.php' );
    require( 'filter__block_right.php' );
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

  <?php
  require( 'results.php' );
  ?>

  <div class="filter__pagination">
    <div class="filter__pagination_left_arrow">
      &nbsp;
    </div>

    <div class="filter__pagination_center">
    <div class="filter__pagination_item_active">
      1
    </div>
    <div class="filter__pagination_item">
      2
    </div>
    <div class="filter__pagination_item">
      3
    </div>
    <div class="filter__pagination_item">
      ..
    </div>
    <div class="filter__pagination_item">
      7
    </div>
    </div>

    <div class="filter__pagination_right_arrow">
      &nbsp;
    </div>
  </div>

</div>
	