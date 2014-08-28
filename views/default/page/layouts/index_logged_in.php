<?php

	$login = elgg_view("core/account/login_box");
	$welcome = elgg_view("theme_ffd/index/welcome");
	
	$context = "index";
	
	$owner = elgg_get_page_owner_entity();
	$widgets = elgg_get_widgets($owner->guid, $context);
	
	$show_add_widgets = elgg_extract('show_add_widgets', $vars, true);
	$exact_match = elgg_extract('exact_match', $vars, false);
	$show_access = elgg_extract('show_access', $vars, true);
	
?>
<div class="elgg-main theme-ffd-index">
<?php 

if (elgg_can_edit_widget_layout($context)) {
	if ($show_add_widgets) {
		echo elgg_view('page/layouts/widgets/add_button');
	}

	$params = array(
			'widgets' => $widgets,
			'context' => $context,
			'exact_match' => $exact_match,
			'show_access' => $show_access,
	);
	echo elgg_view('page/layouts/widgets/add_panel', $params);
}
?>
	<div class="elgg-col elgg-col-2of3">
		<div>
			<div class="elgg-col elgg-col-1of2 elgg-widgets" id="elgg-widget-col-1">A
			<?php 
			foreach ($widgets[1] as $widget) {
				echo elgg_view_entity($widget, array('show_access' => $show_access));
			}
			?>
			
			</div>
			<div class="elgg-col elgg-col-1of2">
				<div class="elgg-col elgg-col-1of2 elgg-widgets" id="elgg-widget-col-2">B
				<?php 
				foreach ($widgets[2] as $widget) {
					echo elgg_view_entity($widget, array('show_access' => true));
				}
				?>
				</div>
				<div class="elgg-col elgg-col-1of2">
				C
				</div>
				<div>
				D
				</div>
			</div>
		</div>
		<div>
			<div class="elgg-col elgg-col-3of4">
			E
			</div>
			<div class="elgg-col elgg-col-1of4">
			F
			</div>
		</div>
	</div>
	<div class="elgg-col elgg-col-1of3">
		<div>
		G
		</div>
		<div>
			<div class="elgg-col elgg-col-1of2">
			H
			</div>
			<div class="elgg-col elgg-col-1of2">
			I
			</div>
		</div>
	</div>
</div>