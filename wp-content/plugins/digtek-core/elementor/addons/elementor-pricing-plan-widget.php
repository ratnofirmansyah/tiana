<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Pricing_Plan extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-pricing-plan-widget';
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
		return esc_html__( 'Pricing Plan', 'digtek-core' );
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
			'pricing_plan',
			[
				'label' => esc_html__( 'Pricing plan', 'digtek-core' ),
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
				'label' => __( 'Tab 1', 'digtek-core' ),
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
						   'label' => __( 'Select Style', 'digtek-core' ),
						   'type' => Controls_Manager::SELECT,
						   'options' => [
							   'style-1' => __( 'Style 1', 'digtek-core' ),
							   'style-2' => __( 'Style 2', 'digtek-core' ),
							   ],
							   'default' => 'style-2',
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
				'label' => __( 'Tab 2', 'digtek-core' ),
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
							'label' => __( 'Select Style', 'digtek-core' ),
							'type' => Controls_Manager::SELECT,
							'options' => [
								'style-1' => __( 'Style 1', 'digtek-core' ),
								'style-2' => __( 'Style 2', 'digtek-core' ),
								],
								'default' => 'style-2',
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

<?php  if ( 'style1' === $settings['style'] ) : ?>

	<div class="tab-content">
		<div id="monthly" class="tab-pane fade show active" role="tabpanel">
			<div class="row g-4">
				<?php foreach($settings['repeat'] as $item):?>	
				<div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
					<div class="pricing-box-items <?php echo esc_attr($item['block_class']); ?>">
						<div class="pricing-header">
							<div class="content">
								<h4><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></h4>
								<h2><?php echo wp_kses($item['block_title'], $allowed_tags);?></h2>
							</div>
							<div class="icon">
							<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
								<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
							<?php endif;?>
							</div>
						</div>
						<ul class="price-list">
							<?php echo wp_kses($item['block_text'], $allowed_tags);?>
						</ul>
						<div class="price-button">
							<a href="<?php echo esc_url($item['block_button_link']['url']);?>" class="theme-btn"><?php echo wp_kses($item['block_button'], $allowed_tags);?> <i class="fa-regular fa-arrow-right-long"></i></a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div id="yearly" class="tab-pane fade" role="tabpanel">
			<div class="row g-4">
				<?php foreach($settings['repeat_2'] as $item):?>	
				<div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
					<div class="pricing-box-items <?php echo esc_attr($item['block_class']); ?>">
						<div class="pricing-header">
							<div class="content">
								<h4><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></h4>
								<h2><?php echo wp_kses($item['block_title'], $allowed_tags);?></h2>
							</div>
							<div class="icon">
							<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
								<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
							<?php endif;?>
							</div>
						</div>
						<ul class="price-list">
							<?php echo wp_kses($item['block_text'], $allowed_tags);?>
						</ul>
						<div class="price-button">
							<a href="<?php echo esc_url($item['block_button_link']['url']);?>" class="theme-btn"><?php echo wp_kses($item['block_button'], $allowed_tags);?> <i class="fa-regular fa-arrow-right-long"></i></a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>


	<?php  elseif ( 'style2' === $settings['style'] ) : ?>

		<div class="tab-content">
			<div id="monthly" class="tab-pane fade show active" role="tabpanel">
				<div class="row g-4">
					<?php foreach($settings['repeat'] as $item):?>	
					<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
						<div class="pricing-box-items <?php echo esc_attr($item['block_class']); ?>">
							<div class="pricing-header">
								<div class="content">
									<h4><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></h4>
									<h2><?php echo wp_kses($item['block_title'], $allowed_tags);?></h2>
								</div>
								<div class="icon">
								<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
									<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
								<?php endif;?>
								</div>
							</div>
							<ul class="price-list">
								<?php echo wp_kses($item['block_text'], $allowed_tags);?>
							</ul>
							<div class="price-button">
								<a href="<?php echo esc_url($item['block_button_link']['url']);?>" class="theme-btn"><?php echo wp_kses($item['block_button'], $allowed_tags);?> <i class="fa-regular fa-arrow-right-long"></i></a>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div id="yearly" class="tab-pane fade" role="tabpanel">
				<div class="row g-4">
					<?php foreach($settings['repeat_2'] as $item):?>	
					<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
						<div class="pricing-box-items <?php echo esc_attr($item['block_class']); ?>">
							<div class="pricing-header">
								<div class="content">
									<h4><?php echo wp_kses($item['block_subtitle'], $allowed_tags);?></h4>
									<h2><?php echo wp_kses($item['block_title'], $allowed_tags);?></h2>
								</div>
								<div class="icon">
								<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
									<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
								<?php endif;?>
								</div>
							</div>
							<ul class="price-list">
								<?php echo wp_kses($item['block_text'], $allowed_tags);?>
							</ul>
							<div class="price-button">
								<a href="<?php echo esc_url($item['block_button_link']['url']);?>" class="theme-btn"><?php echo wp_kses($item['block_button'], $allowed_tags);?> <i class="fa-regular fa-arrow-right-long"></i></a>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>

	<?php endif ;?>	

             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Pricing_Plan());