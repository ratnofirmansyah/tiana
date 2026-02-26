<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Theme_Button extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-theme-button-widget';
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
		return esc_html__( 'Theme Button', 'digtek-core' );
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
			'theme_button',
			[
				'label' => esc_html__( 'Theme Button', 'digtek-core' ),
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

	
<?php  if ( 'style1' === $settings['style'] ) : ?>

    <div class="main-button wow fadeInUp" data-wow-delay=".5s">
		<a href="<?php echo esc_url($settings['button_link']['url']);?>"> <span class="theme-btn"> <?php echo $settings['button'];?> </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
	</div>

<?php  elseif ( 'style2' === $settings['style'] ) : ?>

    <div class="array-button wow fadeInUp" data-wow-delay=".5s">
		<button class="array-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
		<button class="array-next"><i class="fa-regular fa-arrow-right-long"></i></button>
	</div>
	

<?php endif ;?>	

             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Theme_Button());