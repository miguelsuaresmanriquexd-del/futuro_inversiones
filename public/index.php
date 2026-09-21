<?php

require_once __DIR__ . '/../app/controllers/UsuarioController.php';

$controller = new UsuarioController();
$controller->index();

require_once __DIR__ . '/../app/controllers/ClienteController.php';

$controller = new ClienteController();
$controller->index();

require_once __DIR__ . '/../app/controllers/CompraController.php';
$controller = new CompraController();
$controller->index();

require_once __DIR__ . '/../app/controllers/DescripcompraController.php';

$controller = new DescripcompraController();
$controller->index();

require_once __DIR__ . '/../app/controllers/DescripventaController.php';

$controller = new DescripventaController();
$controller->index();

require_once __DIR__ . '/../app/controllers/PermisoController.php';

$controller = new PermisoController();
$controller->index();

require_once __DIR__ . '/../app/controllers/ProveedorController.php';

$controller = new ProveedorController();
$controller->index();

require_once __DIR__ . '/../app/controllers/RolController.php';

$controller = new RolController();
$controller->index();

require_once __DIR__ . '/../app/controllers/RolPermisosController.php';

$controller = new RolPermisosController();
$controller->index();

require_once __DIR__ . '/../app/controllers/VentaController.php';

$controller = new VentaController();
$controller->index();