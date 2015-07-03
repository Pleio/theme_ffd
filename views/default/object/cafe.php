<?php

$full = elgg_extract("full_view", $vars, false);
$cafe = elgg_extract("entity", $vars, false);

$poster = $cafe->getOwnerEntity();
$poster_icon = elgg_view_entity_icon($poster, "small");
$poster_link = elgg_view("output/url", array("text" => $poster->name, "href" => $poster->getURL(), "is_trusted" => true));
$poster_text = elgg_echo("theme_ffd:cafe:placed_by") . "&nbsp;" . $poster_link;

$date = elgg_view_friendly_time($cafe->time_created);

$params = array();

if ($full) {
    $entity_menu = elgg_view_menu('entity', array(
        'entity' => $cafe,
        'handler' => 'cafe',
        'sort_by' => 'priority',
        'class' => 'elgg-menu-hz'
    ));

    $params['metadata'] = $entity_menu;
    $params['title'] = elgg_echo("theme_ffd:cafe:purpose:" . $cafe->purpose) . "&nbsp;" . $cafe->title;
    $params['content'] = $cafe->description;
} else {
    $params['title'] = elgg_view('output/url', array(
        'href' => $cafe->getURL(),
        'text' => elgg_echo("theme_ffd:cafe:purpose:" . $cafe->purpose) . "&nbsp;" . $cafe->title
    ));
    $params['content'] = elgg_get_excerpt($cafe->description);
}

$params = array_merge($params, array(
    "entity" => $cafe,
    "subtitle" => "$poster_text $date",
    "tags" => elgg_view("output/tags", array("tags" => $question->tags))
));

$list_body = elgg_view("object/elements/summary", $params);

echo elgg_view_image_block($poster_icon, $list_body);
