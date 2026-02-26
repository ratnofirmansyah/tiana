<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Service_Grid extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-service-grid-widget';
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
		return esc_html__( 'Service Grid', 'digtek-core' );
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
			'service-grid',
			[
				'label' => esc_html__( 'Service Grid', 'digtek-core' ),
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
					'style5'   => esc_html__( 'Style Five', 'digtek-core' ),
				),
			]
		);

		$this->add_control('column_grid', [
            'label' => esc_html__('Service Grid', 'digtek-core'),
            'type' => Controls_Manager::SELECT,
            'options' => array(
                'col-lg-2' => esc_html__('col-lg-2', 'digtek-core'),
                'col-lg-3' => esc_html__('col-lg-3', 'digtek-core'),
                'col-lg-4' => esc_html__('col-lg-4', 'digtek-core'),
                'col-lg-6' => esc_html__('col-lg-6', 'digtek-core'),
            ),
            'default' => 'col-lg-4',
            'description' => esc_html__('Select Column Grid', 'digtek-core')
        ]);


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
						
					],
				'title_field' => '{{block_title}}',
			 ]
	);
		
		
	$this->end_controls_section();	


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
					'{{WRAPPER}} .content h4 a' => 'display: {{VALUE}} !important',
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
					'{{WRAPPER}} .content h4 a' => 'text-align: {{VALUE}}',
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
					'{{WRAPPER}} .content h4 a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
					'{{WRAPPER}} .content h4 a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
				'selector'   => '{{WRAPPER}} .content h4 a',
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
					'{{WRAPPER}} .content h4 a' => 'color: {{VALUE}} !important',
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
					'{{WRAPPER}} .content h4 a:hover' => 'color: {{VALUE}} !important',
				],
			]
		);
	
		$this->end_controls_section();
		// End of Title Settings
	

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
                '{{WRAPPER}} .content p' => 'display: {{VALUE}} !important',
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
                '{{WRAPPER}} .content p' => 'text-align: {{VALUE}} !important',
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
                '{{WRAPPER}} .content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
                '{{WRAPPER}} .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
            ],
        ]
    );

    // Subtitle Typography Control
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name'       => 'subtitle_typography',
            'label'      => __( 'Typography', 'digtek-core' ),
            'selector'   => '{{WRAPPER}} .content p',
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
                '{{WRAPPER}} .content p' => 'color: {{VALUE}} !important',
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
                '{{WRAPPER}} .content p' => 'background-color: {{VALUE}} !important',
            ],
        ]
    );

    $this->end_controls_section();

    // End of Subtitle Settings ==================


	// Section Title Settings ==================
$this->start_controls_section(
    'section_title_settings',
    array(
        'label' => __( 'Read More Button Setting', 'digtek-core' ),
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
            '{{WRAPPER}} .link-btn' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .link-btn' => 'text-align: {{VALUE}} !important',
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
            '{{WRAPPER}} .link-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .link-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector' => '{{WRAPPER}} .link-btn',
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
            '{{WRAPPER}} .link-btn' => 'color: {{VALUE}} !important',
        ],
    )
);

$this->end_controls_section();
// End of Section Title Setting ==================



	
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



<?php  if ( 'style1' === $settings['style'] ) : ?>	

	<div class="row">
		<?php foreach($settings['repeat'] as $item):?>
		<div class="<?php echo esc_attr($settings['column_grid']); ?> col-md-6 wow fadeInUp" data-wow-delay=".3s">
			<div class="service-box-items">
				<div class="icon">
				<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
					<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
				<?php endif;?>
				</div>
				<div class="content"> 
					<h4><a href="<?php echo esc_url($item['block_button_link']['url']);?>"><?php echo wp_kses($item['block_title'], $allowed_tags);?></a></h4>
					<p><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></p>
					<a href="<?php echo esc_url($item['block_button_link']['url']);?>" class="link-btn"><?php echo wp_kses($item['block_button'], $allowed_tags);?> <i class="fa-regular fa-arrow-right-long"></i></a>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>

<?php  elseif ( 'style2' === $settings['style'] ) : ?>	



<?php endif ;?>	

             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Service_Grid());