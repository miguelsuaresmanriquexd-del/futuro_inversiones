<?php
require_once __DIR__ . '/../models/Cliente.php';

class ClienteController
{
    public function index()
    {
        try {
           
            $modelcliente = new Cliente(); 

            
            $cliente_unico = $modelcliente->getById(5);

           
            require_once __DIR__ . '/../views/clientes/index.php';

        } catch (Exception $e) {
            echo "Error en la visualización de usuarios: " . $e->getMessage();
            exit();
        }
    }
}