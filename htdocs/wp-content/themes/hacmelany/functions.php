<?php

if (!function_exists('melany_footer_class')) :

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

endif;

function forceHTTPSforSideBar($logoArg)
{
    return str_replace('http:', 'https:', $logoArg);
}
add_filter('theme_mod_melany_logo', 'forceHTTPSforSideBar', 10, 1);