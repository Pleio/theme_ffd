<?php
$videos = $vars['videos'];
$i = 0;
?>

<div class="ffd-widget-videos">
	<div class="list">
		<ul class="elgg-list">
			<?php foreach($videos as $video): ?>
				<li class="elgg-item <?php if ($i == 0): ?>selected<?php endif ?>">
					<div>
						<?php echo elgg_view_icon("round-plus"); ?>
						<a href="<?php echo $video->getURL(); ?>" data-guid="<?php echo $video->guid; ?>">
							<?php echo $video->title; ?>
						</a>
					</div>
				</li>
			<?php $i++; ?>
			<?php endforeach ?>
		</ul>
	</div>
	<div class="video">
		<?php
		echo elgg_view("videolist/watch/{$videos[0]->videotype}", array(
			'entity' => $videos[0],
			'width' => 650,
			'height' => 365,
		));
		?>
	</div>
</div>
