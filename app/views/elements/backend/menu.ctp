<div id="menu">
    <div id="clock">
        <div id="clock-time">
        </div>
        <div id="clock-date">
        </div>
    </div>
    <div id="menu-button-home" class="menu-button fl">
        <?=$html->link(null, array('controller' => 'home', 'action' => 'index'), array('class' => 'menu-button-icon selectable', 'style' => 'background-image: url(/img/backend/menu-button-home.png)'))?>
    </div>
    <div id="menu-button-pages" class="menu-button fl">
        <?=$html->link(null, array('controller' => 'pages', 'action' => 'index'), array('class' => 'menu-button-icon selectable', 'style' => 'background-image: url(/img/backend/menu-button-pages.png)'))?>
    </div>
    <div id="menu-button-galleries" class="menu-button fl">
        <?=$html->link(null, array('controller' => 'galleries', 'action' => 'index'), array('class' => 'menu-button-icon selectable', 'style' => 'background-image: url(/img/backend/menu-button-galleries.png)'))?>
    </div>
    <div id="menu-button-users" class="menu-button fl">
        <?=$html->link(null, array('controller' => 'users', 'action' => 'index'), array('class' => 'menu-button-icon selectable', 'style' => 'background-image: url(/img/backend/menu-button-users.png)'))?>
    </div>
    <div id="menu-button-logout" class="menu-button fl">
        <?=$html->link(null, array('controller' => 'users', 'action' => 'logout'), array('class' => 'menu-button-icon selectable', 'style' => 'background-image: url(/img/backend/menu-button-logout.png)'), __('Are you sure you want to logout?', 1))?>
    </div>
</div>
<div id="menu-button-close">
</div>
