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
'type'  => 'textarea',
'value' => '',
'label' => __('text', '{domain}')
),

'text_link' => array(
'type'  => 'text',
'value' => '',
'label' => __('text link', '{domain}')
),

'url' => array(
'type'  => 'text',
'value' => '',
'label' => __('url', '{domain}')
),

'background' => array(
'type'  => 'upload',
'label' => __('background', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
)
);

require( get_stylesheet_directory() . '/php/shortcodes/margin.php' );
