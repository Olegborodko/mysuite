<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . esc_attr($atts['background_color']) . ';';
}

$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
	$bg_image = 'background-image:url(' . esc_attr($atts['background_image']['data']['icon']) . ');';
}

$margin_top = 0;
if ( ! empty( $atts['margin_top'] ) ) {
  $margin_top = esc_attr($atts['margin_top']);
}

//$section_style   = ( $bg_color || $bg_image ) ? 'style="' . esc_attr($bg_color . $bg_image) . '"' : '';
$container_class = ( isset( $atts['is_fullwidth'] ) && $atts['is_fullwidth'] ) ? 'fw-container-fluid' : 'fw-container';

if ( ! empty( $atts['class'] ) ) {
  $section_extra_classes .= esc_attr($atts['class']);
}

$animated = '';
if ( ! empty( $atts['animated'] ) ) {
  $animated = esc_attr($atts['animated']);
}

$id = '';
if ( ! empty( $atts['id'] ) ) {
  $id = esc_attr($atts['id']);
}

if ( ! empty( $atts['container_class'] ) ) {
  $container_class .= ' ' . esc_attr($atts['container_class']);
}

if ( isset( $atts['is_mobile_display'] ) && $atts['is_mobile_display'] ) {
  if ($atts['is_mobile_display']=='no') {
    $section_extra_classes .= ' g_mobile_display_none';
  }
}

$container_style .= $bg_color;
$container_style .= $bg_image;

if ( isset( $atts['background_mobile'] ) && $atts['background_mobile'] ) {
  if ($atts['background_mobile']=='no'){
    $container_class .= ' g_mobile_background_display_none';
  }
}

$section_max_width = '';
if ( ! empty( $atts['section_max_width'] ) ) {
  $section_max_width = 'style="max-width:'.esc_attr($atts['section_max_width']).'"';
}

$m_margin_top = 0;
if ( ! empty( $atts['m_margin_top'] ) ) {
  $m_margin_top = esc_attr($atts['m_margin_top']);
}

$padding = '0';
if ( ! empty( $atts['padding'] ) ) {
  $padding =  esc_attr($atts['padding']);
}

$padding_mobile = '0';
if ( ! empty( $atts['padding_mobile'] ) ) {
  $padding_mobile =  esc_attr($atts['padding_mobile']);
}

if ( ! empty( $atts['ready_custom_class'] ) ) {
  $container_class .=  " ".esc_attr($atts['ready_custom_class']);
}

$padding_mobile = '0';
if ( ! empty( $atts['padding_mobile'] ) ) {
  $padding_mobile =  esc_attr($atts['padding_mobile']);
}

$ipad_margin_top = '0';
if ( ! empty( $atts['ipad_margin_top'] ) ) {
  $ipad_margin_top =  esc_attr($atts['ipad_margin_top']);
}

?>
<section data-animated="<?=$animated?>"
         data-m-top="<?=$m_margin_top?>"
         data-m-padding="<?=$padding_mobile?>"
         data-ipad-padding="<?= esc_attr($atts['padding_ipad'])?>"
         data-ipad-top="<?=$ipad_margin_top?>"
         id="<?= esc_attr($id) ?>"
         class="animated js_mobile_margin fw-main-row <?php echo esc_attr($section_extra_classes) ?>"
         style="margin-top: <?= $margin_top ?>;
         padding:<?=$padding?>; <?=$container_style?>" >

  <div <?=$section_max_width?> class="<?php echo esc_attr($container_class); ?>">
		  <?php echo do_shortcode( $content ); ?>
  </div>
</section>
