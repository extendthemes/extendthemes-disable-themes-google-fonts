<?php

/*
 *	Plugin Name: ExtendThemes disable theme Google Fonts
 *  Author: ExtendThemes
 *  Description: This plugin will deactivate all requests to Google Fonts servers for ExtendThemes themes
 *
 * License: GPLv3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 * Version: 1.4.3
 */

add_action('wp_enqueue_scripts', function () {
    
    $theme = wp_get_theme();
    
    $textDomain = $theme->get('TextDomain');
    
    if ($theme->get('Template')) {
        $templateData = wp_get_theme($theme->get('Template'));
        $textDomain   = $templateData->get('TextDomain');
    }
    
    wp_dequeue_style("{$textDomain}-fonts");
    wp_dequeue_style('kirki_google_fonts');
}, PHP_INT_MAX);