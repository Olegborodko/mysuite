<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$options = array(
'image1' => array(
'type'  => 'upload',
'label' => __('image 1', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'image2' => array(
'type'  => 'upload',
'label' => __('image 2', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'image3' => array(
'type'  => 'upload',
'label' => __('image 3', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'image4' => array(
'type'  => 'upload',
'label' => __('image 4', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'items' => array(
'type'  => 'addable-box',
'value' => array(
array(),
),
'label' => __('Carousel items', '{domain}'),
'box-options' => array(
'title' => array(
'type'  => 'text',
'value' => '',
'label' => __('title', '{domain}')
),

'text' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('text', '{domain}')
),

),
'template' => 'item', // box title
'box-controls' => array(),
'limit' => 12,
'add-button-text' => __('Add', '{domain}'),
'sortable' => true,
)
);

require( get_stylesheet_directory() . '/php/shortcodes/margin.php' );
require( get_stylesheet_directory() . '/php/shortcodes/padding.php' );
