<?php

function theme_ffd_fivestar_get_top_users($n_days = 90, $eps = 0.5) {
    $options = array(
        'annotation_name' => 'fivestar',
        'where' => 'n_table.time_created > ' . (time() - 3600*24*$n_days),
        'order_by' => 'n_table.time_created desc',
        'limit' => 250
    );

    $annotations = elgg_get_annotations($options);

    $top_users = array();
    foreach ($annotations as $annotation) {
        if (!array_key_exists($annotation->owner_guid, $top_users)) {
            $top_users[$annotation->owner_guid] = array();
        }

        $top_users[$annotation->owner_guid][] = $annotation->value/100;
    }

    $max_scores = 0;
    foreach ($top_users as $guid => $scores) {
        if (count($scores) > $max_scores) {
            $max_scores = count($scores);
        }
    }

    // calculate the average score
    $top_users = array_map(function($scores) use ($max_scores, $eps) {
        return ($eps * (array_sum($scores) / count($scores))) * ((1-$eps) * (count($scores) / $max_scores));
    }, $top_users);

    arsort($top_users);

    $top_users = array_slice($top_users, 0, 10, true);

    $users = array();
    foreach ($top_users as $guid => $score) {
        $users[] = get_entity($guid);
    }

    return $users;
}