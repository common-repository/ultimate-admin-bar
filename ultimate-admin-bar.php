<?php

/*
Plugin Name: Ultimate Admin Bar
Plugin URI: http://andrewhuggins.com/plugins/ultimate-admin-bar/
Description: Changes the admin menu from appearing on the left of the screen, to appear in the admin bar. Maintains the fly-out menus functionality while minimizing the admin. Supports custom post types, although there may be a limit as to how successful this is with multiple top level admin menus...but for most it should be fine.

This only affects the admin bar while in wp-admin. When visiting your site, the admin bar is back to normal.

Works in Chrome 15.0.874.106m, Firefox 6.0 + 8.0, IE 8 (must not have compatability view enabled, must be plain IE 8 mode) I have not tested in IE9 yet, Safari 5.0.3
Author: Andrew Huggins
Version: 1.1.6
Author URI: http://www.andrewhuggins.com
//
*/

function ultimate_admin_bar() {
		echo '<script type="text/javascript" src="'.plugins_url('width.js', __FILE__).'"></script>';
        echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('myadminstyles.css', __FILE__). '">';
}

add_action('admin_head', 'ultimate_admin_bar');
?>
