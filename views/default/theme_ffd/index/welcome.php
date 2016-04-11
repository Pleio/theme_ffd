<?php

echo elgg_view("output/img", array(
	"src" => THEME_GRAPHICS . "quotes/txt_login.png",
	"class" => "float-alt"
));

$welcome_text = elgg_get_plugin_setting('welcome_text', 'theme_ffd');
if ($welcome_text) {
	echo $welcome_text;
} else {
	echo "<h1>" . elgg_echo("theme_ffd:index:title") . "</h1>";
	echo elgg_echo("theme_ffd:index:description");
}

?>
<style type="text/css">
	.elgg-main {
		padding-top: 60px;
	}
</style>