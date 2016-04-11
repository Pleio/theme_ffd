<?php
/**
 * Elgg page header
 * In the default theme, the header lives between the topbar and main content area.
 */

$speech_bubble_loggedout = elgg_get_plugin_setting('speech_bubble_loggedout', 'theme_ffd');
if (!$speech_bubble_loggedout) {
	$speech_bubble_loggedout = THEME_GRAPHICS . "speech_bubble_logged_out.png";
}

$speech_bubble_loggedin = elgg_get_plugin_setting('speech_bubble_loggedin', 'theme_ffd');
if (!$speech_bubble_loggedin) {
	$speech_bubble_loggedin = THEME_GRAPHICS . "speech_bubble.png";	
}


if (elgg_is_logged_in()) {
	echo elgg_view('page/elements/header_logo', $vars);

	echo elgg_view("output/url", array(
		"text" => elgg_view("output/img", array(
			"src" => $speech_bubble_loggedin,
			"id" => "theme-ffd-header-speech-bubble"
		)),
		"href" => elgg_get_site_url()
	));
} else {
	if (elgg_in_context("login")) {
		echo elgg_view("output/url", array(
			"text" => elgg_view("output/img", array(
					"src" => $speech_bubble_loggedout,
					"id" => "theme-ffd-header-speech-bubble-logged-out"
			)),
			"href" => elgg_get_site_url()
		));
		echo "<style type='text/css'>.elgg-page-navbar .elgg-menu-site { left: 250px;}</style>";
	} else {
		echo elgg_view("output/url", array(
			"text" => elgg_view("output/img", array(
					"src" => $speech_bubble_loggedin,
					"id" => "theme-ffd-header-speech-bubble"
			)),
			"href" => elgg_get_site_url()
		));
	}
}
