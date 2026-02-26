<?php
namespace Elementor;

/**
 * Elementor Widget
 * @package Digtek
 * @since 1.0.0
 */ 
 
class Text_Slider extends Widget_Base {

	/**
	 * Get widget name.
	 * Retrieve button widget name.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digtek-text-slider-widget';
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
		return esc_html__( 'Text Slider', 'digtek-core' );
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
			'text_slider',
			[
				'label' => esc_html__( 'Text Slider', 'digtek-core' ),
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

						'block_title' =>
						[
							'name' => 'block_title',
							'label' => esc_html__('Title', 'digtek-core'),
							'type' => Controls_Manager::TEXTAREA,
							'default' => esc_html__('', 'digtek-core')
						],

						'block_class' =>
						[
							'name' => 'block_class',
							'label' => __( 'Select Text Style', 'digtek-core' ),
							'type' => Controls_Manager::SELECT,
							'options' => [
								'stroke-text' => __( 'Stroke', 'digtek-core' ),
								'' => __( 'Normal', 'digtek-core' ),
								],
								'default' => '',
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
						'{{WRAPPER}} .mycustom-marque.style-2 .scrolling-wrap .comm .cmn-textslide' => 'display: {{VALUE}} !important',
						'{{WRAPPER}} .mycustom-marque.style-3 .scrolling-wrap .comm .cmn-textslide' => 'display: {{VALUE}} !important',
						'{{WRAPPER}} .scrolling-wrap .comm .cmn-textslide' => 'display: {{VALUE}} !important',
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
						'{{WRAPPER}} .mycustom-marque.style-2 .scrolling-wrap .comm .cmn-textslide' => 'text-align: {{VALUE}}',
						'{{WRAPPER}} .mycustom-marque.style-3 .scrolling-wrap .comm .cmn-textslide' => 'text-align: {{VALUE}}',
						'{{WRAPPER}} .scrolling-wrap .comm .cmn-textslide' => 'text-align: {{VALUE}}',
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
						'{{WRAPPER}} .mycustom-marque.style-2 .scrolling-wrap .comm .cmn-textslide' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
						'{{WRAPPER}} .mycustom-marque.style-3 .scrolling-wrap .comm .cmn-textslide' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
						'{{WRAPPER}} .scrolling-wrap .comm .cmn-textslide' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
						'{{WRAPPER}} .mycustom-marque.style-2 .scrolling-wrap .comm .cmn-textslide' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
						'{{WRAPPER}} .mycustom-marque.style-3 .scrolling-wrap .comm .cmn-textslide' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
						'{{WRAPPER}} .scrolling-wrap .comm .cmn-textslide' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important',
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
					'selector'   => '{{WRAPPER}} .mycustom-marque.style-2 .scrolling-wrap .comm .cmn-textslide',
					'selector'   => '{{WRAPPER}} .mycustom-marque.style-3 .scrolling-wrap .comm .cmn-textslide',
					'selector'   => '{{WRAPPER}} .scrolling-wrap .comm .cmn-textslide',
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
						'{{WRAPPER}} .mycustom-marque.style-2 .scrolling-wrap .comm .cmn-textslide' => 'color: {{VALUE}} !important',
						'{{WRAPPER}} .mycustom-marque.style-3 .scrolling-wrap .comm .cmn-textslide' => 'color: {{VALUE}} !important',
						'{{WRAPPER}} .scrolling-wrap .comm .cmn-textslide' => 'color: {{VALUE}} !important',
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
						'{{WRAPPER}} .mycustom-marque.style-2 .scrolling-wrap .comm .cmn-textslide:hover' => 'color: {{VALUE}} !important',
						'{{WRAPPER}} .mycustom-marque.style-3 .scrolling-wrap .comm .cmn-textslide:hover' => 'color: {{VALUE}} !important',
						'{{WRAPPER}} .scrolling-wrap .comm .cmn-textslide:hover' => 'color: {{VALUE}} !important',
					],
				]
			);
		
			$this->end_controls_section();
			// End of Title Settings
		


	
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

	<div class="marquee-section-1">
		<div class="mycustom-marque style-2">
			<div class="scrolling-wrap">

				<div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
					<div class="cmn-textslide">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</div>
					<?php endforeach; ?>
				</div>

				<div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
					<div class="cmn-textslide">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</div>
					<?php endforeach; ?>
				</div>

				<div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
					<div class="cmn-textslide">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</div>
					<?php endforeach; ?>
				</div>

				<div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
					<div class="cmn-textslide">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</div>
					<?php endforeach; ?>
				</div>

			</div>
		</div>
		<div class="mycustom-marque style-3">
			<div class="scrolling-wrap">

				<div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
					<div class="cmn-textslide">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</div>
					<?php endforeach; ?>
				</div>

				<div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
					<div class="cmn-textslide">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</div>
					<?php endforeach; ?>
				</div>

				<div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
					<div class="cmn-textslide">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</div>
					<?php endforeach; ?>
				</div>

				<div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
					<div class="cmn-textslide">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</div>
					<?php endforeach; ?>
				</div>
				
			</div>
		</div>
	</div>

<?php  elseif ( 'style2' === $settings['style'] ) : ?>		

	<div class="marquee-section-1 marquee-2">
		<div class="mycustom-marque style-2 bg-2">
			<div class="scrolling-wrap">
				<div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
					<div class="cmn-textslide">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</div>
					<?php endforeach; ?>
				</div>
				<div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
					<div class="cmn-textslide">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</div>
					<?php endforeach; ?>
				</div>
				<div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
					<div class="cmn-textslide">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</div>
					<?php endforeach; ?>
				</div>
				<div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
					<div class="cmn-textslide">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="mycustom-marque style-3 bg-3">
			<div class="scrolling-wrap">
				<div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
					<div class="cmn-textslide">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</div>
					<?php endforeach; ?>
				</div>
				<div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
					<div class="cmn-textslide">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</div>
					<?php endforeach; ?>
				</div>
				<div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
					<div class="cmn-textslide">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</div>
					<?php endforeach; ?>
				</div>
				<div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
					<div class="cmn-textslide">
					<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
						<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
					<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>

	<?php  elseif ( 'style3' === $settings['style'] ) : ?>	

		<div class="marquee-section">
            <div class="mycustom-marque theme-blue-bg">
                <div class="scrolling-wrap">

                    <div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
                        <div class="cmn-textslide <?php echo esc_attr($item['block_class']); ?>">
						<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
							<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
						<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
						</div>
					<?php endforeach; ?>
                    </div>

                    <div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
                        <div class="cmn-textslide <?php echo esc_attr($item['block_class']); ?>">
						<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
							<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
						<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
						</div>
					<?php endforeach; ?>
                    </div>
					
                    <div class="comm">
					<?php foreach($settings['repeat'] as $item):?>	
                        <div class="cmn-textslide <?php echo esc_attr($item['block_class']); ?>">
						<?php if(!empty(wp_get_attachment_url($item['block_image']['id']))): ?>
							<img src="<?php echo wp_get_attachment_url($item['block_image']['id']);?>" alt="<?php echo wp_kses($item['block_alt_text'], $allowed_tags);?>">
						<?php endif;?>
						<?php echo wp_kses($item['block_title'], $allowed_tags);?>
						</div>
					<?php endforeach; ?>
                    </div>
				
                </div>
            </div>
        </div>

<?php endif ;?>	

             
		<?php 
	}


}

Plugin::instance()->widgets_manager->register_widget_type(new Text_Slider());