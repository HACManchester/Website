<?php
add_filter('theme_mod_melany_logo', 'forceHTTPSforSideBar', 10, 1);
add_action('wp_enqueue_scripts', 'hacmelany_scripts');
add_action('wp','hacman_protected_page_setup');

if (!function_exists('melany_footer_class')) {
    /**
     * Print CSS classes for site footer
     *
     * @since 1.0.0
     *
     * @param string $custom Optional. Custom CSS classes
     */
    function melany_footer_class($custom = '')
    {
        $class = 'site-footer navbar';
        $color = get_theme_mod('melany_navbar_color');
        if ($color == '' || empty($color)) {
            $color = 'inverse';
        }

        $class .= ' navbar-' . $color;

        if (!empty($custom)) {
            $class .= ' ' . $custom;
        }

        echo 'class="' . $class . '"';
    }
}

function forceHTTPSforSideBar($logoArg)
{
    return str_replace('http:', 'https:', $logoArg);
}

function hacmelany_scripts()
{
    wp_enqueue_style('hacman-style', get_stylesheet_directory_uri() . '/main.css', array('custom-style'));
}

function hacman_protected_page_setup() {
    global $wp_query;
    if (is_admin()) {
        return;
    }

    $page_template = basename(get_page_template());
    if ($page_template !== 'page-protected.php') {
        return;
    }

    if (!is_user_logged_in()) {
        global $wp_query;
        $wp_query->set_404();
        return;
    }
    global $post;

    $use_whitelist = get_field('use_whitelist', $post->ID);
    $whitelist = get_field('role_whitelist', $post->ID);
    $use_blacklist = get_field('use_blacklist', $post->ID);
    $blacklist = get_field('role_blacklist', $post->ID);

    if (!$use_whitelist && !$use_blacklist) {
        return;
    }

    if ($use_blacklist && $blacklist !== null) {
        if (!is_array($blacklist)) {
            $blacklist = array($blacklist);
        }
        $user_blacklist = array_map(function($role) { return current_user_can($role); }, $blacklist);
        $user_blacklist = array_filter($user_blacklist);
        if (count($user_blacklist) > 0) {
            $wp_query->set_404();
            return;
        }
    }

    if ($use_whitelist && $whitelist !== null) {
        if (!is_array($whitelist)) {
            $whitelist = array($whitelist);
        }
        $user_whitelist = array_map(function($role) { return current_user_can($role); }, $whitelist);
        $user_whitelist = array_filter($user_whitelist);
        if (count($user_whitelist) > 0) {
            return;
        }
    }

    $wp_query->set_404();
}
