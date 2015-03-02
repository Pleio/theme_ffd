<?php 


$options = array(
	"type" => "object",
	"subtype" => "question",
	"limit" => 12
);

$questions = elgg_get_entities($options);
if ($questions) {
	foreach ($questions as $question) {
		echo "<div>";
		echo elgg_view_icon("round-plus");
		
		echo elgg_view("output/url", array(
			"text" => elgg_get_excerpt($question->title, 37),
			"href" => $question->getURL()
		));
		
		echo  " ";
		echo "<i>" . strftime("%e %b", $question->time_created) . "</i>";
		echo "</div>";
	}
}


$more_link = elgg_view("output/url", array(
	"text" => elgg_echo("ffd_theme:widgets:recent_questions:more"),
	"href" => "questions"
));
echo "<div class='elgg-widget-more'>" . $more_link . "</div>";