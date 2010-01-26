<div id="column_left">
    <h1><?=__('Pages', 1)?></h1>
</div>
<div id="column_right">
    
    <?php $session->flash(); ?>
    
    <table class="table" cellpadding="0" cellspacing="0" style="width: 600px">
        <thead>
            <tr>
                <th class="title">
                    Page Title
                </th>
                <th class="title">
                    Menu Title
                </th>
                <th class="title">
                    Slug
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pages as $page) { ?>
                <tr>
                    <td>
                        <?=$page['Page']['page_title']?>
                    </td>
                    <td>
                        <?=$page['Page']['menu_title']?>
                    </td>
                    <td>
                        <a href="/cms/pages/edit/<?=$page['Page']['id']?>"><?=$page['Page']['slug']?></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
    
</div>
