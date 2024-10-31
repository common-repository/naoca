<?php

function naocaNotices() {

    $settings = [
        'apiKeys' => [
            'naoca' => get_option('naoca_wat_key'),
            'googleMaps' => get_option('naoca_google_maps_api_key')
        ],
        'serviceVenues' => [
            'maps' => [
                'hidden' => get_option('naoca_service_venues_hide_map') ? true : false
            ]
        ],
        'profile' => [
            'wallpaper' => [
                'disabled' => get_option('naoca_profiles_disable_wallpaper') ? true : false
            ],
            'picturePlaceholder' => get_option('naoca_client_list_profile_placeholder') ? get_option('naoca_client_list_profile_placeholder') : 'generic',
        ],
        'urls' => [
            'clientPage' => get_option('naoca_client_page_url') ? get_page_link(get_option('naoca_client_page_url')) : ''
        ],
        'display' => [
            'layout' => get_option('naoca_notices_layout') ? get_option('naoca_notices_layout') : 'list',
            'groupByDate' => get_option('naoca_notices_group') ? true : false,
            // 'search' => get_option('naoca_notices_search') ? true : false, // TODO - 1.2.6
            // 'perPage' => get_option('naoca_notices_per_page') ? get_option('naoca_notices_per_page') : 10 // TODO - 1.2.6
        ]
    ];

    $html = '<div class="n-plugin n-notices">
                <notices :settings=\'' . json_encode($settings) . '\'></notices>
            </div>';

    return $html;

}

function naocaClient() {

    $settings = [
        'apiKeys' => [
            'naoca' => get_option('naoca_wat_key'),
            'googleMaps' => get_option('naoca_google_maps_api_key')
        ],
        'condolences' => [
            'disabled' => get_option('naoca_condolences_disable') ? true : false,
            'hidden' => get_option('naoca_condolences_hide') ? true : false
        ],
        'serviceVenues' => [
            'maps' => [
                'hidden' => get_option('naoca_service_venues_hide_map') ? true : false
            ]
        ],
        'reactions' => [
            'disabled' => get_option('naoca_reactions_disable') ? true : false,
            'list' => get_option('naoca_reactions_list') ? get_option('naoca_reactions_list') : []
        ],
        'profile' => [
            'wallpaper' => [
                'disabled' => get_option('naoca_profiles_disable_wallpaper') ? true : false
            ],
            'picturePlaceholder' => get_option('naoca_client_list_profile_placeholder') ? get_option('naoca_client_list_profile_placeholder') : 'generic',
        ]
    ];

    $html = '<div class="n-plugin n-client">
                <client :settings=\'' . json_encode($settings) . '\'></client>
            </div>';

    return $html;

}

function naocaClientList() {

    $settings = [
        'apiKeys' => [
            'naoca' => get_option('naoca_wat_key'),
        ],
        'profile' => [
            'picturePlaceholder' => get_option('naoca_client_list_profile_placeholder') ? get_option('naoca_client_list_profile_placeholder') : 'generic',
        ],
        'urls' => [
            'clientPage' => get_option('naoca_client_page_url') ? get_page_link(get_option('naoca_client_page_url')) : ''
        ]
    ];

    $html = '<div class="n-plugin n-client-list">
                <client-list :settings=\'' . json_encode($settings) . '\'></client-list>
            </div>';

    return $html;

}