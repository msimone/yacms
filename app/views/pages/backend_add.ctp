<?php $session->flash(); ?>

<?=$form->create('Page', array('class' => 'model-add', 'url' => $html->url()))?>

<?=$form->input('title', array('label' => __('Title:', 1)))?>

<div id="tabs">
    <ul>
        <li><a href="#tab-1">Content 1</a></li>
        <li><a href="#tab-2">Content 2</a></li>
        <li><a href="#tab-3">Content 3</a></li>
    </ul>
    <div id="tab-1">
        <?=$form->input('content', array('class' => 'wymeditor', 'label' => false))?>
    </div>
    <div id="tab-2">
        <?=$form->input('content2', array('class' => 'wymeditor', 'label' => false))?>
    </div>
    <div id="tab-3">
        <?=$form->input('content3', array('class' => 'wymeditor', 'label' => false))?>
    </div>
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
    
    $('#tabs').tabs();
});
</script>
