<?php
require_once "../conexion.php";

class Order
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getOrders($month, $status)
    {
        $sql = "SELECT 
                    last_name,
                    email,
                    COUNT(*) AS order_num,
                    SUM(total) AS total_amount
                FROM orders
                WHERE 
                    MONTH(date_placed) = ?
                    AND status = ?
                GROUP BY last_name, email
                ORDER BY total_amount DESC";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$month, $status]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
