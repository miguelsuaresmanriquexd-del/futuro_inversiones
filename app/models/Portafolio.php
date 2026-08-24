<?php
require_once __DIR__ . '/../../config/Database.php';

class Portafolio {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance();
    }

    public function obtenerTodos() {
        $query = "SELECT p.*, u.nombre as usuario_nombre FROM portafolios p JOIN usuarios u ON p.usuario_id = u.id ORDER BY p.id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function crear($usuario_id, $nombre, $descripcion) {
        $stmt = $this->conn->prepare("INSERT INTO portafolios (usuario_id, nombre, descripcion) VALUES (:usuario_id, :nombre, :descripcion)");
        return $stmt->execute([
            ':usuario_id' => $usuario_id,
            ':nombre' => $nombre,
            ':descripcion' => $descripcion
        ]);
    }
}
?>