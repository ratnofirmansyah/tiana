<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Brand_About extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-brand-about-widget';
	}

	/**
	 * Get widget title.
	 * Retrieve button widget title.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Brand About', 'digtek-core' );
	}

	/**
	 * Get widget icon.
	 * Retrieve button widget icon.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-flash';
	}

	/**
	 * Get widget categories.
	 * Retrieve the list of categories the button widget belongs to.
	 * Used to determine where to display the widget in the editor.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories()
    {
        return ['digtek_widgets'];
    }
	
	/**
	 * Register button widget controls.
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since  1.0.0
	 * @access protected
	 */
	protected function register_controls() {

		// Tab Start - 1

		$this->start_controls_section(
			'brand_slider_img',
			[
				'label' => esc_html__( 'All Images', 'digtek-core' ),
			]
		);		


		$this->add_control(
			'bg_image',
			[
				'label' => esc_html__('Background image', 'digtek-core'),
				'type' => Controls_Manager::MEDIA,
				'default' => ['url' => Utils::get_placeholder_image_src(),],
			]
		);

		$this->add_control(
			'image',
				[
				  'label' => __( 'Image', 'digtek-core' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);	
		
		$this->add_control(
			'alt_text',
			[
				'label'       => __( 'Alt text', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Your Text', 'digtek-core' ),
			]
		);

		$this->add_control(
			'image2',
				[
				  'label' => __( 'Image', 'digtek-core' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);	
		
		$this->add_control(
			'alt_text2',
			[
				'label'       => __( 'Alt text', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Your Text', 'digtek-core' ),
			]
		);

		$this->add_control(
			'image3',
				[
				  'label' => __( 'Image', 'digtek-core' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);	
		
		$this->add_control(
			'alt_text3',
			[
				'label'       => __( 'Alt text', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Your Text', 'digtek-core' ),
			]
		);

		$this->add_control(
			'image4',
				[
				  'label' => __( 'Image', 'digtek-core' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);	
		
		$this->add_control(
			'alt_text4',
			[
				'label'       => __( 'Alt text', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Your Text', 'digtek-core' ),
			]
		);

		$this->add_control(
			'image5',
				[
				  'label' => __( 'Image', 'digtek-core' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);	
		
		$this->add_control(
			'alt_text5',
			[
				'label'       => __( 'Alt text', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Your Text', 'digtek-core' ),
			]
		);

		$this->add_control(
			'image6',
				[
				  'label' => __( 'Image', 'digtek-core' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);	
		
		$this->add_control(
			'alt_text6',
			[
				'label'       => __( 'Alt text', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Your Text', 'digtek-core' ),
			]
		);


		$this->end_controls_section();

		// Tab Content

		$this->start_controls_section(
			'brand_slider',
			[
				'label' => esc_html__( 'About Content', 'digtek-core' ),
			]
		);		

		$this->add_control(
			'title',
			[
				'label'       => __( 'Title', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your title', 'digtek-core' ),
			]
		);

		$this->add_control(
			'subtitle',
			[
				'label'       => __( 'Sub Title', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your sub title', 'digtek-core' ),
			]
		);
	
		$this->add_control(
				'title2',
				[
					'label'       => __( 'Title', 'digtek-core' ),
					'type'        => Controls_Manager::TEXTAREA,
					'dynamic'     => [
						'active' => true,
					],
					'placeholder' => __( 'Enter your title', 'digtek-core' ),
				]
			);
	
		$this->add_control(
			'text',
			[
				'label'       => __( 'Description Text', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Your Text', 'digtek-core' ),
			]
		);

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
			'button_link',
			[
				'label' => __( 'Button Url', 'digtek-core' ),
				'type' => Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'digtek-core' ),
				'show_external' => true,
				'default' => [
				'url' => '',
				'is_external' => true,
				'nofollow' => true,
				],
			
			]
		);


		$this->end_controls_section();

		// Tab Start - 2

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Block', 'digtek-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
		  'repeat', 
			[
				'type' => Controls_Manager::REPEATER,
				'separator' => 'before',
				'default' => 
					[
						['block_title' => esc_html__('Hello World', 'digtek-core')],
					],
				'fields' => 
					[						

						'block_image' =>
						[
							'name' => 'block_image',
							'label' => __( 'Image', 'digtek-core' ),
							'type' => Controls_Manager::MEDIA,
							'default' => ['url' => Utils::get_placeholder_image_src(),],
						  ],	

						'block_alt_text' =>
						[
						'name' => 'block_alt_text',
						'label' => esc_html__('Image Text', 'digtek-core'),
						'type' => Controls_Manager::TEXTAREA,
						'default' => esc_html__('', 'digtek-core')
						],
						
					],
				'title_field' => '{{block_title}}',
			 ]
		);
		
		
		$this->end_controls_section();	

		// Tab Start - 3

		$this->start_controls_section(
			'content_section_2',
			[
				'label' => __( 'Block 2', 'digtek-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
		  'repeat_2', 
			[
				'type' => Controls_Manager::REPEATER,
				'separator' => 'before',
				'default' => 
					[
						['block_title' => esc_html__('Hello World', 'digtek-core')],
					],
				'fields' => 
					[	
						'block_title' =>
						[
							'name' => 'block_title',
							'label' => esc_html__('Title', 'digtek-core'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'digtek-core')
						],
						
						'block_subtitle' =>
						[
							'name' => 'block_subtitle',
							'label' => esc_html__('Subtitle', 'digtek-core'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'digtek-core')
						],
						
					],
				'title_field' => '{{block_title}}',
			 ]
		);
		
		
		$this->end_controls_section();	


		//Block==========================
		$this->start_controls_section(
			'block_settings',
			array(
				'label' => __( 'Brand Slider Setting', 'digtek-core' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			)
		);
		
		$this->add_control(
			'show_block',
			array(
				'label' => esc_html__( 'Show Block', 'digtek-core' ),
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
					'{{WRAPPER}} .about-section .brand-wrapper' => 'display: {{VALUE}} !important',
				),
			)
		);	

		$this->end_controls_section();
		//End of Block 

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
            '{{WRAPPER}} .section-title .sub-title span' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .section-title .sub-title span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .section-title .sub-title span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector' => '{{WRAPPER}} .section-title .sub-title span',
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
            '{{WRAPPER}} .section-title .sub-title span' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .section-title .sub-title' => 'background-color: {{VALUE}} !important',
        ],
    )
);

$this->end_controls_section();
// End of Section Sub Title Setting ==================


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
            '{{WRAPPER}} .section-title h2' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .section-title h2' => 'text-align: {{VALUE}} !important',
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
            '{{WRAPPER}} .section-title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .section-title h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector' => '{{WRAPPER}} .section-title h2',
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
            '{{WRAPPER}} .section-title h2' => 'color: {{VALUE}} !important',
        ],
    )
);

$this->end_controls_section();
// End of Section Title Setting ==================


//========== Text Settings ==========================
$this->start_controls_section(
    'text_settings',
    [
        'label' => __( 'Text Settings', 'digtek-core' ),
        'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
    ]
);

// Show/Hide Text Control
$this->add_control(
    'show_text',
    [
        'label'     => esc_html__( 'Show Text', 'digtek-core' ),
        'type'      => \Elementor\Controls_Manager::CHOOSE,
        'options'   => [
            'show' => [
                'title' => esc_html__( 'Show', 'digtek-core' ),
                'icon'  => 'eicon-check-circle',
            ],
            'none' => [
                'title' => esc_html__( 'Hide', 'digtek-core' ),
                'icon'  => 'eicon-close-circle',
            ],
        ],
        'default'   => 'show',
        'selectors' => [
            '{{WRAPPER}} .about-content p' => 'display: {{VALUE}} !important',
        ],
    ]
);

// Text Alignment Control
$this->add_control(
    'text_alignment',
    [
        'label'     => esc_html__( 'Alignment', 'digtek-core' ),
        'type'      => \Elementor\Controls_Manager::CHOOSE,
        'options'   => [
            'left'   => [
                'title' => esc_html__( 'Left', 'digtek-core' ),
                'icon'  => 'eicon-text-align-left',
            ],
            'center' => [
                'title' => esc_html__( 'Center', 'digtek-core' ),
                'icon'  => 'eicon-text-align-center',
            ],
            'right'  => [
                'title' => esc_html__( 'Right', 'digtek-core' ),
                'icon'  => 'eicon-text-align-right',
            ],
        ],
        'default'   => '',
        'condition' => ['show_text' => 'show'],
        'toggle'    => true,
        'selectors' => [
            '{{WRAPPER}} .about-content p' => 'text-align: {{VALUE}} !important',
        ],
    ]
);

// Text Margin Control
$this->add_control(
    'text_margin',
    [
        'label'       => __( 'Margin', 'digtek-core' ),
        'type'        => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units'  => ['px', '%', 'em'],
        'condition'   => ['show_text' => 'show'],
        'selectors'   => [
            '{{WRAPPER}} .about-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
        ],
    ]
);

// Text Padding Control
$this->add_control(
    'text_padding',
    [
        'label'       => __( 'Padding', 'digtek-core' ),
        'type'        => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units'  => ['px', '%', 'em'],
        'condition'   => ['show_text' => 'show'],
        'selectors'   => [
            '{{WRAPPER}} .about-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
        ],
    ]
);

// Text Typography Control
$this->add_group_control(
    \Elementor\Group_Control_Typography::get_type(),
    [
        'name'       => 'text_typography',
        'label'      => __( 'Typography', 'digtek-core' ),
        'condition'  => ['show_text' => 'show'],
        'selector'   => '{{WRAPPER}} .about-content p',
    ]
);

// Text Color Control
$this->add_control(
    'text_color',
    [
        'label'      => __( 'Color', 'digtek-core' ),
        'type'       => \Elementor\Controls_Manager::COLOR,
        'condition'  => ['show_text' => 'show'],
        'separator'  => 'after',
        'selectors'  => [
            '{{WRAPPER}} .about-content p' => 'color: {{VALUE}} !important',
        ],
    ]
);

// Text Hover Color Control
$this->add_control(
    'text_hover_color',
    [
        'label'      => __( 'Hover Color', 'digtek-core' ),
        'type'       => \Elementor\Controls_Manager::COLOR,
        'condition'  => ['show_text' => 'show'],
        'separator'  => 'after',
        'selectors'  => [
            '{{WRAPPER}} .about-content p:hover' => 'color: {{VALUE}} !important',
        ],
    ]
);

$this->end_controls_section();
// End of Text Settings


    //========== Title Settings ==========================
    $this->start_controls_section(
        'title_settings',
        [
            'label' => __( 'Title Settings', 'digtek-core' ),
            'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    // Show/Hide Title Control
    $this->add_control(
        'show_title',
        [
            'label'     => esc_html__( 'Show Title', 'digtek-core' ),
            'type'      => \Elementor\Controls_Manager::CHOOSE,
            'options'   => [
                'show' => [
                    'title' => esc_html__( 'Show', 'digtek-core' ),
                    'icon'  => 'eicon-check-circle',
                ],
                'none' => [
                    'title' => esc_html__( 'Hide', 'digtek-core' ),
                    'icon'  => 'eicon-close-circle',
                ],
            ],
            'default'   => 'show',
            'selectors' => [
                '{{WRAPPER}} .content h6' => 'display: {{VALUE}} !important',
            ],
        ]
    );

    // Title Alignment Control
    $this->add_control(
        'title_alignment',
        [
            'label'     => esc_html__( 'Alignment', 'digtek-core' ),
            'type'      => \Elementor\Controls_Manager::CHOOSE,
            'options'   => [
                'left'   => [
                    'title' => esc_html__( 'Left', 'digtek-core' ),
                    'icon'  => 'eicon-text-align-left',
                ],
                'center' => [
                    'title' => esc_html__( 'Center', 'digtek-core' ),
                    'icon'  => 'eicon-text-align-center',
                ],
                'right'  => [
                    'title' => esc_html__( 'Right', 'digtek-core' ),
                    'icon'  => 'eicon-text-align-right',
                ],
            ],
            'default'   => '',
            'condition' => ['show_title' => 'show'],
            'toggle'    => true,
            'selectors' => [
                '{{WRAPPER}} .content h6' => 'text-align: {{VALUE}}',
            ],
        ]
    );

    // Title Margin Control
    $this->add_control(
        'title_margin',
        [
            'label'       => __( 'Margin', 'digtek-core' ),
            'type'        => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units'  => ['px', '%', 'em'],
            'condition'   => ['show_title' => 'show'],
            'selectors'   => [
                '{{WRAPPER}} .content h6' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
            ],
        ]
    );

    // Title Padding Control
    $this->add_control(
        'title_padding',
        [
            'label'       => __( 'Padding', 'digtek-core' ),
            'type'        => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units'  => ['px', '%', 'em'],
            'condition'   => ['show_title' => 'show'],
            'selectors'   => [
                '{{WRAPPER}} .content h6' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
            ],
        ]
    );

    // Title Typography Control
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name'       => 'title_typography',
            'label'      => __( 'Typography', 'digtek-core' ),
            'condition'  => ['show_title' => 'show'],
            'selector'   => '{{WRAPPER}} .content h6',
        ]
    );

    // Title Color Control
    $this->add_control(
        'title_color',
        [
            'label'      => __( 'Color', 'digtek-core' ),
            'type'       => \Elementor\Controls_Manager::COLOR,
            'condition'  => ['show_title' => 'show'],
            'selectors'  => [
                '{{WRAPPER}} .content h6' => 'color: {{VALUE}} !important',
            ],
        ]
    );

    // Title Hover Color Control
    $this->add_control(
        'title_hover_color',
        [
            'label'      => __( 'Hover Color', 'digtek-core' ),
            'type'       => \Elementor\Controls_Manager::COLOR,
            'condition'  => ['show_title' => 'show'],
            'selectors'  => [
                '{{WRAPPER}} .content h6:hover' => 'color: {{VALUE}} !important',
            ],
        ]
    );

    $this->end_controls_section();
    // End of Title Settings



//========== Button with Background ===================================
$this->start_controls_section(
	'button_control',
	[
		'label' => __( 'Button Settings', 'digtek-core' ),
		'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	]
);

// Show/Hide Button Control
$this->add_control(
	'show_button',
	[
		'label'   => esc_html__( 'Show Button', 'digtek-core' ),
		'type'    => \Elementor\Controls_Manager::CHOOSE,
		'options' => [
			'show' => [
				'title' => esc_html__( 'Show', 'digtek-core' ),
				'icon'  => 'eicon-check-circle',
			],
			'none' => [
				'title' => esc_html__( 'Hide', 'digtek-core' ),
				'icon'  => 'eicon-close-circle',
			],
		],
		'default'   => 'show',
		'selectors' => [
			'{{WRAPPER}} .main-button' => 'display: {{VALUE}} !important',
		],
	]
);

// Button Alignment Control
$this->add_control(
	'button_alignment',
	[
		'label'     => esc_html__( 'Alignment', 'digtek-core' ),
		'type'      => \Elementor\Controls_Manager::CHOOSE,
		'condition' => [ 'show_button' => 'show' ],
		'options'   => [
			'left' => [
				'title' => esc_html__( 'Left', 'digtek-core' ),
				'icon'  => 'eicon-text-align-left',
			],
			'center' => [
				'title' => esc_html__( 'Center', 'digtek-core' ),
				'icon'  => 'eicon-text-align-center',
			],
			'right' => [
				'title' => esc_html__( 'Right', 'digtek-core' ),
				'icon'  => 'eicon-text-align-right',
			],
		],
		'default'   => '',
		'toggle'    => true,
		'selectors' => [
			'{{WRAPPER}} .main-button .theme-btn' => 'text-align: {{VALUE}} !important',
			'{{WRAPPER}} .main-button .arrow-btn' => 'text-align: {{VALUE}} !important',
		],
	]
);

// Button Color Control
$this->add_control(
	'button_color',
	[
		'label'     => __( 'Button Color', 'digtek-core' ),
		'type'      => \Elementor\Controls_Manager::COLOR,
		'condition' => [ 'show_button' => 'show' ],
		'selectors' => [
			'{{WRAPPER}} .main-button .theme-btn' => 'color: {{VALUE}} !important',
			'{{WRAPPER}} .main-button .arrow-btn' => 'color: {{VALUE}} !important',
		],
	]
);

// Button Background Color Control
$this->add_control(
	'button_bg_color',
	[
		'label'     => __( 'Button Background Color', 'digtek-core' ),
		'type'      => \Elementor\Controls_Manager::COLOR,
		'condition' => [ 'show_button' => 'show' ],
		'selectors' => [
			'{{WRAPPER}} .main-button .theme-btn' => 'background: {{VALUE}} !important',
			'{{WRAPPER}} .main-button .arrow-btn' => 'background: {{VALUE}} !important',
		],
	]
);

// Button Hover Color Control
$this->add_control(
	'button_hover_color',
	[
		'label'     => __( 'Button Hover Color', 'digtek-core' ),
		'type'      => \Elementor\Controls_Manager::COLOR,
		'condition' => [ 'show_button' => 'show' ],
		'selectors' => [
			'{{WRAPPER}} .main-button .theme-btn:hover' => 'color: {{VALUE}} !important',
			'{{WRAPPER}} .main-button .arrow-btn:hover' => 'color: {{VALUE}} !important',
		],
	]
);

// Button Background Hover Color Control
$this->add_control(
	'button_bg_hover_color',
	[
		'label'     => __( 'Button Background Hover Color', 'digtek-core' ),
		'type'      => \Elementor\Controls_Manager::COLOR,
		'condition' => [ 'show_button' => 'show' ],
		'selectors' => [
			'{{WRAPPER}} .main-button .theme-btn:hover' => 'background: {{VALUE}} !important',
			'{{WRAPPER}} .main-button .arrow-btn:hover' => 'background: {{VALUE}} !important',
		],
	]
);

// Button Padding Control
$this->add_control(
	'button_padding',
	[
		'label'     => __( 'Padding', 'digtek-core' ),
		'type'      => \Elementor\Controls_Manager::DIMENSIONS,
		'condition' => [ 'show_button' => 'show' ],
		'size_units' => ['px', '%', 'em'],
		'selectors' => [
			'{{WRAPPER}} .main-button .theme-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
			'{{WRAPPER}} .main-button .arrow-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
		],
	]
);

// Button Margin Control
$this->add_control(
	'button_margin',
	[
		'label'     => __( 'Margin', 'digtek-core' ),
		'type'      => \Elementor\Controls_Manager::DIMENSIONS,
		'condition' => [ 'show_button' => 'show' ],
		'size_units' => ['px', '%', 'em'],
		'selectors' => [
			'{{WRAPPER}} .main-button .theme-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
			'{{WRAPPER}} .main-button .arrow-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
		],
	]
);

// Button Typography Control
$this->add_group_control(
	\Elementor\Group_Control_Typography::get_type(),
	[
		'name'      => 'button_typography',
		'condition' => [ 'show_button' => 'show' ],
		'label'     => __( 'Typography', 'digtek-core' ),
		'selector'  => '{{WRAPPER}} .main-button .theme-btn',
		'selector'  => '{{WRAPPER}} .main-button .arrow-btn',
	]
);

// Button Border Control
$this->add_group_control(
	\Elementor\Group_Control_Border::get_type(),
	[
		'name'      => 'border',
		'condition' => [ 'show_button' => 'show' ],
		'selector'  => '{{WRAPPER}} .main-button .theme-btn',
		'selector'  => '{{WRAPPER}} .main-button .arrow-btn',
	]
);

// Button Border Radius Control
$this->add_control(
	'border_radius',
	[
		'label'     => __( 'Border Radius', 'digtek-core' ),
		'type'      => \Elementor\Controls_Manager::DIMENSIONS,
		'condition' => [ 'show_button' => 'show' ],
		'size_units' => ['px', '%', 'em'],
		'selectors' => [
			'{{WRAPPER}} .main-button .theme-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
			'{{WRAPPER}} .main-button .arrow-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
		],
	]
);

$this->end_controls_section();
// End of Button


	
		}

	/**
	 * Render button widget output on the frontend.
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since  1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		$allowed_tags = wp_kses_allowed_html('post');
		?>

<?php
	  echo '
	 <script>
 jQuery(document).ready(function($) {

// js code start

if($(".brand-slider").length > 0) {
	const brandSlider = new Swiper(".brand-slider", {
		spaceBetween: 30,
		speed: 2000,
		loop: true,
		autoplay: {
			delay: 1000,
			disableOnInteraction: false,
		},

		breakpoints: {
			1199: {
				slidesPerView: 4,
			},
			991: {
				slidesPerView: 3,
			},
			767: {
				slidesPerView: 2,
			},
			575: {
				slidesPerView: 2,
			},
			0: {
				slidesPerView: 1,
			},
		},
	});
}

// js code end 

  });
</script>';


?>

	<section class="about-section fix section-padding" style="background-image: url('<?php echo wp_get_attachment_url($settings['bg_image']['id']);?>');">
		<div class="left-shape float-bob-y">
		<?php  if ( !empty(esc_url($settings['image']['id']) )) : ?>   
			<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
		<?php endif;?>
		</div>
		<div class="container">
			<div class="brand-wrapper">
				<h4 class="brand-title"><?php echo $settings['title'];?></h4>
				<div class="swiper brand-slider">
					<div class="swiper-wrapper">
						<?php foreach($settings['repeat'] as $item):?>	
						<div class="swiper-slide">
							<div class="brand-img center">
							<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
								<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
							<?php endif;?>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="about-wrapper">
				<div class="row g-4">
					<div class="col-lg-6">
						<div class="about-image">
							<?php  if ( !empty(esc_url($settings['image2']['id']) )) : ?>   
								<img class="wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s" src="<?php echo wp_get_attachment_url($settings['image2']['id']);?>" alt="<?php echo esc_attr($settings['alt_text2']);?>"/>
							<?php endif;?>
							<div class="bg-shape">
							<?php  if ( !empty(esc_url($settings['image3']['id']) )) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image3']['id']);?>" alt="<?php echo esc_attr($settings['alt_text3']);?>"/>
							<?php endif;?>
							</div>
							<div class="grap-shape float-bob-x">
							<?php  if ( !empty(esc_url($settings['image4']['id']) )) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image4']['id']);?>" alt="<?php echo esc_attr($settings['alt_text4']);?>"/>
							<?php endif;?>
							</div>
							<div class="box-shape float-bob-y">
							<?php  if ( !empty(esc_url($settings['image5']['id']) )) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image5']['id']);?>" alt="<?php echo esc_attr($settings['alt_text5']);?>"/>
							<?php endif;?>
							</div>
							<div class="emoji-shape">
							<?php  if ( !empty(esc_url($settings['image6']['id']) )) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image6']['id']);?>" alt="<?php echo esc_attr($settings['alt_text6']);?>"/>
							<?php endif;?>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-content">
							<div class="section-title">
								<?php if($settings['subtitle']): ?>
								<div class="sub-title bg-color-2 wow fadeInUp">
									<span><?php echo $settings['subtitle'];?></span>
								</div>
								<?php endif; ?>
								<h2 class="wow fadeInUp" data-wow-delay=".3s">
									<?php echo $settings['title2'];?>
								</h2>
							</div>
							<p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
								<?php echo $settings['text'];?>
							</p>
							<div class="circle-progress-bar-wrapper">
								<?php foreach($settings['repeat_2'] as $item):?>	
								<div class="single-circle-bar wow fadeInUp" data-wow-delay=".3s">
									<div class="circle-bar" data-percent="<?php echo wp_kses($item['block_title'], $allowed_tags);?>" data-duration="2000">
									</div>
									<div class="content">
										<h6>
											<?php echo wp_kses($item['block_subtitle'], $allowed_tags);?>
										</h6>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
							<?php if($settings['button']): ?>
							<div class="main-button wow fadeInUp" data-wow-delay=".3s">
								<a href="<?php echo esc_url($settings['button_link']['url']);?>"> <span class="theme-btn"> <?php echo $settings['button'];?> </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Brand_About());