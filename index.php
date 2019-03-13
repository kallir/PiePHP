<?php

define('Base_URI', str_replace('\\', '/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))));
require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoloader.php']));

$run = new Core\Core();
$run->run();