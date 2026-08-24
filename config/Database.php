<?php
class Database {
    private static $instance = null;
    private $conn;

    private $host = 'localhost';
    private $db_name = 'futuro_inversion';
    private $username = 'root';
    private $password = '';

    private $port;

    public function conectar() {
    $env = parse_ini_file(__DIR__ . "/../.env");
    $this->host=$env("DB_HOST");
     $this->port=$env("DB_PORT");
     $this->db_name=$env("DB_NAME");
          return new PDO(
            "mysql:host={$this->host};dbname={$this->db_name}",
            $this->username,
            $this->password
          );
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance->conn;
    }

    
}
?>