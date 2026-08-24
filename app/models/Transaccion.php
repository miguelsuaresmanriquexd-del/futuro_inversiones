<?php
require_once __DIR__ . '/../../config/Database.php';

class Transaccion {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance();
    }

    public function obtenerTodas() {
        $query = "SELECT t.*, p.nombre as portafolio_nombre, a.nombre as activo_nombre, a.simbolo 
                  FROM transacciones t 
                  JOIN portafolios p ON t.portafolio_id = p.id 
                  JOIN activos a ON t.activo_id = a.id 
                  ORDER BY t.id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function registrar($portafolio_id, $activo_id, $tipo_transaccion, $cantidad, $precio_unitario) {
        $stmt = $this->conn->prepare("INSERT INTO transacciones (portafolio_id, activo_id, tipo_transaccion, cantidad, precio_unitario) VALUES (:portafolio_id, :activo_id, :tipo_transaccion, :cantidad, :precio_unitario)");
        return $stmt->execute([
            ':portafolio_id' => $portafolio_id,
            ':activo_id' => $activo_id,
            ':tipo_transaccion' => $tipo_transaccion,
            ':cantidad' => $cantidad,
            ':precio_unitario' => $precio_unitario
        ]);
    }
}
?>