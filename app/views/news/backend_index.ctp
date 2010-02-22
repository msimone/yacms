<div id="records">
    <?php $session->flash(); ?>
    
    <?php if (!empty($news)) {?>
        <ul class="list">
            <?php foreach($news as $i) { ?>
                <li>
                    <span class="title"><?=$i['News']['news_title']?> <span class="intro">(<?=substr(strip_tags($i['News']['content']), 0, 30)?> ..)</span></span>
                    <span class="actions">
                        <?=$html->link('', array('action' => 'remove', $i['News']['id']), array('title' => __('Remove this item', 1), 'class' => 'button-24px remove'), __('Are you sure you want to remove this news?', 1))?>
                        <?=$html->link('', array('action' => 'edit',   $i['News']['id']), array('title' => __('Edit this item', 1), 'class' => 'button-24px edit'), null)?>
                        <?=$html->link('', array('backend' => false, 'controller' => 'news', 'action' => 'display', $i['News']['id']), array('title' => __('View this item', 1), 'class' => 'button-24px view'), null)?>
                    </span>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>
</div>
<div id="actions">
    <?php echo $form->create('search');?>
    <?php echo $form->input('query'); ?>
    <?php echo $form->end('Search');?>
    
    <?=$html->link(__('Add a news', 1), array('action' => 'add'), array('class' => 'button-add'), null)?>
</div>
