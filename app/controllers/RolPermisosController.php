<?php
require_once __DIR__ . '/../models/RolPermisos.php';

class RolPermisosController {
    public function index() {
        try {
            $modelRolPermisos = new RolPermisos();
            $permisos_del_rol = $modelRolPermisos->getPermisosPorRol(1);

            require_once __DIR__ . '/../views/rol_permisos/index.php';
        } catch (Exception $e) {
            echo "Error en la asignación de roles y permisos: " . $e->getMessage();
            exit();
        }
    }
}
