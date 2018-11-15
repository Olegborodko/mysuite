<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$options = array(

'items' => array(
'type'  => 'addable-box',
'value' => array(
array(),
),
'label' => __('Items', '{domain}'),
'box-options' => array(

'icon_code' => array(
'type'  => 'text',
'value' => '',
'label' => __('icon code', '{domain}')
),

'url' => array(
'type'  => 'text',
'value' => '',
'label' => __('url', '{domain}')
),
),
'template' => 'item', // box title
'box-controls' => array(),
'limit' => 12,
'add-button-text' => __('Add', '{domain}'),
'sortable' => true,
)

);

require( get_stylesheet_directory() . '/php/shortcodes/left_top.php' );