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

'position' => array(
'type'  => 'text',
'value' => '0%',
'label' => __('position %', '{domain}'),
'desc'  => __('from 0% to 100%', 'fw'),
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
