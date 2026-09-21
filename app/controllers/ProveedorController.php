<?php
require_once __DIR__ . '/../models/Proveedor.php';

class ProveedorController {
    public function index() {
        try {
            $modelProveedor = new Proveedor();
            $proveedor_unico = $modelProveedor->getById(1);

            require_once __DIR__ . '/../views/proveedores/index.php';
        } catch (Exception $e) {
            echo "Error en la visualización de proveedores: " . $e->getMessage();
            exit();
        }
    }
}
