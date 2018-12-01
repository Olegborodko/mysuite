<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$options = array(
'title' => array(
'type'  => 'text',
'value' => '',
'label' => __('title', '{domain}')
),

'text1' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('text1', '{domain}')
),

'text2' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('text2', '{domain}')
),

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

'background' => array(
'type'  => 'upload',
'label' => __('background', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
)
);

require( get_stylesheet_directory() . '/php/shortcodes/margin.php' );
require( get_stylesheet_directory() . '/php/shortcodes/padding.php' );
