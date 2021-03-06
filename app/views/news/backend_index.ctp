<div id="records">
    <?php $session->flash(); ?>
    
    <?php if (!empty($news)) {?>
        <ul class="list">
            <?php $odd = 0; foreach($news as $i) { ?>
                <li class="<?=$odd++ % 2 ? 'odd' : 'even'?>">
                    <div class="wrapper">
                        <div class="title"><?=$i['News']['title']?></div>
                        <div class="preview">(<?=substr(strip_tags($i['News']['content']), 0, 30)?> ..)</div>
                        <div class="actions">
                            <?=$html->link('', array('action' => 'remove', $i['News']['id']), array('title' => __('Remove this news', 1), 'class' => 'button-24px remove'), __('Are you sure you want to remove this news?', 1))?>
                            <?=$html->link('', array('action' => 'edit',   $i['News']['id']), array('title' => __('Edit this news', 1), 'class' => 'button-24px edit'), null)?>
                            <?=$html->link('', array('backend' => false, 'controller' => 'news', 'action' => 'display', $i['News']['slug']), array('title' => __('View this news', 1), 'class' => 'button-24px view'), null)?>
                        </div>
                    </div>
                </li>
            <?php } ?>
            <li class="paginator">
                <?=$paginator->prev('', array('class' => 'button-24px previous'), null, array('class' => 'button-32px previous disabled'))?>
                <?=$paginator->next('', array('class' => 'button-24px next'), null, array('class' => 'button-32px next disabled'))?>
            </li>
        </ul>
    <?php } ?>
</div>
<div id="actions">
    <?=$html->link(__('Create a news', 1), array('action' => 'add'), array('class' => 'add'), null)?>
</div>
