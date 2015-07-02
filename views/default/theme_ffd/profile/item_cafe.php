<?php

$user = $vars["entity"];
$icon = elgg_view_entity_icon($user, 'tiny');

$params = array(
    'entity' => $user,
    'subtitle' => $user->briefdescription
);

$summary = elgg_view('object/elements/summary', $params);
echo elgg_view_image_block($icon, $summary);