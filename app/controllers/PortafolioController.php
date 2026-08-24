<?php
require_once __DIR__ . '/../models/Portafolio.php';
require_once __DIR__ . '/../models/Usuario.php';

class PortafolioController {
    public function index() {
        $portafolioModel = new Portafolio();
        $portafolios = $portafolioModel->obtenerTodos();
        require_once __DIR__ . '/../views/portafolios/index.php';
    }

    public function crear() {
        $usuarioModel = new Usuario();
        $usuarios = $usuarioModel->obtenerTodos();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario_id = $_POST['usuario_id'] ?? 1;
            $nombre = $_POST['nombre'] ?? '';
            $descripcion = $_POST['descripcion'] ?? '';

            $portafolioModel = new Portafolio();
            $portafolioModel->crear($usuario_id, $nombre, $descripcion);
            header('Location: index.php?controller=portafolio&action=index');
            exit;
        }
        require_once __DIR__ . '/../views/portafolios/crear.php';
    }
}
?>