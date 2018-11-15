<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$options = array(

'text' => array(
'type'  => 'text',
'value' => '',
'label' => __('text', '{domain}')
),

'link' => array(
'type'  => 'text',
'value' => '',
'label' => __('link', '{domain}')
)

);

require( get_stylesheet_directory() . '/php/shortcodes/left_top.php' );