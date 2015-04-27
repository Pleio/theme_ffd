<?php
/**
 * FFD video list widget
 *
 * @package ThemeFFD
 */

$widget = elgg_extract("entity", $vars);
$owner = $widget->getOwnerEntity();

$options = array(
    'type' => 'object',
    'subtype' => 'videolist_item',
    'limit' => 50,
    'metadata_names' => 'tags',
    'metadata_name_value_pairs' => array(
        'name' => 'tags',
        'value' => $widget->tags
    )
);

$entities = elgg_get_entities_from_metadata($options);

if (count($entities) > 0) {
    echo elgg_view('widgets/ffd_videos/list', array(
        'videos' => $entities
    ));
} else {
    echo elgg_echo('ffd_theme:widgets:ffd_videos:novideos');
}
