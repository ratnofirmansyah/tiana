<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Footer_Cta extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-footer-cta-widget';
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
		return esc_html__( 'Footer CTA', 'digtek-core' );
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
			'footer_cta',
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
			'bg_image',
			[
				'label' => esc_html__('Background image', 'digtek-core'),
				'type' => Controls_Manager::MEDIA,
				'default' => ['url' => Utils::get_placeholder_image_src(),],
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
            '{{WRAPPER}} .cta-wrapper h2' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .cta-wrapper h2' => 'text-align: {{VALUE}} !important',
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
            '{{WRAPPER}} .cta-wrapper h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .cta-wrapper h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector' => '{{WRAPPER}} .cta-wrapper h2',
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
            '{{WRAPPER}} .cta-wrapper h2' => 'color: {{VALUE}} !important',
        ],
    )
);

$this->end_controls_section();
// End of Section Title Setting ==================


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


//========== Background Color Settings ==========================
$this->start_controls_section(
    'bg_color_block_settings',
    [
        'label' => __( 'Background Color Settings', 'digtek-core' ),
        'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
    ]
);

// Section Background Color Control
$this->add_control(
    'block_bg_color',
    [
        'label'     => __( 'Background Bottom Color', 'digtek-core' ),
        'type'      => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .cta-section::before' => 'background-color: {{VALUE}} !important',
        ],
    ]
);


$this->end_controls_section();
// End of Background Color Settings


	
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
	<section class="cta-section section-bg section-padding pb-0">
		<div class="rokect-shape float-bob-y">
		<?php  if ( !empty(esc_url($settings['image']['id']) )) : ?>   
			<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
		<?php endif;?>
		</div>
		<div class="container">
			<div class="cta-wrapper bg-cover" style="background-image: url('<?php echo wp_get_attachment_url($settings['bg_image']['id']);?>');">
				<div class="cta-img wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
				<?php  if ( !empty(esc_url($settings['image2']['id']) )) : ?>   
					<img src="<?php echo wp_get_attachment_url($settings['image2']['id']);?>" alt="<?php echo esc_attr($settings['alt_text2']);?>"/>
				<?php endif;?>
				</div>
				<h2 class="wow fadeInUp" data-wow-delay=".3s">
					<?php echo $settings['title'];?>
				</h2>
				<div class="main-button wow fadeInUp" data-wow-delay=".5s">
					<a href="<?php echo esc_url($settings['button_link']['url']);?>"> <span class="theme-btn"> <?php echo $settings['button'];?> </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
				</div>
			</div>
		</div>
	</section>

	<?php  elseif ( 'style2' === $settings['style'] ) : ?>	

	<section class="cta-section section-padding pb-0">
		<div class="rokect-shape float-bob-y">
		<?php  if ( !empty(esc_url($settings['image']['id']) )) : ?>   
			<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
		<?php endif;?>
		</div>
		<div class="container">
			<div class="cta-wrapper bg-cover" style="background-image: url('<?php echo wp_get_attachment_url($settings['bg_image']['id']);?>');">
				<div class="cta-img wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
				<?php  if ( !empty(esc_url($settings['image2']['id']) )) : ?>   
					<img src="<?php echo wp_get_attachment_url($settings['image2']['id']);?>" alt="<?php echo esc_attr($settings['alt_text2']);?>"/>
				<?php endif;?>
				</div>
				<h2 class="wow fadeInUp" data-wow-delay=".3s">
					<?php echo $settings['title'];?>
				</h2>
				<div class="main-button wow fadeInUp" data-wow-delay=".5s">
					<a href="<?php echo esc_url($settings['button_link']['url']);?>"> <span class="theme-btn"> <?php echo $settings['button'];?> </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
				</div>
			</div>
		</div>
	</section>

	<?php endif ;?>	
             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Footer_Cta());