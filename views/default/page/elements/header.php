<?php
/**
 * Elgg page header
 * In the default theme, the header lives between the topbar and main content area.
 */

if (elgg_is_logged_in()) {
	echo elgg_view('page/elements/header_logo', $vars);

	echo elgg_view("output/img", array(
		"src" => THEME_GRAPHICS . "pilot.png",
		"id" => "theme-ffd-header-pilot"
	));
	echo elgg_view("output/url", array(
		"text" => elgg_view("output/img", array(
			"src" => THEME_GRAPHICS . "speech_bubble.png",
			"id" => "theme-ffd-header-speech-bubble"
		)),
		"href" => elgg_get_site_url()
	));
} else {
	if ((elgg_get_site_url() === current_page_url()) || (get_input("handler") == "login")) {
		echo elgg_view("output/url", array(
			"text" => elgg_view("output/img", array(
					"src" => THEME_GRAPHICS . "speech_bubble_logged_out.png",
					"id" => "theme-ffd-header-speech-bubble-logged-out"
			)),
			"href" => elgg_get_site_url()
		));
		echo "<style type='text/css'>.elgg-page-navbar .elgg-menu-site { left: 250px;}</style>";
	} else {
		echo elgg_view("output/url", array(
			"text" => elgg_view("output/img", array(
					"src" => THEME_GRAPHICS . "speech_bubble.png",
					"id" => "theme-ffd-header-speech-bubble"
			)),
			"href" => elgg_get_site_url()
		));
	}
}
