<?php
    require_once "./conexion.php";
    require_once "./header.php";
    ?>

    <div class="container">
        <main>
            <h2>Clientes que han ordenado en la tienda</h2>
            <div class="filters">
                <div class="select-wrapper">
                    <label for="#">Filtros:</label>
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
                </div>
                <div class="select-wrapper">
                    <label for="estado">Estado:</label>
                    <select id="estado">
                        <option value="0">Abiertas</option>
                        <option value="3">Enviadas</option>
                        <option value="4">Entregadas</option>
                    </select>
                    <label for="estado">Registros</label>
                </div>
            </div>
            <table id="tablaOrdenes" class="table">
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
</body>
</html>