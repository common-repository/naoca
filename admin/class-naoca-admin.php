<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.naoca.com.au
 * @since      1.0.0
 *
 * @package    Naoca
 * @subpackage Naoca/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Naoca
 * @subpackage Naoca/admin
 * @author     George Inggs <web@naoca.com.au>
 */
class Naoca_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

        $this->plugin_name = $plugin_name;
        
        $this->version = $version;
        
		$this->build = '9';

        $this->registerSettings([

            // notices

            [
                'name' => 'naoca_notices_layout',
                'args' => [
                    'type' => 'string',
                    'default' => 'list'
                ]
            ],

            [
                'name' => 'naoca_notices_group',
                'args' => [
                    'type' => 'boolean',
                    'default' => true
                ]
            ],

            // client

            [
                'name' => 'naoca_profiles_disable_wallpaper',
                'args' => [
                    'type' => 'boolean',
                    'default' => false
                ]
            ], 

            [
                'name' => 'naoca_client_page_url',
                'args' => [
                    'type' => 'integer',
                    'default' => null
                ]
            ], 

            [
                'name' => 'naoca_service_venues_hide_map',
                'args' => [
                    'type' => 'boolean',
                    'default' => false
                ]
            ], 
 
            [
                'name' => 'naoca_condolences_disable',
                'args' => [
                    'type' => 'boolean',
                    'default' => false
                ]
            ],

            [
                'name' => 'naoca_condolences_hide',
                'args' => [
                    'type' => 'boolean',
                    'default' => false
                ]
            ],

            [
                'name' => 'naoca_reactions_disable',
                'args' => [
                    'type' => 'boolean',
                    'default' => false
                ]
            ],

            [
                'name' => 'naoca_reactions_list',
                'args' => [
                    'type' => 'array',
                    'default' => false
                ]
            ],

            // client list

            [
                'name' => 'naoca_client_list_profile_placeholder',
                'args' => [
                    'type' => 'string',
                    'default' => 'generic'
                ]
            ],
            
            // apis

            [
                'name' => 'naoca_wat_key',
                'args' => [
                    'type' => 'string',
                    'default' => ''
                ]
            ], [
                'name' => 'naoca_google_maps_api_key',
                'args' => [
                    'type' => 'string',
                    'default' => ''
                ]
            ]

        ]);

        add_action('admin_enqueue_scripts', [ $this, 'registerScripts' ], 9999);

        add_action('admin_enqueue_scripts', [ $this, 'registerStyles' ], 9999);

        // Lets add an action to setup the admin menu in the left nav
        add_action('admin_menu', array($this, 'add_admin_menu'));

    }

	/**
	 * Add the menu items to the admin menu
	 *
	 * @since    1.0.0
	 */
	public function add_admin_menu() {

	  	add_menu_page(
			'Naoca - Options',
			'Naoca',
			'manage_options',
			'naoca',
			[ $this, 'display_naoca_admin_page' ],
			plugin_dir_url(__FILE__) . 'images/logo.png',
            65
        );

	}

	/**
	 * Callback function for displaying the admin settings page.
	 *
	 * @since    1.0.0
	 */
	public function display_naoca_admin_page() {
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/naoca-admin-display.php';
	}
    
    public function registerSettings($settings)
    {
        foreach($settings as $setting) {
			register_setting('naoca-options', $setting['name'], $setting['args']);
        }
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
                'resource' => plugin_dir_url(dirname( __FILE__ )) . 'admin/js/index.js?build=' . $this->version . '.' . $this->build,
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
     * @param array $styles
     * 
     * @return void
     */
    public function registerStyles()
    {
        $styles = [
            'admin' => [
                'resource' => plugin_dir_url(dirname( __FILE__ )) . 'admin/css/styles.css?build=' . $this->version . '.' . $this->build
            ]
        ];

        foreach ($styles as $handle => $style) {
        
            wp_register_style($handle, $style['resource']);
        
            wp_enqueue_style($handle);
        
        }
    }

}