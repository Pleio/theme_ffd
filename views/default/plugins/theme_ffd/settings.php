<?php

$plugin = elgg_extract("entity", $vars);

echo "<div>";
	echo elgg_echo("theme_ffd:settings:logo");
	echo elgg_view("input/text", array("name" => "params[logo]", "value" => $plugin->logo));
echo "</div>";

echo "<div>";
	echo elgg_echo("theme_ffd:settings:speech_bubble:loggedout");
	echo elgg_view("input/text", array("name" => "params[speech_bubble_loggedout]", "value" => $plugin->speech_bubble_loggedout));
echo "</div>";

echo "<div>";
	echo elgg_echo("theme_ffd:settings:speech_bubble:loggedin");
	echo elgg_view("input/text", array("name" => "params[speech_bubble_loggedin]", "value" => $plugin->speech_bubble_loggedin));
echo "</div>";

echo "<div>";
	echo elgg_echo("theme_ffd:settings:welcome_text");
	echo elgg_view("input/longtext", array("name" => "params[welcome_text]", "value" => $plugin->welcome_text));
echo "</div>";