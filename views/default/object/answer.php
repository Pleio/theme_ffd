<?php
$answer = $vars['entity'];

//$image = elgg_view_entity_icon(get_entity($answer->owner_guid), 'small');
$image = elgg_view_icon("comment-o", "theme-ffd-answer-icon");

// mark this as the correct answer?
$correct_answer = $answer->getCorrectAnswerMetadata();
if ($correct_answer) {
	$owner = $correct_answer->getOwnerEntity();
	$owner_name = htmlspecialchars($owner->name);
	
	$timestamp = htmlspecialchars(date(elgg_echo('friendlytime:date_format'), $correct_answer->time_created));
	
	$title = elgg_echo("questions:answer:checkmark:title", array($owner_name, $timestamp));
	
	$image .= "<div class='questions-checkmark' title='$title'></div>";
}

// create subtitle
$owner = $answer->getOwnerEntity();
$owner_link = elgg_view("output/url", array("text" => $owner->name, "href" => $owner->getURL(), "is_trusted" => true));

$friendly_time = elgg_view_friendly_time($answer->time_created);
$subtitle = $owner_link . " " . $friendly_time;

// build entity menu
$entity_menu = elgg_view_menu('entity', array(
	'entity' => $vars['entity'],
	'handler' => 'answers',
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz'
));

$body = elgg_view('output/longtext', array('value' => $answer->description));

// add comments
$comment_count = $answer->countComments();
if ($comment_count) {
	$comment_options = array(
		'guid' => $answer->getGUID(),
		'annotation_name' => 'generic_comment',
		'limit' => false
	);
	
	$comments = elgg_get_annotations($comment_options);
	
	$comment_title = elgg_view_icon("comments-o", "mrs") . elgg_echo("comments");
	$comment_content = elgg_view_annotation_list($comments, array("list_class" => "elgg-river-comments"));
	
	$body .= elgg_view_module("info", $comment_title, $comment_content, array("class" => "ffd-questions-comments"));
}

// show a comment form like in the river
$body_vars = array(
	'entity' => $answer,
	'inline' => true
);
$body .= "<div class='elgg-river-item hidden' id='comments-add-" . $answer->getGUID() . "'>";
$body .= elgg_view_form('comments/add', array(), $body_vars);
$body .= "</div>";

// build content
$params = array(
	'entity' => $answer,
	'metadata' => $entity_menu,
	'subtitle' => $subtitle,
	'content' => $body
);

$summary = elgg_view('page/components/summary', $params);

echo elgg_view_image_block($image, $summary);
