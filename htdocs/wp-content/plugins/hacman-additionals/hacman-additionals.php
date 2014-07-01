<?php

/*
  Plugin Name: HacMan Additional plugin stuffs (of doom)
  Description: lots of data and functions for things
  Version: 0.1.0
  Author: Kathryn Reeve
  Author URI: http://binarykitten.com
  License:
 */

add_filter("gform_address_types", "uk_address", 10, 2);

function uk_address($address_types, $form_id)
{
    $address_types["uk"] = array(
        "label" => "UK",
        "country" => "United Kingdom",
        "zip_label" => "Postcode",
        "state_label" => "County",
        "states" => array(
            'Bedfordshire' => 'Bedfordshire',
            'Berkshire' => 'Berkshire',
            'Buckinghamshire' => 'Buckinghamshire',
            'City of Bristol' => 'City of Bristol',
            'Cambridgeshire' => 'Cambridgeshire',
            'Cheshire' => 'Cheshire',
            'Cornwall' => 'Cornwall',
            'Cumbria' => 'Cumbria',
            'Derbyshire' => 'Derbyshire',
            'Devon' => 'Devon',
            'Dorset' => 'Dorset',
            'Durham' => 'Durham',
            'East Sussex' => 'East Sussex',
            'Essex' => 'Essex',
            'Gloucestershire' => 'Gloucestershire',
            'Greater London' => 'Greater London',
            'Greater Manchester' => 'Greater Manchester',
            'Hampshire' => 'Hampshire',
            'Hertfordshire' => 'Hertfordshire',
            'Isle of Wight' => 'Isle of Wight',
            'Kent' => 'Kent',
            'Lancashire' => 'Lancashire',
            'Leicestershire' => 'Leicestershire',
            'Lincolnshire' => 'Lincolnshire',
            'City of London' => 'City of London',
            'Merseyside' => 'Merseyside',
            'Norfolk' => 'Norfolk',
            'Northamptonshire' => 'Northamptonshire',
            'Northumberland' => 'Northumberland',
            'North Yorkshire' => 'North Yorkshire',
            'Nottinghamshire' => 'Nottinghamshire',
            'Oxfordshire' => 'Oxfordshire',
            'Rutland' => 'Rutland',
            'Shropshire (Salop)' => 'Shropshire (Salop)',
            'Somerset' => 'Somerset',
            'South Yorkshire' => 'South Yorkshire',
            'Staffordshire' => 'Staffordshire',
            'Suffolk' => 'Suffolk',
            'Surrey' => 'Surrey',
            'Tyne and Wear' => 'Tyne and Wear',
            'Warwickshire' => 'Warwickshire',
            'West Midlands' => 'West Midlands',
            'West Sussex' => 'West Sussex',
            'West Yorkshire' => 'West Yorkshire',
            'Wiltshire' => 'Wiltshire',
            'Worcestershire' => 'Worcestershire',
        )
    );
    return $address_types;
}

add_action("login_head", "hacman_login_head");

function hacman_login_head()
{
    echo "
<style>
    body.login #login h1 a {
	background: url('/wp-content/uploads/2013/11/hackspace-black1.png') no-repeat scroll center top transparent;
        height: 260px;
        width: 250px;
        margin: -120px auto 0 35px;
    }
</style>
";
}

//Security Fix to prevent xmlrpc pingback
add_filter('xmlrpc_methods', function( $methods ) {
    $methods['hacman.update_rfid'] = 'hacman_update_rfid';

    unset($methods['pingback.ping']);
    return $methods;
});

add_filter('wp_mail_from', 'hacman_mailusers_wp_mail_from') ;
add_filter('wp_mail_from_name', 'hacman_mailusers_wp_mail_from_name');

function hacman_mailusers_wp_mail_from() {
        return get_option('admin_email');
}

function hacman_mailusers_wp_mail_from_name() {
        return get_option('blogname');
}

function hacman_update_rfid($args)
{
    //Parse and escape parameters
    global $wp_xmlrpc_server;
    $wp_xmlrpc_server->escape($args);

    $username   = $args[0];
    $password   = $args[1];
    $user_id    = $args[2];
    $rfid       = $args[3];

    //Authenticated?
    if ( !$user = $wp_xmlrpc_server->login($username, $password) ) {
        return $wp_xmlrpc_server->error;
    }

    $retVal = update_user_meta($user_id, 'rfid_code', $rfid);
    if (is_numeric($retVal)) {
        $retVal = true;
    }
    return $retVal;
}