<?php
require_once __DIR__ . '/../models/Cliente.php';

class ClienteController
{
    public function index()
    {
        try {
            $modelcliente = new Cliente(); 

            
            $clientes = $modelcliente->getAll();

            
            require_once __DIR__ . '/../views/cliente/index.php';

        } catch (Exception $e) {
            echo "Error en la visualización de clientes: " . $e->getMessage();
            exit();
        }
    }
}
