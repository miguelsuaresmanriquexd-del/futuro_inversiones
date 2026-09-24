<?php
require_once __DIR__ . '/../models/Descripcompra.php';

class DescripcompraController {
    public function index() {
        try {
            $modelDescripcompra = new Descripcompra();
            $productos_de_la_compra = $modelDescripcompra->getPorCompra(1);

            require_once __DIR__ . '/../views/Descripcompra/index.php';
        } catch (Exception $e) {
            echo "Error en la visualización del detalle de compra: " . $e->getMessage();
            exit();
        }
    }
}
