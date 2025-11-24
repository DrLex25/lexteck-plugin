<?php

if (!defined('ABSPATH')) exit;

class LexTeck_Shortcodes {

    public function __construct() {
        add_shortcode('lexteck_demo', [$this, 'demo_shortcode']);
    }

    public function demo_shortcode() {
        ob_start(); ?>

        <div style="padding:20px; background:#111; color:#fff; border-radius:8px;">
            <h3>LexTeck Plugin Shortcode</h3>
            <p>This is a demo shortcode from your plugin.</p>
        </div>

        <?php
        return ob_get_clean();
    }
}
