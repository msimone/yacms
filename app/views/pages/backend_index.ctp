<div id="column_left">
    <h1><?=__('Pages', 1)?></h1>
</div>
<div id="column_right">
    
    <?php $session->flash(); ?>
    
    <?php if (!empty($pages)) {?>
        <ul>
            <?php foreach ($pages as $page) { ?>
                <li>
                    <?=$page['Page']['page_title']?> - <?=$page['Page']['menu_title']?> - <a href="/cms/pages/edit/<?=$page['Page']['id']?>"><?=$page['Page']['slug']?></a>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>
</div>
