<?php 


$options = array(
	"type" => "object",
	"subtype" => "question",
	"limit" => 12
);

$questions = elgg_get_entities($options);
if ($questions) {
	foreach ($questions as $question) {
		echo "<div class=\"question\">";
			echo "<div class=\"question-title\">";
				echo elgg_view_icon("round-plus");
				
				echo elgg_view("output/url", array(
					"text" => $question->title,
					"href" => $question->getURL()
				));
			echo "</div>";

			echo "<div class=\"question-date\">";
				echo  " ";
				echo "<i>" . strftime("%e %b", $question->time_created) . "</i>";
			echo "</div>";
		echo "</div>";
	}
}


$more_link = elgg_view("output/url", array(
	"text" => elgg_echo("ffd_theme:widgets:recent_questions:more"),
	"href" => "questions"
));
echo "<div class='elgg-widget-more'>" . $more_link . "</div>";