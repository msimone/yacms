<?php extract ($data); ?>
<?php $tree->addItemAttribute('id', 'page-' . $Page['id']); ?>

<div class="wrapper">
    <div class="title">
        <?=$Page['title']?>
    </div>
    <div class="preview">
        (<?=substr(strip_tags($Page['content']), 0, 40)?> ..)
    </div>
    <div class="actions">
        <?=$html->link('', array('action' => 'remove', $Page['id']), array('title' => __('Remove this page', 1), 'class' => 'button-24px remove'), __('Are you sure you want to remove this page?', 1))?>
        <?=$html->link('', array('action' => 'edit',   $Page['id']), array('title' => __('Edit this page', 1), 'class' => 'button-24px edit'), null)?>
        <?=$html->link('', array('controller' => 'pages', 'action' => 'display', $Page['slug'], 'backend' => false), array('title' => __('View this page', 1), 'class' => 'button-24px view'), null)?>
    </div>
</div>
