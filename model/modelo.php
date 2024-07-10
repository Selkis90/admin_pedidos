
<?php
class Orden
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function obtenerOrdenes($mes, $estado)
    {
        $consulta = "SELECT nombre_cliente, correo_cliente, COUNT(*) as numero_ordenes, SUM(monto) as monto_total 
                    FROM orders 
                    WHERE MONTH(fecha_orden) = ? AND estado = ? 
                    GROUP BY nombre_cliente, correo_cliente 
                    ORDER BY monto_total DESC";
        $stmt = $this->db->prepare($consulta);
        $stmt->execute([$mes, $estado]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>