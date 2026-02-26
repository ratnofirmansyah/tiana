<?php

/*
 * Theme Customize Options
 * @package digtek
 * @since 1.0.0
 * */

if (!defined('ABSPATH')) {
    exit(); // exit if access directly
}

if (class_exists('CSF')) {
    $prefix = 'digtek';

    CSF::createCustomizeOptions($prefix . '_customize_options');
    /*-------------------------------------
        ** Theme Main panel
    -------------------------------------*/
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('Digtek Options', 'digtek'),
        'id' => 'digtek_main_panel',
        'priority' => 11,
    ));


    /*-------------------------------------
        ** Theme Main Color
    -------------------------------------*/
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('01. Main Color', 'digtek'),
        'priority' => 10,
        'parent' => 'digtek_main_panel',
        'fields' => array(
            array(
                'id' => 'heading_color',
                'type' => 'color',
                'title' => esc_html__('Theme Heading Color', 'digtek'),
                'default' => '#0F0D1D',
                'desc' => esc_html__('This is theme heading color, means it\'ll affect all of heading tag like, h1,h2,h3,h4,h5,h6', 'digtek')
            ),
            array(
                'id' => 'paragraph_color',
                'type' => 'color',
                'title' => esc_html__('Theme Paragraph Color', 'digtek'),
                'default' => '#585858',
                'desc' => esc_html__('This is theme paragraph color, means it\'ll affect all of body/paragraph tag like, p,li,a etc', 'digtek')
            ),
        )
    ));
    /*-------------------------------------
        ** Theme Header Options
    -------------------------------------*/

    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('02. Header One Options', 'digtek'),
        'parent' => 'digtek_main_panel',
        'priority' => 11,
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Nav Bar Options', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'header_01_nav_bar_bg_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Background Color', 'digtek'),
                'default' => ''
            ),
            array(
                'id' => 'header_01_nav_bar_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Text Color', 'digtek'),
                'default' => ''
            ),
            array(
                'id' => 'header_01_nav_bar_hover_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Hover Text Color', 'digtek'),
                'default' => ''
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Dropdown Options', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'header_01_dropdown_bg_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Background Color', 'digtek'),
                'default' => ''
            ),
            array(
                'id' => 'header_01_dropdown_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Text Color', 'digtek'),
                'default' => ''
            ),
            array(
                'id' => 'header_01_dropdown_border_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Border Color', 'digtek'),
                'default' => ''
            ),
            array(
                'id' => 'header_01_dropdown_hover_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Hover Text Color', 'digtek'),
                'default' => ''
            ),
            array(
                'id' => 'header_01_dropdown_hover_bg_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Hover Background Color', 'digtek'),
                'default' => ''
            ),
        )
    ));
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('03. Header Two Options', 'digtek'),
        'parent' => 'digtek_main_panel',
        'priority' => 11,
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Menu Option', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'header_02_nav_bar_bg_color',
                'type' => 'color',
                'title' => esc_html__('Menu Background Color', 'digtek'),
                'default' => ''
            ),
            array(
                'id' => 'header_02_nav_bar_color',
                'type' => 'color',
                'title' => esc_html__('Menu Color', 'digtek'),
                'default' => ''
            ),
            array(
                'id' => 'header_02_nav_bar_hover_color',
                'type' => 'color',
                'title' => esc_html__('Menu Hover Color', 'digtek'),
                'default' => ''
            ),
            array(
                'id' => 'header_02_top_bar_title_color',
                'type' => 'color',
                'title' => esc_html__('Menu Info Title Color', 'digtek'),
                'default' => ''
            ),
            array(
                'id' => 'header_02_top_bar_text_color',
                'type' => 'color',
                'title' => esc_html__('Menu Info Paragraph Color', 'digtek'),
                'default' => ''
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Menu Bar Button', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'header_02_top_bar_btn_bg_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Button Background Color', 'digtek'),
                'default' => ''
            ),
            array(
                'id' => 'header_02_top_bar_btn_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Button Color', 'digtek'),
                'default' => ''
            ),
            array(
                'id' => 'header_02_top_bar_btn_hover_bg_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Button Hover Background Color', 'digtek'),
                'default' => 'transparent'
            ),
            array(
                'id' => 'header_02_top_bar_hover_btn_color',
                'type' => 'color',
                'title' => esc_html__('Nav Bar Button Hover Color', 'digtek'),
                'default' => '#fff'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Sidebar Dropdown Options', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'header_02_dropdown_bg_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Background Color', 'digtek'),
                'default' => '#101A29'
            ),
            array(
                'id' => 'header_02_dropdown_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Text Color', 'digtek'),
                'default' => '#fff'
            ),
            array(
                'id' => 'header_02_dropdown_hover_bg_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Hover Background Color', 'digtek'),
                'default' => '#246BFD'
            ),
            array(
                'id' => 'header_02_dropdown_hover_color',
                'type' => 'color',
                'title' => esc_html__('Dropdown Hover Text Color', 'digtek'),
                'default' => '#fff'
            ),

        )
    ));

    /*-------------------------------------
          ** Theme Sidebar Options
      -------------------------------------*/
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('05. Sidebar', 'digtek'),
        'priority' => 13,
        'parent' => 'digtek_main_panel',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Sidebar Options', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'sidebar_widget_title_color',
                'type' => 'color',
                'title' => esc_html__('Sidebar Widget Title Color', 'digtek'),
                'default' => ''
            ),
            array(
                'id' => 'sidebar_widget_title_bottom_border_color',
                'type' => 'color',
                'title' => esc_html__('Sidebar Widget Border Color', 'digtek'),
                'default' => ''
            ),
            array(
                'id' => 'sidebar_widget_text_color',
                'type' => 'color',
                'title' => esc_html__('Sidebar Widget Text Color', 'digtek'),
                'default' => ''
            ),
        )
    ));
    /*-------------------------------------
        ** Theme Footer One Options
    -------------------------------------*/
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('06. Footer One', 'digtek'),
        'priority' => 14,
        'parent' => 'digtek_main_panel',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Options', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'footer_area_bg_color',
                'type' => 'color',
                'title' => esc_html__('Footer Background Color', 'digtek'),
            ),
            array(
                'id' => 'footer_area_bottom_border_color',
                'type' => 'color',
                'title' => esc_html__('Footer Bottom Border Color', 'digtek'),
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Widget Options', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'footer_widget_title_color',
                'type' => 'color',
                'title' => esc_html__('Footer Widget Title Color', 'digtek'),
            ),
            array(
                'id' => 'footer_widget_text_color',
                'type' => 'color',
                'title' => esc_html__('Footer Widget Text Color', 'digtek'),
            ),
            array(
                'id' => 'footer_widget_text_hover_color',
                'type' => 'color',
                'title' => esc_html__('Footer Widget Text Hover Color', 'digtek')
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Tag Cloud Options', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'footer_widget_tag_color',
                'type' => 'color',
                'title' => esc_html__('Footer Tag Text Color', 'digtek'),
                'default' => '#fff'
            ),
            array(
                'id' => 'footer_widget_tag_bg_color',
                'type' => 'color',
                'title' => esc_html__('Footer Tag Background Color', 'digtek'),
                'default' => '#101A29'
            ),
            array(
                'id' => 'footer_widget_tag_border_color',
                'type' => 'color',
                'title' => esc_html__('Footer Tag Border Color', 'digtek'),
                'default' => '#101A29'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Copyright Area Options', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'copyright_area_bg_color',
                'type' => 'color',
                'title' => esc_html__('Copyright Area Background Color', 'digtek'),
                'default' => ''
            ),
            array(
                'id' => 'copyright_area_text_color',
                'type' => 'color',
                'title' => esc_html__('Copyright Area Text Color', 'digtek'),
                'default' => '#fff'
            ),
        )
    ));

    /*-------------------------------------
     ** Theme Footer Two Options
    -------------------------------------*/
    CSF::createSection($prefix . '_customize_options', array(
        'title' => esc_html__('06. Footer Two', 'digtek'),
        'priority' => 14,
        'parent' => 'digtek_main_panel',
        'fields' => array(
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Options', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'footer_area_two_bg_color',
                'type' => 'color',
                'title' => esc_html__('Footer Background Color', 'digtek'),
                'default' => '#101A29',
            ),
            array(
                'id' => 'footer_area_two_bottom_border_color',
                'type' => 'color',
                'title' => esc_html__('Footer Bottom Border Color', 'digtek'),
                'default' => 'rgba(255, 255, 255, 0.2)',
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Widget Options', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'footer_two_widget_text_color',
                'type' => 'color',
                'title' => esc_html__('Footer Widget Text Color', 'digtek'),
                'default' => 'rgba(255,255,255,0.8)'
            ),
            array(
                'id' => 'footer_two_widget_text_hover_color',
                'type' => 'color',
                'title' => esc_html__('Footer Widget Text Hover Color', 'digtek'),
                'default' => '#246BFD'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Copyright Area Options', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'copyright_two_area_text_color',
                'type' => 'color',
                'title' => esc_html__('Copyright Area Text Color', 'digtek'),
                'default' => '#8A8A8A'
            ),
            array(
                'type' => 'subheading',
                'content' => '<h3>' . esc_html__('Footer Social Options', 'digtek') . '</h3>'
            ),
            array(
                'id' => 'copyright_two_area_footer_social_color',
                'type' => 'color',
                'title' => esc_html__('Footer Social Color', 'digtek'),
                'default' => '#8A8A8A'
            ),
            array(
                'id' => 'copyright_two_area_footer_social_bg_color',
                'type' => 'color',
                'title' => esc_html__('Footer Social Background Color', 'digtek'),
                'default' => 'transparent'
            ),
            array(
                'id' => 'copyright_two_area_footer_hover_social_color',
                'type' => 'color',
                'title' => esc_html__('Footer Social Hover Color', 'digtek'),
                'default' => '#fff'
            ),
            array(
                'id' => 'copyright_two_area_footer_social_hover_bg_color',
                'type' => 'color',
                'title' => esc_html__('Footer Social Background Hover Color', 'digtek'),
                'default' => '#246BFD'
            ),
        )
    ));


}//endif