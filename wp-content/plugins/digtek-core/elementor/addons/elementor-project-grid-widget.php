<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Project_Grid extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-project-grid-widget';
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
		return esc_html__( 'Project Grid', 'digtek-core' );
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
			'project_grid',
			[
				'label' => esc_html__( 'Project Grid', 'digtek-core' ),
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
				'label' => __( 'Project List Block', 'digtek-core' ),
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

						'block_title2' =>
						[
							'name' => 'block_title2',
							'label' => esc_html__('Title', 'digtek-core'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'digtek-core'),
						],
						
						'block_button_link2' =>
						[
						  'name' => 'block_button_link2',
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
						
					],
				'title_field' => '{{block_title}}',
			 ]
		);
		
		
		$this->end_controls_section();	


		// Tab Start - 3

		$this->start_controls_section(
			'content_section_2',
			[
				'label' => __( 'Project Block', 'digtek-core' ),
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

						'block_class' => 					   
						[
						'name' => 'block_class',
						'label' => __( 'Background Active', 'digtek-core' ),
						'type' => Controls_Manager::SELECT,
						'options' => [
							'active' => __( 'Active', 'digtek-core' ),
							'' => __( 'In-Active', 'digtek-core' ),
						],
						'default' => '',
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
            '{{WRAPPER}} .project-title a' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .project-title a' => 'text-align: {{VALUE}} !important',
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
            '{{WRAPPER}} .project-title a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .project-title a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector' => '{{WRAPPER}} .project-title a',
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
            '{{WRAPPER}} .project-title a' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .project-content p' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .project-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .project-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector' => '{{WRAPPER}} .project-content p',
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
            '{{WRAPPER}} .project-content p' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .project-content p' => 'background-color: {{VALUE}} !important',
        ],
    )
);

$this->end_controls_section();
// End of Section Sub Title Setting ==================



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
                '{{WRAPPER}} .project-content h3 a' => 'display: {{VALUE}} !important',
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
                '{{WRAPPER}} .project-content h3 a' => 'text-align: {{VALUE}}',
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
                '{{WRAPPER}} .project-content h3 a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
                '{{WRAPPER}} .project-content h3 a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            'selector'   => '{{WRAPPER}} .project-content h3 a',
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
                '{{WRAPPER}} .project-content h3 a' => 'color: {{VALUE}} !important',
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
                '{{WRAPPER}} .project-content h3 a:hover' => 'color: {{VALUE}} !important',
            ],
        ]
    );

    $this->end_controls_section();
    // End of Title Settings


			
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
			'{{WRAPPER}} .project-content .link-btn' => 'display: {{VALUE}} !important',
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
			'{{WRAPPER}} .project-content .link-btn' => 'text-align: {{VALUE}} !important',
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
			'{{WRAPPER}} .project-content .link-btn' => 'color: {{VALUE}} !important',

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
			'{{WRAPPER}} .project-content .link-btn' => 'background: {{VALUE}} !important',
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
			'{{WRAPPER}} .project-content .link-btn:hover' => 'background: {{VALUE}} !important',
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
			'{{WRAPPER}} .project-content .link-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
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
			'{{WRAPPER}} .project-content .link-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
		),
	)
);

$this->add_group_control(
	\Elementor\Group_Control_Typography::get_type(),
	array(
		'name'     => 'two_button_typography',
		'condition'    => array( 'show_two_button' => 'show' ),
		'label'    => __( 'Typography', 'digtek-core' ),
		'selector' => '{{WRAPPER}} .project-content .link-btn',
	)
);
$this->add_group_control(
	\Elementor\Group_Control_Border::get_type(),
	array(
		'name' => 'two_border',
		'condition'    => array( 'show_two_button' => 'show' ),
		'selector' => '{{WRAPPER}} .project-content .link-btn',
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
			'{{WRAPPER}} .project-content .link-btn' => 'border-radius: {{SIZE}}{{UNIT}};',
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



	<div class="case-study-wrapper">
		<div class="row">
			<div class="col-xxl-6 wow fadeInUp">
				<div class="case-study-box-items">
					<div class="thumb">
						<?php  if ( !empty(esc_url($settings['image']['id']) )) : ?>   
							<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
						<?php endif;?>
						<div class="post-box-items">
							<?php foreach($settings['repeat'] as $item):?>	
							<ul>
								<li>
									<a href="<?php echo esc_url($item['block_button_link']['url']);?>"><?php echo wp_kses($item['block_title'], $allowed_tags);?><i class="fa-regular fa-arrow-up-right"></i></a>
								</li>
								<li>
									<a href="<?php echo esc_url($item['block_button_link2']['url']);?>"><?php echo wp_kses($item['block_title2'], $allowed_tags);?> <i class="fa-regular fa-arrow-up-right"></i></a>
								</li>
							</ul>
							<?php endforeach; ?>
						</div>
						<h3 class="project-title">
							<a href="<?php echo esc_url($settings['button_link']['url']);?>">
							<?php  if ( !empty(esc_url($settings['image2']['id']) )) : ?>   
								<img src="<?php echo wp_get_attachment_url($settings['image2']['id']);?>" alt="<?php echo esc_attr($settings['alt_text2']);?>"/>
							<?php endif;?>
							<?php echo $settings['title'];?>
							</a>
						</h3>
						<span class="number"><?php echo $settings['subtitle'];?></span>
					</div>
				</div>
			</div>
			<div class="col-xxl-6">
				<div class="main-box">
					<?php foreach($settings['repeat_2'] as $item):?>	
					<div class="box <?php echo esc_attr($item['block_class']); ?> wow fadeInUp">
						<div class="title-items">
							<h3><a href="<?php echo esc_url($item['block_button_link']['url']);?>"><?php echo wp_kses($item['block_title'], $allowed_tags);?></a></h3>
							<span class="number"><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></span>
						</div>
						<span class="number-hover"><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></span>
						<div class="project-content">
							<h3><a href="<?php echo esc_url($item['block_button_link']['url']);?>"><?php echo wp_kses($item['block_title'], $allowed_tags);?></a></h3>
							<p>
								<?php echo wp_kses($item['block_text'], $allowed_tags);?>
							</p>
							<a href="<?php echo esc_url($item['block_button_link']['url']);?>" class="link-btn"><?php echo wp_kses($item['block_button'], $allowed_tags);?> <i class="fa-regular fa-arrow-right-long"></i></a>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>


             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Project_Grid());