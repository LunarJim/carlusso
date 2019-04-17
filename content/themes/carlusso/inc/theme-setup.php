<?php

if (!function_exists('carlusso_setup')):

    function carlusso_setup() {

        // Je déclare à WordPress que mon thème supporte la fonctionnalité "title-tag"
        // WP va donc me générer une balise title dans mon header (grace au hook wp_head)
        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');
    }

endif;

add_action('after_setup_theme', 'carlusso_setup');