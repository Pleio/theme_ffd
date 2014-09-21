<?php
/**
 * Question entity view
 *
 * @package Questions
*/

$full = elgg_extract("full_view", $vars, false);
$question = elgg_extract("entity", $vars, false);
$workflow = elgg_extract("workflow", $vars, false);

if (!$question) {
	return true;
}

if ($workflow) {
	$url = $question->getWorkflowURL();
} else {
	$url = $question->getURL();
}

$poster = $question->getOwnerEntity();

// $poster_icon = elgg_view_entity_icon($poster, "small");
$poster_icon = elgg_view_icon("question", "theme-ffd-question-icon");
$poster_link = elgg_view("output/url", array("text" => $poster->name, "href" => $poster->getURL(), "is_trusted" => true));
$poster_text = elgg_echo("questions:asked", array($poster_link));

$container = $question->getContainerEntity();
if (elgg_instanceof($container, "group") && (elgg_get_page_owner_guid() != $container->getGUID())) {
	$group_link = elgg_view("output/url", array("text" => $container->name, "href" => "questions/group/" . $container->getGUID() . "/all", "is_trusted" => true));
	$poster_text .= " " . elgg_echo("river:ingroup", array($group_link));
}

$tags = elgg_view("output/tags", array("tags" => $question->tags));
$categories = elgg_view("output/categories", $vars);

$date = elgg_view_friendly_time($question->time_created);

$answers_link = "";

if ($workflow) {
	$answer_subtype = "intanswer";
} else {
	$answer_subtype = "answer";
}

$answer_options = array(
	"type" => "object",
	"subtype" => $answer_subtype,
	"container_guid" => $question->getGUID(),
	"count" => true,
);

$num_answers = elgg_get_entities($answer_options);
if ($num_answers != 0) {
	
	$answers_link = elgg_view("output/url", array(
		"href" => $url . "#question-answers",
		"text" => elgg_echo("answers") . " ($num_answers)",
	));
}

$metadata = "";
// do not show the metadata and controls in widget view
if (!elgg_in_context("widgets")) {
	$metadata = elgg_view_menu("entity", array(
		"entity" => $vars["entity"],
		"handler" => "questions",
		"sort_by" => "priority",
		"class" => "elgg-menu-hz",
		"full_view" => $full
	));
}

if ($full) {
	global $FFD_QUESTIONS_FULLVIEW;
	$FFD_QUESTIONS_FULLVIEW = true;
	
	$subtitle = "$poster_text $date $answers_link $categories";

	$title = "";
	if ($question->getStatus() == "closed") {
		$title .= elgg_view_icon("lock-closed");
	}
	
	$title = $question->title;
	
	$params = array(
		"entity" => $question,
		"title" => $title,
		"metadata" => $metadata,
		"subtitle" => $subtitle,
		"tags" => $tags,
	);
	$list_body = elgg_view("object/elements/summary", $params);
	
	$list_body .= elgg_view("output/longtext", array("value" => $question->description));
	$list_body .= "<style type='text/css'>.elgg-main > .elgg-head { display: none; }</style>";
	
	echo elgg_view_image_block($poster_icon, $list_body);

} else {
	// brief view
	$title_text = "";
	if ($question->getCorrectAnswer() && !$workflow) {
		$title_text = elgg_view_icon("checkmark", "mrs question-listing-checkmark");
	}
	$title_text .= elgg_get_excerpt($question->title, 100);

	if ($workflow) {
		$title = elgg_view('questions/workflow/status', array('question'=>$question));
	}

	$title .= elgg_view("output/url", array(
		"text" => $title_text,
		"href" => $url,
		"is_trusted" => true
	));	

	$subtitle = "$poster_text $date $categories";
	
	$content = elgg_get_excerpt($question->description);

	$params = array(
		"entity" => $question,
		"title" => $title,
		"subtitle" => $subtitle,
		"tags" => $tags,
		"content" => $content
	);

	if ($workflow) {
		$params['metadata'] = elgg_view("questions/workflow/overview", array('question'=>$question));
	}

	$list_body = elgg_view("object/elements/summary", $params);
	
	if (!$workflow) {
		$list_body .= elgg_view_menu("ffd_questions_body", array(
			"sort_by" => "priority",
			"entity" => $question,
			"class" => "elgg-menu-hz float-alt"
		));
	
		$image_alt = elgg_view_menu("ffd_questions_alt", array(
			"sort_by" => "priority",
			"entity" => $question
		));		
	} else {
		$image_alt = null;
	}

	echo elgg_view_image_block($poster_icon, $list_body, array("image_alt" => $image_alt, "class" => "ffd-question-list-item"));
}
