<?php
require_once __DIR__ . '/../models/Activo.php';

class ActivoController {
    public function index() {
        $activoModel = new Activo();
        $activos = $activoModel->obtenerTodos();
        require_once __DIR__ . '/../views/activos/index.php';
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $simbolo = $_POST['simbolo'] ?? '';
            $tipo = $_POST['tipo'] ?? 'cripto';
            $precio_actual = $_POST['precio_actual'] ?? 0;

            $activoModel = new Activo();
            $activoModel->crear($nombre, $simbolo, $tipo, $precio_actual);
            header('Location: index.php?controller=activo&action=index');
            exit;
        }
        require_once __DIR__ . '/../views/activos/crear.php';
    }
}
?>