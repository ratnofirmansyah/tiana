<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Team_Grid extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-team-grid-widget';
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
		return esc_html__( 'Team Grid', 'digtek-core' );
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
			'team_grid',
			[
				'label' => esc_html__( 'Team Grid', 'digtek-core' ),
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

		$this->add_control('column_grid', [
            'label' => esc_html__('Column Grid', 'digtek-core'),
            'type' => Controls_Manager::SELECT,
            'options' => array(
                'col-lg-2' => esc_html__('col-lg-2', 'digtek-core'),
                'col-lg-3' => esc_html__('col-lg-3', 'digtek-core'),
                'col-lg-4' => esc_html__('col-lg-4', 'digtek-core'),
                'col-lg-6' => esc_html__('col-lg-6', 'digtek-core'),
            ),
            'default' => 'col-lg-4',
            'description' => esc_html__('Select Team Grid', 'digtek-core'),
        ]);

		$this->end_controls_section();

		// Tab Start - 2

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Team Grid Block', 'digtek-core' ),
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
							
						'block_image2' =>
						[
							'name' => 'block_image2',
							'label' => __( 'Image', 'digtek-core' ),
							'type' => Controls_Manager::MEDIA,
							'default' => ['url' => Utils::get_placeholder_image_src(),],
						],	

						'block_alt_text2' =>
						[
						'name' => 'block_alt_text2',
						'label' => esc_html__('Image Text', 'digtek-core'),
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
						
						'block_title' =>
						[
							'name' => 'block_title',
							'label' => esc_html__('Title', 'digtek-core'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'digtek-core')
						],

						'block_button_link' =>
						[
						  'name' => 'block_button_link',
						  'label' => __( 'Team Url', 'digtek-core' ),
						  'type' => Controls_Manager::URL,
						  'placeholder' => __( 'https://your-link.com', 'digtek-core' ),
						  'show_external' => true,
						  'default' => [
							'url' => '',
							'is_external' => true,
							'nofollow' => true,
						  ],
					   ],	
					   
					   'block_button_link1' =>
						
					   [
						 'name' => 'block_button_link1',
						 'label' => __( 'Facebook Url', 'digtek-core' ),
						 'type' => Controls_Manager::URL,
						 'placeholder' => __( 'https://your-link.com', 'digtek-core' ),
						 'show_external' => true,
						 'default' => [
						   'url' => '#',
						   'is_external' => true,
						   'nofollow' => true,
						 ],
					  ],
			   
					   'block_button_link2' =>
					   
					   [
						 'name' => 'block_button_link2',
						 'label' => __( 'Twitter Url', 'digtek-core' ),
						 'type' => Controls_Manager::URL,
						 'placeholder' => __( 'https://your-link.com', 'digtek-core' ),
						 'show_external' => true,
						 'default' => [
						   'url' => '',
						   'is_external' => true,
						   'nofollow' => true,
						 ],
					  ],
			   
					   'block_button_link3' =>
					   
					   [
						 'name' => 'block_button_link3',
						 'label' => __( 'Youtube Url', 'digtek-core' ),
						 'type' => Controls_Manager::URL,
						 'placeholder' => __( 'https://your-link.com', 'digtek-core' ),
						 'show_external' => true,
						 'default' => [
						   'url' => '',
						   'is_external' => true,
						   'nofollow' => true,
						 ],
					  ],
			   
					   'block_button_link4' =>
					   
					   [
						 'name' => 'block_button_link4',
						 'label' => __( 'linkedIn Url', 'digtek-core' ),
						 'type' => Controls_Manager::URL,
						 'placeholder' => __( 'https://your-link.com', 'digtek-core' ),
						 'show_external' => true,
						 'default' => [
						   'url' => '',
						   'is_external' => true,
						   'nofollow' => true,
						 ],
					  ],
			   
					   'block_button_link5' =>
					   
					   [
						 'name' => 'block_button_link5',
						 'label' => __( 'Instagram Url', 'digtek-core' ),
						 'type' => Controls_Manager::URL,
						 'placeholder' => __( 'https://your-link.com', 'digtek-core' ),
						 'show_external' => true,
						 'default' => [
						   'url' => '',
						   'is_external' => true,
						   'nofollow' => true,
						 ],
					  ],

					  'block_button_link6' =>
					   
					  [
						'name' => 'block_button_link6',
						'label' => __( 'Pinterest Url', 'digtek-core' ),
						'type' => Controls_Manager::URL,
						'placeholder' => __( 'https://your-link.com', 'digtek-core' ),
						'show_external' => true,
						'default' => [
						  'url' => '',
						  'is_external' => true,
						  'nofollow' => true,
						],
					 ],
			   
					   'block_button_link7' =>
					   
					   [
						 'name' => 'block_button_link7',
						 'label' => __( 'Email', 'digtek-core' ),
						 'type' => Controls_Manager::URL,
						 'placeholder' => __( 'https://your-link.com', 'digtek-core' ),
						 'show_external' => true,
						 'default' => [
						   'url' => '',
						   'is_external' => true,
						   'nofollow' => true,
						 ],
					  ],

					   'block_button_link8' =>
					   
					   [
						 'name' => 'block_button_link8',
						 'label' => __( 'Phone', 'digtek-core' ),
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
            '{{WRAPPER}} .team-content h3 a' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .team-content h3 a' => 'text-align: {{VALUE}} !important',
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
            '{{WRAPPER}} .team-content h3 a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .team-content h3 a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector' => '{{WRAPPER}} .team-content h3 a',
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
            '{{WRAPPER}} .team-content h3 a' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .team-content p' => 'display: {{VALUE}} !important',
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
            '{{WRAPPER}} .team-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
            '{{WRAPPER}} .team-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
        'selector' => '{{WRAPPER}} .team-content p',
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
            '{{WRAPPER}} .team-content p' => 'color: {{VALUE}} !important',
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
            '{{WRAPPER}} .team-content p' => 'background-color: {{VALUE}} !important',
        ],
    )
);

$this->end_controls_section();
// End of Section Sub Title Setting ==================


	
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

if($(".team-slider").length > 0) {
	const teamSlider = new Swiper(".team-slider", {
		spaceBetween: 30,
		speed: 2000,
		loop: true,
		autoplay: {
			delay: 1000,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: ".array-prev",
			prevEl: ".array-next",
		},
		breakpoints: {
			1199: {
				slidesPerView: 2,
			},
			991: {
				slidesPerView: 1,
			},
			767: {
				slidesPerView: 1,
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

	<div class="container-fluid">
		<div class="row">
			<?php foreach($settings['repeat'] as $item):?>	
			<div class="<?php echo esc_attr($settings['column_grid']); ?> col-md-6 wow fadeInUp" data-wow-delay=".2s">
				<div class="team-card-items">
					<div class="team-image">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
					</div>
					<div class="team-content">
						<h3>
							<a href="<?php echo esc_url($item['block_button_link']['url']);?>"><?php echo wp_kses($item['block_title'], $allowed_tags);?></a>
						</h3>
						<p><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></p>
					</div>
					<div class="icon-shape">
					<?php if(!empty(wp_get_attachment_url($item['block_image2']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image2']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text2'], $allowed_tags);?>">
					<?php endif;?>
						<div class="social-profile">
							<ul>
								<?php if (!empty($item['block_button_link1']['url'])) : ?>
									<li><a href="<?php echo esc_url($item['block_button_link1']['url']);?>"><i class="fab fa-facebook-f"></i></a></li>
								<?php endif; ?> 
								<?php if (!empty($item['block_button_link2']['url'])) : ?>
									<li><a href="<?php echo esc_url($item['block_button_link2']['url']);?>"><i class="fab fa-twitter"></i></a></li>
								<?php endif; ?> 
								<?php if (!empty($item['block_button_link3']['url'])) : ?>
									<li><a href="<?php echo esc_url($item['block_button_link3']['url']);?>"><i class="fab fa-youtube"></i></a></li>
								<?php endif; ?> 
								<?php if (!empty($item['block_button_link4']['url'])) : ?>
									<li><a href="<?php echo esc_url($item['block_button_link4']['url']);?>"><i class="fab fa-linkedin-in"></i></a></li>
								<?php endif; ?> 
								<?php if (!empty($item['block_button_link5']['url'])) : ?>
									<li><a href="<?php echo esc_url($item['block_button_link5']['url']);?>"><i class="fab fa-instagram"></i></a></li>
								<?php endif; ?> 
								<?php if (!empty($item['block_button_link6']['url'])) : ?>
									<li><a href="<?php echo esc_url($item['block_button_link6']['url']);?>"><i class="fab fa-pinterest"></i></a></li>
								<?php endif; ?> 
								<?php if (!empty($item['block_button_link7']['url'])) : ?>
									<li><a href="<?php echo esc_url($item['block_button_link7']['url']);?>"><i class="fa fa-envelope"></i></a></li>
								<?php endif; ?> 
								<?php if (!empty($item['block_button_link8']['url'])) : ?>
									<li><a href="<?php echo esc_url($item['block_button_link8']['url']);?>"><i class="fa fa-phone"></i></a></li>
								<?php endif; ?> 
							</ul>
							<span class="plus-btn"><i class="fas fa-share-alt"></i></span>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>

<?php  elseif ( 'style2' === $settings['style'] ) : ?>	

	<div class="swiper team-slider">
		<div class="swiper-wrapper">
			<?php foreach($settings['repeat'] as $item):?>	
			<div class="swiper-slide">
				<div class="team-card-items mt-0">
					<div class="team-image">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
					</div>
					<div class="team-content">
						<h3>
							<a href="<?php echo esc_url($item['block_button_link']['url']);?>"><?php echo wp_kses($item['block_title'], $allowed_tags);?></a>
						</h3>
						<p><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></p>
					</div>
					<div class="icon-shape">
					<?php if(!empty(wp_get_attachment_url($item['block_image2']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image2']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text2'], $allowed_tags);?>">
					<?php endif;?>
						<div class="social-profile">
							<ul>
								<?php if (!empty($item['block_button_link1']['url'])) : ?>
									<li><a href="<?php echo esc_url($item['block_button_link1']['url']);?>"><i class="fab fa-facebook-f"></i></a></li>
								<?php endif; ?> 
								<?php if (!empty($item['block_button_link2']['url'])) : ?>
									<li><a href="<?php echo esc_url($item['block_button_link2']['url']);?>"><i class="fab fa-twitter"></i></a></li>
								<?php endif; ?> 
								<?php if (!empty($item['block_button_link3']['url'])) : ?>
									<li><a href="<?php echo esc_url($item['block_button_link3']['url']);?>"><i class="fab fa-youtube"></i></a></li>
								<?php endif; ?> 
								<?php if (!empty($item['block_button_link4']['url'])) : ?>
									<li><a href="<?php echo esc_url($item['block_button_link4']['url']);?>"><i class="fab fa-linkedin-in"></i></a></li>
								<?php endif; ?> 
								<?php if (!empty($item['block_button_link5']['url'])) : ?>
									<li><a href="<?php echo esc_url($item['block_button_link5']['url']);?>"><i class="fab fa-instagram"></i></a></li>
								<?php endif; ?> 
								<?php if (!empty($item['block_button_link6']['url'])) : ?>
									<li><a href="<?php echo esc_url($item['block_button_link6']['url']);?>"><i class="fab fa-pinterest"></i></a></li>
								<?php endif; ?> 
								<?php if (!empty($item['block_button_link7']['url'])) : ?>
									<li><a href="<?php echo esc_url($item['block_button_link7']['url']);?>"><i class="fa fa-envelope"></i></a></li>
								<?php endif; ?> 
								<?php if (!empty($item['block_button_link8']['url'])) : ?>
									<li><a href="<?php echo esc_url($item['block_button_link8']['url']);?>"><i class="fa fa-phone"></i></a></li>
								<?php endif; ?> 
							</ul>
							<span class="plus-btn"><i class="fas fa-share-alt"></i></span>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>

<?php endif ;?>	

             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Team_Grid());