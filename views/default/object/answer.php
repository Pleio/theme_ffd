<?php
$answer = $vars['entity'];

//$image = elgg_view_entity_icon(get_entity($answer->owner_guid), 'small');
$image = elgg_view_icon("comment-o", "theme-ffd-answer-icon");

// mark this as the correct answer?
$correct_answer = $answer->isCorrect();
if ($correct_answer) {
	$owner = $answer->getOwnerEntity();
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

// build content
$params = array(
	'entity' => $answer,
	'metadata' => $entity_menu,
	'subtitle' => $subtitle,
	'content' => $body
);

$summary = elgg_view('page/components/summary', $params);

echo elgg_view_image_block($image, $summary);
