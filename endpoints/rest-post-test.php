<?php
add_action('rest_api_init', 'rest_test_route');

function rest_test_route()
{
    register_rest_route(
        'api',
        'v1/rest-post-test',
        array(
            'methods' => 'POST',
            'callback' => 'rest_test',
        )
    );
}

function rest_test($req)
{
    // wp_verify_nonce('wp_rest');
    
    return new WP_REST_Response('This is a POST Route', array('status' => 200));

    // Example Error
    // return new WP_Error('Bad Request', __('invalid params'), array('status' => 400));

}