<?php
require_once __DIR__ . '/../../config/database.php';

class Rol {
    private $connection;

    public function __construct(){
        $database = new database();
        $this->connection = $database->conectar();
    }

    public function getById($id) {
        try {
            $sql = "SELECT idRol, nombreRol, descripcionRol FROM rol WHERE idRol = :id";
            $consulta = $this->connection->prepare($sql); 
            $consulta->bindParam(':id', $id, PDO::PARAM_INT);
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error de ID en rol: " . $e->getMessage();
            exit();
        }
    }
}
