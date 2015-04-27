<?php 

$user_guid = elgg_get_logged_in_user_guid();

if ($user_guid) {
	
	echo elgg_view("output/url", array(
		"href" => "questions/add/" . $user_guid,
		"text" => elgg_view_icon("round-plus") . elgg_echo("questions:add")
	));
}