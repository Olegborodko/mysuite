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

'top_text' => array(
'type'  => 'text',
'value' => '',
'label' => __('top text', '{domain}')
),

'big_text' => array(
'type'  => 'text',
'value' => '',
'label' => __('big text', '{domain}')
),

'link' => array(
'type'  => 'text',
'value' => '',
'label' => __('link to post', '{domain}')
),

'image' => array(
'type'  => 'upload',
'label' => __('image', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'address_1' => array(
'type'  => 'text',
'value' => '',
'label' => __('address 1', '{domain}')
),

'address_2' => array(
'type'  => 'text',
'value' => '',
'label' => __('address 2', '{domain}')
),

),
'template' => 'item', // box title
'box-controls' => array(),
'limit' => 12,
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
),

//'animated' => array(
//'type'  => 'text',
//'value' => '',
//'label' => __('Animated', '{domain}'),
//'desc'  => __('fadeInRightBig, zoomIn, .. other -> https://github.com/daneden/animate.css', 'fw'),
//)
);
