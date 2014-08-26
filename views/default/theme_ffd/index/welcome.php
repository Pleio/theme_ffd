<?php

echo elgg_view("output/img", array(
	"src" => THEME_GRAPHICS . "quotes/txt_login.png",
	"class" => "float-alt"
));

echo "<h1>" . elgg_echo("theme_ffd:index:title") . "</h1>";
echo elgg_echo("theme_ffd:index:description");