<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Banner extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-banner-widget';
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
		return esc_html__( 'Banner', 'digtek-core' );
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

		$this->add_control(
			'image7',
				[
				  'label' => __( 'Image', 'digtek-core' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);	
		
		$this->add_control(
			'alt_text7',
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
			'image8',
				[
				  'label' => __( 'Image', 'digtek-core' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);	
		
		$this->add_control(
			'alt_text8',
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
			'image9',
				[
				  'label' => __( 'Image', 'digtek-core' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);	
		
		$this->add_control(
			'alt_text9',
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
			'image10',
				[
				  'label' => __( 'Image', 'digtek-core' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);	
		
		$this->add_control(
			'alt_text10',
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
			'image11',
				[
				  'label' => __( 'Image', 'digtek-core' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);	
		
		$this->add_control(
			'alt_text11',
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
			'video_link',
			[
			  'label' => __( 'Video Url', 'digtek-core' ),
			  'type' => Controls_Manager::URL,
			  'placeholder' => __( 'https://your-link.com', 'digtek-core' ),
			  'show_external' => true,
			  'default' => [
				'url' => 'https://www.youtube.com/watch?v=Cn4G2lZ_g2I',
				'is_external' => true,
				'nofollow' => true,
			  ],
			
		   ]
		);	

		
		$this->add_control(
			'text2',
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
			'text3',
			[
				'label'       => __( 'Rating Text', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Your Text', 'digtek-core' ),
			]
		);

		$this->add_control(
			'subtitle2',
			[
				'label'       => __( 'Sub Title', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your sub title', 'digtek-core' ),
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
            '{{WRAPPER}} .hero-content span' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .hero-content span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .hero-content span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector' => '{{WRAPPER}} .hero-content span',
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
            '{{WRAPPER}} .hero-content span' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .hero-content span' => 'background-color: {{VALUE}} !important',
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
                '{{WRAPPER}} .video-right p' => 'display: {{VALUE}} !important',
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
                '{{WRAPPER}} .video-right p' => 'text-align: {{VALUE}}',
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
                '{{WRAPPER}} .video-right p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
                '{{WRAPPER}} .video-right p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            'selector'   => '{{WRAPPER}} .video-right p',
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
                '{{WRAPPER}} .video-right p' => 'color: {{VALUE}} !important',
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
                '{{WRAPPER}} .video-right p:hover' => 'color: {{VALUE}} !important',
            ],
        ]
    );

    $this->end_controls_section();
    // End of Title Settings


	//========== icon Settings===================================
		
	$this->start_controls_section(
		'icon_control',
		array(
			'label' => __( 'Video Icon Settings', 'digtek-core' ),
			'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
		)
	);
	
	$this->add_control(
		'show_icon',
		array(
			'label' => esc_html__( 'Show Icon', 'digtek-core' ),
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
				'{{WRAPPER}} .video-btn' => 'display: {{VALUE}} !important',
			),
		)
	);


	$this->end_controls_section();		
	
	//End of icon

	


	
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


    <section class="hero-section fix hero-1 bg-cover" style="background-image: url('<?php echo wp_get_attachment_url($settings['bg_image']['id']);?>');">
		<div class="mike-shape">
		<?php  if ( !empty(esc_url($settings['image']['id']) )) : ?>   
			<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
		<?php endif;?>
		</div>
		<div class="arrow-shape">
		<?php  if ( !empty(esc_url($settings['image2']['id']) )) : ?>   
			<img src="<?php echo wp_get_attachment_url($settings['image2']['id']);?>" alt="<?php echo esc_attr($settings['alt_text2']);?>"/>
		<?php endif;?>
		</div>
		<div class="arrow-shape-2">
		<?php  if ( !empty(esc_url($settings['image3']['id']) )) : ?>   
			<img src="<?php echo wp_get_attachment_url($settings['image3']['id']);?>" alt="<?php echo esc_attr($settings['alt_text3']);?>"/>
		<?php endif;?>
		</div>
		<div class="energy-shape float-bob-y">
		<?php  if ( !empty(esc_url($settings['image4']['id']) )) : ?>   
			<img src="<?php echo wp_get_attachment_url($settings['image4']['id']);?>" alt="<?php echo esc_attr($settings['alt_text4']);?>"/>
		<?php endif;?>
		</div>
		<div class="rocket-shape">
		<?php  if ( !empty(esc_url($settings['image5']['id']) )) : ?>   
			<img class="float-bob-y" src="<?php echo wp_get_attachment_url($settings['image5']['id']);?>" alt="<?php echo esc_attr($settings['alt_text5']);?>"/>
		<?php endif;?>
		</div>
		<div class="container-fluid">
			<div class="hero-title wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
			<?php  if ( !empty(esc_url($settings['image6']['id']) )) : ?>   
				<img src="<?php echo wp_get_attachment_url($settings['image6']['id']);?>" alt="<?php echo esc_attr($settings['alt_text6']);?>"/>
			<?php endif;?>    
			</div>
			<div class="row g-4 align-items-center">
				<div class="col-xl-5 col-lg-6">
					<div class="hero-content">
						<span class="wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.2s"><?php echo $settings['subtitle'];?></span>
						<h1 class="wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.2s"><?php echo $settings['title'];?></h1>
						<p class="wow fadeInUp" data-wow-delay=".3s">
							<?php echo $settings['text'];?>
						</p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6">
					<div class="hero-image">
						<?php  if ( !empty(esc_url($settings['image7']['id']) )) : ?>   
							<img class=" wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s" src="<?php echo wp_get_attachment_url($settings['image7']['id']);?>" alt="<?php echo esc_attr($settings['alt_text7']);?>"/>
						<?php endif;?>
						<div class="bg-shape">
							<?php  if ( !empty(esc_url($settings['image8']['id']) )) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image8']['id']);?>" alt="<?php echo esc_attr($settings['alt_text8']);?>"/>
							<?php endif;?>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6">
					<div class="video-right">
						<a href="<?php echo esc_url($settings['video_link']['url']);?>" class="video-btn video-popup wow fadeInUp" data-wow-delay=".3s">
							<i class="fa-duotone fa-play"></i>
							<?php  if ( !empty(esc_url($settings['image9']['id']) )) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image9']['id']);?>" alt="<?php echo esc_attr($settings['alt_text9']);?>"/>
							<?php endif;?>
						</a>
						<p class="wow fadeInUp" data-wow-delay=".5s">
							<?php echo $settings['text2'];?>
						</p>
						<div class="client-items wow fadeInUp" data-wow-delay=".7s">
							<div class="client-logo">
								<?php  if ( !empty(esc_url($settings['image10']['id']) )) : ?>   
									<img src="<?php echo wp_get_attachment_url($settings['image10']['id']);?>" alt="<?php echo esc_attr($settings['alt_text10']);?>"/>
								<?php endif;?>
							</div>
							<div class="client-img">
								<?php  if ( !empty(esc_url($settings['image11']['id']) )) : ?>   
									<img src="<?php echo wp_get_attachment_url($settings['image11']['id']);?>" alt="<?php echo esc_attr($settings['alt_text11']);?>"/>
								<?php endif;?>
								<div class="star-icon">
									<div class="star">
										<?php echo $settings['text3'];?>
									</div>
									<span><?php echo $settings['subtitle2'];?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Banner());