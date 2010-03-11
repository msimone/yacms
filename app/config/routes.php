<?php

// backend
Router::connect('/backend', array('controller' => 'home', 'action' => 'index', 'backend' => true));
Router::connect('/backend/:controller', array('action' => 'index', 'backend' => true));
Router::connect('/backend/:controller/:action/*', array('backend' => true));

Router::connect('/language/:action/*', array('controller' => 'languages'));

// frontend - static pages
Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
Router::connect('/register', array('controller' => 'users', 'action' => 'register'));

// frontend - dynamic news/pages
Router::connect('/news/*', array('controller' => 'news', 'action' => 'display'));
Router::connect('/*', array('controller' => 'pages', 'action' => 'display'));

?>
