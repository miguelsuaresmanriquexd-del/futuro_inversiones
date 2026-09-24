<?php

class database {
    
    private $host;
    private $db_name;
    private $user;
    private $password;
    private $conn;
    private $port;

    public function __construct() {
        $envPath = __DIR__ . '/../.env';
        
        $this->host = 'localhost';
        $this->db_name = 'inversiones';
        $this->user = 'root';
        $this->password = '';
        $this->port = '3306';

        if (file_exists($envPath)) {
            $env = parse_ini_file($envPath);
            if ($env !== false) {
                $this->host = $env['DB_HOST'] ?? $this->host;
                $this->db_name = $env['DB_NAME'] ?? $this->db_name;
                $this->user = $env['DB_USER'] ?? $this->user;
                $this->password = $env['DB_PASS'] ?? $this->password;
                $this->port = $env['DB_PORT'] ?? $this->port;
            }
        }
    }

    public function conectar() {
        $this->conn = null;

        try {
            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->db_name};charset=utf8mb4";
            
            $this->conn = new PDO(
                $dsn,
                $this->user,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            
            throw new Exception("Error de conexión a la base de datos: " . $e->getMessage());
        }

        return $this->conn;
    }
}

