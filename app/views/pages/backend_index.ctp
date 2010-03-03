<div id="records">
    <?php $session->flash(); ?>
    <?=$tree->generate($pages, array('id' => 'pages', 'class' => 'list tree', 'element' => 'backend/pages-tree'))?>
</div>
<div id="actions">
    <?=$html->link(__('Create a page', 1), array('action' => 'add'), array('class' => 'add'), null)?>
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
