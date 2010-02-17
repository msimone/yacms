<div id="column_left">
    <h1><?=__($this->name, 1)?></h1>
    
    <?=$html->link(__('Add a news', 1), array('action' => 'add'), null, null)?>
    
</div>
<div id="column_right">
    
    <?php $session->flash(); ?>
    
    <table id="news-table" class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th class="heading" style="-moz-border-radius: 10px 0 0 0; -webkit-border-radius: 10px 0 0 0;">
                    <?=$paginator->sort(__('Title', 1), 'news_title')?>
                </th>
                <th class="heading">
                    <?=$paginator->sort(__('Content', 1), 'content')?>
                </th>
                <th class="heading">
                    <?=$paginator->sort(__('Active', 1), 'active')?>
                </th>
                <th class="heading" style="-moz-border-radius: 0 10px 0 0; -webkit-border-radius: 0 10px 0 0;">
                    <?=__('Actions', 1)?>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $odd = 0; foreach($news as $i) { ?>
                <tr <?=$odd++ % 2 ? 'class="odd"' : ''?>>
                    <td>
                        <?=$i['News']['news_title']?>
                    </td>
                    <td>
                        <?=substr($i['News']['content'], 0, 20) . '...'?>
                    </td>
                    <td>
                        <?=$html->link('', array('action' => 'toggle', $i['News']['id']), array('class' => 'button-16px button-16px-' . ($i['News']['active'] ? 'active' : 'inactive')), null)?>
                    </td>
                    <td>
                        <?=$html->link('', array('action' => 'edit',   $i['News']['id']), array('class' => 'button-24px button-24px-edit'), null)?>
                        &nbsp;
                        <?=$html->link('', array('action' => 'remove', $i['News']['id']), array('class' => 'button-24px button-24px-remove'), __('Are you sure you want to remove this news?', 1))?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">
                    <?=$paginator->prev('', array('class' => 'button-24px button-24px-previous'), null, array('class' => 'button-32px button-24px-previous disabled'))?>
                    <?=$paginator->next('', array('class' => 'button-24px button-24px-next'),     null, array('class' => 'button-32px button-24px-next disabled'))?>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

<script>
$(function()
{
    $('.button-16px-active, .button-16px-inactive').click(function()
    {
        jQuery.post($(this).attr('href'));
        $(this).toggleClass('button-16px-active').toggleClass('button-16px-inactive');
        
        return false;
    });
});
</script>
