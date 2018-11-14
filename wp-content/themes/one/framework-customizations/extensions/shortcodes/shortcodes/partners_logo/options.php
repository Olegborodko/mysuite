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

'url' => array(
'type'  => 'text',
'value' => '',
'label' => __('url', '{domain}')
),

),
'template' => 'item', // box title
'box-controls' => array(),
'limit' => 20,
'add-button-text' => __('Add', '{domain}'),
'sortable' => true,
),

'padding' => array(
'type'  => 'text',
'value' => '0',
'label' => __('padding desktop', '{domain}'),
'desc'  => __('example -> 10px 20px 0 1%, 10px', 'fw'),
),

'padding_ipad' => array(
'type'  => 'text',
'value' => '0',
'label' => __('padding ipad ', '{domain}'),
'desc'  => __('example -> 10px 20px 0 1%, 10px', 'fw'),
),

'padding_mobile' => array(
'type'  => 'text',
'value' => '0',
'label' => __('padding mobile', '{domain}'),
'desc'  => __('example -> 10px 20px 0 1%, 10px', 'fw'),
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
