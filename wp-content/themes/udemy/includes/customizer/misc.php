<?php

function lu_misc_customizer_section($wp_customize) {
	$wp_customize->add_setting('lu_header_show_search', array(
		'default' => 'yes',
		'transport' => 'postMessage'
	));
	$wp_customize->add_setting('lu_header_show_cart', array(
		'default' => 'yes',
		'transport' => 'postMessage'
	));
	$wp_customize->add_setting('lu_footer_copyright_text', array(
		'default' => 'Copyright &copy; 2017 All Rights Reserved by Leah Gazes'
	));
	$wp_customize->add_setting('lu_footer_tos_page', array(
		'default' => 0
	));
	$wp_customize->add_setting('lu_footer_privacy_page', array(
		'default' => 0
	));

	$wp_customize->add_section('lu_misc_section', array(
		'title' => __('Udemy Misc Settings', 'udemy'),
		'priority' => 30,
		'panel' => 'udemy'
	));

	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'lu_header_show_search_input', 
			array(
				'label'    => __( 'Show Search Button in Header', 'udemy' ),
				'section'  => 'lu_misc_section',
				'settings' => 'lu_header_show_search',
				'type'	   => 'checkbox',
				'choices'  => array(
					'yes'  => __('Yes', 'udemy')
				)
			)
		)
	);
	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'lu_header_show_cart_input', 
			array(
				'label'    => __( 'Show Cart Button in Header', 'udemy' ),
				'section'  => 'lu_misc_section',
				'settings' => 'lu_header_show_cart',
				'type'	   => 'checkbox',
				'choices'  => array(
					'yes'  => __('Yes', 'udemy')
				)
			)
		)
	);
	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'lu_footer_copyright_text_input', 
			array(
				'label'    => __( 'Copyright Text', 'udemy' ),
				'section'  => 'lu_misc_section',
				'settings' => 'lu_footer_copyright_text',
			)
		)
	);
	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'lu_footer_tos_page_input', 
			array(
				'label'    => __( 'TOS Page', 'udemy' ),
				'section'  => 'lu_misc_section',
				'settings' => 'lu_footer_tos_page',
				'type'	   => 'dropdown-pages',
			)
		)
	);
	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'lu_footer_privacy_page_input', 
			array(
				'label'    => __( 'Privacy Page', 'udemy' ),
				'section'  => 'lu_misc_section',
				'settings' => 'lu_footer_privacy_page',
				'type'	   => 'dropdown-pages',
			)
		)
	);
}