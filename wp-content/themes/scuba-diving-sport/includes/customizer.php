<?php

if ( class_exists("Kirki")){

	// HEADER SECTION

	Kirki::add_section( 'scuba_diving_sport_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'scuba-diving-sport' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'scuba-diving-sport' ),
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'scuba_diving_sport_sticky_header',
		'label'       => esc_html__( 'Enable/Disable Sticky Header', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => 0,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'scuba-diving-sport' ),
			'off' => esc_html__( 'Disable', 'scuba-diving-sport' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_menu_size_heading',
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Font Size(px)', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_menu_size',
		'label'       => __( 'Enter a value in pixels. Example:20px', 'scuba-diving-sport' ),
		'type'        => 'text',
		'section'     => 'scuba_diving_sport_section_header',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'font-size',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_menu_text_transform_heading',
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Text Transform', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'scuba_diving_sport_menu_text_transform',
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => 'capitalize',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'scuba-diving-sport' ),
			'uppercase' => esc_html__( 'Uppercase', 'scuba-diving-sport' ),
			'lowercase' => esc_html__( 'Lowercase', 'scuba-diving-sport' ),
			'capitalize' => esc_html__( 'Capitalize', 'scuba-diving-sport' ),
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => ' text-transform',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_menu_color',
		'label'       => __( 'Menu Color', 'scuba-diving-sport' ),
		'type'        => 'color',
		'section'     => 'scuba_diving_sport_section_header',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_menu_hover_color',
		'label'       => __( 'Menu Hover Color', 'scuba-diving-sport' ),
		'type'        => 'color',
		'default'     => '#48bf84',
		'section'     => 'scuba_diving_sport_section_header',
		'transport' => 'auto',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a:hover', '#main-menu ul li a:hover', '#main-menu li:hover > a','#main-menu a:focus','#main-menu li.focus > a','#main-menu ul li.current-menu-item > a','#main-menu ul li.current_page_item > a','#main-menu ul li.current-menu-parent > a','#main-menu ul li.current_page_ancestor > a','#main-menu ul li.current-menu-ancestor > a'),
				'property' => 'color',
			),

		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_submenu_color',
		'label'       => __( 'Submenu Color', 'scuba-diving-sport' ),
		'type'        => 'color',
		'section'     => 'scuba_diving_sport_section_header',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a', '#main-menu ul.sub-menu li a'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_submenu_hover_color',
		'label'       => __( 'Submenu Hover Color', 'scuba-diving-sport' ),
		'type'        => 'color',
		'section'     => 'scuba_diving_sport_section_header',
		'transport' => 'auto',
		'default'     => '#fff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'color',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'scuba_diving_sport_submenu_hover_background_color',
		'label'       => __( 'Submenu Hover Background Color', 'scuba-diving-sport' ),
		'type'        => 'color',
		'section'     => 'scuba_diving_sport_section_header',
		'transport' => 'auto',
		'default'     => '#004375',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu ul.children li a:hover', '#main-menu ul.sub-menu li a:hover'),
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_enable_location_heading',
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Address', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'scuba_diving_sport_header_location',
		'section'  => 'scuba_diving_sport_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_header_phone_number_heading',
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'scuba_diving_sport_header_phone_number',
		'section'  => 'scuba_diving_sport_section_header',
		'default'  => '',
		'sanitize_callback' => 'scuba_diving_sport_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_header_opentime_heading',
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Opening Time', 'scuba-diving-sport' ) . '</h3>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'scuba_diving_sport_header_opening_heading',
		'section'  => 'scuba_diving_sport_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_enable_button_heading',
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Get Started Button', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Button Text', 'scuba-diving-sport' ),
		'settings' => 'scuba_diving_sport_header_button_text',
		'section'  => 'scuba_diving_sport_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    =>  esc_html__( 'Button Link', 'scuba-diving-sport' ),
		'settings' => 'scuba_diving_sport_header_button_url',
		'section'  => 'scuba_diving_sport_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_enable_socail_link',
		'section'     => 'scuba_diving_sport_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'scuba_diving_sport_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'scuba-diving-sport' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'scuba-diving-sport' ),
		'settings'     => 'scuba_diving_sport_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'scuba-diving-sport' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'scuba-diving-sport' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'scuba-diving-sport' ),
				'description' => esc_html__( 'Add the social icon url here.', 'scuba-diving-sport' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );
	
	// POST SECTION

	Kirki::add_section( 'scuba_diving_sport_blog_post', array(
		'title'          => esc_html__( 'Post Settings', 'scuba-diving-sport' ),
		'description'    => esc_html__( 'Here you can add post information.', 'scuba-diving-sport' ),
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'scuba_diving_sport_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'scuba_diving_sport_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'scuba_diving_sport_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_length_setting_heading',
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'scuba-diving-sport' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'scuba_diving_sport_length_setting',
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
		 			'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'scuba-diving-sport' ),
		'settings'    => 'scuba_diving_sport_single_post_tag',
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'scuba-diving-sport' ),
		'settings'    => 'scuba_diving_sport_single_post_category',
		'section'     => 'scuba_diving_sport_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );
	
	// FOOTER SECTION

	Kirki::add_section( 'scuba_diving_sport_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'scuba-diving-sport' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'scuba-diving-sport' ),
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_footer_text_heading',
		'section'     => 'scuba_diving_sport_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'scuba_diving_sport_footer_text',
		'section'  => 'scuba_diving_sport_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'scuba_diving_sport_footer_enable_heading',
		'section'     => 'scuba_diving_sport_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'scuba-diving-sport' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'scuba_diving_sport_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'scuba-diving-sport' ),
		'section'     => 'scuba_diving_sport_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'scuba-diving-sport' ),
			'off' => esc_html__( 'Disable', 'scuba-diving-sport' ),
		],
	] );
}