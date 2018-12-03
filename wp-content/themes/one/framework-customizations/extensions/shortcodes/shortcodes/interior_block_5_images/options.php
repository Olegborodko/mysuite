<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$options = array(

'title' => array(
'type'  => 'text',
'value' => '',
'label' => __('title', '{domain}')
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

'image' => array(
'type'  => 'upload',
'label' => __('image', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

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

'link' => array(
'type'  => 'text',
'value' => '',
'label' => __('link', '{domain}')
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
