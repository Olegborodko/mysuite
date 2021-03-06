<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'text' => array(
		'type'   => 'wp-editor',
    'attr'  => array( 'class' => 'custom-class unyson_wp_editor', 'data-foo' => 'bar' ),
		'label'  => __( 'Content', 'fw' ),
		'desc'   => __( 'Enter some content for this texblock', 'fw' ),
    'shortcodes' => false,
    'size' => 'large'
	),

'margin_top' => array(
'type'  => 'text',
'value' => '0',
'label' => __('margin-top', '{domain}'),
'desc'  => __('0, 44px, ...', 'fw'),
),

'm_margin_top' => array(
'type'  => 'text',
'value' => '0',
'label' => __('mobile margin-top', '{domain}'),
'desc'  => __('0, 44px, ...', 'fw')
),

'ipad_margin_top' => array(
'type'  => 'text',
'value' => '0',
'label' => __('ipad margin-top', '{domain}'),
'desc'  => __('0, 44px, ...', 'fw')
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

'max_width' => array(
'type'  => 'text',
'value' => '',
'label' => __('max width', '{domain}'),
'desc'  => __('44px, 50%, ...', 'fw'),
),

'is_center_margin_left_right' => array(
'label' => __('Desktop block center', 'fw'),
'type'  => 'switch',
'value' => 'no',
'left-choice' => array(
'value' => 'yes',
'label' => __('YES', 'fw'),
),
'right-choice' => array(
'value' => 'no',
'label' => __('NO', 'fw'),
)
),

'is_mobile_center_margin_left_right' => array(
'label' => __('Mobile and ipad block center', 'fw'),
'type'  => 'switch',
'value' => 'no',
'left-choice' => array(
'value' => 'yes',
'label' => __('YES', 'fw'),
),
'right-choice' => array(
'value' => 'no',
'label' => __('NO', 'fw'),
)
),

'class' => array(
'type'  => 'text',
'value' => '',
'label' => __('class', '{domain}'),
'desc'  => __('custom class', 'fw')
),

//'animated' => array(
//'type'  => 'text',
//'value' => '',
//'label' => __('Animated', '{domain}'),
//'desc'  => __('fadeInRightBig, zoomIn, .. other -> https://github.com/daneden/animate.css', 'fw'),
//)
);
