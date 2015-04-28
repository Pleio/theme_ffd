<?php
/**
 * Elgg video list widget edit
 *
 * @package ElggVideolist
 */
?>

<div>
	<?php 
	echo elgg_echo('tags') . ":";
	echo elgg_view('input/text', array(
		'name' => 'params[tags]',
		'value' => $vars['entity']->tags
	)); 
	?>
</div>
