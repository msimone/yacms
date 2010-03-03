<?php

// backend
Router::connect('/cms', array('controller' => 'home', 'action' => 'index', 'backend' => true));
Router::connect('/cms/:controller', array('action' => 'index', 'backend' => true));
Router::connect('/cms/:controller/:action/*', array('backend' => true));

// frontend - static pages
Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
Router::connect('/register', array('controller' => 'users', 'action' => 'register'));

// frontend - dynamic news/pages
Router::connect('/news/*', array('controller' => 'news', 'action' => 'display'));
Router::connect('/*', array('controller' => 'pages', 'action' => 'display'));

?>
