<div id="records">
    <?php $session->flash(); ?>
    <?=$tree->generate($pages, array('id' => 'pages', 'class' => 'list tree', 'element' => 'backend/pages-tree'))?>
    
    <!--
    <?php if (!empty($pages)) {?>
        <ul id="pages" class="tree">
            <?php $odd = 0; foreach($pages as $i) { ?>
                <li id="i-<?=$i['Page']['id']?>" class="sortable">
                    <div class="wrapper">
                        <div class="title">
                            <?=$i['Page']['title']?>
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
    -->
    
</div>
<div id="actions">
</div>

<script type="text/javascript">
$(function()
{
    $('.tree ul').addClass('list tree');
    $('.tree li').addClass('sortable');
    
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
