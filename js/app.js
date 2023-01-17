// call to datatables function
$(document).ready( function () {
    $('#myTable').DataTable();

    if(window.matchMedia && window.matchMedia('(prefers.color-scheme: dark)').matches){
        let darkMode = true;
    }

    // document.cookie =  "darkMode=" + darkMode + "; SameSite=None; Secure";
    document.cookie = "mode=darkMode; SameSite=None; Secure";
} );

// custom js
// console.log('funciona')