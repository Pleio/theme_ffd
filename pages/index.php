<?php

elgg_set_page_owner_guid(elgg_get_site_entity()->getGUID());
elgg_push_context("ffd-theme-index");
if (elgg_is_logged_in()) {
	$body = elgg_view_layout('index_logged_in', array());
} else {
	$body = elgg_view_layout('index', array());
}

echo elgg_view_page('', $body);
elgg_pop_context();