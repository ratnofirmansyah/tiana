<?php

/**
 * Elementor Addons Init
 * @package digtek
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit(); // exit if access directly
}

if ( ! class_exists( 'Digtek_Elementor_Widget_Init' ) ) {

	class Digtek_Elementor_Widget_Init {
	   /**
		* $instance
		* @since 1.0.0
		*/
		private static $instance;

	   /**
		* construct()
		* @since 1.0.0
		*/
		public function __construct() {
			add_action( 'elementor/elements/categories_registered', array( $this, '_widget_categories' ) );
			//elementor widget registered
			add_action( 'elementor/widgets/widgets_registered', array( $this, '_widget_registered' ) );
			// elementor editor css
			add_action( 'elementor/editor/after_enqueue_scripts', array( $this, 'load_assets_for_elementor' ) );

			// for icomoon icon
			add_action( 'init', [ $this, 'i18n' ] );
			// for icomoon icon
			add_action( 'plugins_loaded', [ $this, 'init' ] );
		}

		public function i18n() {
			load_plugin_textdomain( 'digtek-core' );
		}

		/**
	     * getInstance()
	     * @since 1.0.0
	     */
		public static function getInstance() {
			if ( null == self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		/**
		 * _widget_categories()
		 * @since 1.0.0
		 */
		public function _widget_categories( $elements_manager ) {
			$elements_manager->add_category(
				'digtek_widgets',
				[
					'title' => esc_html__( 'Digtek Widgets', 'digtek-core' ),
					'icon'  => 'fas fa-plug',
				]
			);
		}

		/**
		 * _widget_registered()
		 * @since 1.0.0
		 */
		public function _widget_registered() {
			if ( ! class_exists( 'Elementor\Widget_Base' ) ) {
				return;
			}
			$elementor_widgets = array(				
		
				'banner',
				'banner-2',
				'text-slider',
				'heading-title',
				'service-grid',
				'brand-about',
				'theme-button',
				'project-grid',
				'success-rocket',
				'pricing-button',
				'pricing-plan',
				'testimonials',
				'contact-map',
				'blog-post',
				'footer-cta',
				'banner-with-brand',
				'choose-us',
				'image-cta',
				'project-grid-2',
				'marketing-cta',
				'icon-card',
				'theme-accordion',
				'image-styles',
				'team-grid',
				'contact-form',
				'footer-style-1',

			);

			$elementor_widgets = apply_filters( 'digtek_elementor_widget', $elementor_widgets );
			ksort( $elementor_widgets );
			if ( is_array( $elementor_widgets ) && ! empty( $elementor_widgets ) ) {
				foreach ( $elementor_widgets as $widget ) {
					if ( file_exists( DIGTEK_CORE_ELEMENTOR . '/addons/elementor-' . $widget . '-widget.php' ) ) {
						require_once DIGTEK_CORE_ELEMENTOR . '/addons/elementor-' . $widget . '-widget.php';
					}
				}
			}
		}	

		/**
		 * load custom assets for elementor
		 * @since 1.0.0
		*/
		public function load_assets_for_elementor() {
			wp_enqueue_style( 'digtek-core-elementor-style', DIGTEK_CORE_ADMIN_ASSETS . '/css/elementor-editor.css' );
		}

		/**
		 * load custom icons for elementor
		 * @since 1.0.0
		*/

		public function init() {
			add_action( 'elementor/widgets/register', [ $this, 'init_widgets' ] );
		}

		public function init_widgets() {
			require_once plugin_dir_path( __FILE__ ) . '../customicon/icon.php';
		}
	}

	if ( class_exists( 'Digtek_Elementor_Widget_Init' ) ) {
		Digtek_Elementor_Widget_Init::getInstance();
	}
}//end if
