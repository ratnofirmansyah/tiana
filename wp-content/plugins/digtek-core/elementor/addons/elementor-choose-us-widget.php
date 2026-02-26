<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Choose_Us extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-choose-us-widget';
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
		return esc_html__( 'Choose Us', 'digtek-core' );
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
			'choose_us',
			[
				'label' => esc_html__( 'Choose Us', 'digtek-core' ),
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

		$this->end_controls_section();

		// Tab Start - 2

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Project List Block', 'digtek-core' ),
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
							'label' => esc_html__('Subtitle', 'digtek-core'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'digtek-core'),
						],						
						
					],
				'title_field' => '{{block_title}}',
			 ]
		);
		
		
		$this->end_controls_section();	


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
							'{{WRAPPER}} .content p' => 'display: {{VALUE}} !important',
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
							'{{WRAPPER}} .content p' => 'text-align: {{VALUE}} !important',
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
							'{{WRAPPER}} .content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
							'{{WRAPPER}} .content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
						],
					]
				);
			
				// Subtitle Typography Control
				$this->add_group_control(
					\Elementor\Group_Control_Typography::get_type(),
					[
						'name'       => 'subtitle_typography',
						'label'      => __( 'Typography', 'digtek-core' ),
						'selector'   => '{{WRAPPER}} .content p',
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
							'{{WRAPPER}} .content p' => 'color: {{VALUE}} !important',
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
							'{{WRAPPER}} .content p' => 'background-color: {{VALUE}} !important',
						],
					]
				);
			
				$this->end_controls_section();
			
				// End of Subtitle Settings ==================

				
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
					'{{WRAPPER}} .feature-box-items .icon' => 'display: {{VALUE}} !important',
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
					'{{WRAPPER}} .feature-box-items .icon' => 'text-align: {{VALUE}} !important',
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
					'{{WRAPPER}} .feature-box-items .icon' => 'color: {{VALUE}} !important',

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
					'{{WRAPPER}} .feature-box-items .icon' => 'background: {{VALUE}} !important',

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
					'{{WRAPPER}} .feature-box-items .icon:hover' => 'color: {{VALUE}} !important',

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
					'{{WRAPPER}} .feature-box-items .icon:hover' => 'background: {{VALUE}} !important',

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
					'{{WRAPPER}} .feature-box-items .icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
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
					'{{WRAPPER}} .feature-box-items .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
				),
			)
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			array(
				'name'     => 'icon_typography',
				'condition'    => array( 'show_icon' => 'show' ),
				'label'    => __( 'Typography', 'digtek-core' ),
				'selector' => '{{WRAPPER}} .feature-box-items .icon',
			)
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			array(
				'name' => 'icon_border',
				'condition'    => array( 'show_icon' => 'show' ),
				'selector' => '{{WRAPPER}} .feature-box-items .icon',
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
					'{{WRAPPER}} .feature-box-items .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important',
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


	<div class="row">
		<?php foreach($settings['repeat'] as $item):?>	
		<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
			<div class="feature-box-items">
				<div class="icon">
					<i class="<?php echo str_replace("icon ", " ", esc_attr( $item['block_icons']['value']));?>"></i>
				</div>
				<div class="content">
					<h3><?php echo wp_kses($item['block_title'], $allowed_tags);?></h3>
					<p>
						<?php echo wp_kses($item['block_subtitle'], $allowed_tags);?>
					</p>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
		<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
			<div class="feature-box-image bg-cover" style="background-image: url('<?php echo wp_get_attachment_url($settings['bg_image']['id']);?>');">
			<?php  if ( !empty(esc_url($settings['image']['id']) )) : ?>   
				<img src="<?php echo wp_get_attachment_url($settings['image']['id']);?>" alt="<?php echo esc_attr($settings['alt_text']);?>"/>
			<?php endif;?>
			</div>
		</div>
	</div>


             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Choose_Us());