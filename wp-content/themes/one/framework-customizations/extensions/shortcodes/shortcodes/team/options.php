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

'image' => array(
'type'  => 'upload',
'label' => __('image', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'position' => array(
'type'  => 'text',
'value' => '',
'label' => __('position', '{domain}')
),

'name' => array(
'type'  => 'text',
'value' => '',
'label' => __('name', '{domain}')
),

//'smile' => array(
//'type'  => 'upload',
//'label' => __('smile', '{domain}'),
//'images_only' => true,
//'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
//),

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
'limit' => 18,
'add-button-text' => __('Add', '{domain}'),
'sortable' => true,
),

'margin_top' => array(
'type'  => 'text',
'value' => '0',
'label' => __('margin-top', '{domain}'),
'desc'  => __('0, 44px, ...', 'fw'),
),

'ipad_margin_top' => array(
'type'  => 'text',
'value' => '0',
'label' => __('ipad margin-top', '{domain}'),
'desc'  => __('0, 44px, ...', 'fw')
),

'm_margin_top' => array(
'type'  => 'text',
'value' => '0',
'label' => __('mobile margin-top', '{domain}'),
'desc'  => __('0, 44px, ...', 'fw')
)

//'animated' => array(
//'type'  => 'text',
//'value' => '',
//'label' => __('Animated', '{domain}'),
//'desc'  => __('fadeInRightBig, zoomIn, .. other -> https://github.com/daneden/animate.css', 'fw'),
//)
);
