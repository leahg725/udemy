<?php

function lu_social_customizer_section($wp_customize) {
	$wp_customize->add_setting('lu_facebook_handle', array(
		'default' => ''
	));
	$wp_customize->add_setting('lu_twitter_handle', array(
		'default' => ''
	));
	$wp_customize->add_setting('lu_instagram_handle', array(
		'default' => ''
	));
	$wp_customize->add_setting('lu_email', array(
		'default' => ''
	));
	$wp_customize->add_setting('lu_phone_number', array(
		'default' => ''
	));


	$wp_customize->add_section('lu_social_section', array(
		'title' => __('Udemy Social Settings', 'udemy'),
		'priority' => 30
	));

	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'lu_social_facebook_input', 
			array(
				'label'    => __( 'Facebook Handle', 'udemy' ),
				'section'  => 'lu_social_section',
				'settings' => 'lu_facebook_handle',
				'type'	   => 'text'
			)
		)
	);
	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'lu_social_twitter_input', 
			array(
				'label'    => __( 'Twitter Handle', 'udemy' ),
				'section'  => 'lu_social_section',
				'settings' => 'lu_twitter_handle',
				'type'	   => 'text'
			)
		)
	);
	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'lu_social_instagram_input', 
			array(
				'label'    => __( 'Instagram Handle', 'udemy' ),
				'section'  => 'lu_social_section',
				'settings' => 'lu_instagram_handle',
				'type'	   => 'text'
			)
		)
	);
	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'lu_social_email_input', 
			array(
				'label'    => __( 'Email', 'udemy' ),
				'section'  => 'lu_social_section',
				'settings' => 'lu_email',
				'type'	   => 'text'
			)
		)
	);
	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'lu_social_phone_number_input', 
			array(
				'label'    => __( 'Phone Number', 'udemy' ),
				'section'  => 'lu_social_section',
				'settings' => 'lu_phone_number',
				'type'	   => 'text'
			)
		)
	);
}