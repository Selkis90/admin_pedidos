<?php
require_once 'conexion.php';

if (!isset($_POST['mes']) || !isset($_POST['estado'])) {
    $response = [
        'msg' => 'Parámetros incompletos',
        'error' => true,
    ];
    http_response_code(400);
    echo json_encode($response);
    exit();
}

$mes = $_POST['mes'];
$estado = $_POST['estado'];

$query = "SELECT first_name, last_name, email, COUNT(order_num) AS numero_ordenes, SUM(total) AS total_ordenes
        FROM orders 
        WHERE MONTH(date_placed) = ? AND status = ?
        GROUP BY email";

$stmt = $conexion->prepare($query);
$stmt->bind_param('ii', $mes, $estado);
$stmt->execute();
$result = $stmt->get_result();

if (!$result) {
    $response = [
        'msg' => 'Error en la ejecución de la consulta',
        'error' => true,
    ];
    http_response_code(500);
    echo json_encode($response);
    exit();
}

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
?>
