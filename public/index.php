<?php
require_once '../config/Database.php';

// Como es un Singleton, se llama a la conexión así (sin usar 'new'):
$db = Database::getInstance();

if ($db) {
    echo "<h2>¡futuro_inversiones listo y conectado a MySQL!</h2>";
} else {
    echo "<h2>Error al conectar a la base de datos.</h2>";
}