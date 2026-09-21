<?php
require_once __DIR__ . '/../../config/database.php';

class Compra
{
    private $connection;

    public function __construct()
    {
        $database = new database();
        $this->connection = $database->conectar();
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT c.idCompra, 
                           c.fechaCompra, 
                           c.ivaCompra, 
                           c.valorCompra, 
                           p.razonSocial 
                    FROM compra c
                    INNER JOIN proveedor p ON c.idProveedor = p.idProveedor
                    WHERE c.idCompra = :id";

            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(':id', $id, PDO::PARAM_INT);
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error de ID en compra: " . $e->getMessage();
            exit();
        }
    }
}
