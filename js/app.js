// call to datatables function
$(document).ready( function () {
    $('#datos_usuario').DataTable();

    var DataTable = $('#datos_usuario').DataTable({
        "processing":true,
        "serverSide":true,
        "order":[],
        "ajax":{
            url: "/obtener_registros.php",
            type: "POST",
        },
        "columnDefs":[
            {
            "targets":[0, 3, 4],
            "orderable":false,
            },
        ]
    });
    // custom js
    console.log('funciona');
} );