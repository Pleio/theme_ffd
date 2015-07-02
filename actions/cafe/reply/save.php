<?php

// Get input
$entity_guid = (int) get_input('entity_guid');
$text = get_input('text');
$annotation_id = (int) get_input('annotation_id');

// reply cannot be empty
if (empty($text)) {
    register_error(elgg_echo('theme_ffd:cafe:notext'));
    forward(REFERER);
}

$cafe = get_entity($entity_guid);
if (!$cafe) {
    register_error(elgg_echo('InvalidParameterException:NoEntityFound'));
    forward(REFERER);
}

$user = elgg_get_logged_in_user_entity();

// if editing a reply, make sure it's valid
if ($annotation_id) {
    $annotation = elgg_get_annotation_from_id($annotation_id);
    if (!$annotation->canEdit()) {
        register_error(elgg_echo('InvalidParameterException:NoEntityFound'));
        forward(REFERER);
    }

    $annotation->value = $text;
    if (!$annotation->save()) {
        system_message(elgg_echo('InvalidParameterException:NoEntityFound'));
        forward(REFERER);
    }
} else {
    $reply_id = $cafe->annotate('generic_comment', $text, $cafe->access_id, $user->guid);
    if ($reply_id == false) {
        system_message(elgg_echo('theme_ffd:cafe:error'));
        forward(REFERER);
    }
}

forward(REFERER);
