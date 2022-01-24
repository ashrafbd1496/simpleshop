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
			'description' => esc_html__( 'Display Banner control', 'simpleshop' ),
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
	] );

	//Banner Section Link
	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'link',
		'settings' => 'banner_link_setting',
		'label'    => esc_html__( 'Banner Link', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => esc_html__( 'https://simpleshop.ashrafbd.com', 'simpleshop' ),
		'priority' => 10,
	] );

	//Banner Section Link Text
	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'text',
		'settings' => 'banner_link_text_setting',
		'label'    => esc_html__( 'Banner Link Text', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => esc_html__( 'বই কিনুন', 'simpleshop' ),
		'priority' => 10,
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
	] );

	//Product  Section Sub Ttile
	Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
		'type'     => 'text',
		'settings' => 'products_subtitle_setting',
		'label'    => esc_html__( 'Product Section Sub Title', 'simpleshop' ),
		'section'  => 'simpleshop_homepage',
		'default'  => esc_html__( '37 New fashion products arrived recently in our showroom for this winter', 'simpleshop' ),
		'priority' => 10,
	] );






}