<?php
/**
 *
 * @package wp-sanspapier
 */

 if( function_exists('acf_add_local_field_group') ):

 acf_add_local_field_group(array (
 	'key' => 'group_5787854686ff9',
 	'title' => 'Article',
 	'fields' => array (
 		array (
 			'key' => 'field_578787f7bb57e',
 			'label' => 'Text',
 			'name' => 'article_content',
 			'type' => 'wysiwyg',
 			'instructions' => '',
 			'required' => 1,
 			'conditional_logic' => '',
 			'wrapper' => array (
 				'width' => '',
 				'class' => '',
 				'id' => '',
 			),
 			'default_value' => '',
 			'tabs' => 'all',
 			'toolbar' => 'very_simple',
 			'media_upload' => 1,
 		),
 	),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'aktivitaet',
      ),
    ),
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ueberuns',
      ),
    ),
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'thema',
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

 acf_add_local_field_group(array (
 	'key' => 'group_577e9149d9ba3',
 	'title' => 'Home Entrytext',
 	'fields' => array (
 		array (
 			'key' => 'field_577f6b91b2d2c',
 			'label' => 'Eingangstext Titel',
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
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'front-page.php',
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

 acf_add_local_field_group(array (
 	'key' => 'group_577fb28371eab',
 	'title' => 'Startseite News',
 	'fields' => array (
 		array (
 			'key' => 'field_577fb28cf2899',
 			'label' => 'News',
 			'name' => 'news',
 			'type' => 'repeater',
 			'instructions' => '',
 			'required' => 0,
 			'conditional_logic' => 0,
 			'wrapper' => array (
 				'width' => '',
 				'class' => '',
 				'id' => '',
 			),
 			'collapsed' => '',
 			'min' => '',
 			'max' => '',
 			'layout' => 'block',
 			'button_label' => 'News hinzufügen',
 			'sub_fields' => array (
 				array (
 					'key' => 'field_577fb2a2f289a',
 					'label' => 'Titel',
 					'name' => 'titel',
 					'type' => 'text',
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
 					'prepend' => '',
 					'append' => '',
 					'maxlength' => '',
 					'readonly' => 0,
 					'disabled' => 0,
 				),
 				array (
 					'key' => 'field_577fb2c6f289b',
 					'label' => 'Text',
 					'name' => 'text',
 					'type' => 'wysiwyg',
 					'instructions' => '',
 					'required' => 1,
 					'conditional_logic' => 0,
 					'wrapper' => array (
 						'width' => '',
 						'class' => '',
 						'id' => '',
 					),
 					'default_value' => '',
 					'tabs' => 'all',
 					'toolbar' => 'very_simple',
 					'media_upload' => 1,
 				),
 				array (
 					'key' => 'field_577fb2e8f289c',
 					'label' => 'Kategorie',
 					'name' => 'kategorie',
 					'type' => 'text',
 					'instructions' => '',
 					'required' => 1,
 					'conditional_logic' => 0,
 					'wrapper' => array (
 						'width' => '',
 						'class' => '',
 						'id' => '',
 					),
 					'default_value' => '',
 					'placeholder' => '(z.B. Aufruf / Aktivität etc.)',
 					'prepend' => '',
 					'append' => '',
 					'maxlength' => '',
 					'readonly' => 0,
 					'disabled' => 0,
 				),
 				array (
 					'key' => 'field_577fb3e91135d',
 					'label' => 'Link zur Seite',
 					'name' => 'link_zur_seite',
 					'type' => 'page_link',
 					'instructions' => '',
 					'required' => 0,
 					'conditional_logic' => 0,
 					'wrapper' => array (
 						'width' => '',
 						'class' => '',
 						'id' => '',
 					),
 					'post_type' => array (
 					),
 					'taxonomy' => array (
 					),
 					'allow_null' => 0,
 					'multiple' => 0,
 				),
 			),
 		),
 	),
 	'location' => array (
 		array (
 			array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'front-page.php',
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
