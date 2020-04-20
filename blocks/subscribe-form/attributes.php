<?php
/**
 * Define block's attributes.
 *
 * @package Power_Blocks
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

return array(
	'align'                 => array(
		'type'    => 'string',
		'default' => 'full',
	),
	'title'                 => array(
		'type'    => 'string',
		'default' => __( 'Subscribe Now', 'power-blocks' ),
	),
	'description'           => array(
		'type'    => 'string',
		'default' => __( 'Enter your email address and be earlier to get the new updates!', 'power-blocks' ),
	),
	'note'                  => array(
		'type'    => 'string',
		'default' => __( "We care about your privacy. No spam, don't worry.", 'power-blocks' ),
	),
	'contentAlignment'      => array(
		'type'    => 'string',
		'default' => 'center',
	),
	'sectionSize'           => array(
		'type'    => 'string',
		'default' => 'is-medium',
	),
	'sectionBgColor'        => array(
		'type'    => 'string',
		'default' => '#f5f5f5',
	),
	'containerSize'         => array(
		'type'    => 'string',
		'default' => 'is-small',
	),
	'boxWidth'              => array(
		'type'    => 'number',
		'default' => 100,
	),
	'boxVerticalPadding'    => array(
		'type'    => 'number',
		'default' => 40,
	),
	'boxBorderRadius'       => array(
		'type'    => 'number',
		'default' => 0,
	),
	'boxBgColor'            => array(
		'type'    => 'string',
		'default' => '#F6D97D',
	),
	'formAction'            => array(
		'type'    => 'string',
		'default' => '',
	),
	'formName'              => array(
		'type'    => 'string',
		'default' => 'pwb_subscribe_form',
	),
	'fieldHeight'           => array(
		'type'    => 'number',
		'default' => 50,
	),
	'fieldBorderRadius'     => array(
		'type'    => 'number',
		'default' => 2,
	),
	'inputBorderWidth'      => array(
		'type'    => 'number',
		'default' => 0,
	),
	'inputBorderColor'      => array(
		'type'    => 'string',
		'default' => 'rgba(175, 188, 215, 0.5)',
	),
	'inputName'             => array(
		'type'    => 'email',
		'default' => 'pwb_subscribe_email',
	),
	'inputWidth'            => array(
		'type'    => 'number',
		'default' => 60,
	),
	'inputPlaceholder'      => array(
		'type'    => 'string',
		'default' => 'Email',
	),
	'submitButtonText'      => array(
		'type'    => 'string',
		'default' => __( 'Subscribe', 'power-blocks' ),
	),
	'submitButtonBgColor'   => array(
		'type'    => 'string',
		'default' => '#eeeeee',
	),
	'submitButtonTextColor' => array(
		'type'    => 'string',
		'default' => '#000000',
	),
);
