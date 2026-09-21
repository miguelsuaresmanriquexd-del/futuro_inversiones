<?php
require_once __DIR__ . '/../../config/database.php';

class RolPermisos {
    private $connection;

    public function __construct(){
        $database = new database();
        $this->connection = $database->conectar();
    }

    public function getPermisosPorRol($idRol) {
        try {
            $sql = "SELECT rp.idRol, rp.idPermiso, p.nombrePerm, p.descripcionPerm 
                    FROM rol_permisos rp
                    INNER JOIN permiso p ON rp.idPermiso = p.idPermiso
                    WHERE rp.idRol = :idRol";
            
            $consulta = $this->connection->prepare($sql); 
            $consulta->bindParam(':idRol', $idRol, PDO::PARAM_INT);
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error en rol_permisos: " . $e->getMessage();
            exit();
        }
    }
}
