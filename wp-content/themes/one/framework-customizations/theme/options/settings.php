<?php if (!defined('FW')) {
  die('Forbidden');
}

$options = array(

array(
'type' => 'box',
'title' => __('Social icons', 'fw'),
'attr' => array('data-foo' => 'bar'),
'options' => array(

  'facebook_link' => array(
    'type'  => 'text',
    'value' => '',
    'label' => __('Facebook link', '{domain}')
  ),
  'instagram_link' => array(
    'type'  => 'text',
    'value' => '',
    'label' => __('Instagram link', '{domain}')
  )

)),

array(
'type' => 'box',
'title' => __('Header', 'fw'),
'attr' => array('data-foo' => 'bar'),
'options' => array(
  'logo_default' => array(
  'type'  => 'upload',
  'label' => __('logo default', '{domain}'),
  'images_only' => true,
  'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
  ),
  'logo_scroll' => array(
  'type'  => 'upload',
  'label' => __('logo scroll', '{domain}'),
  'images_only' => true,
  'files_ext' => array( 'gif', 'bmp', 'png', 'jpeg', 'jpg'),
  )
)),

array(
'type' => 'box',
'title' => __('Footer', 'fw'),
'attr' => array('data-foo' => 'bar'),
'options' => array(

    'copyright' => array(
    'type'  => 'text',
    'value' => 'Copyright ©  2018',
    'label' => __('Copyright', '{domain}')
    ),

    'telephone' => array(
    'type'  => 'text',
    'value' => '424 222 7733',
    'label' => __('Telephone', '{domain}')
    ),

    'footer_text_1' => array(
    'type'  => 'text',
    'value' => 'For leasing and other inquiries, <br> please complete <a href="">the contact form</a> or give us a call.',
    'label' => __('Footer text 1', '{domain}')
    ),

    'footer_text_2' => array(
    'type'  => 'text',
    'value' => 'We look forward to hearing from you!',
    'label' => __('Footer text 2', '{domain}')
    ),
))


);