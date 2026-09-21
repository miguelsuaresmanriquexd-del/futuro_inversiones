<?php
require_once __DIR__ . '/../models/Producto.php';

class ProductoController {
    public function index() {
        try {
            $modelProducto = new Producto();
            $producto_unico = $modelProducto->getById(1);

            require_once __DIR__ . '/../views/productos/index.php';
        } catch (Exception $e) {
            echo "Error en la visualización de productos: " . $e->getMessage();
            exit();
        }
    }
}
