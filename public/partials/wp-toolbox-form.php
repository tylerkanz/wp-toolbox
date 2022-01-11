<?php
add_shortcode('test-form', 'test_form');

function test_form()
{
    /*****************************************
              Cookie Authentication
     *****************************************/

    wp_localize_script('wp-api', 'wpApiSettings', array('root' => esc_url_raw(rest_url()), 'nonce' => wp_create_nonce('wp_rest')));
    wp_enqueue_script('wp-api');
    wp_enqueue_style( 'wp-toolbox-js', '../js/wp-toolbox-public.js' );

    global $wpdb;
    $user_id = get_current_user_id();
?>
    <div class="container">
        <div class="row p-4 d-flex align-items-center justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                            <h3>Insert Test Data</h3>
                            <p>This data will be inserted into the "maybe" create table.</p>
                            <form class="row d-flex align-items-center">
                                <div class="col-sm-8">
                                    <input id="testData" name="testData" type="text" class="woocommerce-Input woocommerce-Input--text input-text">
                                </div>
                                <div class="col-sm-4">
                                    <button name="submit" type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php
}
?>