<?php
/**
 * Theme Shortcodes Generator
 * @package digtek
 * @since 1.0.0
 */

if (!defined('ABSPATH')){
	exit(); //exit if access it directly
}

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {
	$prefix = 'digtek';
	CSF::createShortcoder( $prefix.'_shortcodes', array(
		'button_title'   => esc_html__('Add Shortcode','digtek'),
		'select_title'   => esc_html__('Select a shortcode','digtek'),
		'insert_title'   => esc_html__('Insert Shortcode','digtek')
	) );

	/*------------------------------------
		Social Icon Options
	-------------------------------------*/
	CSF::createSection( $prefix.'_shortcodes', array(
		'title'     => esc_html__('Social Icons','digtek'),
		'view'      => 'group',
		'shortcode' => 'digtek_social_icon_wrap',
		'fields' => [
            array(
                'id'      => 'custom_class',
                'type'    => 'text',
                'title'   => esc_html__('Custom Class','digtek'),
            )
        ],
		'group_shortcode' => 'digtek_social_icon',
		'group_fields'    => array(
			array(
				'id'    => 'social_icon',
				'type'  => 'icon',
				'title' => esc_html__('Icon','digtek'),
			),
			array(
				'id'      => 'social_link',
				'type'    => 'text',
				'title'   => esc_html__('URL','digtek'),
			)
		)
	) );

	/*------------------------------------
		Top Menu Options
	-------------------------------------*/
	CSF::createSection( $prefix.'_shortcodes', array(
		'title'     => esc_html__('Top Menu','digtek'),
		'view'      => 'group',
		'shortcode' => 'digtek_top_menu_wrap',
		'group_shortcode' => 'digtek_top_menu',
		'group_fields'    => array(
			array(
				'id'    => 'top_menu_text',
				'type'  => 'text',
				'title' => esc_html__('Text','digtek'),
			),
			array(
				'id'      => 'top_menu_link',
				'type'    => 'text',
				'title'   => esc_html__('URL','digtek'),
			)
		)
	) );

    /*------------------------------------
      Info Menu Options
    -------------------------------------*/
    CSF::createSection( $prefix.'_shortcodes', array(
        'title'     => esc_html__('Info Menu','digtek'),
        'view'      => 'group',
        'shortcode' => 'digtek_top_menu_wrap_02',
        'group_shortcode' => 'digtek_top_menu_02',
        'group_fields'    => array(
            array(
                'id'    => 'top_menu_title_text',
                'type'  => 'text',
                'title' => esc_html__('Text','digtek'),
            ),
            array(
                'id'    => 'top_menu_text',
                'type'  => 'text',
                'title' => esc_html__('Text','digtek'),
            ),
            array(
                'id'      => 'top_menu_link',
                'type'    => 'text',
                'title'   => esc_html__('URL','digtek'),
            )
        )
    ) );
    
	/*------------------------------------
		Inline info link options
	-------------------------------------*/
	CSF::createSection( $prefix.'_shortcodes', array(
		'title'     => esc_html__('Inline Info Link','digtek'),
		'view'      => 'group',
		'shortcode' => 'digtek_info_item_wrap',
		'group_shortcode' => 'digtek_info_link',
		'group_fields'    => array(
			array(
				'id'    => 'icon',
				'type'  => 'icon',
				'title' => esc_html__('Icon','digtek'),
			),
			array(
				'id'      => 'text',
				'type'    => 'text',
				'title'   => esc_html__('Text','digtek'),
			),
			array(
				'id'      => 'url',
				'type'    => 'text',
				'title'   => esc_html__('URL','digtek'),
			)
		)
	) );

}
