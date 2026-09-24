<?php
require_once __DIR__ . '/../models/Ciudad.php';

class CiudadController {
    public function index() {
        try {
            $modelCiudad = new Ciudad();
            
            // Obtenemos el listado de ciudades
            $ciudades = $modelCiudad->getAll();

            // Carga la vista de la carpeta ciudad
            require_once __DIR__ . '/../views/ciudad/index.php';
        } catch (Exception $e) {
            echo "Error en la visualización de ciudades: " . $e->getMessage();
            exit();
        }
    }
}
