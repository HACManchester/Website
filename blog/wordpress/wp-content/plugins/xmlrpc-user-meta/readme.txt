=== Plugin Name ===
Contributors: danhunsaker
Tags: xmlrpc, user, meta, api
Requires at least: 3.0.1
Tested up to: 3.5.1
Stable tag: 0.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Extends data returned from WordPress XMLRPC user info requests to also include user meta fields.

== Description ==

This plugin extends the data returned from the WordPress XMLRPC requests related to user information to also include 
any user meta fields that are currently set.  It honors the fields listed in the user's request, filtering out any 
that are unwanted, but otherwise (when no list is specified, or when 'all' is in the list) returns everything.

== Installation ==

Installation is simple:

1. Upload `xmlrpc-user-meta.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

And that's it!  Just deactivate to disable, and delete `xmlrpc-user-meta.php` to uninstall. It is always a good idea to 
disable plugins *before* uninstalling them.

== Frequently Asked Questions ==

None yet.

== Changelog ==

= 0.3 =
* Presentational change.  Collapsing metadata values which are arrays into semicolon-separated strings.

= 0.2 =
* Major bugfix.  Forgot to tell WP which function to call.

= 0.1 =
* Initial Version

== Upgrade Notice ==

= 0.2 =
The previous version has a bug which prevents any output from being sent to the XMLRPC client - UPGRADE IMMEDIATELY.

= 0.1 =
This version is the original.
