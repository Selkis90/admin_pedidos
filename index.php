<?php

require_once "./conexion.php";
require_once "./index.php";

?>

<div class="contenedor">
    <header>
        <img src="./img/logo-total.png" alt="Logo Total">
        <h1>ERP - TIENDA ROSATEL</h1>
        <a href="logout.php">Salir</a>
    </header>
    <main>
        <h2>Clientes que han ordenado en la tienda</h2>
        <div class="filtros">
            <label for="mes">Mes:</label>
            <select id="mes">
                <option value="1">Enero</option>
                <option value="2">Febrero</option>
                <option value="3">Marzo</option>
                <option value="4">Abril</option>
                <option value="5">Mayo</option>
                <option value="6">Junio</option>
                <option value="7">Julio</option>
                <option value="8">Agosto</option>
                <option value="9">Septiembre</option>
                <option value="10">Octubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
            </select>
            <label for="estado">Estado:</label>
            <select id="estado">
                <option value="0">Abiertas</option>
                <option value="3">Enviadas</option>
                <option value="4">Entregadas</option>
            </select>
        </div>
        <table id="tablaOrdenes">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Número de Ordenes</th>
                    <th>Monto ($ COP)</th>
                </tr>
            </thead>
            <tbody></tbody>
            <tfoot>
                <tr>
                    <td>Total</td>
                    <td id="totalOrdenes"></td>
                    <td id="montoTotal"></td>
                </tr>
            </tfoot>
        </table>
    </main>
</div>


<?php
require_once "./footer.php";
?>