<?php
/**
 * Elgg login form
 *
 * @package Elgg
 * @subpackage Core
 */
?>

<div>
	<label><?php echo elgg_echo('loginusername'); ?></label>
	<?php echo elgg_view('input/text', array(
		'name' => 'username',
		'id' => 'username',
		'class' => 'elgg-autofocus',
		));
	?>
</div>
<div>
	<label><?php echo elgg_echo('password'); ?></label>
	<?php echo elgg_view('input/password', array(
		'name' => 'password',
		'id' => 'password'
		));
	?>
</div>

<?php echo elgg_view('login/extend', $vars); ?>

<div class="elgg-foot">
	<label class="mtm float-alt">
		<input type="checkbox" name="persistent" value="true" />
		<?php echo elgg_echo('user:persistent'); ?>
	</label>

	<button type="submit" class="elgg-button elgg-button-submit">
		<?php echo elgg_view_icon("unlock-alt", "mrs") . elgg_echo("login"); ?>
	</button>

	<?php
	if (isset($vars['returntoreferer'])) {
		echo elgg_view('input/hidden', array('name' => 'returntoreferer', 'value' => 'true'));
	}
	?>

	<ul class="elgg-menu elgg-menu-general mtm">
	<?php
		if (elgg_get_config('allow_registration')) {
			echo '<li><a class="registration_link" href="' . elgg_get_site_url() . 'register">' . elgg_echo('register') . '</a></li>';
		}
	?>
		<li><a class="forgot_link" href="<?php echo elgg_get_site_url(); ?>forgotpassword">
			<?php echo elgg_echo('user:password:lost'); ?>
		</a></li>
	</ul>
</div>
