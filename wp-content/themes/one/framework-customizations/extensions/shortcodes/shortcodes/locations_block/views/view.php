<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

?>

<div class="animated js_mobile_margin locations_block"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;">

  <?php
  $taxonomy = 'location_category';
  $args = array(
    'hide_empty' => true
  );
  $terms = get_terms( $taxonomy, $args );

  $parents = [];
  foreach( $terms as $term ){
//    echo "<pre>";
//    var_dump($term);
//    echo "</pre>";
    if ($term->parent == 0 ){
      if ($term->slug != "undefined") {
        $parents[$term->term_id] = $term->name;
      }else{
        $parents[$term->term_id] = "&nbsp;";
      }
    }
  }

  $i = 0;
  foreach( $terms as $term ){
    if ($term -> parent != 0){
      $i += 1;
      if ($i > 6){
        return;
      }
      ?>
    <div class="locations_block__item">
      <a href="<?=get_term_link($term->slug, 'location_category')?>" class="locations_block__link">
        <img src="<?=get_field( "location_category_img", "location_category_".$term->term_id )?>"/>
      </a>
      <div class="locations_block__description">
        <div class="locations_block__parent">
          <?=$parents[$term -> parent]?>
        </div>
        <div class="locations_block__title">
          <?=$term -> name?>
        </div>
        <div class="locations_block__arrow_black">
        </div>
        <div class="locations_block__count">
          (<?=$term -> count?>)
        </div>
      </div>
    </div>
  <?php
    }
  }
  ?>

</div>
	