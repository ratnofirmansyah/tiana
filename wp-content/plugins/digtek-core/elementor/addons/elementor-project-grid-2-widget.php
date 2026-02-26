<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Project_Grid_2 extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-project-grid-2-widget';
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
		return esc_html__( 'Project Grid 2', 'digtek-core' );
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
			'project_grid_2',
			[
				'label' => esc_html__( 'Project Grid 2', 'digtek-core' ),
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
					'style3'   => esc_html__( 'Style Three', 'digtek-core' ),
					'style4'   => esc_html__( 'Style Four', 'digtek-core' ),
				),
			]
		);

		$this->add_control('col_grid', [
            'label' => esc_html__('Column', 'digtek-core'),
            'type' => Controls_Manager::SELECT,
            'options' => array(
                'col-lg-2' => esc_html__('col-lg-2', 'digtek-core'),
                'col-lg-3' => esc_html__('col-lg-3', 'digtek-core'),
                'col-lg-4' => esc_html__('col-lg-4', 'digtek-core'),
                'col-lg-6' => esc_html__('col-lg-6', 'digtek-core'),
            ),
            'default' => 'col-lg-4',
            'description' => esc_html__('Select Case Study Column', 'digtek-core')
        ]);


		$this->end_controls_section();


		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Project Block', 'digtek-core' ),
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
						'block_title' =>
						[
							'name' => 'block_title',
							'label' => esc_html__('Title', 'digtek-core'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'digtek-core'),
						],

						'block_subtitle' =>
						[
							'name' => 'block_subtitle',
							'label' => esc_html__('Subtitle', 'digtek-core'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'digtek-core'),
						],

						'block_text' =>

						[
							'name' => 'block_text',
							'label' => esc_html__('Text', 'digtek-core'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'digtek-core')
						],

						'block_button' =>
						[
							'name' => 'block_button',
							'label'       => __( 'Button', 'digtek-core' ),
							'type'        => Controls_Manager::TEXT,
							'dynamic'     => [
								'active' => true,
							],
							'placeholder' => __( 'Enter your Button Title', 'digtek-core' ),
							'default' => esc_html__('Read More', 'digtek-core'),
						],
						
						'block_button_link' =>
						[
							'name' => 'block_button_link',
							'label' => __( 'Button Url', 'digtek-core' ),
							'type' => Controls_Manager::URL,
							'placeholder' => __( 'https://your-link.com', 'digtek-core' ),
							'show_external' => true,
							'default' => [
							'url' => '',
							'is_external' => true,
							'nofollow' => true,
							],
						],

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
            '{{WRAPPER}} .title h3' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .title h3' => 'text-align: {{VALUE}} !important',
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
            '{{WRAPPER}} .title h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .title h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector' => '{{WRAPPER}} .title h3',
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
            '{{WRAPPER}} .title h3' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .content p' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector' => '{{WRAPPER}} .content p',
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
            '{{WRAPPER}} .content p' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .content p' => 'background-color: {{VALUE}} !important',
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
				'{{WRAPPER}} .service-btn' => 'display: {{VALUE}} !important',
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
				'{{WRAPPER}} .service-btn' => 'text-align: {{VALUE}} !important',
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
				'{{WRAPPER}} .service-btn' => 'color: {{VALUE}} !important',

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
				'{{WRAPPER}} .service-btn' => 'background: {{VALUE}} !important',
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
				'{{WRAPPER}} .service-btn:hover' => 'background: {{VALUE}} !important',
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
				'{{WRAPPER}} .service-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
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
				'{{WRAPPER}} .service-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
			),
		)
	);

	$this->add_group_control(
		\Elementor\Group_Control_Typography::get_type(),
		array(
			'name'     => 'two_button_typography',
			'condition'    => array( 'show_two_button' => 'show' ),
			'label'    => __( 'Typography', 'digtek-core' ),
			'selector' => '{{WRAPPER}} .service-btn',
		)
	);
	$this->add_group_control(
		\Elementor\Group_Control_Border::get_type(),
		array(
			'name' => 'two_border',
			'condition'    => array( 'show_two_button' => 'show' ),
			'selector' => '{{WRAPPER}} .service-btn',
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
				'unit' => 'px',
				'size' => 30,
			],
			'selectors' => [
				'{{WRAPPER}} .service-btn' => 'border-radius: {{SIZE}}{{UNIT}};',
			],
		)
	);

	$this->end_controls_section();
	
//End of Button		



    // Subtitle Settings ================== 

    $this->start_controls_section(
        'subtitle_settings',
        [
            'label' => __( 'Sub Title Setting', 'digtek-core' ),
            'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    // Show Sub Title Control
    $this->add_control(
        'show_subtitle',
        [
            'label'     => esc_html__( 'Show Sub Title', 'digtek-core' ),
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
                '{{WRAPPER}} .content span' => 'display: {{VALUE}} !important',
            ],
        ]
    );

    // Subtitle Alignment Control
    $this->add_control(
        'subtitle_alignment',
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
            'default'   => 'left',
            'condition' => [ 'show_subtitle' => 'show' ],
            'toggle'    => true,
            'selectors' => [
                '{{WRAPPER}} .content span' => 'text-align: {{VALUE}} !important',
            ],
        ]
    );

    // Subtitle Padding Control
    $this->add_control(
        'subtitle_padding',
        [
            'label'       => __( 'Padding', 'digtek-core' ),
            'type'        => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units'  => [ 'px', '%', 'em' ],
            'condition'   => [ 'show_subtitle' => 'show' ],
            'selectors'   => [
                '{{WRAPPER}} .content span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
            ],
        ]
    );

    // Subtitle Margin Control
    $this->add_control(
        'subtitle_margin',
        [
            'label'       => __( 'Margin', 'digtek-core' ),
            'type'        => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units'  => [ 'px', '%', 'em' ],
            'condition'   => [ 'show_subtitle' => 'show' ],
            'selectors'   => [
                '{{WRAPPER}} .content span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
            ],
        ]
    );

    // Subtitle Typography Control
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name'       => 'subtitle_typography',
            'label'      => __( 'Typography', 'digtek-core' ),
            'selector'   => '{{WRAPPER}} .content span',
            'condition'  => [ 'show_subtitle' => 'show' ],
        ]
    );

    // Subtitle Color Control
    $this->add_control(
        'subtitle_color',
        [
            'label'      => __( 'Color', 'digtek-core' ),
            'type'       => \Elementor\Controls_Manager::COLOR,
            'separator'  => 'after',
            'condition'  => [ 'show_subtitle' => 'show' ],
            'selectors'  => [
                '{{WRAPPER}} .content span' => 'color: {{VALUE}} !important',
            ],
        ]
    );

    // Subtitle Background Color Control
    $this->add_control(
        'subtitle_bg_color',
        [
            'label'      => __( 'Background Color', 'digtek-core' ),
            'type'       => \Elementor\Controls_Manager::COLOR,
            'separator'  => 'after',
            'condition'  => [ 'show_subtitle' => 'show' ],
            'selectors'  => [
                '{{WRAPPER}} .content span' => 'background-color: {{VALUE}} !important',
            ],
        ]
    );

    $this->end_controls_section();

    // End of Subtitle Settings ==================


	
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

if($(".project-slider").length > 0) {
	const projectSlider = new Swiper(".project-slider", {
		spaceBetween: 30,
		speed: 2000,
		loop: true,
		autoplay: {
			delay: 1000,
			disableOnInteraction: false,
		},
		breakpoints: {
			991: {
				slidesPerView: 3,
			},
			767: {
				slidesPerView: 2,
			},
			575: {
				slidesPerView: 1,
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

<?php  if ( 'style1' === $settings['style'] ) : ?>

	<div class="row">
		<?php foreach($settings['repeat'] as $item):?>
		<div class="<?php echo esc_attr($settings['col_grid']); ?> col-md-6 wow fadeInUp" data-wow-delay=".3s">
			<div class="service-card-items">
				<h3 class="title">
					<a href="<?php echo esc_url($item['block_button_link']['url']);?>">
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</a>
				</h3>
				<div class="service-thumb">
				<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
					<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
				<?php endif;?>
				</div>
				<div class="content">
					<p>
						<?php echo wp_kses($item['block_subtitle'], $allowed_tags);?>
					</p>
					<a href="<?php echo esc_url($item['block_button_link']['url']);?>" class="service-btn"><?php echo wp_kses($item['block_button'], $allowed_tags);?> <i class="fa-solid fa-chevrons-right"></i></a>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>

<?php  elseif ( 'style2' === $settings['style'] ) : ?>

	<div class="case-studies-wrapper-2">
		<?php foreach($settings['repeat'] as $item):?>
		<div class="case-studies-items bor-bottom mt-0">
			<div class="content">
				<h3>
					<a href="<?php echo esc_url($item['block_button_link']['url']);?>">
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</a>
				</h3>
				<span><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></span>
				<p>
					<?php echo wp_kses($item['block_text'], $allowed_tags);?>
				</p>
			</div>
			<div class="main-button">
				<a href="<?php echo esc_url($item['block_button_link']['url']);?>"> <span class="theme-btn"><?php echo wp_kses($item['block_button'], $allowed_tags);?> </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
			</div>
			<div class="case-studies-hover d-none d-lg-block bg-cover" style="background-image: url('<?php echo wp_get_attachment_url($item['block_image']['id']);?>');"></div>
		</div>
		<?php endforeach; ?>
	</div>

	<?php  elseif ( 'style3' === $settings['style'] ) : ?>

		<div class="case-studies-section-3 fix section-padding pt-0">
			<div class="container-fluid">
				<div class="swiper project-slider">
					<div class="swiper-wrapper">
						<?php foreach($settings['repeat'] as $item):?>
						<div class="swiper-slide">
							<div class="case-studies-card-items">
								<div class="thumb">
								<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
									<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
								<?php endif;?>
								</div>
								<div class="content">
									<div class="title">
										<h3>
										<a href="<?php echo esc_url($item['block_button_link']['url']);?>">
											<?php echo wp_kses($item['block_title'], $allowed_tags);?>
										</a>
										</h3>
										<p><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></p>
									</div>
									<a href="<?php echo esc_url($item['block_button_link']['url']);?>" class="icon"><i class="fa-regular fa-arrow-up-right"></i></a>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>

		<?php  elseif ( 'style4' === $settings['style'] ) : ?>

			<div class="row g-4">
				<?php foreach($settings['repeat'] as $item):?>
				<div class="<?php echo esc_attr($settings['col_grid']); ?> col-md-6">
					<div class="case-studies-card-items mt-0">
						<div class="thumb">
						<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
							<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
						<?php endif;?>
						</div>
						<div class="content">
							<div class="title">
								<h3>
								<a href="<?php echo esc_url($item['block_button_link']['url']);?>">
									<?php echo wp_kses($item['block_title'], $allowed_tags);?>
								</a>
								</h3>
								<p><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></p>
							</div>
							<a href="<?php echo esc_url($item['block_button_link']['url']);?>" class="icon"><i class="fa-regular fa-arrow-up-right"></i></a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>

<?php endif ;?>	

             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Project_Grid_2());