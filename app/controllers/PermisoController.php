<?php
require_once __DIR__ . '/../models/Permiso.php';

class PermisoController {
    public function index() {
        try {
            $modelPermiso = new Permiso();
            $permiso_unico = $modelPermiso->getById(1);

            require_once __DIR__ . '/../views/permisos/index.php';
        } catch (Exception $e) {
            echo "Error en la visualización de permisos: " . $e->getMessage();
            exit();
        }
    }
}
