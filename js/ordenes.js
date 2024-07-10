// js/ordenes.js
$(document).ready(function() {
    function obtenerOrdenes() {
        let mes = $('#mes').val();
        let estado = $('#estado').val();

        $.ajax({
            url: '../api/obtenerOrdenes.php',
            method: 'GET',
            data: { mes: mes, estado: estado },
            success: function(respuesta) {
                let ordenes = JSON.parse(respuesta);
                let tbody = $('#tablaOrdenes tbody');
                tbody.empty();

                let totalOrdenes = 0;
                let montoTotal = 0;

                ordenes.forEach(orden => {
                    tbody.append(`
                        <tr>
                            <td>${orden.nombre_cliente}<br>${orden.correo_cliente}</td>
                            <td>${orden.numero_ordenes}</td>
                            <td>${orden.monto_total}</td>
                        </tr>
                    `);
                    totalOrdenes += parseInt(orden.numero_ordenes);
                    montoTotal += parseFloat(orden.monto_total);
                });

                $('#totalOrdenes').text(totalOrdenes);
                $('#montoTotal').text(montoTotal.toLocaleString('es-CO', { style: 'currency', currency: 'COP' }));
            }
        });
    }

    $('#mes, #estado').change(obtenerOrdenes);
    obtenerOrdenes();
});
