<?php
/**
 * Friendly time
 * Translates an epoch time into a human-readable time.
 * 
 * @uses string $vars['time'] Unix-style epoch timestamp
 */

$timestamp = htmlspecialchars(date(elgg_echo('friendlytime:date_format'), $vars['time']));

if (elgg_in_context("questions")) {
	$friendly_time = $timestamp;
} else {
	$friendly_time = elgg_get_friendly_time($vars['time']);
}
echo "<acronym title=\"$timestamp\">$friendly_time</acronym>";
