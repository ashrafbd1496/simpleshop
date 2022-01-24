<?php

define('SIMPLESHOP_CUSTOMIZER_CONFIG_ID','simpleshop_customizer_settings');
define('SIMPLESHOP_CUSTOMIZER_PANEL_ID','simpleshop_customizer_panel');

if(class_exists('Kirki')){
	Kirki::add_config( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod',
	) );

	Kirki::add_panel( SIMPLESHOP_CUSTOMIZER_PANEL_ID, array(
		'priority'    => 240,
		'title'       => esc_html__( 'SimpleShop', 'simpleshop' ),
		'description' => esc_html__( 'SimpleShop Settings', 'simpleshop' ),
	) );

	//Homepage section
	Kirki::add_section( 'simpleshop_homepage', array(
		'title'          => esc_html__( 'Homepage Settings', 'kirki' ),
		'panel'          => SIMPLESHOP_CUSTOMIZER_PANEL_ID,
		'priority'       => 160,
		'active_callback'=> function(){
			return is_page_template('page-templates/homepage.php');
		},
	) );

	//Banner Section Show Hide
		Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID,
		[
			'type'    => 'switch',
			'settings'    => 'banner_display_setting',
			'label'       => esc_html__( 'Display Banner Secton', 'simpleshop' ),
			'section'     => 'simpleshop_homepage',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'simpleshop' ),
				'off' => esc_html__( 'Disable', 'simpleshop' ),
			],
		]
	);

	//Banner Title 
	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'text',
		'settings' => 'banner_title_setting',
		'label'    => esc_html__( 'Banner Title', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => esc_html__( 'সততা। সহজতা। বিশ্বস্ততা।', 'simpleshop' ),
		'priority' => 10,
		'active_callback'=>[
			[
				'setting'=>'banner_display_setting',
				'operator'=>'==',
				'value'=>true,
			]
		],
	] );

	//Banner Section Link
	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'link',
		'settings' => 'banner_link_setting',
		'label'    => esc_html__( 'Banner Link', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => esc_html__( 'https://simpleshop.ashrafbd.com', 'simpleshop' ),
		'priority' => 10,
		'priority' => 10,
		'active_callback'=>[
			[
				'setting'=>'banner_display_setting',
				'operator'=>'==',
				'value'=>true,
			]
		],
	] );

	//Banner Section Link Text
	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'text',
		'settings' => 'banner_link_text_setting',
		'label'    => esc_html__( 'Banner Link Text', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => esc_html__( 'বই কিনুন', 'simpleshop' ),
		'priority' => 10,
		'priority' => 10,
		'active_callback'=>[
			[
				'setting'=>'banner_display_setting',
				'operator'=>'==',
				'value'=>true,
			]
		],
	] );

	//Product Category Section Show Hide
		Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID,
		[
			'type'    => 'switch',
			'settings'    => 'pcat_display_setting',
			'label'       => esc_html__( 'Display Product Category Secton', 'simpleshop' ),
			'section'     => 'simpleshop_homepage',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'simpleshop' ),
				'off' => esc_html__( 'Disable', 'simpleshop' ),
			],
		]
	);

	//Product Category Ttile
	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'text',
		'settings' => 'pcat_title_setting',
		'label'    => esc_html__( 'Product Categroy Title', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => esc_html__( 'Shop By Category', 'simpleshop' ),
		'priority' => 10,
		'active_callback'=>[
			[
				'setting'=>'pcat_display_setting',
				'operator'=>'==',
				'value'=>true,
			]
		],
	] );

	//Products Section Show Hide
		Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID,
		[
			'type'    => 'switch',
			'settings'    => 'product_display_setting',
			'label'       => esc_html__( 'Display Products Secton', 'simpleshop' ),
			'section'     => 'simpleshop_homepage',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'simpleshop' ),
				'off' => esc_html__( 'Disable', 'simpleshop' ),
			],
		]
	);

	//Product  sectoion Ttile
	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'text',
		'settings' => 'products_title_setting',
		'label'    => esc_html__( 'Product Section Title', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => esc_html__( 'New Arrival', 'simpleshop' ),
		'priority' => 10,
		'active_callback'=>[
			[
				'setting'=>'product_display_setting',
				'operator'=>'==',
				'value'=>true,
			]
		],
	] );

	//Product  Section Sub Ttile
	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'text',
		'settings' => 'products_subtitle_setting',
		'label'    => esc_html__( 'Product Section Sub Title', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => esc_html__( '37 New fashion products arrived recently in our showroom for this winter', 'simpleshop' ),
		'priority' => 10,
		'active_callback'=>[
			[
				'setting'=>'product_display_setting',
				'operator'=>'==',
				'value'=>true,
			]
		],
	] );


	//Promo Section Show Hide
		Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID,
		[
			'type'    => 'switch',
			'settings'    => 'promo_display_setting',
			'label'       => esc_html__( 'Display Promo Secton', 'simpleshop' ),
			'section'     => 'simpleshop_homepage',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'simpleshop' ),
				'off' => esc_html__( 'Disable', 'simpleshop' ),
			],
		]
	);

	//Promo  sectoion Ttile
	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'text',
		'settings' => 'promo_title_setting',
		'label'    => esc_html__( 'Promo Section Title', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => esc_html__( 'Up to 50% off', 'simpleshop' ),
		'priority' => 10,
		'active_callback'=>[
			[
				'setting'=>'promo_display_setting',
				'operator'=>'==',
				'value'=>true,
			]
		],
	] );

	//Promo  Section Sub Ttile
	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'link',
		'settings' => 'promo_button_link_setting',
		'label'    => esc_html__( 'Promo Button Link', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => esc_html__( 'https://simplesop.ashrafbd.com', 'simpleshop' ),
		'priority' => 10,
		'active_callback'=>[
			[
				'setting'=>'promo_display_setting',
				'operator'=>'==',
				'value'=>true,
			]
		],
	] );
	//Promo  button link text
	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'text',
		'settings' => 'promo_link_text_setting',
		'label'    => esc_html__( 'Promo Button Link Text', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => esc_html__( 'in store and online', 'simpleshop' ),
		'priority' => 10,
		'active_callback'=>[
			[
				'setting'=>'promo_display_setting',
				'operator'=>'==',
				'value'=>true,
			]
		],
	] );


	//Popular Products Section Show Hide
		Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID,
		[
			'type'    => 'switch',
			'settings'    => 'pproduct_display_setting',
			'label'       => esc_html__( 'Display Popular Product Secton', 'simpleshop' ),
			'section'     => 'simpleshop_homepage',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'simpleshop' ),
				'off' => esc_html__( 'Disable', 'simpleshop' ),
			],
		]
	);

	//Popular Products  sectoion Ttile
	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'text',
		'settings' => 'pproduct_title_setting',
		'label'    => esc_html__( 'Popular Product Section Title', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => esc_html__( 'Up to 50% off', 'simpleshop' ),
		'priority' => 10,
		'active_callback'=>[
			[
				'setting'=>'pproduct_display_setting',
				'operator'=>'==',
				'value'=>true,
			]
		],
	] );

	//Offer Section Show Hide
		Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID,
		[
			'type'    => 'switch',
			'settings'    => 'offer_display_setting',
			'label'       => esc_html__( 'Display Offer Secton', 'simpleshop' ),
			'section'     => 'simpleshop_homepage',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'simpleshop' ),
				'off' => esc_html__( 'Disable', 'simpleshop' ),
			],
		]
	);

	//Flickr Section Show Hide
	Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID,
	[
		'type'    => 'switch',
		'settings'    => 'flickr_display_setting',
		'label'       => esc_html__( 'Display Flickr Secton', 'simpleshop' ),
		'section'     => 'simpleshop_homepage',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'simpleshop' ),
			'off' => esc_html__( 'Disable', 'simpleshop' ),
		],
	]
);
	//Flickr Section Title
	Kirki::add_field(SIMPLESHOP_CUSTOMIZER_CONFIG_ID,
	[
		'type'    => 'text',
		'settings'    => 'flickr_title',
		'label'       => esc_html__( 'Flickr Secton Title', 'simpleshop' ),
		'section'     => 'simpleshop_homepage',
		'default'  => esc_html__( 'SimpleShop on Flickr', 'simpleshop' ),
		'priority' => 10,
		'active_callback'=>[
			[
				'setting'=>'flickr_display_setting',
				'operator'=>'==',
				'value'=>true,
			]
		],
	]
);








}