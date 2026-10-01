<?php
require_once __DIR__ . '/../models/Cliente.php';

class ClienteController
{
    public function crear()
    {
        try {
            $modelcliente = new Cliente(); 
            $clientes = $modelcliente->getAll();
            require_once __DIR__ . '/../views/cliente/crear.php';
        } catch (Exception $e) {
            echo "Error en la visualización de clientes: " . $e->getMessage();
            exit();
        }
    }

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

    public function Guardar()
    {
        $nDocCliente = $_POST['nDocCliente'];
        $nombreClie = $_POST['nombreClie'];
        $telefonoClie = $_POST['telefonoClie'];
        $direccionClie = $_POST['direccionClie'];
        $correoClie = $_POST['correoClie'];

        $cliente = new Cliente();
        $resultado = $cliente->Guardar($nDocCliente, $nombreClie, $telefonoClie, $direccionClie, $correoClie);

        if ($resultado) {
            echo "Cliente guardado correctamente";
            $this->index();
        } else {
            echo "El cliente no se pudo guardar";
        }
    }
}
