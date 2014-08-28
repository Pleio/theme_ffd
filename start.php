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
	
	// pagehandlers
	elgg_register_page_handler("profile", "ffd_profile_page_handler");
}

function ffd_index($hook, $type, $return, $params) {
	include_once(dirname(__FILE__) . "/pages/index.php");

	// return true to signify that we have handled the front page
	return true;
}

/**
 * Profile page handler
 *
 * @param array $page Array of URL segments passed by the page handling mechanism
 * @return bool
 */
function ffd_profile_page_handler($page) {

	if (isset($page[0])) {
		$username = $page[0];
		$user = get_user_by_username($username);
		elgg_set_page_owner_guid($user->guid);
	} elseif (elgg_is_logged_in()) {
		forward(elgg_get_logged_in_user_entity()->getURL());
	}

	// short circuit if invalid or banned username
	if (!$user || ($user->isBanned() && !elgg_is_admin_logged_in())) {
		register_error(elgg_echo('profile:notfound'));
		forward();
	}

	$action = NULL;
	if (isset($page[1])) {
		$action = $page[1];
	}

	if ($action == 'edit') {
		// use the core profile edit page
		$base_dir = elgg_get_root_path();
		require "{$base_dir}pages/profile/edit.php";
		return true;
	}

	// main profile page
	$content = elgg_view('profile/wrapper');

	$body = elgg_view_layout('one_column', array('content' => $content));
	echo elgg_view_page($user->name, $body);
	return true;
}
