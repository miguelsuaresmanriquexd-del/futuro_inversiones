<?php
require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController
{
    public function index()
    {
        try {
            
            $modelusuario = new Usuario(); 

            
            $usuario_unico = $modelusuario->getById(5);

            
            require_once __DIR__ . '/../views/usuarios/index.php';

        } catch (Exception $e) {
            echo "Error en la visualización de usuarios: " . $e->getMessage();
            exit();
        }
    }
}
