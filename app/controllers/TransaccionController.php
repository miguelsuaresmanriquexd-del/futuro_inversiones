<?php
require_once __DIR__ . '/../models/Transaccion.php';
require_once __DIR__ . '/../models/Portafolio.php';
require_once __DIR__ . '/../models/Activo.php';

class TransaccionController {
    public function index() {
        $transaccionModel = new Transaccion();
        $transacciones = $transaccionModel->obtenerTodas();
        require_once __DIR__ . '/../views/transacciones/index.php';
    }

    public function crear() {
        $portafolioModel = new Portafolio();
        $activoModel = new Activo();

        $portafolios = $portafolioModel->obtenerTodos();
        $activos = $activoModel->obtenerTodos();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $portafolio_id = $_POST['portafolio_id'] ?? 1;
            $activo_id = $_POST['activo_id'] ?? 1;
            $tipo_transaccion = $_POST['tipo_transaccion'] ?? 'compra';
            $cantidad = $_POST['cantidad'] ?? 0;
            $precio_unitario = $_POST['precio_unitario'] ?? 0;

            $transaccionModel = new Transaccion();
            $transaccionModel->registrar($portafolio_id, $activo_id, $tipo_transaccion, $cantidad, $precio_unitario);
            header('Location: index.php?controller=transaccion&action=index');
            exit;
        }
        require_once __DIR__ . '/../views/transacciones/crear.php';
    }
}
?>