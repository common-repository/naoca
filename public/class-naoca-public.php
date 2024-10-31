<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.naoca.com.au
 * @since      1.0.0
 *
 * @package    Naoca
 * @subpackage Naoca/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Naoca
 * @subpackage Naoca/public
 * @author     George Inggs <web@naoca.com.au>
 */
class Naoca_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
    private $version;

    /**
	 * The build of this plugin.
	 *
	 * @since    1.2.2
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
    private $build;
    
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

        $this->plugin_name = $plugin_name;
        
        $this->version = $version;

		$this->build = '9';

        add_action('wp_enqueue_scripts', [ $this, 'registerScripts' ], 9999);

        add_action('wp_enqueue_scripts', [ $this, 'registerStyles' ], 9999);

        $this->registerShortCodes();

    }

    /**
     * Registers and enqueues javascript files
     *
     * @return void
     */
    public function registerScripts()
    {
        $scripts = [
            'naoca' => [
                'resource' => plugin_dir_url(dirname( __FILE__ )) . 'public/js/index.js?build=' . $this->version . '.' . $this->build,
                'defer' => true
            ]
        ];

        foreach ($scripts as $handle => $script) {

            wp_register_script($handle, $script['resource']);

            wp_enqueue_script($handle);

        }

        // handle script tag defer attribute - can add more here later
        add_filter('script_loader_tag', function($tag, $handle) use ($scripts) {

            // defer the script
            if (isset($scripts[$handle])) {

                if ($scripts[$handle]['defer']) {
                    return str_replace(' src', ' defer src', $tag);
                }

            }

            return $tag;
        
        }, 10, 2);

    }

    /**
     * Registers and enqueues stylesheets
     * 
     * @return void
     */
    public function registerStyles()
    {
        $styles = [
            'public' => [
                'resource' => plugin_dir_url(dirname( __FILE__ )) . 'public/css/styles.css?build=' . $this->version . '.' . $this->build
            ]
        ];

        foreach ($styles as $handle => $style) {

            wp_register_style($handle, $style['resource']);

            wp_enqueue_style($handle);

        }
    }

    /**
     * Registers and enqueues shortcodes
     *
     * @return void
     */
    public function registerShortCodes()
    {
        require_once plugin_dir_path( __FILE__ ) . 'shortcodes.php';

        add_shortcode('naoca-client-list', 'naocaClientList');

        add_shortcode('naoca-client', 'naocaClient');

        add_shortcode('naoca-notices', 'naocaNotices');
    }
}