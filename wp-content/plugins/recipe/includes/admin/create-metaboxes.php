<?php

function r_create_metaboxes() {
	add_meta_box( 
		'r_recipe_options_mb', 
		__('Recipe options', 'recipe'),
		'r_recipe_options_m', 
		'recipe',
		'normal' 
		'high'
	);
}