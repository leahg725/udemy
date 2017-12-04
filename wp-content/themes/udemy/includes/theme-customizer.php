<?php

function lu_customize_register($wp_customize) {
	$wp_customize->get_section('title_tagline')->title = 'General';

	$wp_customize->add_panel('udemy', array(
		'title' => __('Udemy', 'udemy'),
		'description' => '<p>Udemy Theme Settings</p>',
		'priority' => 160
	));
	lu_social_customizer_section($wp_customize);
	lu_misc_customizer_section($wp_customize);
}