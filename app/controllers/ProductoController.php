<?php
require_once __DIR__ . '/../models/Producto.php';

class ProductoController {
    public function crear() {
        try {
            
            $modelProducto = new Producto();
            
            $producto_unico = $modelProducto->getById(1);

            require_once __DIR__ . '/../views/productos/crear.php';
        } catch (Exception $e) {
            echo "Error en la visualización de productos: " . $e->getMessage();
            exit();
        }
    }
}
