<?php
/**
 * Shows the overview page of the FFD Cafe
 *
 * @package theme_ffd
 */

$output = elgg_view_form('theme_ffd/cafe', array(
    'name' => 'cafe',
    'action' => 'action/cafe/save'
    ), array('collapsable' => true)
);

$options = array(
    'type' => 'object',
    'subtype' => 'cafe',
    'full_view' => false
);
$output .= elgg_list_entities($options);

$content = elgg_view_layout('two_column_left_sidebar', array('content' => $output));
echo elgg_view_page(elgg_echo('theme_ffd:cafe'), $content);
