<?php
/**
 * Shows the form for a cafe message
 *
 * @package theme_ffd
 */

$cafe = elgg_extract("entity", $vars);
$collapsable = elgg_extract("collapsable", $vars, false);

if ($cafe) {
    echo elgg_view("input/hidden", array("name" => "guid", "value" => $cafe->guid));
}

?>

<?php if ($collapsable): ?>
    <div class="theme-ffd-top-button">
    <?php echo elgg_view("output/url", array(
        'text' => elgg_view_icon("round-plus") . '&nbsp' . elgg_echo('theme_ffd:cafe:publish_message'),
        'class' => 'elgg-button elgg-button-submit theme-ffd-collapse-control'
    )); ?>
    </div>
<?php endif ?>

<div <?php if ($collapsable) { echo "class=\"theme-ffd-collapsable\""; } ?>>
    <div>
        <?php echo elgg_view('input/dropdown', array(
            'name' => 'purpose',
            'options_values' => array(
                'search' => elgg_echo('theme_ffd:cafe:purpose:search'),
                'share' => elgg_echo('theme_ffd:cafe:purpose:share'),
                'experience' => elgg_echo('theme_ffd:cafe:purpose:experience')
            ),

            'value' => elgg_get_sticky_value('cafe', 'purpose', $cafe->purpose)
        ));
        ?>
        <?php echo elgg_view('input/text', array(
            'name' => 'title',
            'class' => 'elgg-autofocus',
            'value' => elgg_get_sticky_value('cafe', 'title', $cafe->title)
        ));
        ?>
    </div>

    <div>
        <?php echo elgg_view('input/longtext', array(
            'name' => 'description',
            'value' => elgg_get_sticky_value('cafe', 'description', $cafe->description)
        ));
        ?>
    </div>
        
    <div class="theme-ffd-buttons">
        <?php
            echo elgg_view("input/submit", array(
                'value' => elgg_echo('theme_ffd:cafe:publish')
            ));

            echo elgg_view("output/url", array(
                'href' => '#',
                'text' => elgg_echo('theme_ffd:cafe:cancel'),
                'class' => 'elgg-button elgg-button-submit theme-ffd-collapse-control',
                'style' => 'display:none'
            ));
        ?>
    </div>
</div>