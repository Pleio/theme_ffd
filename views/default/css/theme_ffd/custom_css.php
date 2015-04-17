/* FFD Custom CSS */

<?php 

$result = elgg_get_plugin_setting('custom_css', 'theme_ffd');
if (!empty($result)) {
	echo $result;
}
?>

/* End FFD Custom CSS */
