<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Contact_Map extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-contact-map-widget';
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
		return esc_html__( 'Contact Map', 'digtek-core' );
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
			'contact_map',
			[
				'label' => esc_html__( 'Contact Map', 'digtek-core' ),
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
			'contact_form',
			[
				'label'       => __( 'Contact Form 7 Url', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Contact Form 7 Url', 'digtek-core' ),
				'default'     => __( '', 'digtek-core' ),
			]
		);

		$this->add_control(
			'map_link',
			[
			  'label' => __( 'Map Url', 'digtek-core' ),
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
						['block_title' => esc_html__('Projects Completed', 'digtek-core')],
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
							'default' => esc_html__('', 'digtek-core')
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


	<div class="contact-wrapper">
		<div class="row g-4">
			<div class="col-xl-6">
				<div class="contact-form-area">
					<h3><?php echo $settings['title'];?></h3>
					<?php echo do_shortcode( $settings['contact_form'] );?>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="contact-map">
					<iframe src="<?php echo esc_url($settings['map_link']['url']);?>" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

					<div class="contact-info-wrapper">
						<h2><?php echo $settings['subtitle'];?></h2>
						<div class="shape-left">
							<svg xmlns="http://www.w3.org/2000/svg" width="29" height="39" viewBox="0 0 29 39"
								fill="none">
								<path d="M0 0L29 39V0H0Z" fill="#6A47ED" />
							</svg>
						</div>
						<div class="shape-right">
							<svg xmlns="http://www.w3.org/2000/svg" width="29" height="39" viewBox="0 0 29 39"
								fill="none">
								<path d="M29 0L0 39V0H29Z" fill="#6A47ED" />
							</svg>
						</div>

						<?php foreach($settings['repeat'] as $item):?>								
						<div class="contact-info style2">
							<div class="icon">
								<i class="<?php echo str_replace("icon ", " ", esc_attr( $item['block_icons']['value']));?>"></i>
							</div>
							<div class="content">
								<h3>
									<a href="<?php echo esc_url($item['block_button_link']['url']);?>"><?php echo wp_kses($item['block_title'], $allowed_tags);?></a>
								</h3>
							</div>
						</div>
						<?php endforeach; ?>

					</div>
				</div>
			</div>
		</div>
	</div>

             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Contact_Map());