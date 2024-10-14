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

// Obtener el método de la petición
$requestMethod = $_SERVER['REQUEST_METHOD'];

switch ($requestMethod) {
    case 'GET':
        // Manejar solicitud GET
        if (isset($_GET['mes']) && isset($_GET['estado'])) {
            $mes = $_GET['mes'];
            $estado = $_GET['estado'];
            $orders = $controladorOrden->getOrders($mes, $estado);
            header('Content-Type: application/json');
            echo json_encode($orders);
        } else {
            http_response_code(400);
            echo json_encode(['error' => 'Parámetros no válidos']);
        }
        break;

    case 'POST':
        // Manejar solicitud POST
        $input = json_decode(file_get_contents('php://input'), true);
        if (isset($input['mes']) && isset($input['estado'])) {
            $mes = $input['mes'];
            $estado = $input['estado'];
            // Aquí puedes llamar a un método para crear una nueva orden
            $newOrder = $controladorOrden->createOrder($mes, $estado);
            header('Content-Type: application/json');
            echo json_encode($newOrder);
        } else {
            http_response_code(400);
            echo json_encode(['error' => 'Parámetros no válidos']);
        }
        break;

    case 'PUT':
        // Manejar solicitud PUT
        $input = json_decode(file_get_contents('php://input'), true);
        if (isset($input['id']) && isset($input['estado'])) {
            $id = $input['id'];
            $estado = $input['estado'];
            // Aquí puedes llamar a un método para actualizar una orden
            $updatedOrder = $controladorOrden->updateOrder($id, $estado);
            header('Content-Type: application/json');
            echo json_encode($updatedOrder);
        } else {
            http_response_code(400);
            echo json_encode(['error' => 'Parámetros no válidos']);
        }
        break;

    case 'DELETE':
        // Manejar solicitud DELETE
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            // Aquí puedes llamar a un método para eliminar una orden
            $deletedOrder = $controladorOrden->deleteOrder($id);
            header('Content-Type: application/json');
            echo json_encode($deletedOrder);
        } else {
            http_response_code(400);
            echo json_encode(['error' => 'Parámetros no válidos']);
        }
        break;

    default:
        http_response_code(405);
        echo json_encode(['error' => 'Método no permitido']);
        break;
}
