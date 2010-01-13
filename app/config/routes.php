<?php

// backend
Router::connect('/cms', array('controller' => 'cms', 'action' => 'index', 'cms' => true));
Router::connect('/cms/:controller/:action/*', array('cms' => true));

// frontend
Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
Router::connect('/register', array('controller' => 'users', 'action' => 'register'));
Router::connect('/*', array('controller' => 'pages', 'action' => 'display'));

?>