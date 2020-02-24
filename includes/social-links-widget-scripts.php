<?php
class social_links_widget_Scripts {

	public function __construct() {
		 $this->version = VERSION;
		add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'load_social_links_widget_assets_public' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'load_social_links_widget_assets_admin' ) );
		add_action( 'widgets_init', array( $this, 'register_social_links_widget' ) );
	}
	// load plugin textdomain
	public function load_textdomain() {
		 load_plugin_textdomain( 'social-links-widget', false, plugin_dir_path( __FILE__ ) . '/languages' );
	}
	// load plugin public assets
	public function load_social_links_widget_assets_public() {
		wp_enqueue_style( 'social-links-widget-style-css', PUBLIC_DIR . '/css/style.css', null, $this->version );
		wp_enqueue_style( 'social-links-widget-fontawesome-css', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', null, $this->version );
		wp_enqueue_script( 'social-links-widget-script-js', PUBLIC_DIR . '/js/main.js', array( 'jquery' ), $this->version, true );
	}
	// load plugin admin assets
	public function load_social_links_widget_assets_admin() {
		wp_enqueue_style( 'social-links-widget-style-css', ADMIN_DIR . '/css/style.css', null, $this->version );
		wp_enqueue_script( 'social-links-widget-script-js', ADMIN_DIR . '/js/main.js', array( 'jquery' ), $this->version, true );
	}

	// register widget class
	public function register_social_links_widget() {
		register_widget( 'Social_Links_Widget_Class' );
	}
}
new social_links_widget_Scripts();
