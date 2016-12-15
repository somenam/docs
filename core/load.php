<?php

$dbConfig = include_once ROOT.'/config/db.php';
require_once ROOT.'/components/Db.php';
$db = new Db($dbConfig);

require_once ROOT.'/core/Model.php';
require_once ROOT.'/core/View.php';

require_once ROOT.'/components/Router.php';
$router = new Router();
$content = $router->run();

