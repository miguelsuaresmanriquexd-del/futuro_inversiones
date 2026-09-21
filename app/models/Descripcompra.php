<?php
require_once __DIR__ . '/../../config/conexion.php';

class Descripcompra
{
    private $connection;

    public function __construct()
    {
        $database = new database();
        $this->connection = $database->conectar();
    }

    public function getPorCompra($idCompra)
    {
        try {
            $sql = "SELECT dc.idCompra,
                           dc.idProducto,
                           p.nombreProd,
                           dc.unidadComp,
                           dc.valorUnitario,
                           (dc.unidadComp * dc.valorUnitario) AS subtotal
                    FROM descripcompra dc
                    INNER JOIN producto p ON dc.idProducto = p.idProducto
                    WHERE dc.idCompra = :idCompra";

            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(':idCompra', $idCompra, PDO::PARAM_INT);
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error en descripcompra: " . $e->getMessage();
            exit();
        }
    }
}
