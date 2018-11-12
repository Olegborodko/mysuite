<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$background = '';
if ( !empty( $atts['background'] ) && !empty($atts['background']['url']) ) {
  $background = esc_attr($atts['background']['url']);
}
?>

<div class="animated js_mobile_margin locations_block_line"
     data-animated="<?= esc_attr($atts['animated']) ?>"
     data-ipad-top="<?= esc_attr($atts['ipad_margin_top']) ?>"
     data-m-top="<?= esc_attr($atts['m_margin_top']) ?>"
     style="margin-top: <?= esc_attr($atts['margin_top']) ?>;
     background: url(<?= $background ?>);">

  <div class="fw-container default">
    <div class="fw-row">
      <div class="fw-col-xs-12 fw-col-lg-12">

        <div class="locations_block_line__text_top af_small_top">
          <?= esc_attr($atts['text_top']) ?>
        </div>

        <h3 class="locations_block_line__title af_h3">
          <?= esc_attr($atts['title']) ?>
        </h3>

        <div class="locations_block_line__text af_type_1_avenir_light">
          <?= $atts['text'] ?>
        </div>

        <div class="locations_block_line__locations">
          <?php
          $taxonomy = 'location_category';
          $args = array(
          'hide_empty' => true
          );
          $terms = get_terms( $taxonomy, $args );

          $parents = [];
          foreach( $terms as $term ){
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
              <div class="locations_block_line__item">
                <a href="<?=get_term_link($term->slug, 'location_category')?>" class="locations_block_line__link">
                  <img src="<?=get_field( "location_category_img", "location_category_".$term->term_id )?>"/>
                </a>
                <div class="locations_block_line__description">
                  <div class="locations_block_line__parent">
                    <?=$parents[$term -> parent]?>
                  </div>
                  <div class="locations_block_line__title">
                    <?=$term -> name?>
                  </div>
                  <div class="locations_block_line__arrow_black">
                  </div>
                  <div class="locations_block_line__count">
                    (<?=$term -> count?>)
                  </div>
                </div>
              </div>
              <?php
            }
          }
          ?>
        </div>

        <div class="locations_block_line__button_block">
          <a href="<?= esc_attr($atts['button_url']) ?>" class="g_button">
            <?= esc_attr($atts['button_title']) ?>
          </a>
        </div>

      </div>
    </div>
  </div>
</div>