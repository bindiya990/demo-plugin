<?php
/*
Plugin Name: Demo Plugin
Description: It is my first demo plugin.
Version: 1.0
Author: bindiya
*/

add_action("admin_menu","demoplugin_menu");

function demoplugin_menu()
{
	add_menu_page("Dashboard","Dashboard","manage_options","demo-plugin","dashboard");
}

function dashboard()
{
	include "dashboard.php";
}

?>
