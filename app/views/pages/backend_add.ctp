<?php $session->flash(); ?>

<?=$form->create('Page', array('class' => 'model-add'))?>

<div class="tabs">
    <ul>
        <?php foreach (Configure::read('Config.languages') as $idx => $value) { ?>
            <li><a href="#title-<?=$idx?>"><?=__('Title in ' . $value, 1)?></a></li>
        <?php } ?>
    </ul>
    <?php foreach (Configure::read('Config.languages') as $idx => $value) { ?>
        <div id="title-<?=$idx?>">
            <?=$form->input('title.' . $value, array('label' => false))?>
        </div>
    <?php } ?>
</div>

<?=$form->input('slug', array('label' => __('Slug', 1)))?>

<?=$form->input('template', array('label' => __('Template', 1), 'type' => 'select', 'options' => array('0' => 'Home', '1' => 'Page', '2' => 'Gallery')))?>

<div class="tabs">
    <ul>
        <?php foreach (Configure::read('Config.languages') as $idx => $value) { ?>
            <li><a href="#content-<?=$idx?>"><?=__('Content in ' . $value, 1)?></a></li>
        <?php } ?>
    </ul>
    <?php foreach (Configure::read('Config.languages') as $idx => $value) { ?>
        <div id="content-<?=$idx?>">
            <?=$form->input('content.' . $value, array('class' => 'wymeditor', 'label' => false))?>
        </div>
    <?php } ?>
</div>

<?=$form->submit('Save', array('class' => 'wymupdate'))?>

<?=$form->end()?>

<script type="text/javascript">
$(function()
{
    $('.wymeditor').wymeditor
    ({
        skin: "compact"
    });
    
    $('.tabs').tabs();
});
</script>
