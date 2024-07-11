<?php
require_once '../conexion.php';
require_once '../model/modelo.php';
require_once '../controller/controller.php';

try {
    $db = new PDO('mysql:host=' . _HOST . ';dbname=' . _BD_NAME, _USER, _PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

$modeloOrden = new Order($db);
$controladorOrden = new OrderController($modeloOrden);

if (isset($_POST['mes']) && isset($_POST['estado'])) {
    $mes = $_POST['mes'];
    $estado = $_POST['estado'];

    $orders = $controladorOrden->getOrders($mes, $estado);
    header('Content-Type: application/json');
    echo json_encode($orders);
} else {
    http_response_code(400);
    echo json_encode(['error' => 'Parámetros no válidos']);
}
?>
