<?php

$guid = (int) get_input("guid");
$cafe = new ElggCafe($guid);

if (!$cafe instanceof ElggCafe) {
    register_error(elgg_echo("InvalidParameterException:NoEntityFound"));
    forward(REFERER);
}

if (!$cafe->canEdit()) {
    register_error(elgg_echo("InvalidParameterException:NoEntityFound"));
    forward(REFERER);
}

try {
    $cafe->delete();
    system_message(elgg_echo("entity:delete:success", array($cafe->guid)));
} catch (Exception $e) {
    register_error(elgg_echo("entity:delete:fail", array($cafe->guid)));
    register_error($e->getMessage());
}

forward(REFERER);
