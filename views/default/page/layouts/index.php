<?php

	$login = elgg_view("core/account/login_box");
	$welcome = elgg_view("theme_ffd/index/welcome");
?>
<div class="elgg-main">
	<div class="elgg-col elgg-col-2of3">
		<?php 
			echo elgg_view_module("theme-ffd-index-welcome", "", $welcome);
		?>
	</div>
	<div class="elgg-col elgg-col-1of3">
		<?php 
			echo elgg_view_module("theme-ffd-index-login", "", $login, array());
		?>
	</div>
</div>