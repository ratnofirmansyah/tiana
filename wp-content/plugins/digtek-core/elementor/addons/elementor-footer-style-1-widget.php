<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Footer_Style_1 extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-footer-style-1-widget';
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
		return esc_html__( 'Footer Style 1', 'digtek-core' );
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
			'logo_area',
			[
				'label' => esc_html__( 'Logo', 'digtek-core' ),
			]
		);		

		$this->add_control(
			'image',
				[
				  'label' => __( 'Logo', 'digtek-core' ),
				  'type' => Controls_Manager::MEDIA,
				  'default' => ['url' => Utils::get_placeholder_image_src(),],
				]
		);	
		
		$this->add_control(
			'alt_text',
			[
				'label'       => __( 'Logo Alt text', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Your Text', 'digtek-core' ),
			]
		);

		$this->add_control(
			'text',
			[
				'label'       => __( 'Text', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Your Text', 'digtek-core' ),
			]
		);

		$this->end_controls_section();

		// Tab Start - 2

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Socials Icon Block', 'digtek-core' ),
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


		// Tab Start - 3

		$this->start_controls_section(
			'title_section',
			[
				'label' => esc_html__( 'Menu Title', 'digtek-core' ),
			]
		);

		$this->add_control(
			'title',
			[
				'label'       => __( 'Title', 'digtek-core' ),
				'type'        => Controls_Manager::TEXT,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Your Text', 'digtek-core' ),
			]
		);

		$this->end_controls_section();


		// Tab Start - 4

		$this->start_controls_section(
			'content_section_2',
			[
				'label' => __( 'Menu Block', 'digtek-core' ),
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
						['block_title' => esc_html__('Projects Completed', 'digtek-core')],
					],
				'fields' => 
					[	

						'block_title' =>
						[
							'name' => 'block_title',
							'label' => esc_html__('Enter The Title', 'digtek-core'),
							'type' => Controls_Manager::TEXT,							
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


		// Tab Start - 5


		$this->start_controls_section(
			'title_section_2',
			[
				'label' => esc_html__( 'Blog & Contact Title Section', 'digtek-core' ),
			]
		);

		$this->add_control(
			'title2',
			[
				'label'       => __( 'Blog Title', 'digtek-core' ),
				'type'        => Controls_Manager::TEXT,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Your Text', 'digtek-core' ),
			]
		);

		$this->add_control(
			'title3',
			[
				'label'       => __( 'Title', 'digtek-core' ),
				'type'        => Controls_Manager::TEXT,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Your Text', 'digtek-core' ),
			]
		);

		$this->end_controls_section();


		// Tab Start - 6


		$this->start_controls_section(
			'content_section_3',
			[
				'label' => __( 'Contact Info Block', 'digtek-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
		  'repeat_3', 
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
							'label' => esc_html__('Enter The Title', 'digtek-core'),
							'type' => Controls_Manager::TEXT,							
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


		// Tab Start - 7-1

		$this->start_controls_section(
			'contact_form_area',
			[
				'label' => esc_html__( 'Contact Form', 'digtek-core' ),
			]
		);

		$this->add_control(
			'contact_form',
			[
				'label'       => __( 'Contact Form Shortcode', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter your Contact Form Shortcode', 'digtek-core' ),
				'default'     => __( '', 'digtek-core' ),
			]
		);

		$this->add_control(
			'agree_text',
			[
				'label'       => __( 'Agree Text', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Your Text', 'digtek-core' ),
			]
		);

		$this->end_controls_section();

		// Tab Start - 7-2

		$this->start_controls_section(
			'title_section_3',
			[
				'label' => esc_html__( 'Copyright Text', 'digtek-core' ),
			]
		);

		$this->add_control(
			'text2',
			[
				'label'       => __( 'Text', 'digtek-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Your Text', 'digtek-core' ),
			]
		);

		$this->end_controls_section();


		// Tab Start - 8

		$this->start_controls_section(
			'content_section_4',
			[
				'label' => __( 'Privacy Text Block', 'digtek-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
		  'repeat_4', 
			[
				'type' => Controls_Manager::REPEATER,
				'separator' => 'before',
				'default' => 
					[
						['block_title' => esc_html__('Projects Completed', 'digtek-core')],
					],
				'fields' => 
					[	

						'block_title' =>
						[
							'name' => 'block_title',
							'label' => esc_html__('Enter The Title', 'digtek-core'),
							'type' => Controls_Manager::TEXT,							
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
				'label'     => __( 'Footer Background Color', 'digtek-core' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .footer-bg,.footer-widgets-wrapper .single-footer-widget .footer-content .footer-input .newsletter-btn' => 'background-color: {{VALUE}} !important',
				],
			]
		);

		// Card Background Color Control
		$this->add_control(
			'block_bg_color_1',
			[
				'label'     => __( 'Footer Bottom Color', 'digtek-core' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .footer-bottom,.footer-bottom .scroll-icon,.footer-widgets-wrapper .single-footer-widget .widget-head h3::after' => 'background: {{VALUE}} !important',
				],
			]
		);

		$this->end_controls_section();
		// End of Background Color Settings


			//========== Text Color Settings ==========================
		$this->start_controls_section(
			'text_color_block_settings',
			[
				'label' => __( 'Text Color Settings', 'digtek-core' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		// Title Color Control
		$this->add_control(
			'title_color',
			[
				'label'     => __( 'Footer Title Color', 'digtek-core' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .footer-widgets-wrapper .single-footer-widget .widget-head h3, .footer-widgets-wrapper .single-footer-widget .recent-post-area .recent-post-items .content h6 a' => 'color: {{VALUE}} !important',
				],
			]
		);

		// Text Color Control
		$this->add_control(
			'text_color',
			[
				'label'     => __( 'Footer Text Color', 'digtek-core' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .footer-widgets-wrapper .single-footer-widget .list-area li a, .footer-widgets-wrapper .single-footer-widget .footer-content p, .footer-widgets-wrapper .single-footer-widget, .footer-widgets-wrapper .single-footer-widget .recent-post-area .recent-post-items .content .post-date li, .footer-widgets-wrapper .single-footer-widget .footer-content .contact-info li a, .footer-widgets-wrapper .single-footer-widget .footer-content .contact-info li i, .footer-widgets-wrapper .single-footer-widget .footer-content .form-check' => 'color: {{VALUE}} !important',
				],
			]
		);

		// Socials Icon Color Control
		$this->add_control(
			'socials_color',
			[
				'label'     => __( 'Socials Icon Color', 'digtek-core' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .footer-content .social-icon a' => 'color: {{VALUE}} !important; border: 1px solid {{VALUE}} !important',
				],
			]
		);

		// Copyright Text Color Control
		$this->add_control(
			'copyright_color',
			[
				'label'     => __( 'Copyright Text Color', 'digtek-core' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .footer-bottom .footer-wrapper p, .footer-bottom .footer-wrapper .footer-menu li a' => 'color: {{VALUE}} !important',
				],
			]
		);

		$this->end_controls_section();
		// End of Text Color Settings



	
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

	<section class="footer-section footer-bg fix">
		<div class="container">
			<div class="footer-widgets-wrapper">
				<div class="row">
					<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
						<div class="single-footer-widget">
							<div class="widget-head">
							<?php  if ( !empty(esc_url($settings['image']['id']) )) : ?>  
								<a href="<?php echo esc_url(home_url('/')) ?>">
									<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
								</a>
							<?php endif;?>
							</div>
							<div class="footer-content">
								<?php if($settings['text']): ?>
								<p>
									<?php echo $settings['text'];?>
								</p>
								<?php endif; ?>
								<div class="social-icon d-flex align-items-center">
									<?php foreach($settings['repeat'] as $item):?>	
										<a href="<?php echo esc_url($item['block_button_link']['url']);?>"><i class="<?php echo str_replace("icon ", " ", esc_attr( $item['block_icons']['value']));?>"></i></a>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
						<div class="single-footer-widget">
							<?php if($settings['title']): ?>
							<div class="widget-head">
								<h3><?php echo $settings['title'];?></h3>
							</div>
							<?php endif; ?>
							<ul class="list-area">
								<?php foreach($settings['repeat_2'] as $item):?>	
								<li>
									<a href="<?php echo esc_url($item['block_button_link']['url']);?>">
										<i class="fa-solid fa-chevrons-right"></i>
										<?php echo wp_kses($item['block_title'], $allowed_tags);?>
									</a>
								</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
						<div class="single-footer-widget">

							<?php if($settings['title2']): ?>
							<div class="widget-head">
								<h3><?php echo $settings['title2'];?></h3>
							</div>
							<?php endif; ?>

							<div class="recent-post-area">
								<?php 
								// WP Query to fetch recent posts
								$recent_posts = new \WP_Query([
									'post_type'      => 'post',  // Fetch blog posts
									'posts_per_page' => 2,       // Number of posts to display
								]);

								if ($recent_posts->have_posts()) :
									while ($recent_posts->have_posts()) : $recent_posts->the_post(); 
								?>
								<div class="recent-post-items">
									<div class="thumb">
										<?php 
										// Check if the post has a featured image
										if (has_post_thumbnail()) : 
											the_post_thumbnail('thumbnail', ['alt' => get_the_title()]);
										else : 
										?>
											<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/news/default.jpg'); ?>" alt="default-img">
										<?php endif; ?>
									</div>
									<div class="content">
										<ul class="post-date">
											<li>
												<i class="fa-solid fa-calendar-days me-2"></i>
												<?php echo get_the_date('d M, Y'); ?>
											</li>
										</ul>
										<h6>
											<a href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										</h6>
									</div>
								</div>
								<?php 
									endwhile;
									wp_reset_postdata(); // Reset post data
								else : 
								?>
									<p>No recent posts found.</p>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".8s">
						<div class="single-footer-widget">
							<?php if($settings['title3']): ?>
							<div class="widget-head">
								<h3><?php echo $settings['title3'];?></h3>
							</div>
							<?php endif; ?>
							<div class="footer-content">
								<ul class="contact-info">
									<?php foreach($settings['repeat_3'] as $item):?>	
									<li>
										<i class="<?php echo str_replace("icon ", " ", esc_attr( $item['block_icons']['value']));?>"></i>
										<a href="<?php echo esc_url($item['block_button_link']['url']);?>"><?php echo wp_kses($item['block_title'], $allowed_tags);?></a>
									</li>
									<?php endforeach; ?>
								</ul>

								<div class="footer-input">
									<?php echo do_shortcode( $settings['contact_form'] );?>
								</div>
								<?php if($settings['agree_text']): ?>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
									<label class="form-check-label" for="flexCheckChecked">
										<?php echo $settings['agree_text'];?>
									</label>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-wrapper d-flex align-items-center justify-content-between">
					<?php if($settings['text2']): ?>
					<p class="wow fadeInLeft color-2" data-wow-delay=".3s">
						<?php echo $settings['text2'];?>
					</p>
					<?php endif; ?>
					<ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
						<?php foreach($settings['repeat_4'] as $item):?>	
						<li>
							<a href="<?php echo esc_url($item['block_button_link']['url']);?>">
								<?php echo wp_kses($item['block_title'], $allowed_tags);?>    
							</a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<a href="#" id="scrollUp" class="scroll-icon">
				<i class="far fa-arrow-up"></i>
			</a>
		</div>
	</section>



             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Footer_Style_1());