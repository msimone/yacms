<?php

// backend
Router::connect('/cms', array('controller' => 'backend', 'action' => 'index', 'backend' => true));
Router::connect('/cms/:controller/:action/*', array('backend' => true));

// frontend - static pages
Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
Router::connect('/register', array('controller' => 'users', 'action' => 'register'));

// frontend - dynamic pages
Router::connect('/*', array('controller' => 'pages', 'action' => 'display'));

?>