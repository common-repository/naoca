<?php settings_errors(); ?>

<form method="POST" action="options.php">

    <?php settings_fields('naoca-options'); ?>

    <div class="container">

        <div class="row">
            <div class="col-12">

                <div class="naoca-settings card">

                    <div class="naoca-settings card-header">

                        <ul class="nav nav-tabs" id="tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="notices-tab" data-toggle="tab" href="#tab-settings-notices" role="tab" aria-controls="settings-notices" aria-selected="false">Notices</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="client-tab" data-toggle="tab" href="#tab-settings-client" role="tab" aria-controls="settings-client" aria-selected="false">Client</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="client-list-tab" data-toggle="tab" href="#tab-settings-client-list" role="tab" aria-controls="settings-client-list" aria-selected="true">Client List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="apis-tab" data-toggle="tab" href="#tab-settings-apis" role="tab" aria-controls="settings-apis" aria-selected="false">APIs</a>
                            </li>
                        </ul>

                    </div>

                    <div class="naoca-settings card-body">

                        <div class="tab-content" id="tabsContent">
                            <div class="tab-pane p-3 show active" id="tab-settings-notices" role="tabpanel" aria-labelledby="tab-settings-notices">
                                <?php require_once plugin_dir_path( dirname( __FILE__ ) ) . 'tabs/settings/notices.php'; ?>
                            </div>
                            <div class="tab-pane p-3" id="tab-settings-client" role="tabpanel" aria-labelledby="tab-settings-client">
                                <?php require_once plugin_dir_path( dirname( __FILE__ ) ) . 'tabs/settings/client.php'; ?>
                            </div>
                            <div class="tab-pane p-3" id="tab-settings-client-list" role="tabpanel" aria-labelledby="tab-settings-client-list">
                                <?php require_once plugin_dir_path( dirname( __FILE__ ) ) . 'tabs/settings/client-list.php'; ?>
                            </div>
                            <div class="tab-pane p-3" id="tab-settings-apis" role="tabpanel" aria-labelledby="tab-settings-apis">
                                <?php require_once plugin_dir_path( dirname( __FILE__ ) ) . 'tabs/settings/apis.php'; ?>
                            </div>
                        </div>

                    </div>

                    <div class="naoca-settings card-footer d-flex justify-content-end py-3">
                        <?php submit_button(); ?>
                    </div>

                </div>

            </div>        
        </div>
    
    </div>

</form>