<?php
/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */

namespace Elementor;

class Blog_Post extends Widget_Base
{

    /**
     * Get widget name.
     *
     * Retrieve Elementor widget name.
     *
     * @return string Widget name.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_name()
    {
        return 'digtek-blog-post-widget';
    }

    /**
     * Get widget title.
     *
     * Retrieve Elementor widget title.
     *
     * @return string Widget title.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_title()
    {
        return esc_html__('Blog Post', 'digtek-core');
    }

    /**
     * Get widget icon.
     *
     * Retrieve Elementor widget icon.
     *
     * @return string Widget icon.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_icon()
    {
        return 'eicon-post';
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the Elementor widget belongs to.
     *
     * @return array Widget categories.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_categories()
    {
        return ['digtek_widgets'];
    }

    /**
     * Register Elementor widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function register_controls()
    {

        $this->start_controls_section(
            'settings_section',
            [
                'label' => esc_html__('General Settings', 'digtek-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'style',
            [
                'label'   => esc_html__( 'Select Style', 'digtek-core' ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'style1',
                'options' => array(
                    'style1'   => esc_html__( 'Style One', 'digtek-core' ),
                    'style2'   => esc_html__( 'Style Two', 'digtek-core' ),
                ),
            ]
        );
        
        $this->add_control('column_grid', [
            'label' => esc_html__('Blog Grid', 'digtek-core'),
            'type' => Controls_Manager::SELECT,
            'options' => array(
                'col-lg-2' => esc_html__('col-lg-2', 'digtek-core'),
                'col-lg-3' => esc_html__('col-lg-3', 'digtek-core'),
                'col-lg-4' => esc_html__('col-lg-4', 'digtek-core'),
                'col-lg-6' => esc_html__('col-lg-6', 'digtek-core'),
                'col-lg-12' => esc_html__('col-lg-12', 'digtek-core'),
            ),
            'default' => 'col-lg-4',
            'description' => esc_html__('Select Blog Grid', 'digtek-core')
        ]);   
        
        $this->add_control(
			'button',
			[
				'label'       => __( 'Button', 'digtek-core' ),
				'type'        => Controls_Manager::TEXT,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'Enter your button text', 'digtek-core' ),
				'default' => esc_html__('Read More', 'digtek-core'),
			]
		);	

        $this->add_control(
            'word_limit',
            [
                'label' => esc_html__('Word Limit', 'digtek-core'),
                'type' => Controls_Manager::NUMBER,
                'default' => 20,
                'description' => esc_html__('Set the number of words to display from the post content.', 'digtek-core'),
            ]
        );

        $this->add_control(
            'more_text',
            [
                'label' => esc_html__('More Text', 'digtek-core'),
                'type' => Controls_Manager::TEXT,
                'default' => '...',
                'description' => esc_html__('Set the text to append after the trimmed words, e.g., "Read More". Leave blank for no text.', 'digtek-core'),
            ]
        );
   
        $this->add_control('total', [
            'label' => esc_html__('Total Posts', 'digtek-core'),
            'type' => Controls_Manager::TEXT,
            'default' => '-1',
            'description' => esc_html__('enter how many post you want in masonry , enter -1 for unlimited post.')
        ]);
        $this->add_control('offset', [
            'label' => esc_html__('Offset Posts', 'digtek-core'),
            'type' => Controls_Manager::TEXT,
            'default' => '0',
            'description' => esc_html__('enter how many post you want in masonry , enter -1 for unlimited post.')
        ]);
        $this->add_control('category', [
            'label' => esc_html__('Category', 'digtek-core'),
            'type' => Controls_Manager::SELECT2,
            'multiple' => true,
            'options' => digtek_core()->get_terms_names('category', 'id'),
            'description' => esc_html__('Select category as you want, leave it blank for all categories', 'digtek-core'),
        ]);        

        $this->add_control('order', [
            'label' => esc_html__('Order', 'digtek-core'),
            'type' => Controls_Manager::SELECT,
            'options' => array(
                'ASC' => esc_html__('Ascending', 'digtek-core'),
                'DESC' => esc_html__('Descending', 'digtek-core'),
            ),
            'default' => 'DESC',
            'description' => esc_html__('select order', 'digtek-core')
        ]);
        $this->add_control('orderby', [
            'label' => esc_html__('OrderBy', 'digtek-core'),
            'type' => Controls_Manager::SELECT,
            'options' => array(
                'ID' => esc_html__('ID', 'digtek-core'),
                'title' => esc_html__('Title', 'digtek-core'),
                'date' => esc_html__('Date', 'digtek-core'),
                'rand' => esc_html__('Random', 'digtek-core'),
                'comment_count' => esc_html__('Most Comments', 'digtek-core'),
            ),
            'default' => 'ID',
            'description' => esc_html__('select order', 'digtek-core')
        ]);      
        
           $this->add_control(
            'image_thumb_display',
            [
                'label' => esc_html__('Image Display', 'digtek-core'),
                'type' => Controls_Manager::SWITCHER,
                'description' => esc_html__('show/hide description', 'digtek-core'),
            ]
        );
        
        $this->add_control(
            'thumb_date',
            [
                'label' => esc_html__('Thumb Date Show/Hide', 'digtek-core'),
                'type' => Controls_Manager::SWITCHER,
                'description' => esc_html__('show/hide description', 'digtek-core'),
            ]
        );

        $this->add_control(
            'tags_display',
            [
                'label' => esc_html__('Tags Display', 'modina-core'),
                'type' => Controls_Manager::SWITCHER,
                'description' => esc_html__('Show  Or Hide Tags.', 'modina-core'),
            ]
        );
      
        $this->add_control(
            'pagination',
            [
                'label' => esc_html__('Pagination', 'digtek-core'),
                'type' => Controls_Manager::SWITCHER,
                'description' => esc_html__('you can set yes to show pagination.', 'digtek-core'),
                'default' => 'no',
            ]
        );
        
        $this->add_control(
            'pagination_alignment',
            [
                'label' => esc_html__('Pagination Alignment', 'digtek-core'),
                'type' => Controls_Manager::SELECT,
                'options' => array(
                    'start' => esc_html__('Left Align', 'digtek-core'),
                    'center' => esc_html__('Center Align', 'digtek-core'),
                    'end' => esc_html__('Right Align', 'digtek-core'),
                ),
                'description' => esc_html__('you can set pagination alignment.', 'digtek-core'),
                'default' => 'start',
                'condition' => array('pagination' => 'yes'),
            ]
        );
        $this->end_controls_section();


        // Section Title Settings ==================
$this->start_controls_section(
    'section_title_settings',
    array(
        'label' => __( 'Section Title Setting', 'digtek-core' ),
        'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
    )
);

// Show Section Title Control
$this->add_control(
    'show_section_title',
    array(
        'label' => esc_html__( 'Show Section Title', 'digtek-core' ),
        'type' => \Elementor\Controls_Manager::CHOOSE,
        'options' => [
            'show' => [
                'show' => esc_html__( 'Show', 'digtek-core' ),
                'icon' => 'eicon-check-circle',
            ],
            'none' => [
                'none' => esc_html__( 'Hide', 'digtek-core' ),
                'icon' => 'eicon-close-circle',
            ],
        ],
        'default' => 'show',
        'selectors' => [
            '{{WRAPPER}} h5 a' => 'display: {{VALUE}} !important',
        ],        
    )
);

// Section Title Alignment Control
$this->add_control(
    'section_title_alignment',
    array(
        'label' => esc_html__( 'Alignment', 'digtek-core' ),
        'type' => \Elementor\Controls_Manager::CHOOSE,
        'options' => [
            'left' => [
                'title' => esc_html__( 'Left', 'digtek-core' ),
                'icon' => 'eicon-text-align-left',
            ],
            'center' => [
                'title' => esc_html__( 'Center', 'digtek-core' ),
                'icon' => 'eicon-text-align-center',
            ],
            'right' => [
                'title' => esc_html__( 'Right', 'digtek-core' ),
                'icon' => 'eicon-text-align-right',
            ],
        ],
        'default' => '',
        'condition' => [ 'show_section_title' => 'show' ],
        'toggle' => true,
        'selectors' => [
            '{{WRAPPER}} h5 a' => 'text-align: {{VALUE}} !important',
        ],
    )
);

// Section Title Margin Control
$this->add_control(
    'section_title_margin',
    array(
        'label' => __( 'Margin', 'digtek-core' ),
        'condition' => [ 'show_section_title' => 'show' ],
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'selectors' => [
            '{{WRAPPER}} h5 a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
        ],
    )
);

// Section Title Padding Control
$this->add_control(
    'section_title_padding',
    array(
        'label' => __( 'Padding', 'digtek-core' ),
        'condition' => [ 'show_section_title' => 'show' ],
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'selectors' => [
            '{{WRAPPER}} h5 a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
        ],
    )
);

// Typography Control
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    array(
        'name' => 'section_title_typography',
        'condition' => [ 'show_section_title' => 'show' ],
        'label' => __( 'Typography', 'digtek-core' ),
        'selector' => '{{WRAPPER}} h5 a',
    )
);

// Section Title Color Control
$this->add_control(
    'section_title_color',
    array(
        'label' => __( 'Color', 'digtek-core' ),
        'condition' => [ 'show_section_title' => 'show' ],
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} h5 a' => 'color: {{VALUE}} !important',
        ],
    )
);

$this->end_controls_section();
// End of Section Title Setting ==================



// Section Sub Title Settings ==================
$this->start_controls_section(
    'section_subtitle_settings',
    array(
        'label' => __( 'Section Sub Title Setting', 'digtek-core' ),
        'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
    )
);

// Show Section Sub Title Control
$this->add_control(
    'show_section_subtitle',
    array(
        'label' => esc_html__( 'Show Section Sub Title', 'digtek-core' ),
        'type' => \Elementor\Controls_Manager::CHOOSE,
        'options' => [
            'show' => [
                'show' => esc_html__( 'Show', 'digtek-core' ),
                'icon' => 'eicon-check-circle',
            ],
            'none' => [
                'none' => esc_html__( 'Hide', 'digtek-core' ),
                'icon' => 'eicon-close-circle',
            ],
        ],
        'default' => 'show',
        'selectors' => [
            '{{WRAPPER}} .post-cat li' => 'display: {{VALUE}} !important',
        ]
    )
);

// Section Sub Title Alignment Control
$this->add_control(
    'section_subtitle_alignment',
    array(
        'label' => esc_html__( 'Alignment', 'digtek-core' ),
        'type' => \Elementor\Controls_Manager::CHOOSE,
        'options' => [
            'left' => [
                'title' => esc_html__( 'Left', 'digtek-core' ),
                'icon' => 'eicon-text-align-left',
            ],
            'center' => [
                'title' => esc_html__( 'Center', 'digtek-core' ),
                'icon' => 'eicon-text-align-center',
            ],
            'right' => [
                'title' => esc_html__( 'Right', 'digtek-core' ),
                'icon' => 'eicon-text-align-right',
            ],
        ],
        'default' => '',
        'condition' => [ 'show_section_subtitle' => 'show' ],
        'toggle' => true,
        'selectors' => [
            '{{WRAPPER}} .title-box' => 'text-align: {{VALUE}} !important',
        ],
    )
);

// Section Sub Title Margin Control
$this->add_control(
    'section_subtitle_margin',
    array(
        'label' => __( 'Margin', 'digtek-core' ),
        'condition' => [ 'show_section_subtitle' => 'show' ],
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'selectors' => [
            '{{WRAPPER}} .post-cat li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
        ],
    )
);

// Section Sub Title Padding Control
$this->add_control(
    'section_subtitle_padding',
    array(
        'label' => __( 'Padding', 'digtek-core' ),
        'condition' => [ 'show_section_subtitle' => 'show' ],
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'selectors' => [
            '{{WRAPPER}} .post-cat li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
        ],
    )
);

// Typography Control
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    array(
        'name' => 'section_subtitle_typography',
        'condition' => [ 'show_section_subtitle' => 'show' ],
        'label' => __( 'Typography', 'digtek-core' ),
        'selector' => '{{WRAPPER}} .post-cat li',
    )
);

// Section Sub Title Color Control
$this->add_control(
    'section_subtitle_color',
    array(
        'label' => __( 'Color', 'digtek-core' ),
        'condition' => [ 'show_section_subtitle' => 'show' ],
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .post-cat li' => 'color: {{VALUE}} !important',
        ],
    )
);

// Section Sub Title Background Color Control
$this->add_control(
    'section_subtitle_bg_color',
    array(
        'label' => __( 'Background Color', 'digtek-core' ),
        'condition' => [ 'show_section_subtitle' => 'show' ],
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .post-cat li' => 'background-color: {{VALUE}} !important',
        ],
    )
);

$this->end_controls_section();
// End of Section Sub Title Setting ==================



		
	//========== Button Two with Background ===================================


    $this->start_controls_section(
        'two_button_control',
        array(
            'label' => __( 'Read Button Settings', 'digtek-core' ),
            'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
        )
    );
    
$this->add_control(
        'show_two_button',
        array(
            'label' => esc_html__( 'Show Button', 'digtek-core' ),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                'show' => [
                    'show' => esc_html__( 'Show', 'digtek-core' ),	
                    'icon' => 'eicon-check-circle',
                ],
                'none' => [
                    'none' => esc_html__( 'Hide', 'digtek-core' ),
                    'icon' => 'eicon-close-circle',
                ],
            ],
            'default' => 'show',
            'selectors' => array(
                '{{WRAPPER}} .link-btn' => 'display: {{VALUE}} !important',
            ),
        )
    );		
$this->add_control(
        'two_button_alignment',
        array(
            'label' => esc_html__( 'Alignment', 'digtek-core' ),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'condition'    => array( 'show_two_button' => 'show' ),
            'options' => [
                'left' => [
                    'title' => esc_html__( 'Left', 'digtek-core' ),
                    'icon' => 'eicon-text-align-left',
                ],
                'center' => [
                    'title' => esc_html__( 'Center', 'digtek-core' ),
                    'icon' => 'eicon-text-align-center',
                ],
                'right' => [
                    'title' => esc_html__( 'Right', 'digtek-core' ),
                    'icon' => 'eicon-text-align-right',
                ],
            ],
            'default' => 'center',
            'toggle' => true,
            'selectors' => array(
                '{{WRAPPER}} .link-btn' => 'text-align: {{VALUE}} !important',
            ),
        )
    );	
$this->add_control(
        'two_button_color',
        array(
            'label'     => __( 'Button Color', 'digtek-core' ),
            'condition'    => array( 'show_two_button' => 'show' ),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => array(
                '{{WRAPPER}} .link-btn' => 'color: {{VALUE}} !important',

            ),
        )
    );
$this->add_control(
        'two_button_bg_color',
        array(
            'label'     => __( 'Background Color', 'digtek-core' ),
            'condition'    => array( 'show_two_button' => 'show' ),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => array(
                '{{WRAPPER}} .link-btn' => 'background: {{VALUE}} !important',
            ),
        )
    );	
$this->add_control(
        'two_button_hover_color',
        array(
            'label'     => __( 'Hover Color', 'digtek-core' ),
            'condition'    => array( 'show_two_button' => 'show' ),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => array(
                '{{WRAPPER}} .link-btn:hover' => 'background: {{VALUE}} !important',
            ),
        )
    );				
$this->add_control(
        'two_button_padding',
        array(
            'label'     => __( 'Padding', 'digtek-core' ),
            'type'      => \Elementor\Controls_Manager::DIMENSIONS,
            'condition'    => array( 'show_two_button' => 'show' ),
            'size_units' =>  ['px', '%', 'em' ],
        
            'selectors' => array(
                '{{WRAPPER}} .link-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
            ),
        )
    );

$this->add_control(
        'two_button_margin',
        array(
            'label'     => __( 'Margin', 'digtek-core' ),
            'type'      => \Elementor\Controls_Manager::DIMENSIONS,
            'condition'    => array( 'show_two_button' => 'show' ),
            'size_units' =>  ['px', '%', 'em' ],
            'selectors' => array(
                '{{WRAPPER}} .link-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
            ),
        )
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        array(
            'name'     => 'two_button_typography',
            'condition'    => array( 'show_two_button' => 'show' ),
            'label'    => __( 'Typography', 'digtek-core' ),
            'selector' => '{{WRAPPER}} .link-btn',
        )
    );
    $this->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        array(
            'name' => 'two_border',
            'condition'    => array( 'show_two_button' => 'show' ),
            'selector' => '{{WRAPPER}} .link-btn',
        )
    );
    $this->add_control(
        'two_border_radius',
        array(
            'label' => esc_html__( 'Border Radius', 'digtek-core' ),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'condition'    => array( 'show_two_button' => 'show' ),
            'size_units' => [ 'px', '%' ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 5,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                ],
            ],
            'default' => [
                'unit' => '%',
                'size' => 50,
            ],
            'selectors' => [
                '{{WRAPPER}} .link-btn' => 'border-radius: {{SIZE}}{{UNIT}};',
            ],
        )
    );

    $this->end_controls_section();
    
//End of Button						
  

    }

    /**
     * Render Elementor widget output on the frontend.
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $rand_numb = rand(333, 999999999);
        //query settings
        $total_posts = $settings['total'];
        $category = $settings['category'];
        $order = $settings['order'];
        $orderby = $settings['orderby'];
        $offset = $settings['offset'];
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        //other settings
        $pagination = $settings['pagination'] ? false : true;
        $pagination_alignment = $settings['pagination_alignment'];

        //setup query       

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $total_posts,
            'order' => $order,
            'orderby' => $orderby,
            'paged' => $paged, // Use paged instead of offset
            'post_status' => 'publish',
            'ignore_sticky_posts' => 1,
        );
        
        if (!empty($category)) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'term_id',
                    'terms' => $category
                )
            );
        }
        
        $post_data = new \WP_Query($args);        

        ?>
        
        <?php  if ( 'style1' === $settings['style'] ) : ?>

        <div class="row">
            <?php while ($post_data->have_posts()):$post_data->the_post(); 
                $img_id = get_post_thumbnail_id(get_the_ID()) ? get_post_thumbnail_id(get_the_ID()) : false;
                $img_url_val = $img_id ? wp_get_attachment_image_src($img_id, 'digtek_grid_blog_12', false) : '';
                $img_url = is_array($img_url_val) && !empty($img_url_val) ? $img_url_val[0] : '';
                $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);

                $comments_count = get_comments_number(get_the_ID());
                $comment_text = ($comments_count > 1) ? 'Comments (' . $comments_count . ')' : 'Comment (' . $comments_count . ')';

                $author_id = get_the_author_meta('ID');
                $author_avatar = get_avatar($author_id, 35);
            ?> 
            <div class="<?php echo esc_attr($settings['column_grid']); ?> col-md-6">
                <div class="news-box-items">
                    <?php if(!empty($settings['image_thumb_display'])) : ?>
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <img src="<?php echo esc_url($img_url); ?>" alt="img">
                    </div>
                    <?php endif; ?>
                    <div class="news-content">
                        <ul class="post-cat">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M13.334 1.33398H5.33398C4.60065 1.33398 4.00065 1.93398 4.00065 2.66732V4.00065H2.66732C1.93398 4.00065 1.33398 4.60065 1.33398 5.33398V14.6673L4.00065 12.0007H10.6673C11.4007 12.0007 12.0007 11.4007 12.0007 10.6673V9.33398L14.6673 12.0007V2.66732C14.6673 1.93398 14.0673 1.33398 13.334 1.33398ZM5.33398 8.66732C4.96632 8.66732 4.66732 8.36832 4.66732 8.00065V2.66732C4.66732 2.29965 4.96632 2.00065 5.33398 2.00065H13.334C13.7017 2.00065 14.0007 2.29965 14.0007 2.66732V10.3913L12.2767 8.66732H5.33398ZM11.334 10.6673C11.334 11.035 11.035 11.334 10.6673 11.334H3.72465L2.00065 13.058V5.33398C2.00065 4.96632 2.29965 4.66732 2.66732 4.66732H4.00065V8.00065C4.00065 8.73398 4.60065 9.33398 5.33398 9.33398H11.334V10.6673Z" fill="#6A47ED"/>
                                </svg>
                                <?php echo esc_html($comment_text); ?>
                            </li>
                            <?php if(!empty($settings['thumb_date'])) : ?>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M5.33398 3.83301C5.06065 3.83301 4.83398 3.60634 4.83398 3.33301V1.33301C4.83398 1.05967 5.06065 0.833008 5.33398 0.833008C5.60732 0.833008 5.83398 1.05967 5.83398 1.33301V3.33301C5.83398 3.60634 5.60732 3.83301 5.33398 3.83301ZM10.6673 3.83301C10.394 3.83301 10.1673 3.60634 10.1673 3.33301V1.33301C10.1673 1.05967 10.394 0.833008 10.6673 0.833008C10.9407 0.833008 11.1673 1.05967 11.1673 1.33301V3.33301C11.1673 3.60634 10.9407 3.83301 10.6673 3.83301ZM5.66732 9.66634C5.58065 9.66634 5.49398 9.64634 5.41398 9.61301C5.32732 9.57967 5.26065 9.53301 5.19398 9.47301C5.07398 9.34634 5.00065 9.17968 5.00065 8.99967C5.00065 8.91301 5.02065 8.82634 5.05398 8.74634C5.08732 8.66634 5.13398 8.59301 5.19398 8.52634C5.26065 8.46634 5.32732 8.41967 5.41398 8.38634C5.65398 8.28634 5.95398 8.33967 6.14065 8.52634C6.26065 8.65301 6.33398 8.82634 6.33398 8.99967C6.33398 9.03967 6.32732 9.08634 6.32065 9.13301C6.31398 9.17301 6.30065 9.21301 6.28065 9.25301C6.26732 9.29301 6.24732 9.33301 6.22065 9.37301C6.20065 9.40634 6.16732 9.43967 6.14065 9.47301C6.01398 9.59301 5.84065 9.66634 5.66732 9.66634ZM8.00065 9.66634C7.91398 9.66634 7.82732 9.64634 7.74732 9.61301C7.66065 9.57967 7.59398 9.53301 7.52732 9.47301C7.40732 9.34634 7.33398 9.17968 7.33398 8.99967C7.33398 8.91301 7.35398 8.82634 7.38732 8.74634C7.42065 8.66634 7.46732 8.59301 7.52732 8.52634C7.59398 8.46634 7.66065 8.41967 7.74732 8.38634C7.98732 8.27967 8.28732 8.33967 8.47398 8.52634C8.59398 8.65301 8.66732 8.82634 8.66732 8.99967C8.66732 9.03967 8.66065 9.08634 8.65398 9.13301C8.64732 9.17301 8.63398 9.21301 8.61398 9.25301C8.60065 9.29301 8.58065 9.33301 8.55398 9.37301C8.53398 9.40634 8.50065 9.43967 8.47398 9.47301C8.34732 9.59301 8.17398 9.66634 8.00065 9.66634ZM10.334 9.66634C10.2473 9.66634 10.1607 9.64634 10.0807 9.61301C9.99398 9.57967 9.92732 9.53301 9.86065 9.47301L9.78065 9.37301C9.7554 9.33586 9.73522 9.2955 9.72065 9.25301C9.70139 9.21523 9.68791 9.17478 9.68065 9.13301C9.67398 9.08634 9.66732 9.03967 9.66732 8.99967C9.66732 8.82634 9.74065 8.65301 9.86065 8.52634C9.92732 8.46634 9.99398 8.41967 10.0807 8.38634C10.3273 8.27967 10.6207 8.33967 10.8073 8.52634C10.9273 8.65301 11.0007 8.82634 11.0007 8.99967C11.0007 9.03967 10.994 9.08634 10.9873 9.13301C10.9806 9.17301 10.9673 9.21301 10.9473 9.25301C10.934 9.29301 10.914 9.33301 10.8873 9.37301C10.8673 9.40634 10.834 9.43967 10.8073 9.47301C10.6806 9.59301 10.5073 9.66634 10.334 9.66634ZM5.66732 11.9997C5.58065 11.9997 5.49398 11.9797 5.41398 11.9463C5.33398 11.913 5.26065 11.8663 5.19398 11.8063C5.07398 11.6797 5.00065 11.5063 5.00065 11.333C5.00065 11.2463 5.02065 11.1597 5.05398 11.0797C5.08732 10.993 5.13398 10.9197 5.19398 10.8597C5.44065 10.613 5.89398 10.613 6.14065 10.8597C6.26065 10.9863 6.33398 11.1597 6.33398 11.333C6.33398 11.5063 6.26065 11.6797 6.14065 11.8063C6.01398 11.9263 5.84065 11.9997 5.66732 11.9997ZM8.00065 11.9997C7.82732 11.9997 7.65398 11.9263 7.52732 11.8063C7.40732 11.6797 7.33398 11.5063 7.33398 11.333C7.33398 11.2463 7.35398 11.1597 7.38732 11.0797C7.42065 10.993 7.46732 10.9197 7.52732 10.8597C7.77398 10.613 8.22732 10.613 8.47398 10.8597C8.53398 10.9197 8.58065 10.993 8.61398 11.0797C8.64732 11.1597 8.66732 11.2463 8.66732 11.333C8.66732 11.5063 8.59398 11.6797 8.47398 11.8063C8.34732 11.9263 8.17398 11.9997 8.00065 11.9997ZM10.334 11.9997C10.1607 11.9997 9.98732 11.9263 9.86065 11.8063C9.79896 11.7437 9.75125 11.6687 9.72065 11.5863C9.68732 11.5063 9.66732 11.4197 9.66732 11.333C9.66732 11.2463 9.68732 11.1597 9.72065 11.0797C9.75398 10.993 9.80065 10.9197 9.86065 10.8597C10.014 10.7063 10.2473 10.633 10.4607 10.6797C10.5073 10.6863 10.5473 10.6997 10.5873 10.7197C10.6273 10.733 10.6673 10.753 10.7073 10.7797C10.7407 10.7997 10.774 10.833 10.8073 10.8597C10.9273 10.9863 11.0007 11.1597 11.0007 11.333C11.0007 11.5063 10.9273 11.6797 10.8073 11.8063C10.6806 11.9263 10.5073 11.9997 10.334 11.9997ZM13.6673 6.55967H2.33398C2.06065 6.55967 1.83398 6.33301 1.83398 6.05967C1.83398 5.78634 2.06065 5.55967 2.33398 5.55967H13.6673C13.9406 5.55967 14.1673 5.78634 14.1673 6.05967C14.1673 6.33301 13.9406 6.55967 13.6673 6.55967Z" fill="#6A47ED"/>
                                    <path d="M10.6676 15.1663H5.33431C2.90098 15.1663 1.50098 13.7663 1.50098 11.333V5.66634C1.50098 3.23301 2.90098 1.83301 5.33431 1.83301H10.6676C13.101 1.83301 14.501 3.23301 14.501 5.66634V11.333C14.501 13.7663 13.101 15.1663 10.6676 15.1663ZM5.33431 2.83301C3.42764 2.83301 2.50098 3.75967 2.50098 5.66634V11.333C2.50098 13.2397 3.42764 14.1663 5.33431 14.1663H10.6676C12.5743 14.1663 13.501 13.2397 13.501 11.333V5.66634C13.501 3.75967 12.5743 2.83301 10.6676 2.83301H5.33431Z" fill="#6A47ED"/>
                                </svg>
                                <?php echo get_the_date('F j, Y');?>  
                            </li>
                            <?php endif; ?>
                        </ul>
                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <div class="news-btn">
                            <a href="<?php the_permalink(); ?>" class="link-btn"><?php echo $settings['button'];?> <i class="fa-regular fa-arrow-right-long"></i></a>
                            <?php echo $author_avatar; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_query();
            ?>
             <?php if (!$pagination) { ?>
                <div class="col-lg-12">
                    <div class="blog-pagination text-<?php echo esc_attr($pagination_alignment) ?> margin-top-20">
                        
                            <?php digtek()->post_pagination($post_data); ?>

                    </div>
                </div>
            <?php } ?>
        </div>

        <?php  elseif ( 'style2' === $settings['style'] ) : ?>

            <div class="container-fluid">
                <div class="row">
                    <?php while ($post_data->have_posts()):$post_data->the_post(); 
                        $img_id = get_post_thumbnail_id(get_the_ID()) ? get_post_thumbnail_id(get_the_ID()) : false;
                        $img_url_val = $img_id ? wp_get_attachment_image_src($img_id, 'digtek_grid_blog_12', false) : '';
                        $img_url = is_array($img_url_val) && !empty($img_url_val) ? $img_url_val[0] : '';
                        $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);

                        $comments_count = get_comments_number(get_the_ID());
                        $comment_text = ($comments_count > 1) ? 'Comments (' . $comments_count . ')' : 'Comment (' . $comments_count . ')';

                        $author_id = get_the_author_meta('ID');
                        $author_avatar = get_avatar($author_id, 35);
                    ?> 
                    <div class="<?php echo esc_attr($settings['column_grid']); ?> col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="news-card-items">
                            <?php if(!empty($settings['image_thumb_display'])) : ?>
                            <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <img src="<?php echo esc_url($img_url); ?>" alt="img">
                            </div>
                            <?php endif; ?>
                            <div class="news-content">
                                <ul class="post-cat">
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        By <?php the_author(); ?>
                                    </li>                                    
                                    <?php if(!empty($settings['tags_display'])) : ?>
                                    <li>
                                        <i class="fa-regular fa-tag"></i>
                                        <?php
                                            $post_tags = get_the_tags();
                                            if ($post_tags) {
                                                $first_tag = reset($post_tags);
                                                echo '<a href="' . get_tag_link($first_tag->term_id) . '">' . $first_tag->name . '</a>';
                                            } else {
                                                echo "No tags found";
                                            }
                                        ?> 
                                    </li>
                                    <?php endif; ?>
                                </ul>
                                <h5>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h5>
                                <a href="<?php the_permalink(); ?>" class="link-btn"><?php echo $settings['button'];?> <i class="fa-regular fa-arrow-right-long"></i></a>
                                <?php if(!empty($settings['thumb_date'])) : ?>
                                <div class="post-date">
                                    <i class="fa-light fa-calendar-days"></i>
                                    <?php echo get_the_date('M j, Y');?>  
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                    <?php if (!$pagination) { ?>
                        <div class="col-lg-12">
                            <div class="blog-pagination text-<?php echo esc_attr($pagination_alignment) ?> margin-top-20">
                                
                                    <?php digtek()->post_pagination($post_data); ?>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        <?php endif ;?>	

        <?php
    }
}

Plugin::instance()->widgets_manager->register_widget_type(new Blog_Post());