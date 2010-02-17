<div id="menu">
    <div id="clock">
        <div id="clock-time">
        </div>
        <div id="clock-date">
        </div>
    </div>
    <div class="tab fl">
        <?=$html->link('', array('controller' => 'home', 'action' => 'index'), array('class' => 'menu-button', 'style' => 'background-image: url(/img/backend/menu-button-home.png)'))?>
    </div>
    <div class="tab fl">
        <?=$html->link('', array('controller' => 'pages', 'action' => 'index'), array('class' => 'menu-button', 'style' => 'background-image: url(/img/backend/menu-button-pages.png)'))?>
    </div>
    <div class="tab fl">
        <?=$html->link('', array('controller' => 'galleries', 'action' => 'index'), array('class' => 'menu-button', 'style' => 'background-image: url(/img/backend/menu-button-galleries.png)'))?>
    </div>
    <div class="tab fl">
        <?=$html->link('', array('controller' => 'news', 'action' => 'index'), array('class' => 'menu-button', 'style' => 'background-image: url(/img/backend/menu-button-pages.png)'))?>
    </div>
    <div class="tab fl">
        <?=$html->link('', array('controller' => 'users', 'action' => 'index'), array('class' => 'menu-button', 'style' => 'background-image: url(/img/backend/menu-button-users.png)'))?>
    </div>
    <div class="tab fl">
        <?=$html->link('', array('controller' => 'users', 'action' => 'logout'), array('class' => 'menu-button', 'style' => 'background-image: url(/img/backend/menu-button-logout.png)'), __('Are you sure you want to logout?', 1))?>
    </div>
</div>
<div id="menu-button-close">
</div>
