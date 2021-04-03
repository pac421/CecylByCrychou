$(document).ready(function() {
    initialize_datatable();
} );

function initialize_datatable(){
    $('#datatable-users').DataTable({
        ajax: 'get-all-users',
        columns: [
            { data: "firstname" },
            { data: "lastname" },
            { data: "email" },
            { data: "createdAt" },
            { data: "actions" }
        ],
        initComplete: (settings, json) => {
            $(() => {
                $('[data-toggle="tooltip"]').tooltip({
                    animation: false
                });
            })
        },
        order: [[ 3, "desc" ]]
    });
}