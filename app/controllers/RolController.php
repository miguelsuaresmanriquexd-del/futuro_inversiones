<?php
require_once __DIR__ . '/../models/Rol.php';

class RolController {
    public function index() {
        try {
            $modelRol = new Rol();
            $rol_unico = $modelRol->getById(1);

            require_once __DIR__ . '/../views/rol/index.php';
        } catch (Exception $e) {
            echo "Error en la visualización de roles: " . $e->getMessage();
            exit();
        }
    }
}
