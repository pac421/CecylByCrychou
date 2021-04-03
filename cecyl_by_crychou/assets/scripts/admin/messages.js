$(document).ready(function() {
    initialize_datatable();
} );

function initialize_datatable(){
    $('#datatable-messages').DataTable({
        ajax: 'get-all-messages',
        columns: [
            { data: "name" },
            { data: "email" },
            { data: "message" },
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