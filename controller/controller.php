// controladores/ControladorOrden.php
<?php
class ControladorOrden {
    private $modeloOrden;

    public function __construct($modeloOrden) {
        $this->modeloOrden = $modeloOrden;
    }

    public function obtenerOrdenes($mes, $estado) {
        return $this->modeloOrden->obtenerOrdenes($mes, $estado);
    }
}
?>
