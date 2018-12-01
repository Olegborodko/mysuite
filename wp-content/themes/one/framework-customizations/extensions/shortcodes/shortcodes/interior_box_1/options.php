<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$options = array(
'text' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('text', '{domain}')
),

'image' => array(
'type'  => 'upload',
'label' => __('image', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
)
);

require( get_stylesheet_directory() . '/php/shortcodes/margin.php' );
