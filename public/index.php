<?php

require_once __DIR__ . '/../app/controller/UsuarioController.php';

$controller = new UsuarioController();
$controller->index();

require_once __DIR__ . '/../app/controller/ClienteController.php';

$controller = new ClienteController();
$controller->index();

require_once __DIR__ . '/../app/controller/CompraController.php';
$controller = new CompraController();
$controller->index();

require_once __DIR__ . '/../app/controller/DescripcompraController.php';

$controller = new DescripcompraController();
$controller->index();

require_once __DIR__ . '/../app/controller/DescripventaController.php';

$controller = new DescripventaController();
$controller->index();

require_once __DIR__ . '/../app/controller/PermisoController.php';

$controller = new PermisoController();
$controller->index();

require_once __DIR__ . '/../app/controller/ProveedorController.php';

$controller = new ProveedorController();
$controller->index();

require_once __DIR__ . '/../app/controller/RolController.php';

$controller = new RolController();
$controller->index();

require_once __DIR__ . '/../app/controller/RolPermisosController.php';

$controller = new RolPermisosController();
$controller->index();

require_once __DIR__ . '/../app/controller/VentaController.php';

$controller = new VentaController();
$controller->index();