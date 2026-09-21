<?php
require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController
{
    public function index()
    {
        try {
            $modelusuario = new Usuario();
            $usuarios = []; 

            // Si envías un ID por la URL (?url=usuario&id=10203040), busca ese único usuario
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = intval($_GET['id']);
                $usuario_unico = $modelusuario->getById($id);
                
                if ($usuario_unico) {
                    $usuarios[] = $usuario_unico; 
                }
            } else {
                // Si no hay ID en la URL, trae todos los registros para la tabla
                $usuarios = $modelusuario->getAll();
            }

            require_once __DIR__ . '/../views/usuario/index.php';

        } catch (Exception $e) {
            echo "Error en la visualización de usuarios: " . $e->getMessage();
            exit();
        }
    }
}
