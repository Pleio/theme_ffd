<?php
/**
 * Shows the view page of a specific cafe message
 *
 * @package theme_ffd
 */

$guid = get_input('guid');
$cafe = get_entity($guid);

if (!$cafe | !$cafe instanceof ElggCafe) {
    register_error(elgg_echo("InvalidParameterException:NoEntityFound"));
    forward(REFERER);
}

elgg_push_breadcrumb($cafe->title);

$output = elgg_view_entity($cafe, array('full_view' => true));

$options = array(
    'guid' => $cafe->guid,
    'annotation_names' => 'generic_comment'
);

$count = elgg_get_annotations(array_merge($options, array(
    'count' => true
)));

$answer_title = elgg_view_icon("comment-o", "mrs") . $count . " " . elgg_echo('answers');
$answers = elgg_list_annotations($options);
$output .= elgg_view_module('info', $answer_title, $answers, array("class" => "mtm ffd-answers"));

$cafe_reply = elgg_view_form('theme_ffd/cafe/reply', array(
    'name' => 'cafe_reply',
    'action' => 'action/cafe/reply/save'
), array(
    'cafe' => $cafe
));
$output .= elgg_view_module('info', elgg_echo('theme_ffd:cafe:reply'), $cafe_reply);

$content = elgg_view_layout('two_column_left_sidebar', array('content' => $output));
echo elgg_view_page(elgg_echo('theme_ffd:cafe'), $content);