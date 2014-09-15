<?php

if ((!elgg_in_context("main") && !elgg_in_context("login")) || elgg_is_logged_in()) {
	$quote = "default";
	if (elgg_in_context("questions")) {
		$quote = "questions";
	}
	echo elgg_view("output/img", array(
			"src" => THEME_GRAPHICS . "quotes/txt_" . $quote . ".png",
			"id" => "theme-ffd-header-subtext"
	));
}

if (elgg_is_logged_in()) {
	$count = find_active_users(600, $limit, $offset, true);
	echo "<div class='theme-ffd-body-header'>";
	echo "<div class='clearfix'>";
// 	echo elgg_view("output/url", array(
// 		"href" => "http://twitter.com/belastingdienstnl",
// 		"text" => elgg_view_icon("phone-square"),
// 		"class" => "float-alt",
// 		"target" => "_blank"
// 	));
// 	echo elgg_view("output/url", array(
// 		"href" => "http://twitter.com/belastingdienstnl",
// 		"text" => elgg_view_icon("twitter"),
// 		"class" => "float-alt",
// 		"target" => "_blank"
// 	));
	if (!elgg_in_context("ffd-theme-index")) {
		echo "<div class='theme-ffd-body-header-online float-alt'>" . elgg_view_icon("users") . " " . $count . " gebruikers online</div>";
	}
	
	echo "</div>";
	
	if (!elgg_in_context("ffd-theme-index")) {
		$page_owner_entity = elgg_get_page_owner_entity();
		$url = "questions/add/" . $page_owner_entity->guid;
		
		echo elgg_view("output/url", array(
			"text" => elgg_view_icon("round-plus") . " " . elgg_echo("questions:add"),
			"href" => $url,
			"id" => "ffd-questions-add",
			"class" => "elgg-button elgg-button-submit"
		));		
		echo elgg_view("search/header");
	}
	
	echo "</div>";
}

if (elgg_in_context("questions")) {
	global $FFD_QUESTIONS_FULLVIEW;
	if ($FFD_QUESTIONS_FULLVIEW !== true) {
		?>
		<style type="text/css">
			.elgg-main > .elgg-head {
				display: none;
			}
		</style>
		<?php 
	}
}