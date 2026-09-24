<?php
require_once __DIR__ . '/../models/Compra.php';

class CompraController {
    public function index() {
        try {
            $modelCompra = new Compra();
            $compra_unica = $modelCompra->getById(1);

            require_once __DIR__ . '/../views/compra/index.php';
        } catch (Exception $e) {
            echo "Error en la visualización de compras: " . $e->getMessage();
            exit();
        }
    }
}
