<?php
class Order {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getOrders($month, $status) {
        $sql = "SELECT 
                    first_name, last_name, email,
                    COUNT(*) AS order_num,
                    SUM(total) AS total_ordenes
                FROM orders
                WHERE 
                    MONTH(date_placed) = ?
                    AND status = ?
                GROUP BY email";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$month, $status]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
