<?php
require_once __DIR__ . '/../models/Venta.php';

class VentaController {
    public function index() {
        try {
            $modelVenta = new Venta();
            $venta_unica = $modelVenta->getById(1);

            require_once __DIR__ . '/../views/ventas/index.php';
        } catch (Exception $e) {
            echo "Error en la visualización de ventas: " . $e->getMessage();
            exit();
        }
    }
}
