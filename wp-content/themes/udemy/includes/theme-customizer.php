<?php

function lu_customize_register($wp_customize) {
	$wp_customize->add_setting('lu_facebook_handle', array(
		'default' => ''
	));
}