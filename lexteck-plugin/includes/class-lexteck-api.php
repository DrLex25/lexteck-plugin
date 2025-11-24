<?php

if (!defined('ABSPATH')) exit;

class LexTeck_API {

    public function __construct() {
        // future hooks here
    }

    // Sample API call
    public function send_api_request($endpoint, $data) {

        $response = wp_remote_post($endpoint, [
            'body' => $data,
            'timeout' => 45,
        ]);

        if (is_wp_error($response)) {
            return [
                'status' => false,
                'message' => $response->get_error_message()
            ];
        }

        return json_decode(wp_remote_retrieve_body($response), true);
    }

}
