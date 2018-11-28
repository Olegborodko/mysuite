<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$options = array(
'image1' => array(
'type'  => 'upload',
'label' => __('image1', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'text1' => array(
'type'  => 'text',
'value' => '',
'label' => __('text1', '{domain}')
),

'image2' => array(
'type'  => 'upload',
'label' => __('image2', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'text2' => array(
'type'  => 'text',
'value' => '',
'label' => __('text2', '{domain}')
),

'image3' => array(
'type'  => 'upload',
'label' => __('image3', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'text3' => array(
'type'  => 'text',
'value' => '',
'label' => __('text3', '{domain}')
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

);
