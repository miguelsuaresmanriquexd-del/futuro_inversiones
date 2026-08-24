<?php
require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController {
    public function index() {
        $usuarioModel = new Usuario();
        $usuarios = $usuarioModel->obtenerTodos();
        require_once __DIR__ . '/../views/usuarios/index.php';
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $correo = $_POST['correo'] ?? '';
            $password = $_POST['password'] ?? '123456';
            $rol = $_POST['rol'] ?? 'inversionista';

            $usuarioModel = new Usuario();
            $usuarioModel->crear($nombre, $correo, $password, $rol);
            header('Location: index.php?controller=usuario&action=index');
            exit;
        }
        require_once __DIR__ . '/../views/usuarios/crear.php';
    }
}
?>