<?php
require_once __DIR__ . '/../../config/database.php';

class Descripventa {
    private $connection;

    public function __construct(){
        $database = new database();
        $this->connection = $database->conectar();
    }

    public function getPorVenta($idVenta) {
        try {
            $sql = "SELECT dv.idVenta,
                           dv.idProducto,
                           p.nombreProd, 
                           dv.unidadVenta,
                           dv.valorUnitario,
                           (dv.unidadVenta * dv.valorUnitario) AS subtotal
                    FROM descripventa dv
                    INNER JOIN producto p ON dv.idProducto = p.idProducto
                    WHERE dv.idVenta = :idVenta";
            
            $consulta = $this->connection->prepare($sql); 
            $consulta->bindParam(':idVenta', $idVenta, PDO::PARAM_INT);
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error en descripventa: " . $e->getMessage();
            exit();
        }
    }
}
