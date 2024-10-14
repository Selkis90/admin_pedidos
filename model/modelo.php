<?php
class Order
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getOrders($month, $status)
    {
        // Validar el formato del mes
        if (!preg_match('/^\d{4}-\d{2}$/', $month)) {
            throw new Exception('Formato de mes no válido. Se requiere YYYY-MM.');
        }

        // Extraer el año y el mes
        $year = substr($month, 0, 4);  // Obtiene el año
        $monthNum = substr($month, 5, 2);  // Obtiene el mes

        $sql = "SELECT 
                    first_name, last_name, email,
                    COUNT(*) AS order_num,
                    SUM(total) AS total_ordenes
                FROM orders
                WHERE 
                    YEAR(date_placed) = ? AND
                    MONTH(date_placed) = ?
                    AND status = ?
                GROUP BY email";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$year, $monthNum, $status]);

        $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Verificar si hay resultados
        if (empty($orders)) {
            return ['message' => 'No se encontraron órdenes para los parámetros proporcionados.'];
        }

        return $orders;
    }
}


?>
