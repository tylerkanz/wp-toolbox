<?php
add_action('rest_api_init', 'rest_form_route');

function rest_form_route()
{
    register_rest_route(
        'api',
        'v1/rest-form-test',
        array(
            'methods' => 'POST',
            'callback' => 'rest_form_test',
        )
    );
}

function rest_form_test($req)
{
    // wp_verify_nonce('wp_rest');
    



    return new WP_REST_Response('Added Data', array('status' => 200));

    // Example Error
    // return new WP_Error('Bad Request', __('invalid params'), array('status' => 400));

}