<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(

'desktop_text_top' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('desktop text top', '{domain}')
),

'ipad_text_top' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('ipad text top', '{domain}')
),

'mobile_text_top' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('mobile text top', '{domain}')
),

'desktop_text_bottom' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('desktop text bottom', '{domain}')
),

'ipad_text_bottom' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('ipad text bottom', '{domain}')
),

'mobile_text_bottom' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('mobile text bottom', '{domain}')
),

'image_1' => array(
'type'  => 'upload',
'label' => __('image 1', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'image_2' => array(
'type'  => 'upload',
'label' => __('image 2', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
),

'image_3' => array(
'type'  => 'upload',
'label' => __('image 3', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
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
