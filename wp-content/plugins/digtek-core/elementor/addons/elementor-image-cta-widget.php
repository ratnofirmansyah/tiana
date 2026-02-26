<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Image_Cta extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-image-cta-widget';
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
		return esc_html__( 'Image CTA', 'digtek-core' );
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
			'image_cta',
			[
				'label' => esc_html__( 'Image cta', 'digtek-core' ),
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
            '{{WRAPPER}} .counter-text h2' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .counter-text h2' => 'text-align: {{VALUE}} !important',
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
            '{{WRAPPER}} .counter-text h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .counter-text h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector' => '{{WRAPPER}} .counter-text h2',
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
            '{{WRAPPER}} .counter-text h2' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .counter-text p' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .counter-text p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .counter-text p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector' => '{{WRAPPER}} .counter-text p',
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
            '{{WRAPPER}} .counter-text p' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .counter-text p' => 'background-color: {{VALUE}} !important',
        ],
    )
);

$this->end_controls_section();
// End of Section Sub Title Setting ==================


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
			'{{WRAPPER}} .circle-button' => 'display: {{VALUE}} !important',
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
			'{{WRAPPER}} .circle-button' => 'text-align: {{VALUE}} !important',
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
			'{{WRAPPER}} .circle-button' => 'color: {{VALUE}} !important',

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
			'{{WRAPPER}} .circle-button' => 'background: {{VALUE}} !important',

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
			'{{WRAPPER}} .circle-button:hover' => 'color: {{VALUE}} !important',

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
			'{{WRAPPER}} .circle-button:hover' => 'background: {{VALUE}} !important',

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
			'{{WRAPPER}} .circle-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
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
			'{{WRAPPER}} .circle-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
		),
	)
);

$this->add_group_control(
	\Elementor\Group_Control_Typography::get_type(),
	array(
		'name'     => 'icon_typography',
		'condition'    => array( 'show_icon' => 'show' ),
		'label'    => __( 'Typography', 'digtek-core' ),
		'selector' => '{{WRAPPER}} .circle-button',
	)
);

$this->add_group_control(
	\Elementor\Group_Control_Border::get_type(),
	array(
		'name' => 'icon_border',
		'condition'    => array( 'show_icon' => 'show' ),
		'selector' => '{{WRAPPER}} .circle-button',
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
			'{{WRAPPER}} .circle-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
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

<?php  if ( 'style1' === $settings['style'] ) : ?>
	<section class="cta-counter-section fix section-padding pt-0">
		<div class="bg-shape">
		<?php  if ( !empty(esc_url($settings['image']['id']) )) : ?>   
			<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
		<?php endif;?>
		</div>
		<div class="container">
			<div class="cta-counter-wrapper bg-cover" style="background-image: url('<?php echo wp_get_attachment_url($settings['bg_image']['id']);?>');">
				<div class="shape-img">
				<?php  if ( !empty(esc_url($settings['image2']['id']) )) : ?>   
					<img src="<?php echo wp_get_attachment_url($settings['image2']['id']);?>" alt="<?php echo esc_attr($settings['alt_text2']);?>"/>
				<?php endif;?>
				</div>
				<div class="counter-box-area">
					<?php foreach($settings['repeat'] as $item):?>
					<div class="counter-text wow fadeInUp" data-wow-delay=".3s">
						<h2>
							<?php echo wp_kses($item['block_title'], $allowed_tags);?>
						</h2>
						<p><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></p>
					</div>
					<?php endforeach; ?>
					<a href="<?php echo esc_url($settings['button_link']['url']);?>" class="circle-button">
						<i class="fa-regular fa-arrow-up-right"></i>
						<span class="text-circle">
						<?php  if ( !empty(esc_url($settings['image3']['id']) )) : ?>   
							<img src="<?php echo wp_get_attachment_url($settings['image3']['id']);?>" alt="<?php echo esc_attr($settings['alt_text3']);?>"/>
						<?php endif;?>
						</span>
					</a>
				</div>
			</div>
		</div>
	</section>

<?php  elseif ( 'style2' === $settings['style'] ) : ?>

	<div class="about-wrapper-2">
		<div class="about-image">
			<?php  if ( !empty(esc_url($settings['image']['id']) )) : ?>   
				<img class="wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s" src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
			<?php endif;?>
			<div class="box-shape float-bob-y">
			<?php  if ( !empty(esc_url($settings['image2']['id']) )) : ?>   
				<img src="<?php echo wp_get_attachment_url($settings['image2']['id']);?>" alt="<?php echo esc_attr($settings['alt_text2']);?>"/>
			<?php endif;?>
			</div>
			<div class="gap-shape float-bob-x">
			<?php  if ( !empty(esc_url($settings['image3']['id']) )) : ?>   
				<img src="<?php echo wp_get_attachment_url($settings['image3']['id']);?>" alt="<?php echo esc_attr($settings['alt_text3']);?>"/>
			<?php endif;?>
			</div>
			<a href="<?php echo esc_url($settings['button_link']['url']);?>" class="circle-button">
				<i class="fa-regular fa-arrow-up-right"></i>
				<span class="text-circle">
					<?php  if ( !empty(esc_url($settings['image4']['id']) )) : ?>   
						<img src="<?php echo wp_get_attachment_url($settings['image4']['id']);?>" alt="<?php echo esc_attr($settings['alt_text4']);?>"/>
					<?php endif;?>
				</span>
			</a>
		</div>
	</div>

	<?php  elseif ( 'style3' === $settings['style'] ) : ?>

		<div class="team-wrapper style-3">
			<div class="team-image-2">
				<?php  if ( !empty(esc_url($settings['image']['id']) )) : ?>   
					<img class="wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s" src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
				<?php endif;?>
				<div class="client-shape float-bob-x">
				<?php  if ( !empty(esc_url($settings['image2']['id']) )) : ?>   
					<img src="<?php echo wp_get_attachment_url($settings['image2']['id']);?>" alt="<?php echo esc_attr($settings['alt_text2']);?>"/>
				<?php endif;?>
				</div>
				<div class="box-shape float-bob-y">
				<?php  if ( !empty(esc_url($settings['image3']['id']) )) : ?>   
					<img src="<?php echo wp_get_attachment_url($settings['image3']['id']);?>" alt="<?php echo esc_attr($settings['alt_text3']);?>"/>
				<?php endif;?>
				</div>
				<a href="<?php echo esc_url($settings['button_link']['url']);?>" class="circle-button">
					<i class="fa-regular fa-arrow-up-right"></i>
					<span class="text-circle">
					<?php  if ( !empty(esc_url($settings['image4']['id']) )) : ?>   
						<img src="<?php echo wp_get_attachment_url($settings['image4']['id']);?>" alt="<?php echo esc_attr($settings['alt_text4']);?>"/>
					<?php endif;?>
					</span>
				</a>
			</div>
		</div>

<?php endif ;?>	

             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Image_Cta());