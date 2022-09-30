<?php
if (!function_exists('infinity_register_theme_plugins')):
	function infinity_register_theme_plugins() {
		$plugins = [
			[
				'name' => 'ThemeMove Core',
				'slug' => 'thememove-core',
				'source' => 'https://drive.google.com/uc?export=download&id=0By5Ytx4iv5jwaEtZMDJuQndWN0k',
				'version' => '1.3.5.1',
				'required' => true,
			],
			[
				'name' => 'WP Bakery Page Builder',
				'slug' => 'js_composer',
				'source' => 'https://bitbucket.org/digitalcreative/thememove-plugins/raw/14f6077fa4f24436f190b6b13d5b7a9e66984814/js_composer.zip',
				'version' => '6.0.5',
				'required' => false,
			],
			[
				'name' => 'Essential Grid',
				'slug' => 'essential-grid',
				'source' => 'https://bitbucket.org/digitalcreative/thememove-plugins/raw/417b91a8fcdfbc49a857cf8ef4aff76e67f1f35c/essential-grid.zip',
				'version' => '2.3.2',
				'required' => false,
			],
			[
				'name' => 'Revolution Slider',
				'slug' => 'revslider',
				'source' => 'https://bitbucket.org/digitalcreative/thememove-plugins/raw/14f6077fa4f24436f190b6b13d5b7a9e66984814/revslider.zip',
				'version' => '6.0.9',
				'required' => false,
			],
			[
				'name' => 'Testimonials by WooThemes',
				'slug' => 'testimonials-by-woothemes',
				'required' => false,
			],
			[
				'name' => 'WooCommerce',
				'slug' => 'woocommerce',
				'required' => false,
			],
			[
				'name' => 'Widget Logic',
				'slug' => 'widget-logic',
				'required' => false,
			],
			[
				'name' => 'Contact Form 7',
				'slug' => 'contact-form-7',
				'required' => false,
			],
		];

		$config = [
			'id' => 'tgmpa',
			'default_path' => '',
			'menu' => 'tgmpa-install-plugins',
			'parent_slug' => 'themes.php',
			'capability' => 'edit_theme_options',
			'has_notices' => true,
			'dismissable' => false,
			'dismiss_msg' => '',
			'is_automatic' => true,
			'message' => '',
		];

		tgmpa($plugins, $config);

	}

	add_action('tgmpa_register', 'infinity_register_theme_plugins');
endif;
