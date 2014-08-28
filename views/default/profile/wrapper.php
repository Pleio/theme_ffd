<?php

$user = elgg_get_page_owner_entity();

$icon = elgg_view_entity_icon($user, 'large', array(
	'use_link' => false,
));

?>
<div class="profile">
	<div class="elgg-inner clearfix">
		<div id="profile-owner-block">
		<?php echo $icon; ?>
		</div>
		<?php
			if (elgg_is_logged_in()) {
				if(elgg_get_logged_in_user_entity()->getGUID() !== $user->getGUID()) {
					echo elgg_view("output/url", array(
						"class" => "elgg-button elgg-button-action",
						"text" => "send a message",
						"href" => "messages/compose?send_to=" . $user->getGUID()
					));
				}
			} 
			echo elgg_view('profile/details'); 
		?>
	</div>
</div>