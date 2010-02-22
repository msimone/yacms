<div id="records">
    <?php $session->flash(); ?>
    
    <?php if (!empty($users)) {?>
        <ul class="list">
            <?php $odd = 0; foreach($users as $i) { ?>
                <li class="<?=$odd++ % 2 ? 'odd' : ''?>">
                    <span class="title"><?=$i['User']['username']?></span>
                    <span class="intro">(<?=$i['User']['email']?>) created <?=$i['User']['created']?></span>
                    <span class="actions">
                        <?=$html->link('', array('action' => 'remove', $i['User']['id']), array('title' => __('Remove this user', 1), 'class' => 'button-24px remove'), __('Are you sure you want to remove this news?', 1))?>
                        <?=$html->link('', array('action' => 'edit',   $i['User']['id']), array('title' => __('Edit this user', 1), 'class' => 'button-24px edit'), null)?>
                        <?=$html->link('', array('action' => 'edit',   $i['User']['id']), array('title' => __('Mail this user', 1), 'class' => 'button-24px mail'), null)?>
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
</div>

