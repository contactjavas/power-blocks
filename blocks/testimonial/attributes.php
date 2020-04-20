<?php
/**
 * Define block's attributes.
 *
 * @package Power_Blocks
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

return array(
	'content' => array(
		'type'     => 'array',
		'source'   => 'children',
		'selector' => 'p',
	),
	// 'block_id'                => array(
	// 'type'    => 'string',
	// 'default' => 'not_set',
	// ),
	// 'categories'              => array(
	// 'type' => 'string',
	// ),
	// 'postType'                => array(
	// 'type'    => 'string',
	// 'default' => 'post',
	// ),
	// 'taxonomyType'            => array(
	// 'type'    => 'string',
	// 'default' => 'category',
	// ),
	// 'postsToShow'             => array(
	// 'type'    => 'number',
	// 'default' => 6,
	// ),
	// 'displayPostDate'         => array(
	// 'type'    => 'boolean',
	// 'default' => true,
	// ),
	// 'displayPostExcerpt'      => array(
	// 'type'    => 'boolean',
	// 'default' => true,
	// ),
	// 'excerptLength'           => array(
	// 'type'    => 'number',
	// 'default' => 25,
	// ),
	// 'displayPostAuthor'       => array(
	// 'type'    => 'boolean',
	// 'default' => true,
	// ),
	// 'displayPostTitle'        => array(
	// 'type'    => 'boolean',
	// 'default' => true,
	// ),
	// 'displayPostComment'      => array(
	// 'type'    => 'boolean',
	// 'default' => true,
	// ),
	// 'displayPostTaxonomy'     => array(
	// 'type'    => 'boolean',
	// 'default' => false,
	// ),
	// 'displayPostImage'        => array(
	// 'type'    => 'boolean',
	// 'default' => true,
	// ),
	// 'imgSize'                 => array(
	// 'type'    => 'string',
	// 'default' => 'large',
	// ),
	// 'imgPosition'             => array(
	// 'type'    => 'string',
	// 'default' => 'top',
	// ),
	// 'linkBox'                 => array(
	// 'type' => 'boolean',
	// ),
	// 'bgOverlayColor'          => array(
	// 'type'    => 'string',
	// 'default' => '#ffffff',
	// ),
	// 'overlayOpacity'          => array(
	// 'type'    => 'number',
	// 'default' => '50',
	// ),
	// 'displayPostLink'         => array(
	// 'type'    => 'boolean',
	// 'default' => true,
	// ),
	// 'newTab'                  => array(
	// 'type'    => 'boolean',
	// 'default' => false,
	// ),
	// 'ctaText'                 => array(
	// 'type'    => 'string',
	// 'default' => __( 'Read More', 'ultimate-addons-for-gutenberg' ),
	// ),
	// 'borderWidth'             => array(
	// 'type'    => 'number',
	// 'default' => 1,
	// ),
	// 'btnHPadding'             => array(
	// 'type'    => 'number',
	// 'default' => 10,
	// ),
	// 'btnVPadding'             => array(
	// 'type'    => 'number',
	// 'default' => 5,
	// ),
	// 'borderStyle'             => array(
	// 'type'    => 'string',
	// 'default' => 'none',
	// ),
	// 'borderColor'             => array(
	// 'type'    => 'string',
	// 'default' => '#3b3b3b',
	// ),
	// 'borderHColor'            => array(
	// 'type' => 'string',
	// ),
	// 'borderRadius'            => array(
	// 'type'    => 'number',
	// 'default' => 0,
	// ),
	// 'columns'                 => array(
	// 'type'    => 'number',
	// 'default' => 3,
	// ),
	// 'tcolumns'                => array(
	// 'type'    => 'number',
	// 'default' => 2,
	// ),
	// 'mcolumns'                => array(
	// 'type'    => 'number',
	// 'default' => 1,
	// ),
	// 'align'                   => array(
	// 'type'    => 'string',
	// 'default' => 'left',
	// ),
	// 'width'                   => array(
	// 'type'    => 'string',
	// 'default' => 'wide',
	// ),
	// 'order'                   => array(
	// 'type'    => 'string',
	// 'default' => 'desc',
	// ),
	// 'orderBy'                 => array(
	// 'type'    => 'string',
	// 'default' => 'date',
	// ),
	// 'rowGap'                  => array(
	// 'type'    => 'number',
	// 'default' => 20,
	// ),
	// 'columnGap'               => array(
	// 'type'    => 'number',
	// 'default' => 20,
	// ),
	// 'bgColor'                 => array(
	// 'type'    => 'string',
	// 'default' => '#e4e4e4',
	// ),
	// 'titleColor'              => array(
	// 'type'    => 'string',
	// 'default' => '#3b3b3b',
	// ),
	// 'titleTag'                => array(
	// 'type'    => 'string',
	// 'default' => 'h3',
	// ),
	// 'titleFontSize'           => array(
	// 'type'    => 'number',
	// 'default' => '',
	// ),
	// 'titleFontSizeType'       => array(
	// 'type'    => 'string',
	// 'default' => 'px',
	// ),
	// 'titleFontSizeMobile'     => array(
	// 'type' => 'number',
	// ),
	// 'titleFontSizeTablet'     => array(
	// 'type' => 'number',
	// ),
	// 'titleFontFamily'         => array(
	// 'type'    => 'string',
	// 'default' => '',
	// ),
	// 'titleFontWeight'         => array(
	// 'type' => 'string',
	// ),
	// 'titleFontSubset'         => array(
	// 'type' => 'string',
	// ),
	// 'titleLineHeightType'     => array(
	// 'type'    => 'string',
	// 'default' => 'em',
	// ),
	// 'titleLineHeight'         => array(
	// 'type' => 'number',
	// ),
	// 'titleLineHeightTablet'   => array(
	// 'type' => 'number',
	// ),
	// 'titleLineHeightMobile'   => array(
	// 'type' => 'number',
	// ),
	// 'titleLoadGoogleFonts'    => array(
	// 'type'    => 'boolean',
	// 'default' => false,
	// ),
	// 'metaFontSize'            => array(
	// 'type'    => 'number',
	// 'default' => '',
	// ),
	// 'metaFontSizeType'        => array(
	// 'type'    => 'string',
	// 'default' => 'px',
	// ),
	// 'metaFontSizeMobile'      => array(
	// 'type' => 'number',
	// ),
	// 'metaFontSizeTablet'      => array(
	// 'type' => 'number',
	// ),
	// 'metaFontFamily'          => array(
	// 'type'    => 'string',
	// 'default' => '',
	// ),
	// 'metaFontWeight'          => array(
	// 'type' => 'string',
	// ),
	// 'metaFontSubset'          => array(
	// 'type' => 'string',
	// ),
	// 'metaLineHeightType'      => array(
	// 'type'    => 'string',
	// 'default' => 'em',
	// ),
	// 'metaLineHeight'          => array(
	// 'type' => 'number',
	// ),
	// 'metaLineHeightTablet'    => array(
	// 'type' => 'number',
	// ),
	// 'metaLineHeightMobile'    => array(
	// 'type' => 'number',
	// ),
	// 'metaLoadGoogleFonts'     => array(
	// 'type'    => 'boolean',
	// 'default' => false,
	// ),
	// 'excerptFontSize'         => array(
	// 'type'    => 'number',
	// 'default' => '',
	// ),
	// 'excerptFontSizeType'     => array(
	// 'type'    => 'string',
	// 'default' => 'px',
	// ),
	// 'excerptFontSizeMobile'   => array(
	// 'type' => 'number',
	// ),
	// 'excerptFontSizeTablet'   => array(
	// 'type' => 'number',
	// ),
	// 'excerptFontFamily'       => array(
	// 'type'    => 'string',
	// 'default' => '',
	// ),
	// 'excerptFontWeight'       => array(
	// 'type' => 'string',
	// ),
	// 'excerptFontSubset'       => array(
	// 'type' => 'string',
	// ),
	// 'excerptLineHeightType'   => array(
	// 'type'    => 'string',
	// 'default' => 'em',
	// ),
	// 'excerptLineHeight'       => array(
	// 'type' => 'number',
	// ),
	// 'excerptLineHeightTablet' => array(
	// 'type' => 'number',
	// ),
	// 'excerptLineHeightMobile' => array(
	// 'type' => 'number',
	// ),
	// 'excerptLoadGoogleFonts'  => array(
	// 'type'    => 'boolean',
	// 'default' => false,
	// ),
	// 'ctaFontSize'             => array(
	// 'type'    => 'number',
	// 'default' => '',
	// ),
	// 'ctaFontSizeType'         => array(
	// 'type'    => 'string',
	// 'default' => 'px',
	// ),
	// 'ctaFontSizeMobile'       => array(
	// 'type' => 'number',
	// ),
	// 'ctaFontSizeTablet'       => array(
	// 'type' => 'number',
	// ),
	// 'ctaFontFamily'           => array(
	// 'type'    => 'string',
	// 'default' => '',
	// ),
	// 'ctaFontWeight'           => array(
	// 'type' => 'string',
	// ),
	// 'ctaFontSubset'           => array(
	// 'type' => 'string',
	// ),
	// 'ctaLineHeightType'       => array(
	// 'type'    => 'string',
	// 'default' => 'em',
	// ),
	// 'ctaLineHeight'           => array(
	// 'type' => 'number',
	// ),
	// 'ctaLineHeightTablet'     => array(
	// 'type' => 'number',
	// ),
	// 'ctaLineHeightMobile'     => array(
	// 'type' => 'number',
	// ),
	// 'ctaLoadGoogleFonts'      => array(
	// 'type'    => 'boolean',
	// 'default' => false,
	// ),
	// 'metaColor'               => array(
	// 'type'    => 'string',
	// 'default' => '#777777',
	// ),
	// 'excerptColor'            => array(
	// 'type'    => 'string',
	// 'default' => '',
	// ),
	// 'ctaColor'                => array(
	// 'type'    => 'string',
	// 'default' => '#ffffff',
	// ),
	// 'ctaBgColor'              => array(
	// 'type'    => 'string',
	// 'default' => '#333333',
	// ),
	// 'ctaHColor'               => array(
	// 'type' => 'string',
	// ),
	// 'ctaBgHColor'             => array(
	// 'type' => 'string',
	// ),
	// 'contentPadding'          => array(
	// 'type'    => 'number',
	// 'default' => 20,
	// ),
	// 'contentPaddingMobile'    => array(
	// 'type' => 'number',
	// ),
	// 'titleBottomSpace'        => array(
	// 'type'    => 'number',
	// 'default' => 15,
	// ),
	// 'metaBottomSpace'         => array(
	// 'type'    => 'number',
	// 'default' => 15,
	// ),
	// 'excerptBottomSpace'      => array(
	// 'type'    => 'number',
	// 'default' => 25,
	// ),
	// 'pauseOnHover'            => array(
	// 'type'    => 'boolean',
	// 'default' => true,
	// ),
	// 'infiniteLoop'            => array(
	// 'type'    => 'boolean',
	// 'default' => true,
	// ),
	// 'transitionSpeed'         => array(
	// 'type'    => 'number',
	// 'default' => 500,
	// ),
	// 'arrowDots'               => array(
	// 'type'    => 'string',
	// 'default' => 'arrows_dots',
	// ),
	// 'autoplay'                => array(
	// 'type'    => 'boolean',
	// 'default' => true,
	// ),
	// 'autoplaySpeed'           => array(
	// 'type'    => 'number',
	// 'default' => 2000,
	// ),
	// 'arrowSize'               => array(
	// 'type'    => 'number',
	// 'default' => 20,
	// ),
	// 'arrowBorderSize'         => array(
	// 'type'    => 'number',
	// 'default' => 1,
	// ),
	// 'arrowBorderRadius'       => array(
	// 'type'    => 'number',
	// 'default' => 0,
	// ),
	// 'arrowColor'              => array(
	// 'type'    => 'string',
	// 'default' => '#aaaaaa',
	// ),
	// 'equalHeight'             => array(
	// 'type'    => 'boolean',
	// 'default' => false,
	// ),
);
