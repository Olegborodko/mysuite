<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

?>

<div class="animated js_mobile_margin questions"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;">

  <?php
  $taxonomy = 'question_category';
  $args = array(
  'hide_empty' => true,
  'order'         => 'ASC'
  );
  $terms = get_terms( $taxonomy, $args );

  //      echo "<pre>";
  //      var_dump($terms);
  //      echo "</pre>";

  $category = [];

  echo "<div class='questions__categories'>";
  foreach( $terms as $term ) {
    echo "<div class='questions__category_title js_questions__category_title'>";
    echo "<a href='#".$term->slug."'>$term->name</a>";
    echo "</div>";
    $category[$term->slug] = $term->name;
  }
  echo "</div>";

  //=====================================
  echo "<div class='questions__block'>";

  foreach ( $category as $key => $value ) {

    $question_post = get_posts(array(
    'post_type' => 'questions',
    'tax_query' => array(
    array(
    'taxonomy' => 'question_category',
    'field' => 'slug',
    'terms' => $value
    )
    )
    ));


    echo "<div class='questions__block_item'>";
    $i = true;
    foreach ( $question_post as $post ) {

      if ($i){
        echo "<div class='questions__center_category_title' id='$key'>$value</div>";
        $i = false;
      }

      echo "<div class='questions__item'>";
        echo "<div class='questions__item_title js_questions__item_title'>";
          echo $post -> post_title;
          echo "<div class='questions__plus js_questions__plus'></div>";
        echo "</div>";

        echo "<div class='questions__item_content js_questions__item_content'>";
          echo $post -> post_content;
        echo "</div>";
      echo "</div>";


    }
    echo "</div>";


  }

  echo "</div>";
  ?>
</div>
	