<?php
require_once __DIR__ . '/../../config/Database.php';

class Activo {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance();
    }

    public function obtenerTodos() {
        $stmt = $this->conn->prepare("SELECT * FROM activos ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function crear($nombre, $simbolo, $tipo, $precio_actual) {
        $stmt = $this->conn->prepare("INSERT INTO activos (nombre, simbolo, tipo, precio_actual) VALUES (:nombre, :simbolo, :tipo, :precio_actual)");
        return $stmt->execute([
            ':nombre' => $nombre,
            ':simbolo' => $simbolo,
            ':tipo' => $tipo,
            ':precio_actual' => $precio_actual
        ]);
    }
}
?>