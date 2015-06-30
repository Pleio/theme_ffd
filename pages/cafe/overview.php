<?php
/**
 * Shows the overview page of the FFD Cafe
 *
 * @package theme_ffd
 */

// make the logged in user page owner, specially due to the profile items in the sidebar
elgg_set_page_owner_guid(elgg_get_logged_in_user_guid());

$output = elgg_view_form('theme_ffd/cafe', 
    array(
        'name' => 'cafe',
        'action' => 'action/cafe/save'
    )
);

$options = array(
    'type' => 'object',
    'subtype' => 'cafe',
    'full_view' => true
);
$output .= elgg_list_entities($options);

$content = elgg_view_layout('two_column_left_sidebar', array('content' => $output));
echo elgg_view_page(elgg_echo('theme_ffd:cafe'), $content);