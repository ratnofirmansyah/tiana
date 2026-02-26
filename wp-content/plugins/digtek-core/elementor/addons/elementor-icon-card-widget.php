<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Icon_Card extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-icon-card-widget';
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
		return esc_html__( 'Icon Card', 'digtek-core' );
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
			'icon_card',
			[
				'label' => esc_html__( 'Icon Card', 'digtek-core' ),
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

						'block_icons' =>
						[
							'name' => 'block_icons',
							'label' => esc_html__('Enter The icons', 'digtek-core'),
							'type' => Controls_Manager::ICONS,							
						],

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
							'label' => esc_html__('Sub Title', 'digtek-core'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'digtek-core'),
						],
						
					],
				'title_field' => '{{block_title}}',
			 ]
		);
		
		
		$this->end_controls_section();	
		
		
		//========== icon Settings===================================
		
		$this->start_controls_section(
			'icon_control',
			array(
				'label' => __( 'Icon Settings', 'digtek-core' ),
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
					'{{WRAPPER}} .icon-items-area .icon-items .icon' => 'display: {{VALUE}} !important',
				),
			)
		);
		
		$this->add_control(
			'icon_alignment',
			array(
				'label' => esc_html__( 'Alignment', 'digtek-core' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'condition'    => array( 'show_icon' => 'show' ),
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
				'toggle' => true,
				'selectors' => array(
					'{{WRAPPER}} .icon-items-area .icon-items .icon' => 'text-align: {{VALUE}} !important',
				),
			)
		);	
		
		$this->add_control(
			'icon_color',
			array(
				'label'     => __( ' Color', 'digtek-core' ),
				'condition'    => array( 'show_icon' => 'show' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .icon-items-area .icon-items .icon' => 'color: {{VALUE}} !important',

				),
			)
		);
		
		$this->add_control(
			'icon_bgcolor',
			array(
				'label'     => __( 'Background Color', 'digtek-core' ),
				'condition'    => array( 'show_icon' => 'show' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .icon-items-area .icon-items .icon' => 'background: {{VALUE}} !important',

				),
			)
		);
		
		
		$this->add_control(
			'icon_hover_color',
			array(
				'label'     => __( ' Hover Color', 'digtek-core' ),
				'condition'    => array( 'show_icon' => 'show' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .icon-items-area .icon-items .icon:hover' => 'color: {{VALUE}} !important',

				),
			)
		);
		
		$this->add_control(
			'icon_hover_bgcolor',
			array(
				'label'     => __( 'Background Hover Color', 'digtek-core' ),
				'condition'    => array( 'show_icon' => 'show' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .icon-items-area .icon-items .icon:hover' => 'background: {{VALUE}} !important',

				),
			)
		);
		
		$this->add_control(
			'icon_padding',
			array(
				'label'     => __( 'Padding', 'digtek-core' ),
				'type'      => \Elementor\Controls_Manager::DIMENSIONS,
				'condition'    => array( 'show_icon' => 'show' ),
				'size_units' =>  ['px', '%', 'em' ],
			
				'selectors' => array(
					'{{WRAPPER}} .icon-items-area .icon-items .icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);

		$this->add_control(
			'icon_margin',
			array(
				'label'     => __( 'Margin', 'digtek-core' ),
				'type'      => \Elementor\Controls_Manager::DIMENSIONS,
				'condition'    => array( 'show_icon' => 'show' ),
				'size_units' =>  ['px', '%', 'em' ],
				'selectors' => array(
					'{{WRAPPER}} .icon-items-area .icon-items .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'icon_typography',
				'condition'    => array( 'show_icon' => 'show' ),
				'label'    => __( 'Typography', 'digtek-core' ),
				'selector' => '{{WRAPPER}} .icon-items-area .icon-items .icon',
			)
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			array(
				'name' => 'icon_border',
				'condition'    => array( 'show_icon' => 'show' ),
				'selector' => '{{WRAPPER}} .icon-items-area .icon-items .icon',
			)
		);
		
		$this->add_control(
			'icon_border_radius',
			array(
				'label'     => __( 'Icon Border Radius', 'digtek-core' ),
				'type'      => \Elementor\Controls_Manager::DIMENSIONS,
				'condition'    => array( 'show_icon' => 'show' ),
				'size_units' =>  ['px', '%', 'em' ],
			
				'selectors' => array(
					'{{WRAPPER}} .icon-items-area .icon-items .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);


		$this->end_controls_section();		
		
		//End of icon


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
						'{{WRAPPER}} .content h3' => 'display: {{VALUE}} !important',
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
						'{{WRAPPER}} .content h3' => 'text-align: {{VALUE}}',
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
						'{{WRAPPER}} .content h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
						'{{WRAPPER}} .content h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
					'selector'   => '{{WRAPPER}} .content h3',
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
						'{{WRAPPER}} .content h3' => 'color: {{VALUE}} !important',
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
						'{{WRAPPER}} .content h3:hover' => 'color: {{VALUE}} !important',
					],
				]
			);
		
			$this->end_controls_section();
			// End of Title Settings

			
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
            '{{WRAPPER}} .content p' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .content p' => 'text-align: {{VALUE}} !important',
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
            '{{WRAPPER}} .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector'   => '{{WRAPPER}} .content p',
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
            '{{WRAPPER}} .content p' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .content p:hover' => 'color: {{VALUE}} !important',
        ],
    ]
);

$this->end_controls_section();
// End of Text Settings



	
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


	<div class="about-wrapper-2">
		<div class="about-content ms-0">
			<div class="icon-items-area mt-0 mb-0">
				<?php foreach($settings['repeat'] as $item):?>
				<div class="icon-items wow fadeInUp" data-wow-delay=".3s">
					<?php if($item['block_icons']['value']): ?>
					<div class="icon">
						<i class="<?php echo str_replace("icon ", " ", esc_attr( $item['block_icons']['value']));?>"></i>
					</div>
					<?php endif; ?>
					<div class="content">
						<h3><?php echo wp_kses($item['block_title'], $allowed_tags);?></h3>
						<p><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></p>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Icon_Card());