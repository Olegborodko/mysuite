<?php if ( ! defined( 'FW' ) ) {
  die( 'Forbidden' );
}

$options = array(
'url'    => array(
'type'  => 'text',
'label' => __( 'Insert Video URL', 'fw' ),
'desc'  => __( 'Can play only local files (format mp4)', 'fw' )
),

'align' => array(
'type'  => 'select',
'value' => 'left',
'label' => __('align', '{domain}'),
'choices' => array(
'left' => 'left',
'center' => 'center',
'right' => 'right'),
'no-validate' => false
),

'max_width' => array(
'type'  => 'text',
'value' => '',
'label' => __('max width', '{domain}'),
'desc'  => __('empty == 100%', 'fw'),
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
