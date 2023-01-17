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
    $('#myTable').DataTable();

    if(window.matchMedia && window.matchMedia('(prefers.color-scheme: dark)').matches){
        let darkMode = true;
    }

    // document.cookie =  "darkMode=" + darkMode + "; SameSite=None; Secure";
    document.cookie = "mode=darkMode; SameSite=None; Secure";

// custom js
// console.log('funciona')
