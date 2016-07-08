<?php
/**
 *
 * @package wp-sanspapier
 */


 if( function_exists('acf_add_local_field_group') ):

 acf_add_local_field_group(array (
 	'key' => 'group_577e9149d9ba3',
 	'title' => 'Home Entrytext',
 	'fields' => array (
 		array (
 			'key' => 'field_577f6b91b2d2c',
 			'label' => 'Eingangstext Titel Fett',
 			'name' => 'eingangstext_titel',
 			'type' => 'text',
 			'instructions' => '',
 			'required' => 1,
 			'conditional_logic' => 0,
 			'wrapper' => array (
 				'width' => '',
 				'class' => '',
 				'id' => '',
 			),
 			'default_value' => 'WIDE Switzerland',
 			'placeholder' => 'WIDE Switzerland',
 			'prepend' => '',
 			'append' => '',
 			'maxlength' => '',
 			'readonly' => 0,
 			'disabled' => 0,
 		),
 		array (
 			'key' => 'field_577e91576d850',
 			'label' => 'Eingangstext',
 			'name' => 'eingangstext',
 			'type' => 'textarea',
 			'instructions' => '',
 			'required' => 1,
 			'conditional_logic' => 0,
 			'wrapper' => array (
 				'width' => '',
 				'class' => '',
 				'id' => '',
 			),
 			'default_value' => '',
 			'placeholder' => '',
 			'maxlength' => '',
 			'rows' => 12,
 			'new_lines' => 'wpautop',
 			'readonly' => 0,
 			'disabled' => 0,
 		),
 	),
 	'location' => array (
 		array (
 			array (
 				'param' => 'page',
 				'operator' => '==',
 				'value' => '15',
 			),
 		),
 	),
 	'menu_order' => 0,
 	'position' => 'normal',
 	'style' => 'default',
 	'label_placement' => 'top',
 	'instruction_placement' => 'label',
 	'hide_on_screen' => '',
 	'active' => 1,
 	'description' => '',
 ));

 endif;
