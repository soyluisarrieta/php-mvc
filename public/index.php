<?php
require_once '../config/config.php';

// Ejemplo simple de enrutamiento
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'user/profile';
$url = explode('/', $url);

$controllerName = ucfirst($url[0]) . 'Controller';
$methodName = isset($url[1]) ? $url[1] : 'index';

// Cargar el controlador correspondiente
require_once '../controllers/' . $controllerName . '.php';

// Usar el namespace completo para el controlador
$controllerClass = 'Controllers\\' . $controllerName;
$controller = new $controllerClass();

// Llamar al método del controlador
$controller->$methodName();
