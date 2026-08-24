<?php
// Enrutador Front Controller Básica para MVC
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) . 'Controller' : 'DashboardController';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerFile = __DIR__ . '/../app/controllers/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    if (class_exists($controllerName)) {
        $controller = new $controllerName();
        if (method_exists($controller, $actionName)) {
            $controller->$actionName();
        } else {
            echo "Error 404: Acción '{$actionName}' no encontrada.";
        }
    } else {
        echo "Error 404: Clase controlador '{$controllerName}' no encontrada.";
    }
} else {
    echo "Error 404: Archivo controlador '{$controllerName}.php' no existe.";
}
?>