<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(

'title' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('title', '{domain}')
),

'desktop_text_1' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('desktop text 1', '{domain}')
),

'ipad_text_1' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('ipad text 1', '{domain}')
),

'mobile_text_1' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('mobile text 1', '{domain}')
),

'image_ico' => array(
'type'  => 'upload',
'label' => __('image ico', '{domain}'),
'images_only' => true,
'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
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

'desktop_text_2' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('desktop text 2', '{domain}')
),

'ipad_text_2' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('ipad text 2', '{domain}')
),

'mobile_text_2' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('mobile text 2', '{domain}')
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
