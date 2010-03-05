<div id="clock">
    <div id="clock-time">
    </div>
    <div id="clock-date">
    </div>
</div>
<div id="menu">
    <div class="tab">
        <?=$html->link('', array('controller' => 'home', 'action' => 'index', 'backend' => true), array('title' => __('Home', 1), 'class' => 'menu-button selectable home', 'style' => 'background-image: url(/img/backend/menu-button-home.png)'))?>
    </div>
    <div class="tab">
        <?=$html->link('', array('controller' => 'pages', 'action' => 'index', 'backend' => true), array('title' => __('Pages', 1), 'class' => 'menu-button selectable pages', 'style' => 'background-image: url(/img/backend/menu-button-pages.png)'))?>
    </div>
    <div class="tab">
        <?=$html->link('', array('controller' => 'news', 'action' => 'index', 'backend' => true), array('title' => __('News', 1), 'class' => 'menu-button selectable news', 'style' => 'background-image: url(/img/backend/news.png)'))?>
    </div>
    <div class="tab">
        <?=$html->link('', array('controller' => 'galleries', 'action' => 'index', 'backend' => true), array('title' => __('Galleries', 1), 'class' => 'menu-button  selectable galleries', 'style' => 'background-image: url(/img/backend/menu-button-galleries.png)'))?>
    </div>
    <div class="tab">
        <?=$html->link('', array('controller' => 'resources', 'action' => 'index', 'backend' => true), array('title' => __('Resources', 1), 'class' => 'menu-button selectable resources', 'style' => 'background-image: url(/img/backend/resources.png)'))?>
    </div>
    <div class="tab">
        <?=$html->link('', array('controller' => 'users', 'action' => 'index', 'backend' => true), array('title' => __('Users', 1), 'class' => 'menu-button selectable users', 'style' => 'background-image: url(/img/backend/menu-button-users.png)'))?>
    </div>
    <div class="tab">
        <?=$html->link('', array('controller' => 'users', 'action' => 'logout', 'backend' => true), array('title' => __('Logout', 1), 'class' => 'menu-button users', 'style' => 'background-image: url(/img/backend/menu-button-logout.png)'), __('Are you sure you want to logout?', 1))?>
    </div>
</div>
<!--
<div id="menu-button-close">
</div>
-->
