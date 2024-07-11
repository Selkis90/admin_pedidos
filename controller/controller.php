<?php
require_once '../conexion.php';
require_once '../model/modelo.php';

class OrderController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function getOrders($month, $status) {
        return $this->model->getOrders($month, $status);
    }
}
?>
