<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(
'small_text' => array(
'type'   => 'wp-editor',
'attr'  => array( 'class' => 'unyson_wp_editor', 'data-foo' => 'bar' ),
'label'  => __( 'Small text', 'fw' ),
'desc'   => __( 'Enter some content for this text block', 'fw' ),
'shortcodes' => false,
'size' => 'large'
),

'title_desktop' => array(
'type'   => 'wp-editor',
'attr'  => array( 'class' => 'unyson_wp_editor', 'data-foo' => 'bar' ),
'label'  => __( 'Title desktop', 'fw' ),
'desc'   => __( 'Enter some content for this text block', 'fw' ),
'shortcodes' => false,
'size' => 'large'
),

'title_ipad' => array(
'type'   => 'wp-editor',
'attr'  => array( 'class' => 'unyson_wp_editor', 'data-foo' => 'bar' ),
'label'  => __( 'Title ipad', 'fw' ),
'desc'   => __( 'Enter some content for this text block', 'fw' ),
'shortcodes' => false,
'size' => 'large'
),

'title_mobile' => array(
'type'   => 'wp-editor',
'attr'  => array( 'class' => 'unyson_wp_editor', 'data-foo' => 'bar' ),
'label'  => __( 'Title mobile', 'fw' ),
'desc'   => __( 'Enter some content for this text block', 'fw' ),
'shortcodes' => false,
'size' => 'large'
),

'button_title_1' => array(
'type'  => 'text',
'value' => '',
'label' => __('button title 1', '{domain}')
),

'button_url_1' => array(
'type'  => 'text',
'value' => '',
'label' => __('button url 1', '{domain}')
),

'button_title_2' => array(
'type'  => 'text',
'value' => '',
'label' => __('button title 2', '{domain}')
),

'button_url_2' => array(
'type'  => 'text',
'value' => '',
'label' => __('button url 2', '{domain}')
),

'margin_top' => array(
'type'  => 'text',
'value' => '0',
'label' => __('margin-top', '{domain}'),
'desc'  => __('0, 44px, ...', 'fw'),
),

'margin_bottom' => array(
'type'  => 'text',
'value' => '0',
'label' => __('margin-bottom', '{domain}'),
'desc'  => __('0, 44px, ...', 'fw')
),

'm_margin_top' => array(
'type'  => 'text',
'value' => '0',
'label' => __('mobile margin-top', '{domain}'),
'desc'  => __('0, 44px, ...', 'fw')
),

'm_margin_bottom' => array(
'type'  => 'text',
'value' => '0',
'label' => __('mobile margin-bottom', '{domain}'),
'desc'  => __('0, 44px, ...', 'fw')
)

//'animated' => array(
//'type'  => 'text',
//'value' => '',
//'label' => __('Animated', '{domain}'),
//'desc'  => __('fadeInRightBig, zoomIn, .. other -> https://github.com/daneden/animate.css', 'fw'),
//)
);
