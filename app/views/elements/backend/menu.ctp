<div id="menu-button-close">
</div>
<div id="menu">
    <div id="clock">
        <div id="clock-time">
        </div>
        <div id="clock-date">
        </div>
    </div>
    <div id="menu-button-backend" class="menu-button">
        <a class="menu-button-icon selectable" style="background-image: url(/img/backend/menu-button-backend.png)" href="<?=$html->url(array('controller' => 'backend'))?>">
        </a>
    </div>
    <div id="menu-button-pages" class="menu-button">
        <a class="menu-button-icon selectable" style="background-image: url(/img/backend/menu-button-pages.png)" href="<?=$html->url(array('controller' => 'pages'))?>">
        </a>
    </div>
    <div id="menu-button-galleries" class="menu-button">
        <a class="menu-button-icon selectable" style="background-image: url(/img/backend/menu-button-galleries.png)" href="<?=$html->url(array('controller' => 'galleries'))?>">
        </a>
    </div>
    <div id="menu-button-users" class="menu-button">
        <a class="menu-button-icon selectable" style="background-image: url(/img/backend/menu-button-users.png)" href="<?=$html->url(array('controller' => 'users'))?>">
        </a>
    </div>
    <div id="menu-button-logout" class="menu-button">
        <a class="menu-button-icon" onclick="javascript: return confirm('You are about to logout, Proceed?')" style="background-image: url(/img/backend/menu-button-logout.png)" href="<?=$html->url(array('controller' => 'users'))?>">
        </a>
    </div>
</div>
