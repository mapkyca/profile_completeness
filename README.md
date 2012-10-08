Elgg 1.8 Profile Completeness Tool
==================================

Simple Elgg 1.8 tool for displaying profile completeness for a given user profile.

Installation
------------

Follow the usual Elgg module installation practices, I.e. put the directory in your /mod.

Usage
-----

 * Output elgg_view('output/profilecomplete') to echo the current user's completeness. You can optionally pass array('user' => $user) to specify another user.
 * The plugin triggers a hook 'profilecomplete', 'defaultfields' to obtain the list of default profile fields, passing elgg_get_config('profile_fields') as the default return value, modify accordingly.

See
---

 * Me <http://www.marcus-povey.co.uk>
 
