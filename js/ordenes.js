function cargarDatos() {
    const mes = $('#mes').val();
    const estado = $('#estado').val();

    $.ajax({
        url: 'cargarDatos.php',
        type: 'POST',
        dataType: 'json',
        data: { mes: mes, estado: estado },
        success: function(data) {
            if (data && Array.isArray(data)) {
                // Mostrar cantidad de registros
                $('#totalRegistros').text(`Registros (${data.length})`);

                // Mostrar órdenes
                let tbody = '';
                let totalOrdenes = 0;
                let montoTotal = 0;

                data.forEach(orden => {
                    tbody += `<tr>
                                <td>${orden.first_name} ${orden.last_name} ${orden.email}</td>
                                <td>${orden.numero_ordenes}</td>
                                <td>${orden.total_ordenes}</td>
                            </tr>`;
                    totalOrdenes += parseInt(orden.numero_ordenes);
                    montoTotal += parseFloat(orden.total_ordenes);
                });

                $('#tablaOrdenes tbody').html(tbody);
                $('#totalOrdenes').text(totalOrdenes);
                $('#montoTotal').text(montoTotal.toFixed(2));
            } else {
                console.error('Error: datos de órdenes no válidos');
                $('#tablaOrdenes tbody').html('<tr><td colspan="3">Error al cargar los datos.</td></tr>');
                $('#totalOrdenes').text('0');
                $('#montoTotal').text('0.00');
            }
        },
        error: function(xhr, status, error) {
            console.error('Error al cargar datos:', error);
            $('#tablaOrdenes tbody').html('<tr><td colspan="3">Error al cargar los datos.</td></tr>');
            $('#totalOrdenes').text('0');
            $('#montoTotal').text('0.00');
        }
    });
}

$('#mes, #estado').change(cargarDatos);
cargarDatos(); // Cargar datos inicialmente
