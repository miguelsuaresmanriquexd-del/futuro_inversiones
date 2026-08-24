<?php
require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../models/Activo.php';
require_once __DIR__ . '/../models/Portafolio.php';
require_once __DIR__ . '/../models/Transaccion.php';

class DashboardController {
    public function index() {
        $usuarioModel = new Usuario();
        $activoModel = new Activo();
        $portafolioModel = new Portafolio();
        $transaccionModel = new Transaccion();

        $totalUsuarios = count($usuarioModel->obtenerTodos());
        $totalActivos = count($activoModel->obtenerTodos());
        $totalPortafolios = count($portafolioModel->obtenerTodos());
        $totalTransacciones = count($transaccionModel->obtenerTodas());

        require_once __DIR__ . '/../views/dashboard/index.php';
    }
}
?>