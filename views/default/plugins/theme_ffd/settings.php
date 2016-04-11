<?php

$plugin = elgg_extract("entity", $vars);

echo "<div>";
	echo elgg_echo("theme_ffd:settings:logo:loggedout");
	echo elgg_view("input/text", array("name" => "params[logo_loggedout]", "value" => $plugin->logo_loggedout));
echo "</div>";

echo "<div>";
	echo elgg_echo("theme_ffd:settings:logo:loggedin");
	echo elgg_view("input/text", array("name" => "params[logo_loggedin]", "value" => $plugin->logo_loggedin));
echo "</div>";


echo "<div>";
	echo elgg_echo("theme_ffd:settings:welcome_text");
	echo elgg_view("input/longtext", array("name" => "params[welcome_text]", "value" => $plugin->welcome_text));
echo "</div>";