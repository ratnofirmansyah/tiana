<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Marketing_Cta extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-marketing-cta-widget';
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
		return esc_html__( 'Marketing Cta', 'digtek-core' );
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
			'marketing_cta',
			[
				'label' => esc_html__( 'Marketing Cta', 'digtek-core' ),
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
				  'condition'	=> ['style' => ['style1','style2']],
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
				'condition'	=> ['style' => ['style1','style2']],
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
				'condition'	=> ['style' => ['style1','style2']],
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
				'condition'	=> ['style' => ['style1','style2']],
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
				'condition'	=> ['style' => ['style1']],
			]
		);

		$this->add_control(
			'subtitle3',
			[
				'label'       => __( 'Sub Title', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your sub title', 'digtek-core' ),
				'condition'	=> ['style' => ['style1']],
			]
		);

		$this->add_control(
			'image2',
				[
				  'label' => __( 'Image', 'digtek-core' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				  'condition'	=> ['style' => ['style1','style2']],
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
				'condition'	=> ['style' => ['style1','style2']],
			]
		);

		$this->add_control(
			'contact_form',
			[
				'label'       => __( 'Mailchimp/Contact Form 7 Shortcode', 'digtek-core' ),
				'type'        => Controls_Manager::TEXT,
				'label_block' => true,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Contact Form Shortcode', 'digtek-core' ),
				'default'     => __( '', 'digtek-core' ),
				'condition'	=> ['style' => ['style1']],
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
				'condition'	=> ['style' => ['style2']],
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
			  'condition'	=> ['style' => ['style2']],
			
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
            '{{WRAPPER}} .section-title .sub-title' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .section-title .sub-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .section-title .sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector' => '{{WRAPPER}} .section-title .sub-title',
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
            '{{WRAPPER}} .section-title .sub-title' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .section-title .sub-title' => 'background-color: {{VALUE}} !important',
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
            '{{WRAPPER}} .section-title h2' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .section-title h2' => 'text-align: {{VALUE}} !important',
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
            '{{WRAPPER}} .section-title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .section-title h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector' => '{{WRAPPER}} .section-title h2',
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
            '{{WRAPPER}} .section-title h2' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .list li' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .list li' => 'text-align: {{VALUE}} !important',
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
            '{{WRAPPER}} .list li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .list li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector'   => '{{WRAPPER}} .list li',
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
            '{{WRAPPER}} .list li' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .list li:hover' => 'color: {{VALUE}} !important',
        ],
    ]
);

$this->end_controls_section();
// End of Text Settings


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
            '{{WRAPPER}} .cta-marketing::before' => 'background-color: {{VALUE}} !important',
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
	<section class="cta-marketing section-padding pt-0">
		<div class="shape-img float-bob-y">
		<?php  if ( !empty(esc_url($settings['image']['id']) )) : ?>   
			<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
		<?php endif;?>
		</div>
		<div class="container">
			<div class="cta-marketing-wrapper">
				<div class="content">
					<div class="section-title">
						<div class="sub-title bg-color-3 wow fadeInUp">
							<span><?php echo $settings['subtitle'];?></span>
						</div>
						<h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
							<?php echo $settings['title'];?>
						</h2>
					</div>
					<ul class="list mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
						<?php if($settings['subtitle2']): ?>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
								<path d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z" fill="white"/>
							</svg>
							<?php echo $settings['subtitle2'];?>
						</li>
						<?php endif; ?>
						<?php if($settings['subtitle3']): ?>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
								<path d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z" fill="white"/>
							</svg>
							<?php echo $settings['subtitle3'];?>
						</li>
						<?php endif; ?>
					</ul>
				</div>
				<div class="cta-input wow fadeInUp" data-wow-delay=".3s">
					<?php echo do_shortcode( $settings['contact_form'] );?>
				</div>
				<div class="cta-marketing-image wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.3s">
				<?php  if ( !empty(esc_url($settings['image2']['id']) )) : ?>   
					<img src="<?php echo wp_get_attachment_url($settings['image2']['id']);?>" alt="<?php echo esc_attr($settings['alt_text2']);?>"/>
				<?php endif;?>
				</div>
			</div>
		</div>
	</section>

<?php  elseif ( 'style2' === $settings['style'] ) : ?>

	<section class="cta-contact-section fix">
		<div class="container">
			<div class="cta-contact-wrapper bg-cover" style="background-image: url('<?php echo wp_get_attachment_url($settings['image2']['id']);?>');">
				<div class="cta-image wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
				<?php  if ( !empty(esc_url($settings['image']['id']) )) : ?>   
					<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
				<?php endif;?>
				</div>
				<div class="section-title mb-0">
					<div class="sub-title bg-color-3 wow fadeInUp">
						<span><?php echo $settings['subtitle'];?></span>
					</div>
					<h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
						<?php echo $settings['title'];?>
					</h2>
				</div>
				<?php if($settings['button']): ?>
				<div class="main-button wow fadeInUp" data-wow-delay=".5s">
					<a href="<?php echo esc_url($settings['button_link']['url']);?>"> <span class="theme-btn"><?php echo $settings['button'];?> </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

<?php endif ;?>	

             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Marketing_Cta());