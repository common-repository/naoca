<div class="row mb-2">
    <div class="col-12">
        <h6>Profile Picture Placeholder</h6>
    </div>
</div>

<div class="row mb-3">
    <div class="col">

        <div>
            <select name="naoca_client_list_profile_placeholder" class="custom-select">
                <option value="none" <?php if (get_option('naoca_client_list_profile_placeholder') == 'none') { ?> selected <?php } ?>>None</option>
                <option value="light" <?php if (get_option('naoca_client_list_profile_placeholder') == 'light') { ?> selected <?php } ?>>Light</option>
                <option value="generic" <?php if (get_option('naoca_client_list_profile_placeholder') == 'generic') { ?> selected <?php } ?>>Generic</option>
            </select>
        </div>

    </div>  
</div>