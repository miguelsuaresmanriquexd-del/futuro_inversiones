<?php
require_once __DIR__ . '/../../config/conexion.php';

class Usuario {
    private $connection;

    public function __construct(){
        $database = new database();
        $this->connection = $database->conectar();
    }

   
    public function getById($id) 
    {
        try {
            $sql = "SELECT idDocumento, nombreUsu, apellidoUsu, edadUsuario, fechaNacim
                    FROM Usuario 
                    WHERE idDocumento = :id";
            $consulta = $this->connection->prepare($sql); 
            $consulta->bindParam(':id', $id, PDO::PARAM_INT);
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al buscar usuario por ID: " . $e->getMessage();
            exit();
        }
    }

  
    public function getAll() 
    {
        try {
            $sql = "SELECT idDocumento, nombreUsu, apellidoUsu, edadUsuario, fechaNacim
                    FROM Usuario";
            $consulta = $this->connection->prepare($sql); 
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener todos los usuarios: " . $e->getMessage();
            exit();
        }
    }
}
