<?php

function theme_ffd_index($hook, $type, $return = false, $params = array()) {
	include_once(dirname(dirname(__FILE__)) . "/pages/index.php");

	// return true to signify that we have handled the front page
	return true;
}

function theme_ffd_route_questions_hook($hook_name, $entity_type, $return_value, $params) {
	if (!empty($return_value) && is_array($return_value)) {
		$page = elgg_extract("segments", $return_value);
			
		switch ($page[0]) {
			case "view":
				if (isset($page[1])) {
					set_input("guid", $page[1]);
				}

				include(dirname(dirname(__FILE__)) . "/pages/questions/view.php");
				return false;
				break;
			case "most_viewed":
				include(dirname(dirname(__FILE__)) . "/pages/questions/most_viewed.php");
				return false;
				break;
		}
	}
}


function theme_ffd_category_filter_menu_hook_handler($hook, $type, $return_value, $params) {
	if (elgg_in_context("questions")) {
		$return_value[] = ElggMenuItem::factory(array(
			"name" => "most_viewed",
			"text" => elgg_echo("theme_ffd:questions:filter:most_viewed"),
			"href" => "questions/most_viewed",
			"priority" => 600
		));
		$return_value[] = ElggMenuItem::factory(array(
			"name" => "filter-category",
			"text" => elgg_echo("theme_ffd:questions:filter:category") . elgg_view_icon("caret-down"),
			"href" => "#",
			"priority" => 1000,
			"item_class" => "float-alt"
		));

		$options = array(
			"type" => "group",
			"limit" => false,
			"metadata_name_value_pairs" => array(
				"name" => "questions_enable",
				"value" => "yes"
			),
			"joins" => "JOIN " . elgg_get_config("dbprefix") . "groups_entity ge ON e.guid = ge.guid",
			"order_by" => "ge.name"
		);
		$group_batch = new ElggBatch("elgg_get_entities_from_metadata", $options);
		foreach ($group_batch as $group) {
			if (elgg_in_context("workflow")) {
				if (questions_workflow_enabled($group)) {
					$context = "workflow";
				} else {
					$context = false;
				}
			} else {
				$context = "all";
			}

			if ($context) {
				$return_value[] = ElggMenuItem::factory(array(
					"name" => "filter-category_" .  $group->getGUID(),
					"text" => elgg_view_icon("share-square", "mrs") . $group->name,
					"href" => "questions/group/" . $group->getGUID() . "/" . $context,
					"parent_name" => "filter-category"
				));
			}
		}
	} elseif (elgg_in_context('cafe')) {
		$return_value[] = ElggMenuItem::factory(array(
			"name" => "filter-category",
			"text" => elgg_echo("theme_ffd:questions:filter:category") . elgg_view_icon("caret-down"),
			"href" => "#",
			"priority" => 1000,
			"item_class" => "float-alt"
		));

		$options = array('search','share','experience');
		foreach ($options as $option) {
			$return_value[] = ElggMenuItem::factory(array(
				"name" => "filter-category_" . $option,
				"text" => elgg_view_icon("share-square", "mrs") . elgg_echo('theme_ffd:cafe:purpose:' . $option),
				"href" => "cafe/purpose/" . $option,
				"parent_name" => "filter-category"
			));
		}
	}

	return $return_value;
}


function theme_ffd_entity_hook($hook_name, $entity_type, $return_value, $params) {
	$entity = elgg_extract("entity", $params);

	if (elgg_instanceof($entity, 'object', 'question') | elgg_instanceof($entity, 'object', 'cafe')) {
		if (elgg_is_logged_in() && elgg_is_active_plugin("content_subscriptions")) {
			if (!content_subscriptions_check_subscription($entity->guid)) {
				$url = "action/content_subscriptions/subscribe?entity_guid=" . $entity->getGUID();
				$text = elgg_view_icon('clip', 'mrs') . elgg_echo('theme_ffd:questions:menu:subscribe');
			} else {
				$url = "action/content_subscriptions/subscribe?entity_guid=" . $entity->getGUID();
				$text = elgg_view_icon('clip', 'mrs') . elgg_echo('theme_ffd:questions:menu:unsubscribe');
			}

			$return_value[] = ElggMenuItem::factory(array(
				"name" => "content_subscription",
				"text" => $text,
				"href" => $url,
				'is_action' => true,
				"priority" => 90
			));
		}
	}

	if (elgg_instanceof($entity, 'object', 'page_top')) {
		foreach ($return_value as $key => $item) {
			$name = $item->getName();
			if ($name == "history" && !elgg_is_admin_logged_in()) {
				unset($return_value[$key]);
			}
			if ($name == "export" && !elgg_is_admin_logged_in()) {
				unset($return_value[$key]);
			}
		}
	}

	return $return_value;
}


function theme_ffd_questions_alt_menu_hook_handler($hook, $type, $return_value, $params) {

	if (empty($params) || !is_array($params)) {
		return $return_value;
	}
	
	$entity = elgg_extract("entity", $params);
	if (empty($params) || !elgg_instanceof($entity, "object", "question")) {
		return $return_value;
	}
	
	// view counter
	if (elgg_is_active_plugin("entity_view_counter")) {
		$count = entity_view_counter_count_views($entity);
		
		$return_value[] = ElggMenuItem::factory(array(
			"name" => "view_counter",
			"text" => elgg_view_icon("eye", "mrs") . elgg_echo("theme_ffd:entity_view_counter:questions:menu:views", array($count)),
			"href" => false,
			"priority" => 100,
		));
	}
	
	// likes
	if (elgg_is_active_plugin("likes")) {
		$count = likes_count($entity);
		
		$return_value[] = ElggMenuItem::factory(array(
			"name" => "likes",
			"text" => elgg_view_icon("thumbs-up", "mrs") . elgg_echo("theme_ffd:likes:questions:menu:views", array($count)),
			"href" => false,
			"priority" => 200
		));
	}
	
	// answers
	$answer_options = array(
		"type" => "object",
		"subtype" => "answer",
		"container_guid" => $entity->getGUID(),
		"count" => true,
	);
	
	$num_answers = elgg_get_entities($answer_options);
	$return_value[] = ElggMenuItem::factory(array(
		"name" => "answers",
		"text" => elgg_view_icon("comment-o", "mrs") . elgg_echo("theme_ffd:answers:questions:menu:views", array($num_answers)),
		"href" => false,
		"priority" => 400
	));
	
	return $return_value;
}

function theme_ffd_questions_body_menu_hook_handler($hook, $type, $return_value, $params) {

	if (empty($params) || !is_array($params)) {
		return $return_value;
	}

	$entity = elgg_extract("entity", $params);
	if (empty($params) || !elgg_instanceof($entity, "object", "question")) {
		return $return_value;
	}

	// content subscriptions
	if (elgg_is_logged_in() && elgg_is_active_plugin("content_subscriptions")) {
		if (!content_subscriptions_check_subscription($entity->guid)) {
			$url = "action/content_subscriptions/subscribe?entity_guid=" . $entity->getGUID();
			$text = elgg_view_icon('clip', 'mrs') . elgg_echo('theme_ffd:questions:menu:subscribe');
		} else {
			$url = "action/content_subscriptions/subscribe?entity_guid=" . $entity->getGUID();
			$text = elgg_view_icon('clip', 'mrs') . elgg_echo('theme_ffd:questions:menu:unsubscribe');
		}

		$return_value[] = ElggMenuItem::factory(array(
			"name" => "content_subscription",
			"text" => $text,
			"href" => $url,
			'is_action' => true,
			"priority" => 90
		));
	}

	// likes
	if (elgg_is_logged_in() && elgg_is_active_plugin("likes") && $entity->canAnnotate(0, 'likes')) {
		// likes button
		if (!elgg_annotation_exists($entity->getGUID(), 'likes')) {
			$url = "action/likes/add?guid=" . $entity->getGUID();
			$text = elgg_view_icon('thumbs-up', 'mrs') . elgg_echo('theme_ffd:likes:questions:menu');
		} else {
			$url = "action/likes/delete?guid=" . $entity->getGUID();
			$text = elgg_view_icon('thumbs-up-alt', 'mrs') . elgg_echo('theme_ffd:likes:questions:menu:unlike');
		}

		$return_value[] = ElggMenuItem::factory( array(
			'name' => 'like',
			'text' => $text,
			'href' => $url,
			'is_action' => true,
			'priority' => 100,
		));
	}

	// answers
	$return_value[] = ElggMenuItem::factory(array(
		"name" => "answer",
		"text" => elgg_view_icon("comment-o", "mrs") . elgg_echo("theme_ffd:answers:questions:menu"),
		"href" => "questions/view/" . $entity->getGUID() . "#questions-answer-add",
		"priority" => 400
	));

	return $return_value;
}

/**
 * Adds a delete link to "generic_comment" annotations
 * @access private
 */
function theme_ffd_annotation_menu_setup($hook, $type, $return, $params) {
	$annotation = $params['annotation'];
	/* @var ElggAnnotation $annotation */

	if ($annotation->name == 'cafe_comment' && $annotation->canEdit()) {
		$url = elgg_http_add_url_query_elements('action/comments/delete', array(
			'annotation_id' => $annotation->id,
		));

		$options = array(
			'name' => 'delete',
			'href' => $url,
			'text' => "<span class=\"elgg-icon elgg-icon-delete\"></span>",
			'confirm' => elgg_echo('deleteconfirm'),
			'encode_text' => false
		);
		$return[] = ElggMenuItem::factory($options);
	}

	return $return;
}

function theme_ffd_cafe_filter_menu_handler($hook, $type, $objects, $params) {

	if (elgg_in_context('cafe')) {
		foreach ($objects as $key => $object) {
			// remove friends
			if ($object->getName() == "friend") {
				unset($objects[$key]);
			}
		}
	}

	return $objects;
}