<div class="row mb-2">
    <div class="col-12">
        <h6>Client Page</h6>
    </div>
</div>

<div class="row mb-4">
    <div class="col">

        <?php 
            wp_dropdown_pages([
                'class' => 'form-control',
                'name' => 'naoca_client_page_url',
                'selected' => get_option('naoca_client_page_url')
            ]); 
        ?>

    </div>  
</div>

<div class="row mb-2">
    <div class="col-12">
        <h6>Profiles</h6>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-4">

        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="naoca_profiles_disable_wallpaper" name="naoca_profiles_disable_wallpaper" value="1" <?php if (get_option('naoca_profiles_disable_wallpaper') == 1) { ?> checked <?php } ?>>
            <label class="custom-control-label" for="naoca_profiles_disable_wallpaper">Disable wallpaper</label>
        </div>

    </div>
</div>

<div class="row mb-2 mt-4">
    <div class="col-12">
        <h6>Service Venues</h6>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-4">

        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="naoca_service_venues_hide_map" name="naoca_service_venues_hide_map" value="1" <?php if (get_option('naoca_service_venues_hide_map') == 1) { ?> checked <?php } ?>>
            <label class="custom-control-label" for="naoca_service_venues_hide_map">Hide Map</label>
        </div>

    </div>
</div>

<div class="row mb-2 mt-4">
    <div class="col-12">
        <h6>Condolences</h6>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-4">

        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="naoca_condolences_disable" name="naoca_condolences_disable" value="1" <?php if (get_option('naoca_condolences_disable') == 1) { ?> checked <?php } ?>>
            <label class="custom-control-label" for="naoca_condolences_disable">Disable Condolences</label>
        </div>

    </div>
</div>

<div class="row mb-3">
    <div class="col-md-4">

        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="naoca_condolences_hide" name="naoca_condolences_hide" value="1" <?php if (get_option('naoca_condolences_hide') == 1) { ?> checked <?php } ?>>
            <label class="custom-control-label" for="naoca_condolences_hide">Hide Condolences</label>
        </div>

    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <h6>Reactions</h6>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">

        <div class="d-flex">

            <div class="custom-control custom-checkbox mr-3 d-flex align-items-center">
                <input type="checkbox" name="naoca_reactions_list[128077]" class="custom-control-input" id="128077" <?php if (isset(get_option('naoca_reactions_list')[128077]) && get_option('naoca_reactions_list')[128077] == 'on') { ?> checked <?php } ?>>
                <label class="custom-control-label reaction-icon" for="128077" style="font-size: 1.5rem;">&#128077;</label>
            </div>

            <div class="custom-control custom-checkbox mr-3 d-flex align-items-center">
                <input type="checkbox" name="naoca_reactions_list[10084]" class="custom-control-input" id="10084" <?php if (isset(get_option('naoca_reactions_list')[10084]) && get_option('naoca_reactions_list')[10084] == 'on') { ?> checked <?php } ?>>
                <label class="custom-control-label reaction-icon" for="10084" style="font-size: 1.5rem;">&#10084;</label>
            </div>

            <div class="custom-control custom-checkbox mr-3 d-flex align-items-center">
                <input type="checkbox" name="naoca_reactions_list[128546]" class="custom-control-input" id="128546" <?php if (isset(get_option('naoca_reactions_list')[128546]) && get_option('naoca_reactions_list')[128546] == 'on') { ?> checked <?php } ?>>
                <label class="custom-control-label reaction-icon" for="128546" style="font-size: 1.5rem;">&#128546;</label>
            </div>
            
            <div class="custom-control custom-checkbox mr-3 d-flex align-items-center">
                <input type="checkbox" name="naoca_reactions_list[129315]" class="custom-control-input" id="129315" <?php if (isset(get_option('naoca_reactions_list')[129315]) && get_option('naoca_reactions_list')[129315] == 'on') { ?> checked <?php } ?>>
                <label class="custom-control-label reaction-icon" for="129315" style="font-size: 1.5rem;">&#129315;</label>
            </div>

        </div>

    </div>
</div>

<div class="row mb-3">
    <div class="col-md-4">

        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="naoca_reactions_disable" name="naoca_reactions_disable" value="1" <?php if (get_option('naoca_reactions_disable') == 1) { ?> checked <?php } ?>>
            <label class="custom-control-label" for="naoca_reactions_disable">Disable Reactions</label>
        </div>

    </div>
</div>