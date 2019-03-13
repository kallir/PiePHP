<?php
Core\Router::connect('/', ['controller' => 'user', 'action' => 'index']);
Core\Router::connect('/register', ['controller' => 'user', 'action' => 'register']);
Core\Router::connect('/connect', ['controller' => 'user', 'action' => 'connect']);
Core\Router::connect('/profile', ['controller' => 'user', 'action' => 'display']);
Core\Router::connect('/profile/edit', ['controller' => 'user', 'action' => 'edit']);
Core\Router::connect('/profile/delete', ['controller' => 'user', 'action' => 'delete']);

Core\Router::connect('/films', ['controller' => 'film', 'action' => 'displayAll']);
Core\Router::connect('/films/more', ['controller' => 'film', 'action' => 'display']);
//$_GET pour 'more' spécifique
Core\Router::connect('/films/add', ['controller' => 'film', 'action' => 'add']);
Core\Router::connect('/films/edit', ['controller' => 'film', 'action' => 'update']);
Core\Router::connect('/films/delete', ['controller' => 'film', 'action' => 'delete']);

Core\Router::connect('/films/add-genre', ['controller' => 'genre', 'action' => 'addToMovie']);
Core\Router::connect('/films/remove-genre', ['controller' => 'genre', 'action' => 'deleteFromMovie']);
Core\Router::connect('/genre/add', ['controller' => 'genre', 'action' => 'add']);
Core\Router::connect('/genre/edit', ['controller' => 'genre', 'action' => 'update']);
Core\Router::connect('/genre/delete', ['controller' => 'genre', 'action' => 'delete']);

Core\Router::connect('/history/add', ['controller' => 'history', 'action' => 'add']);
Core\Router::connect('/history/delete', ['controller' => 'history', 'action' => 'delete']);