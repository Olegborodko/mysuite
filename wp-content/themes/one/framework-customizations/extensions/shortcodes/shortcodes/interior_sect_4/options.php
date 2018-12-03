<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$options = array(
'title' => array(
'type'  => 'text',
'value' => '',
'label' => __('title', '{domain}')
),

'text' => array(
'type'   => 'wp-editor',
'label'  => __( 'text', 'fw' ),
'shortcodes' => false,
'size' => 'large'
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
)
);

require( get_stylesheet_directory() . '/php/shortcodes/margin.php' );
require( get_stylesheet_directory() . '/php/shortcodes/padding.php' );
