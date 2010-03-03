<div id="records">
    <?php $session->flash(); ?>
    
    <?php if (!empty($galleries)) {?>
        <ul class="list">
            <?php $odd = 0; foreach($galleries as $i) { ?>
                <li class="<?=$odd++ % 2 ? 'odd' : 'even'?>">
                    <div class="wrapper">
                        <div class="title"><?=$i['Gallery']['title']?></div>
			<div class="preview">(<?=count($i['Resource'])?>)</div>
                        <div class="actions">
                            <?=$html->link('', array('action' => 'remove', $i['Gallery']['id']), array('title' => __('Remove this gallery', 1), 'class' => 'button-24px remove'), __('Are you sure you want to remove this gallery?', 1))?>
                            <?=$html->link('', array('action' => 'edit', $i['Gallery']['id']), array('title' => __('Edit this gallery', 1), 'class' => 'button-24px edit'), null)?>
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
    <?=$html->link(__('Create a gallery', 1), array('action' => 'add'), array('class' => 'add'), null)?>
</div>
