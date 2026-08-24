<?php
require_once __DIR__ . '/../../config/Database.php';

class Usuario {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance();
    }

    public function obtenerTodos() {
        $stmt = $this->conn->prepare("SELECT id, nombre, correo, rol, fecha_registro FROM usuarios ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function obtenerPorId($id) {
        $stmt = $this->conn->prepare("SELECT id, nombre, correo, rol FROM usuarios WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    public function crear($nombre, $correo, $password, $rol = 'inversionista') {
        $stmt = $this->conn->prepare("INSERT INTO usuarios (nombre, correo, password, rol) VALUES (:nombre, :correo, :password, :rol)");
        return $stmt->execute([
            ':nombre' => $nombre,
            ':correo' => $correo,
            ':password' => $password, // Contraseña simple para pruebas
            ':rol' => $rol
        ]);
    }
}
?>