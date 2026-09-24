<?php
require_once __DIR__ . '/../../config/conexion.php';

class Ciudad {
    private $connection;

    public function __construct(){
        $database = new database();
        $this->connection = $database->conectar();
    }

    // Trae todas las ciudades de la base de datos
    public function getAll() {
        try {
            $sql = "SELECT idCiudad, nombreCiudad FROM ciudad";
            $consulta = $this->connection->prepare($sql); 
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener todas las ciudades: " . $e->getMessage();
            exit();
        }
    }
}
