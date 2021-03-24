$(() => {
    var teble_product = $('#teble_product').dataTable({

        "ajax": {
            "url": url_gb + "/admin/product/lists",
            "type": 'POST',
            "data": function(d) {
                // d.search_name_category  = $('#search_name_category').val();
                // d.search_category_status = $('input[name=search_category_status]:checked').val();
            }
        },
        "drawCallback": function(settings) {
            $('[data-toggle="tooltip"]').tooltip();
            $(".change-status").bootstrapToggle();
        },
        "retrieve": true,
        "columns": [{
                "data": "DT_RowIndex",
                "class": "text-center",
                "searchable": false,
                "sortable": false
            },
            {"data": "category_id"},
            {"data": "product_image"},
            {"data": "product_name"},
            {"data": "created_at"},
            {"data": "updated_at"},

            {
                "data": "action",
                "name": "action",
                "searchable": false,
                "sortable": false,
                "class": "text-center"
            },
        ],
        "select": true,
        "dom": 'Bfrtip',
        "lengthMenu": [
            [10, 25, 50, -1],
            ['10 rows', '25 rows', '50 rows', 'Show all']
        ],
        "columnDefs": [{
            className: 'noVis',
            visible: false
        }],
        "buttons": [
            'pageLength',
            {
                extend: 'copy',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'csv',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: ':visible'
                }
            },

            {
                extend: 'pdf',
                exportOptions: {
                    columns: ':visible'
                }
            }
        ],
        processing: true,
        serverSide: true,
        responsive: true,

    });



});

$('body').on('click', '.btn-add', function(data) {
    $('#ModalAdd').modal('show');
});
