<?php

/*
  Plugin Name: HacMan Additional plugin stuffs (of doom)
  Description: lots of data and functions for things
  Version: 0.1.6
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
function hacman_login_head() {
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
add_filter( 'xmlrpc_methods', function( $methods ) {
   $methods['hacman.update_rfid'] = 'hacman_update_rfid';

   unset( $methods['pingback.ping'] );
   return $methods;
} );



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
    $rfid       = $args[2];

    //Authenticated?
    if ( !$user = $wp_xmlrpc_server->login($username, $password) ) {
        return $wp_xmlrpc_server->error;
    }

    $retVal = update_user_meta($user->ID, 'rfid_code', $rfid);
    if (is_numeric($retVal)) {
        $retVal = true;
    }
    return $retVal;
}

add_shortcode("userlist", "hacman_userlist_shortcode");
function hacman_userlist_shortcode($attribs, $content) {
	$query = array();
	if (isset($attribs['role'])) {
		$query['role'] = array_shift(explode(',', $attribs['role']));
	}
	$blogusers = get_users( $query );
	// Array of WP_User objects.
	$newContent = '';
	foreach ( $blogusers as $user ) {
		$replacements = array(
			'display_name' => $user->display_name,
			'first_name' => $user->first_name,
			'last_name' => $user->last_name,
			'bio' => $user->description
		);

		$from = array_map(function($item) { return '{'. $item . '}'; }, array_keys($replacements));
		$newContent .= str_replace($from, array_values($replacements), $content);
	}
return $newContent;
}

function hacman_tabbify_profile($user)
{
    ?>
    <script type="text/javascript">
        jQuery(function($) {
            var f = $('#your-profile');
            var nav = $('<h2 class="nav-tab-wrapper"></h2>');
            var tabMaker = function() {
                var h3 = $(this),
                        txt = h3.text(),
                        id = 'tab-' + txt.replace(/[ ]/g, '-').toLowerCase()
                        ;
                nav.append('<a class="nav-tab" href="#' + id + '">' + txt + '</a>');
                $(this).next('table').wrap('<div class="nav-tab-panel" id="' + id + '"></div>');
                h3.remove();
            };

            f.children('h3:visible').each(tabMaker);
            f.find('p').first().after(nav);
            $('.nav-tab-panel').hide();

           nav.on('click', 'a', function(event) {
                event.preventDefault();
                var context = $(this).closest('.nav-tab-wrapper').parent();
                $('.nav-tab-wrapper a', context).removeClass('nav-tab-active');
                $(this).addClass('nav-tab-active');
                $('.nav-tab-panel', context).hide();
                $($(this).attr('href'), context).show();
            });

            $('a[href=#tab-user-role-editor]').prependTo(nav).text('Membership & Emergency Details');
            var roleTab = $('#tab-user-role-editor');
            var roleTable = roleTab.find('table').first();
            roleTable.find('tbody').prepend($('#tab-name .form-table tr:eq(1)'));
            roleTable.appendTo('#tab-about-the-user');
            roleTab.append('<table class="form-table"></table>');

            // Make setting wp-tab-active optional.
            $('.nav-tab-wrapper').each(function() {
                if ($('.nav-tab-active', this).length) {
                    $('.nav-tab-active', this).click();
                } else {
                    $('a', this).first().click();
                }
            });
        });
    </script>	
    <?php

}

add_action('edit_user_profile', 'hacman_tabbify_profile');