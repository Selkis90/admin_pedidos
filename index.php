<?php
require_once "./conexion.php";
require_once "./header.php";
?>

<div class="container">
    <main>
        <h2>Clientes que han ordenado en la tienda</h2>
        <div class="filters">
            <label for="#">Filtros:</label>
            <div class="select-wrapper">
                <label for="mes">Mes:</label>
                <select id="mes">
                    <option value="1">ENERO</option>
                    <option value="2">FEBRERO</option>
                    <option value="3">MARZO</option>
                    <option value="4">ABRIL</option>
                    <option value="5">MAYO</option>
                    <option value="6">JUNIO</option>
                    <option value="7">JULIO</option>
                    <option value="8">AGOSTO</option>
                    <option value="9">SEPTIEMBRE</option>
                    <option value="10">OCTUBRE</option>
                    <option value="11">NOVIEMBRE</option>
                    <option value="12">DICIEMBRE</option>
                </select>
            </div>
            <div class="select-wrapper">
                <label for="estado">Estado:</label>
                <select id="estado">
                    <option value="0">ABIERTAS</option>
                    <option value="3">ENVIADAS</option>
                    <option value="4">ENTREGADAS</option>
                </select>
            </div>
            <label id="totalRegistros">Registros</label>
        </div>
        <table id="tablaOrdenes" class="table">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Número de Ordenes</th>
                    <th>Monto ($ COP)</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se cargarán las órdenes -->
            </tbody>
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