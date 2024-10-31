<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.naoca.com.au
 * @since      1.0.0
 *
 * @package    Naoca_Plugin
 * @subpackage Naoca_Plugin/admin/partials
 */
?>

<?php

    // Let see if we have a caching notice to show
    $admin_notice = get_option('naoca_admin_notice');

    if ($admin_notice) {

        delete_option('naoca_admin_notice'); // We have the notice from the DB, lets remove it.

        // $this->admin_notice($admin_notice); // Call the notice message

    }

    if (isset($_GET['settings-updated']) and $_GET['settings-updated']) {
        // $this->admin_notice('Changes have been saved');
    }

?>

<div class="container-fluid">

    <div class="row">
        <div class="col d-flex align-items-center py-4">

            <div>
                <a href="https://www.naoca.com.au" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo plugins_url('naoca/admin/images/logo-horizontal-color.png'); ?>" class="px-3" style="height: 50px;">
                </a>
            </div>

            <ul class="nav ml-auto" id="tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="settings-tab" data-toggle="tab" href="#tab-settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="about-tab" data-toggle="tab" href="#tab-about" role="tab" aria-controls="about" aria-selected="false">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://streaming.naoca.com.au/login" target="_blank" rel="noopener noreferrer">Log In</a>
                </li>
            </ul>

        </div>
    </div>

    <div class="row">
        <div class="col p-0">

            <div class="container-fluid bg-light" style="min-height: 80vh;">

                <div class="tab-content" id="tabsContent">
                    <div class="tab-pane p-3 show active" id="tab-settings" role="tabpanel" aria-labelledby="tab-settings">
                        <?php require_once plugin_dir_path( dirname( __FILE__ ) ) . 'partials/tabs/settings.php'; ?>
                    </div>
                    <div class="tab-pane p-3" id="tab-about" role="tabpanel" aria-labelledby="tab-about">
                        <?php require_once plugin_dir_path( dirname( __FILE__ ) ) . 'partials/tabs/about.php'; ?>
                    </div>
                </div>

            </div>
           
        </div>
    </div>

</div>