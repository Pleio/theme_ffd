<?php
$custom_css = elgg_view("input/plaintext", array("name" => "params[custom_css]", "value" => $vars['entity']->custom_css));
$custom_css .= "<div class='elgg-subtext'>". elgg_echo("pleio_template_selector:settings:custom_css:disclaimer") . "</div>";
echo elgg_view_module("inline", elgg_echo("pleio_template_selector:settings:custom_css:title"), $custom_css);