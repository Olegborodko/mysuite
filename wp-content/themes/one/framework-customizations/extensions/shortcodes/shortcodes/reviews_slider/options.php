<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(

'desktop_background' => array(
'type'  => 'upload',
'label' => __('desktop background', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'ipad_background' => array(
'type'  => 'upload',
'label' => __('ipad background', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'mobile_background' => array(
'type'  => 'upload',
'label' => __('mobile background', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

  //

'items' => array(
'type'  => 'addable-box',
'value' => array(
array(),
),
'label' => __('Items', '{domain}'),
'box-options' => array(

'image_person' => array(
'type'  => 'upload',
'label' => __('image person', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'text' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('text', '{domain}')
),

'name' => array(
'type'  => 'text',
'value' => '',
'label' => __('name', '{domain}')
),

'location' => array(
'type'  => 'text',
'value' => '',
'label' => __('location', '{domain}')
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
