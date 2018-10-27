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
    'hide_empty' => false
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
        $parents[$term->term_id] = "";
      }
    }
  }

  foreach( $terms as $term ){
    if ($term -> parent != 0){
      echo $term -> name. " ";
      echo $parents[$term -> parent];
      echo "<br>";
      echo "<br>";
    }
  }
  ?>

</div>
	