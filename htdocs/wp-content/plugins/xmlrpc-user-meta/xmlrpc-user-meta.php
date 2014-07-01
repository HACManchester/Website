<?php
/**
 * @package XMLRPC_User_Meta
 * @version 0.3
 */
/*
Plugin Name: XMLRPC User Meta
Plugin URI: http://dyn.awswan.info/wp-plugins/xmlrpc-user-meta/
Description: This plugin extends the data returned from the WordPress XMLRPC requests related to user information to also include any user meta fields that are currently set.  It honors the fields listed in the user's request, filtering out any that are unwanted, but otherwise (when no list is specified, or when 'all' is in the list) returns everything.
Author: Dan Hunsaker
Version: 0.3
Author URI: http://www.netmark.com/daniel-hunsaker
License: GPL2
*/

/**
 * Filter to add user meta data to the info returned from XMLRPC calls for user info
 * 
 * @var array $_user The information already queued to be returned.
 * @var object $user The WP_User object for the user whose info is being requested.
 * @var array $fields The list of fields requested by the XMLRPC client.
 * @return array The information to return to either the user or the next filter.
 */
function xmlrpc_user_meta_add_meta_data( $_user, $user, $fields ) {
	$user_meta = get_user_meta( $user->ID );
	foreach ($user_meta as $key => $value)
	{
		if (is_array($value))
		{
			$user_meta[$key] = implode('; ', $value);
		}
	}
	
	if ( in_array( 'all', $fields ) ) {
		$_user = array_merge( $_user, $user_meta );
	} else {
		$requested_fields = array_intersect_key( $user_meta, array_flip( $fields ) );
		$_user = array_merge( $_user, $requested_fields );
	}
	
	return $_user;
}

add_filter( 'xmlrpc_prepare_user', 'xmlrpc_user_meta_add_meta_data', 10, 3 );