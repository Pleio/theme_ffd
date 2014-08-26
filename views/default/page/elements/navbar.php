<?php

// insert site-wide navigation
if (elgg_is_logged_in()) {
	echo elgg_view_menu('site');
}