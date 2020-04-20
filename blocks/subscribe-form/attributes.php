<?php
/**
 * Define block's attributes.
 *
 * @package Power_Blocks
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

return array(
	'align'            => array(
		'type'    => 'string',
		'default' => 'full',
	),
	'title'            => array(
		'type'    => 'string',
		'default' => __( 'Subscribe Now', 'power-blocks' ),
	),
	'description'      => array(
		'type'    => 'string',
		'default' => __( 'We will not spam you, we promise.', 'power-blocks' ),
	),
	'contentAlignment' => array(
		'type'    => 'string',
		'default' => 'center',
	),
	'sectionSize'      => array(
		'type'    => 'string',
		'default' => 'is-medium',
	),
	'sectionBgColor'   => array(
		'type'    => 'string',
		'default' => '#f5f5f5',
	),
	'containerSize'    => array(
		'type'    => 'string',
		'default' => 'is-small',
	),
	'boxWidth'         => array(
		'type'    => 'number',
		'default' => 100,
	),
	'boxBgColor'       => array(
		'type'    => 'string',
		'default' => '#F6D97D',
	),
	'formAction'       => array(
		'type'    => 'string',
		'default' => '',
	),
	'formName'         => array(
		'type'    => 'string',
		'default' => 'pwb_subscribe_form',
	),
	'inputName'        => array(
		'type'    => 'email',
		'default' => 'pwb_subscribe_email',
	),
	'inputWidth'       => array(
		'type'    => 'number',
		'default' => 60,
	),
	'emailPlaceholder' => array(
		'type'    => 'string',
		'default' => 'Email',
	),
	'submitButtonText' => array(
		'type'    => 'string',
		'default' => __( 'Subscribe', 'power-blocks' ),
	),
);
