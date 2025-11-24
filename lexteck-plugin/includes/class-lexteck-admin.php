<?php

if (!defined('ABSPATH')) exit;

class LexTeck_Admin {

    public function __construct() {
        add_action('admin_menu', [$this, 'create_menu']);
    }

    public function create_menu() {
        add_menu_page(
            'LexTeck Plugin',
            'LexTeck Plugin',
            'manage_options',
            'lexteck-plugin',
            [$this, 'admin_page'],
            'dashicons-admin-generic'
        );
    }

    public function admin_page() { ?>
        <div class="wrap">
            <h1>LexTeck Plugin Dashboard</h1>
            <p>Welcome to your custom plugin dashboard.</p>
        </div>
    <?php }
}
