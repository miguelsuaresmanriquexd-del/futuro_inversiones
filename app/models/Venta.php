<?php
require_once __DIR__ . '/../../config/database.php';

class Venta {
    private $connection;

    public function __construct(){
        $database = new database();
        $this->connection = $database->conectar();
    }

    public function getById($id) {
        try {
            $sql = "SELECT v.idVenta, v.fechaVenta, v.ivaVenta, v.valorVenta, 
                           c.nombreClie, u.nombreUsu 
                    FROM venta v
                    INNER JOIN cliente c ON v.nDocCliente = c.nDocCliente
                    INNER JOIN usuario u ON v.idDocumento = u.idDocumento
                    WHERE v.idVenta = :id";
            
            $consulta = $this->connection->prepare($sql); 
            $consulta->bindParam(':id', $id, PDO::PARAM_INT);
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error de ID en venta: " . $e->getMessage();
            exit();
        }
    }
}
