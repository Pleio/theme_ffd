<?php
/**
 * Perform migration of reactions to answers
 *
 * @package Questions
 */
require_once(dirname(dirname(dirname(__FILE__))) . "/../engine/start.php");

admin_gatekeeper();

$annotations = elgg_get_annotations(array(
  'annotation_name' => 'generic_comment',
  'limit' => false
));

foreach ($annotations as $annotation) {
  $entity = get_entity($annotation->entity_guid);
  if ($entity instanceof ElggQuestion) {

    $answer = new ElggAnswer();
    $answer->container_guid = $entity->guid;
    $answer->description = $annotation->value;
    $answer->owner_guid = $annotation->owner_guid;
    $answer->access_id = $entity->access_id;
    $answer->save();

    // time created can only be overrided after saving first
    $answer->time_created = $annotation->time_created;
    $answer->save();

    $annotation->delete();

  }
}