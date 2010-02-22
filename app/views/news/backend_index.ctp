<div id="records">
    <?php $session->flash(); ?>
    
    <?php if (!empty($news)) {?>
        <ul class="list">
            <?php $odd = 0; foreach($news as $i) { ?>
                <li class="<?=$odd++ % 2 ? 'odd' : ''?>">
                    <span class="title"><?=$i['News']['title']?></span>
                    <span class="intro">(<?=substr(strip_tags($i['News']['content']), 0, 30)?> ..)</span>
                    <span class="actions">
                        <?=$html->link('', array('action' => 'remove', $i['News']['id']), array('title' => __('Remove this item', 1), 'class' => 'button-24px remove'), __('Are you sure you want to remove this news?', 1))?>
                        <?=$html->link('', array('action' => 'edit',   $i['News']['id']), array('title' => __('Edit this item', 1), 'class' => 'button-24px edit'), null)?>
                        <?=$html->link('', array('backend' => false, 'controller' => 'news', 'action' => 'display', $i['News']['id']), array('title' => __('View this item', 1), 'class' => 'button-24px view'), null)?>
                    </span>
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
    <?php echo $form->create('search', array('class' => 'model-add-small'));?>
    <?php echo $form->input('query', array('label' => false)); ?>
    <?php echo $form->end('Search');?>
    
    <?=$html->link(__('Add a news', 1), array('action' => 'add'), array('class' => 'button-add'), null)?>
</div>
