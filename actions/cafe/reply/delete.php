<?php

$id = (int) get_input('annotation_id');

$reply = elgg_get_annotation_from_id($id);
if (!$reply || $reply->name != 'generic_comment') {
    register_error(elgg_echo('theme_ffd:cafe:notdeleted'));
    forward(REFERER);
}

if (!$reply->canEdit()) {
    register_error(elgg_echo('theme_ffd:cafe:nopermissions'));
    forward(REFERER);
}

$result = $reply->delete();
if (!$result) {
    register_error(elgg_echo('theme_ffd:cafe:notdeleted'));
}

forward(REFERER);
