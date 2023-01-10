   $(document).ready(function() {
        $('#example23').DataTable({
            sPaginationType:"full_numbers",
            sAjaxSource: "http://localhost/sabueso/?url=TableAssets/DatosTabla",
            aoColumns: [
                { mData: 'ano' } ,
                { mData: 'fechaInventario' },
                { mData: 'articulo' },
                { mData: 'responsable' },
                { mData: 'tipoActivo' },
                { mData: 'cantidad' },
                { mData: 'valorComercial' },
                { mData: 'valorTotal' }
                ],
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
         language: {
          "sProcessing": "Procesando...",
          "sLengthMenu": "Mostrar _MENU_ resultados",
          "sZeroRecords": "No se encontraron resultados",
          "sEmptyTable": "Ningún dato disponible en esta tabla",
          "sInfo": "Mostrando resultados _START_-_END_ de  _TOTAL_",
          "sInfoEmpty": "Mostrando resultados del 0 al 0 de un total de 0 registros",
          "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
          "sSearch": "Buscar:",
          "sLoadingRecords": "Cargando...",
          "oPaginate": {
           "sFirst": "Primero",
           "sLast": "Último",
           "sNext": "Siguiente",
           "sPrevious": "Anterior"
          },
         }
        });
       });