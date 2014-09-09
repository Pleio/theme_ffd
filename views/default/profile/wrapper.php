<?php

$user = elgg_get_page_owner_entity();

$icon = elgg_view_entity_icon($user, 'large', array(
	'use_link' => false,
));

?>
<div class="profile">
	<div class="elgg-inner clearfix">
		<div id="profile-owner-block">
		<?php 
			echo "<div class='theme-ffd-profile-icon'>";
			echo $icon; 
			echo "</div>";
			if ($user->canEdit()) {
				
				echo "<ul>";
				
				echo "<li>";
				echo elgg_view("output/url", array(
					"text" => elgg_echo("profile:edit"),
					"href" => "profile/" . $user->username . "/edit",
				));
				echo "</li>";
				echo "<li>";
				echo elgg_view("output/url", array(
					"text" => elgg_echo("settings"),
					"href" => "settings/user/" . $user->username,
				));
				echo "</li>";
				
				if(elgg_is_active_plugin("messages")){
					if ($user->guid == elgg_get_logged_in_user_guid()) {
						$message_count = messages_count_unread();
						
						echo "<li>";
						echo elgg_view("output/url", array(
								"text" => elgg_echo("messages:inbox") . " [" . $message_count . "]",
								"href" => "messages/inbox/" . $user->username,
						));
						echo "</li>";
					}
				}
				
				
				echo "</ul>";
			}	
			echo elgg_view("theme_ffd/profile/question_stats");
		?>
		</div>
		<?php
			if (elgg_is_logged_in()) {
				if(elgg_get_logged_in_user_entity()->getGUID() !== $user->getGUID()) {
					echo elgg_view("output/url", array(
						"class" => "elgg-button elgg-button-action mtm mlm",
						"text" => "send a message",
						"href" => "messages/compose?send_to=" . $user->getGUID()
					));
				}
			} 
			echo elgg_view('profile/details'); 
		?>
	</div>
</div>