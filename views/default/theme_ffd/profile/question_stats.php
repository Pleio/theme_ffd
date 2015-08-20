<?php 

$user = elgg_get_page_owner_entity();
if ($user) {
	
	echo "<div class='theme-ffd-profile-question-stats'>";
	
	$question_options = array(
		"type" => "object",
		"subtype" => "question",
		"count" => true,
		"owner_guid" => $user->guid	
	);
	
	$answer_options = array(
		"type" => "object",
		"subtype" => "answer",
		"count" => true,
		"owner_guid" => $user->guid	
	);
	
	$correct_options = array(
		"type" => "object",
		"subtype" => "answer",
		"count" => true,
		"owner_guid" => $user->guid,
		"metadata_name" => "correct_answer",
		"metadata_value" => true,
	);
	
	$likes_options = array(
		"type" => "object",
		"subtype" => "question",
		"count" => true,
		"annotation_names" => array("likes"),
		"annotation_owner_guids" => array($user->guid),
	);
	
	$asked_count = (int) elgg_get_entities($question_options);
	$answered_count = (int) elgg_get_entities($answer_options);
	$correct_count = (int) elgg_get_entities_from_metadata($correct_options);
	$liked_count = (int) elgg_get_entities_from_annotations($likes_options);;
	
	echo "<ul>";
	echo "<li>" . elgg_echo("theme_ffd:profile:question_stats:count_questions") . ": <span class='theme-ffd-profile-question-stats-count'>" . $asked_count . "</span></li>";
	echo "<li>" . elgg_echo("theme_ffd:profile:question_stats:count_answers") . ": <span class='theme-ffd-profile-question-stats-count'>" . $answered_count . "</span></li>";
	echo "</ul>";
	
	echo "</div>";
	
}
