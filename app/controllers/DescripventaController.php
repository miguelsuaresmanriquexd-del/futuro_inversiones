<?php
require_once __DIR__ . '/../models/Descripventa.php';

class DescripventaController {
    public function index() {
        try {
            $modelDescripventa = new Descripventa();
            $productos_de_la_venta = $modelDescripventa->getPorVenta(1);

            require_once __DIR__ . '/../views/Descripventa/index.php';
        } catch (Exception $e) {
            echo "Error en la visualización del detalle de venta: " . $e->getMessage();
            exit();
        }
    }
}
