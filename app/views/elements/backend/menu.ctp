<div id="menu">
    <div id="clock">
        <div id="clock-time">
        </div>
        <div id="clock-date">
        </div>
    </div>
    <?php foreach($modules as $module) { ?>
        <div id="menu-button-<?=$module['Module']['name']?>" class="menu-button float-left">
            <?=$html->link(null, array('controller' => $module['Module']['name'], 'action' => 'index'), array('class' => 'menu-button-icon selectable', 'style' => 'background-image: url(/img/backend/menu-button-'.$module['Module']['name'].'.png)'))?>
        </div>
    <?php } ?>
    <div id="menu-button-logout" class="menu-button float-left">
        <?=$html->link(null, array('controller' => 'users', 'action' => 'logout'), array('class' => 'menu-button-icon selectable', 'style' => 'background-image: url(/img/backend/menu-button-logout.png)'), __('Are you sure you want to logout?', 1))?>
    </div>
</div>
<div id="menu-button-close">
</div>
