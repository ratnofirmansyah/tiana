<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Heading_Title extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-heading-title-widget';
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
		return esc_html__( 'Heading Title', 'digtek-core' );
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
			'heading_title',
			[
				'label' => esc_html__( 'Heading Title', 'digtek-core' ),
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


		$this->end_controls_section();

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
						'{{WRAPPER}} .section-title .sub-title span' => 'display: {{VALUE}} !important',
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
						'{{WRAPPER}} .section-title .sub-title span' => 'text-align: {{VALUE}} !important',
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
						'{{WRAPPER}} .section-title .sub-title span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
						'{{WRAPPER}} .section-title .sub-title span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
					],
				]
			);
		
			// Subtitle Typography Control
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name'       => 'subtitle_typography',
					'label'      => __( 'Typography', 'digtek-core' ),
					'selector'   => '{{WRAPPER}} .section-title .sub-title span',
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
						'{{WRAPPER}} .section-title .sub-title span' => 'color: {{VALUE}} !important',
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
						'{{WRAPPER}} .section-title .sub-title' => 'background-color: {{VALUE}} !important',
					],
				]
			);
		
			$this->end_controls_section();
		
			// End of Subtitle Settings ==================

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
							'{{WRAPPER}} .section-title h2' => 'display: {{VALUE}} !important',
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
							'{{WRAPPER}} .section-title h2' => 'text-align: {{VALUE}}',
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
							'{{WRAPPER}} .section-title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
							'{{WRAPPER}} .section-title h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
						'selector'   => '{{WRAPPER}} .section-title h2',
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
							'{{WRAPPER}} .section-title h2' => 'color: {{VALUE}} !important',
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
							'{{WRAPPER}} .section-title h2:hover' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .section-title-area p' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .section-title-area p' => 'text-align: {{VALUE}} !important',
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
            '{{WRAPPER}} .section-title-area p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .section-title-area p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector'   => '{{WRAPPER}} .section-title-area p',
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
            '{{WRAPPER}} .section-title-area p' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .section-title-area p:hover' => 'color: {{VALUE}} !important',
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

	
<?php  if ( 'style1' === $settings['style'] ) : ?>

<div class="section-title-area">
	<div class="section-title">
		<?php if($settings['subtitle']): ?>
		<div class="sub-title wow fadeInUp">
			<span><?php echo $settings['subtitle'];?></span>
		</div>
		<?php endif; ?>
		<?php if($settings['title']): ?>
		<h2 class="wow fadeInUp" data-wow-delay=".3s">
			<?php echo $settings['title'];?>
		</h2>
		<?php endif; ?>
	</div>
	<?php if($settings['text']): ?>
	<p class="wow fadeInUp" data-wow-delay=".5s">
		<?php echo $settings['text'];?>
	</p>
	<?php endif; ?>
</div>

<?php  elseif ( 'style2' === $settings['style'] ) : ?>

	<div class="section-title">
		<?php if($settings['subtitle']): ?>
		<div class="sub-title bg-color-3 wow fadeInUp">
			<span class="wow fadeInUp"><?php echo $settings['subtitle'];?></span>
		</div>
		<?php endif; ?>
		<?php if($settings['title']): ?>
		<h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
			<?php echo $settings['title'];?>
		</h2>
		<?php endif; ?>
	</div>

<?php  elseif ( 'style3' === $settings['style'] ) : ?>

	<div class="section-title">
		<?php if($settings['subtitle']): ?>
		<div class="sub-title bg-color-2 wow fadeInUp">
			<span><?php echo $settings['subtitle'];?></span>
		</div>
		<?php endif; ?>
		<?php if($settings['title']): ?>
		<h2 class="wow fadeInUp" data-wow-delay=".3s">
			<?php echo $settings['title'];?>
		</h2>
		<?php endif; ?>
	</div>

<?php  elseif ( 'style4' === $settings['style'] ) : ?>

	<div class="section-title-area">
		<div class="section-title">
			<?php if($settings['subtitle']): ?>
			<div class="sub-title bg-color-3 wow fadeInUp">
				<span class="wow fadeInUp"><?php echo $settings['subtitle'];?></span>
			</div>
			<?php endif; ?>
			<?php if($settings['title']): ?>
			<h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
				<?php echo $settings['title'];?>
			</h2>
			<?php endif; ?>
		</div>
		<?php if($settings['text']): ?>
		<p class="white-text wow fadeInUp" data-wow-delay=".5s">
			<?php echo $settings['text'];?>
		</p>
		<?php endif; ?>
	</div>

<?php endif ;?>	

             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Heading_Title());