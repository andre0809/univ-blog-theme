<?php
	function my_theme_file() {
		wp_enqueue_style('my_theme_styles', get_stylesheet_uri(), NULL, microtime());
		wp_enqueue_style('my_theme_base', get_theme_file_uri('css/base.css'));
		wp_enqueue_style('my_theme_vendor', get_theme_file_uri('css/vendor.css'));
		wp_enqueue_style('my_theme_fontawesome', get_theme_file_uri('css/font-awesome/css/fontawesome-all.css'));
		wp_enqueue_script('js_script_modern', get_theme_file_uri('js/modernizr.js'),NULL,'2.0', TRUE);
		wp_enqueue_script('js_script', get_theme_file_uri('js/jquery-3.2.1.min.js'),NULL,'2.0', TRUE);
		wp_enqueue_script('js_script_pl', get_theme_file_uri('js/plugins.js'),NULL,'2.0', TRUE);
		wp_enqueue_script('js_script_main', get_theme_file_uri('js/main.js'),NULL,'2.0', TRUE);
	}
	function title_features() {
		add_theme_support('title-tag'); 
	}

	add_action('wp_enqueue_scripts','my_theme_file');
	add_action('after_setup_theme','title_features');
?>