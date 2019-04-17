<?php

if (!function_exists('carlusso_scripts')):

    function carlusso_scripts() {

        wp_enqueue_style(
            'carlusso_app_css',
            get_theme_file_uri('public/css/app.css'),
            ['carlusso_vendor_css'],
            '1.0.0'
        );

        wp_enqueue_style(
            'carlusso_vendor_css',
            get_theme_file_uri('public/css/vendor.css'),
            [],
            '1.0.0'
        );

        wp_enqueue_script(
            'carlusso_app_js',
            get_theme_file_uri('public/js/app.js'),
            ['carlusso_vendor_js'],
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'carlusso_vendor_js',
            get_theme_file_uri('public/js/vendor.js'),
            [],
            '1.0.0',
            true
        );
    }

endif;

add_action('wp_enqueue_scripts', 'carlusso_scripts');