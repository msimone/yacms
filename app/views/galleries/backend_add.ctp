<?php $session->flash(); ?>

<?=$form->create('Gallery', array('class' => 'model-add', 'url' => $html->url()))?>

<?=$form->input('title', array('label' => __('Title:', 1)))?>

<div id="gallery">
    <?php $idx = 0; foreach ($resources as $idx => $value) {?>
        <?=$html->image('/' . $value['Resource']['path'])?>
        <?=$form->input('Resource.' . $idx . '.id', array('type' => 'checkbox', 'label' => false, 'value' => $value['Resource']['id']))?>
    <?php $idx++; } ?>
</div>

<?=$form->submit('Save')?>

<?=$form->end()?>

<script type="text/javascript">
$(function()
{
});
</script>
