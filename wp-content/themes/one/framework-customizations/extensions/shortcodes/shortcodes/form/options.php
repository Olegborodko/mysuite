<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(

'top_text' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('top text', '{domain}')
),

'title' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('title', '{domain}')
),

'under_title' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('under title text', '{domain}')
),

'form_shortcode' => array(
'type'  => 'text',
'value' => '',
'label' => __('form shortcode')
),

'bottom_text' => array(
'type'  => 'textarea',
'value' => '',
'label' => __('bottom text')
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

'show_footer' => array(
'label' => __('show footer', 'fw'),
'type'  => 'switch',
'value' => 'yes',
'left-choice' => array(
'value' => 'yes',
'label' => __('YES', 'fw'),
),
'right-choice' => array(
'value' => 'no',
'label' => __('NO', 'fw'),
)
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
