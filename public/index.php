<?php

require_once __DIR__ . '/../app/controllers/UsuarioController.php';

$controller = new UsuarioController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/ClienteController.php';

$controller = new ClienteController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/CompraController.php';
$controller = new CompraController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/DescripcompraController.php';

$controller = new DescripcompraController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/DescripventaController.php';

$controller = new DescripventaController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/PermisoController.php';

$controller = new PermisoController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/ProveedorController.php';

$controller = new ProveedorController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/RolController.php';

$controller = new RolController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/RolPermisosController.php';

$controller = new RolPermisosController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/VentaController.php';

$controller = new VentaController();
//$controller->index();

require_once __DIR__ . '/../app/controllers/CiudadController.php';

$controller = new CiudadController();
//$controller->index();

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI']
?>

<a href="/Cliente">Cliente</a>

<?php
if ($method === 'GET' && $uri === "/Cliente") {

    $controller = new ClienteController();
    $controller->index();
}

?>

<a href="/Usuario">Usuario</a>

<?php
if ($method === 'GET' && $uri === "/Usuario") {

    $controller = new UsuarioController();
    $controller->index();
}

?>

<a href="/Compra">Compra</a>

<?php
if ($method === 'GET' && $uri === "/Compra") {

    $controller = new CompraController();
    $controller->index();
}
?>

<a href="/Venta">Venta</a>

<?php
if ($method === 'GET' && $uri === "/Venta") {

    $controller = new VentaController();
    $controller->index();
}

?>

<a href="/Ciudad">Ciudad</a>

<?php
if ($method === 'GET' && $uri === "/Ciudad") {

    $controller = new CiudadController();
    $controller->index();
}

?>

<a href="/Producto">Producto</a>

<?php
if ($method === 'GET' && $uri === "/Producto") {

    $controller = new ProductoController();
    $controller->crear();
}

?>