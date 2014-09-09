<?php 

$options = array(
	"type" => "user",
	"relationship" => "member_of_site",
	"relationship_guid" => elgg_get_site_entity()->guid,
	"inverse_relationship" => true,
	"count" => true
);

$count_users = elgg_get_entities_from_relationship($options);
$count_online = find_active_users(600, $limit, $offset, true);

echo "<div class='center'>";

echo "<div>" . elgg_view_icon("bar-chart-o") . "</div>";
echo "<div>" . $count_users . " " . strtolower(elgg_echo("item:user")) . "</div>";
echo "<div>" . elgg_view_icon("users") . " " . $count_online . " " . elgg_echo("online") . "</div>";

echo "</div>";