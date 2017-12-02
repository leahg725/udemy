<?php

function lu_customize_register($wp_customize) {
	lu_social_customizer_section($wp_customize);
	lu_misc_customizer_section($wp_customize);
}