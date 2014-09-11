<?php

$widget = $vars["entity"];

$value = "";

if ($value = get_input('q', get_input('tag', NULL))) {
	$value = $value;
} else {
	$value = elgg_echo('theme_ffd:header:search');
}

// @todo - why the strip slashes?
$value = stripslashes($value);

// @todo - create function for sanitization of strings for display in 1.8
// encode <,>,&, quotes and characters above 127
if (function_exists('mb_convert_encoding')) {
	$display_query = mb_convert_encoding($value, 'HTML-ENTITIES', 'UTF-8');
} else {
	// if no mbstring extension, we just strip characters
	$display_query = preg_replace("/[^\x01-\x7F]/", "", $value);
}
$display_query = htmlspecialchars($display_query, ENT_QUOTES, 'UTF-8', false);

$form_body = elgg_view("input/text", array(
	"name" => "q",
	"value" => $display_query,
	"onblur" => "if (this.value=='') { this.value='" . elgg_echo('theme_ffd:header:search') . "' }",
	"onfocus" => "if (this.value=='" . elgg_echo('theme_ffd:header:search') . "') { this.value='' }"
));

list($type, $subtype) = explode(":" , $widget->types);

if(!empty($type)){
	$form_body .= elgg_view("input/hidden", array("name" => "search_type", "value" => "entities"));
	$form_body .= elgg_view("input/hidden", array("name" => "entity_type", "value" => $type));
	if(!empty($subtype)){
		$form_body .= elgg_view("input/hidden", array("name" => "entity_subtype", "value" => $subtype));
	}
} 

$form_body .= elgg_view("input/submit", array("value" => elgg_echo("search"), "class" => "hidden"));

$form = elgg_view("input/form", array("body" => $form_body, "action" => "/search", "disable_security" => true, "class" => "search-advanced-widget-search-form"));

echo $form;

echo "<div class='search-advanced-widget-search-results'></div>";
