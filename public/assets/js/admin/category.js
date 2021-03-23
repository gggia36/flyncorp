$(() => {

    var teble_category = $('#teble_category').dataTable({

        "ajax": {
            "url": url_gb + "/admin/category/lists",
            "type": 'POST',
            "data": function(d) {
                // d.search_page_title  = $('#search_page_title').val();
                // d.page_status = $('input[name=search_page_status]:checked').val();
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
            {"data": "category_image"},
            {"data": "category_name"},
            {"data": "created_at"},

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
    $('body').on('click', '.btn-add', function(data) {
        $('#ModalAdd').modal('show');
    });
});
