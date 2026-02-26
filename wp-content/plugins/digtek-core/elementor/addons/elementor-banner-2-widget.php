<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Banner_2 extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-banner-2-widget';
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
		return esc_html__( 'Banner 2', 'digtek-core' );
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
			'banner_images',
			[
				'label' => esc_html__( 'Banner Images', 'digtek-core' ),
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


		$this->end_controls_section();


		// Tab Start - 2

		$this->start_controls_section(
			'banner_content',
			[
				'label' => esc_html__( 'Banner Content', 'digtek-core' ),
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


		$this->add_control(
			'button2',
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
			'button_link2',
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
            '{{WRAPPER}} .hero-content h6' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .hero-content h6' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .hero-content h6' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector' => '{{WRAPPER}} .hero-content h6',
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
            '{{WRAPPER}} .hero-content h6' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .hero-content h6' => 'background-color: {{VALUE}} !important',
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
            '{{WRAPPER}} .hero-content h1' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .hero-content h1' => 'text-align: {{VALUE}} !important',
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
            '{{WRAPPER}} .hero-content h1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .hero-content h1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector' => '{{WRAPPER}} .hero-content h1',
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
            '{{WRAPPER}} .hero-content h1' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .hero-content p' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .hero-content p' => 'text-align: {{VALUE}} !important',
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
            '{{WRAPPER}} .hero-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .hero-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector'   => '{{WRAPPER}} .hero-content p',
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
            '{{WRAPPER}} .hero-content p' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .hero-content p:hover' => 'color: {{VALUE}} !important',
        ],
    ]
);

$this->end_controls_section();
// End of Text Settings


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
				'size' => 0,
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



	<section class="hero-section hero-3" style="background-image: url('<?php echo wp_get_attachment_url($settings['bg_image']['id']);?>');">
		<div class="line-shape">
		<?php  if ( !empty(esc_url($settings['image']['id']) )) : ?>   
			<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
		<?php endif;?>
		</div>
		<div class="container-fluid">
			<div class="row g-4 justify-content-between align-items-center">
				<div class="col-lg-6">
					<div class="hero-content">
						<h6 class="wow fadeInUp"><?php echo $settings['subtitle'];?></h6>
						<h1 class="wow fadeInUp" data-wow-delay=".3s">
							<?php echo $settings['title'];?>
						</h1>
						<p class="wow fadeInUp" data-wow-delay=".5s">
							<?php echo $settings['text'];?>
						</p>
						<div class="hero-button">
							<?php if($settings['button']): ?>
							<div class="main-button wow fadeInUp" data-wow-delay=".3s">
								<a href="<?php echo esc_url($settings['button_link']['url']);?>"> <span class="theme-btn"><?php echo $settings['button'];?> </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
							</div>
							<?php endif; ?>
							<?php if($settings['button2']): ?>
							<a href="<?php echo esc_url($settings['button_link2']['url']);?>" class="link-btn wow fadeInUp" data-wow-delay=".5s"><?php echo $settings['button2'];?></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="hero-image wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
					<?php  if ( !empty(esc_url($settings['image2']['id']) )) : ?>   
						<img src="<?php echo wp_get_attachment_url($settings['image2']['id']);?>" alt="<?php echo esc_attr($settings['alt_text2']);?>"/>
					<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</section>

             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Banner_2());