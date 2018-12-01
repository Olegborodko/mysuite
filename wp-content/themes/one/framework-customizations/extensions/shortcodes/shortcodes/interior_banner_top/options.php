<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$options = array(
'text_top' => array(
'type'  => 'text',
'value' => '',
'label' => __('text top', '{domain}')
),

'text_title' => array(
'type'  => 'text',
'value' => '',
'label' => __('text title', '{domain}')
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
