<?php

Router::connect('/cms', array('controller' => 'cms', 'action' => 'index', 'cms' => true));
Router::connect('/cms/:controller/:action/*', array('cms' => true));

Router::connect('/*', array('controller' => 'pages', 'action' => 'display'));

?>