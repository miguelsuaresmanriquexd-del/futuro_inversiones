<?php
require_once __DIR__ . '/../../config/conexion.php';

class Cliente {
    private $connection;

    public function __construct(){
        
        $database = new database();
        $this->connection = $database->conectar();
    }

    public function getById($id) 
    {
        try {
          
            $sql = "SELECT 
                        idDocCliente,
                        nombreClie, 
                        telefonoClie,
                        direccionClie,
                        correoClie 
                    FROM Cliente
                    WHERE idDocCliente = :id";

            $consulta = $this->connection->prepare($sql); 

           
            $consulta->bindParam(':id', $id, PDO::PARAM_INT);

            $consulta->execute();

           
            return $consulta->fetch(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            echo "Error de ID en usuario nombre: " . $e->getMessage();
            exit();
        }
    }
}
