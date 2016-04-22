<?php
/**
 * Elgg questions plugin everyone page
 *
 * @package ElggQuestions
 */

elgg_set_page_owner_guid(elgg_get_logged_in_user_guid());

elgg_register_title_button();
$title = elgg_echo('theme_ffd:questions:most_viewed');

elgg_push_breadcrumb(elgg_echo('questions'), "questions/all");
elgg_push_breadcrumb($title);

$options = array(
    'type' => 'object',
    'subtype' => 'question',
    'private_setting_names' => array('view_counter'),
    'order_by' => 'ps.value DESC',
    'full_view' => false
);

$content = elgg_list_entities($options, 'elgg_get_entities_from_private_settings');

if (!$content) {
	$content = elgg_echo('questions:none');
}

$body = elgg_view_layout('content', array(
	'title' => $title,
	'content' => $content,
	'filter_context' => 'most_viewed'
));

echo elgg_view_page($title, $body);
