<div id="records">
    <?php $session->flash(); ?>
    
    <?php if (!empty($resources)) {?>
        <ul class="list">
            <?php $odd = 0; foreach($resources as $i) { ?>
                <li class="<?=$odd++ % 2 ? 'odd' : 'even'?>">
		    <div class="wrapper">
			<div class="title"><?=$i['Resource']['name']?></div>
			<div class="preview"><?=round($i['Resource']['size'] / 1024, 1)?> KB - <?=$i['Resource']['type']?></div>
			<div class="actions">
			    <?=$html->link('', array('action' => 'remove', $i['Resource']['id']), array('title' => __('Remove this resource', 1), 'class' => 'button-24px remove'), __('Are you sure you want to remove this resource?', 1))?>
			    <?=$html->link('', '/' . $i['Resource']['path'], array('title' => __('Download this resource', 1), 'class' => 'button-24px download'), null)?>
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
    <?=$form->create('Resource', array('class' => 'upload-form', 'type' => 'file'))?>
    <?=$form->input('Resource', array('type' => 'file', 'size' => '30', 'label' => false))?>
    <?=$form->end(__('Upload a new resource', 1))?>
</div>
