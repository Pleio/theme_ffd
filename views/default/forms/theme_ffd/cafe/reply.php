<?php
/**
 * Shows the form for a cafe message
 *
 * @package theme_ffd
 */

$cafe = elgg_extract("cafe", $vars);
$annotation = elgg_extract("annotation", $vars);

if ($cafe) {
    echo elgg_view("input/hidden", array("name" => "entity_guid", "value" => $cafe->guid));
}

?>

<div>
    <?php echo elgg_view('input/longtext', array(
        'name' => 'text',
        'value' => elgg_get_sticky_value('cafe_reply', 'text', $annotation->text)
    ));
    ?>
</div>
        
<?php
    echo elgg_view("input/submit", array(
        'value' => elgg_echo('theme_ffd:cafe:publish')
    ));
?>