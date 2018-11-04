<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(

'small_text_desktop' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('small text desktop', '{domain}')
),

'small_text_ipad' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('small text ipad', '{domain}')
),

'small_text_mobile' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('small text mobile', '{domain}')
),

'title_desktop' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('title desktop', '{domain}')
),

'title_ipad' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('title ipad', '{domain}')
),

'title_mobile' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('title mobile', '{domain}')
),

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
