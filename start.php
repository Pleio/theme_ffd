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
	
	elgg_register_plugin_hook_handler("route", "questions", "theme_ffd_route_questions_hook");
	elgg_register_plugin_hook_handler("register", "menu:filter", "theme_ffd_questions_filter_menu_hook_handler");
	
	// pagehandlers
	elgg_register_page_handler("profile", "theme_ffdffd_profile_page_handler");
	elgg_register_page_handler("login", "theme_ffdffd_index");
	
	//add a widget
	elgg_register_widget_type("ffd_stats", elgg_echo("ffd_theme:widgets:ffd_stats:title"), elgg_echo("ffd_theme:widgets:ffd_stats:description"), "index");
	elgg_register_widget_type("recent_questions", elgg_echo("ffd_theme:widgets:recent_questions:title"), elgg_echo("ffd_theme:widgets:recent_questions:description"), "index");
}

function theme_ffd_index($hook, $type, $return, $params) {
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
function theme_ffd_profile_page_handler($page) {

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

function theme_ffd_route_questions_hook($hook_name, $entity_type, $return_value, $params) {

	if (!empty($return_value) && is_array($return_value)) {
		$page = elgg_extract("segments", $return_value);
			
		switch ($page[0]) {
			case "most_viewed":
				include(dirname(__FILE__) . "/pages/questions/most_viewed.php");
				return false;
				break;
		}
	}
}


function theme_ffd_questions_filter_menu_hook_handler($hook, $type, $return_value, $params) {
	if (elgg_in_context("questions")) {
		$selected = false;
		if (stristr(current_page_url(), "questions/most_viewed")) {
			$selected = true;
		}
		
		$item = ElggMenuItem::factory(array(
			"name" => "most_viewed",
			"text" => elgg_echo("theme_ffd:questions:filter:most_viewed"),
			"href" => "questions/most_viewed",
			"selected" => $selected,
			"priority" => 600
		));
			
		$return_value[] = $item;
	}

	return $return_value;
}
