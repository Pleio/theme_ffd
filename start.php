<?php

define("THEME_GRAPHICS", elgg_get_site_url() . "mod/theme_ffd/_graphics/");
define("COLOR_BLUE", "6fa6ca"); // BD3
define("COLOR_BLUE_DARK", "154273"); 
define("COLOR_BLUE_MEDIUM", "8fcae7"); // BD1
define("COLOR_BLUE_LIGHT", "ddeff8"); // BD2

define("COLOR_GREY_LIGHT", "8c8b8b"); 
define("COLOR_GREY_DARK", "4c4c4c"); 

elgg_register_event_handler('init', 'system', 'theme_ffd_init');

function theme_ffd_init() {
	elgg_unextend_view("page/elements/header", "search/header");
	
	elgg_extend_view("css/elgg", "css/theme_ffd/site");
	
	// Replace the default index page
	elgg_register_plugin_hook_handler('index', 'system', 'ffd_index');
}

function ffd_index($hook, $type, $return, $params) {
	include_once(dirname(__FILE__) . "/pages/index.php");

	// return true to signify that we have handled the front page
	return true;
}
