<div id="records">
    <?php $session->flash(); ?>
    
    <!--
    <?php if (!empty($pages)) {?>
        <ul id="tree" class="list">
            <?php $odd = 0; foreach($pages as $i) { ?>
                <li id="i<?=$i['Page']['id']?>" class="sortable <?=$odd++ % 2 ? 'odd' : ''?>">
                    <span class="title"><?=$i['Page']['title']?></span>
                    <span class="intro">(<?=substr(strip_tags($i['Page']['content']), 0, 55)?> ..)</span>
                    <span class="actions">
                        <?=$html->link('', array('action' => 'remove', $i['Page']['id']), array('title' => __('Remove this item', 1), 'class' => 'button-24px remove'), __('Are you sure you want to remove this page?', 1))?>
                        <?=$html->link('', array('action' => 'edit',   $i['Page']['id']), array('title' => __('Edit this item', 1), 'class' => 'button-24px edit'), null)?>
                        <?=$html->link('', array('backend' => false, 'controller' => 'pages', 'action' => 'display', $i['Page']['slug']), array('title' => __('View this item', 1), 'class' => 'button-24px view'), null)?>
                    </span>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>
    -->
    
    <?php if (!empty($pages)) {?>
        <ul id="pages" class="tree">
            <?php $odd = 0; foreach($pages as $i) { ?>
                <li id="i-<?=$i['Page']['id']?>" class="sortable">
                    <div class="wrapper">
                        <div class="title">
                            <?=$i['Page']['title']?>
                        </div>
                        <div class="preview">
                            (<?=substr(strip_tags($i['Page']['content']), 0, 40)?> ..)
                        </div>
                        <div class="actions">
                            <?=$html->link('', array('action' => 'remove', $i['Page']['id']), array('title' => __('Remove this item', 1), 'class' => 'button-24px remove'), __('Are you sure you want to remove this page?', 1))?>
                            <?=$html->link('', array('action' => 'edit',   $i['Page']['id']), array('title' => __('Edit this item', 1), 'class' => 'button-24px edit'), null)?>
                            <?=$html->link('', array('backend' => false, 'controller' => 'pages', 'action' => 'display', $i['Page']['slug']), array('title' => __('View this item', 1), 'class' => 'button-24px view'), null)?>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>
</div>
<div id="actions">
</div>

<script type="text/javascript">
$(function()
{
    $('#pages').NestedSortable(
    {
        accept: 'sortable',
        helperclass: 'helper',
        onChange: function(serialized)
        {
            jQuery.get('/cms/pages/sort', serialized[0]['hash']);
        },
    });
});
</script>
