$(() => {

    var teble_category = $('#teble_category').dataTable({

        "ajax": {
            "url": url_gb + "/admin/category/lists",
            "type": 'POST',
            "data": function(d) {
                d.search_name_category  = $('#search_name_category').val();
                d.search_category_status = $('input[name=search_category_status]:checked').val();
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
    $('body').on('click', '.btn-add', function(data) {
        $('#ModalAdd').modal('show');
    });

    $('body').on('submit', '#FormAdd', function(e) {
        e.preventDefault();
        var form = $(this);
        loadingButton(form.find('button[type=submit]'));
        $.ajax({
            method: "POST",
            url: url_gb + "/admin/category",
            data: form.serialize()
        }).done(function(res) {
            resetButton(form.find('button[type=submit]'));
            // console.log(res);
            if (res.status == 1) {
                Swal.fire(res.title, res.content, 'success');
                form[0].reset();
                teble_category.api().ajax.reload();
                $('#ModalAdd').modal('hide');
                } else {
                    Swal.fire(res.title, res.content, 'error');
                }
        }).fail(function(res) {
            resetButton(form.find('button[type=submit]'));
            Swal.fire("โอ๊ะโอ! เกิดข้อผิดพลาด", res.content, 'error');
        });
    });

    $('body').on('change', '.upload-news-img', function() {
        var ele = $(this);
        // var index = ele.data('index');
        var formData = new FormData();
        formData.append('file', ele[0].files[0]);
        $('#add_preview_img').attr('src', URL.createObjectURL(event.target.files[0]));
        // readURL(ele[0]);
        $.ajax({
            url: url_gb + '/admin/UploadImage/Category',
            type: 'POST',
            data: formData,
            processData: false, // tell jQuery not to process the data
            contentType: false, // tell jQuery not to set contentType
            success: function(res) {
                ele.closest('.main_web_logo').find('.upload-news-img').append(
                    '<input type="text" id="add_category_img"  name="category[category_image]" value="' + res.path + '">'
                    );


                setTimeout(function() {}, 100);
            }
        });
    });

    $('body').on('change', '.category-status', function(){
        if($(this).is(':checked')){
            $('#add_category_status').val(1);
        }else{
            $('#add_category_status').val(0);
        }
    })

    $('body').on('click','.btn-edit',function(data){
        // $('#FormEdit').trigger('reset');
        var id = $(this).data('id');
        var btn = $(this);
        $('#edit_category_id').val(id);

        loadingButton(btn);
        $.ajax({
            method: "GET",
            url: url_gb+"/admin/category/"+id,
            data: {
                id: id
            }
        }).done(function(res) {
            resetButton(btn);
            var data = res.content;
            // var status = '';
                if(data){
                    $('#edit_category_name').val(data.category_name);
                    $('#edit_category_description').val(data.category_description);
                    $('#edit_category_status').val(data.category_status);

                        if(data.category_image){
                            var html = '<img src=" '+url_gb+'/uploads/Category/' +data.category_image+'"  class="img-thumbnail" style="width:85%;max-height: 320px; " /> ';
                            // var img = '<input type="hidden" id="edit_category_image"  name="category[category_image]" value="' + data.category_image + '">';
                            $('#edit_preview_img').html(html);
                            // $('#edit_preview_img').append(img);
                        }else{
                            var html = '<img src=" '+url_gb+'/assets/uploads/images/no-image.jpg"  class="img-thumbnail" style="width:85%;max-height: 320px; " /> ';
                            $('#edit_preview_img').html(html);

                        }
                        if(data.category_status == 1){
                            $('#edit_catestatus').prop('checked', true);
                        }else{
                            $('#edit_catestatus').prop('checked', false);
                        }
                };
        $('#ModalEdit').modal('show');
    }).fail(function(res) {
        // resetButton(form.find('button[type=submit]'));
        Swal.fire("โอ๊ะโอ! เกิดข้อผิดพลาด", res.content, 'error');
        });
    });

    $('body').on('submit', '#FormEdit', function(e) {
        e.preventDefault();
        var form = $(this);
        var id = $('#edit_category_id').val();
        loadingButton(form.find('button[type=submit]'));
        $.ajax({
            method: "PUT",
            url: url_gb+"/admin/category/"+id,
            data: form.serialize()
        }).done(function(res) {
            resetButton(form.find('button[type=submit]'));
            if (res.status == 1) {
                Swal.fire(res.title, res.content, 'success');
                form[0].reset();
                teble_category.api().ajax.reload();
                $('#ModalEdit').modal('hide');
            } else {
                Swal.fire(res.title, res.content, 'error');
            }
        }).fail(function(res) {
            resetButton(form.find('button[type=submit]'));
            Swal.fire("โอ๊ะโอ! เกิดข้อผิดพลาด", res.content, 'error');
        });
    });

    $('body').on('change', '.edit-upload-news-img', function() {
        var ele = $(this);
        // var index = ele.data('index');
        var formData = new FormData();
        formData.append('file', ele[0].files[0]);
        $('#edit_preview_img').find('img').attr('src', URL.createObjectURL(event.target.files[0]));

        // readURL(ele[0]);
        $.ajax({
            url: url_gb + '/admin/UploadImage/Category',
            type: 'POST',
            data: formData,
            processData: false, // tell jQuery not to process the data
            contentType: false, // tell jQuery not to set contentType
            success: function(res) {
                ele.closest('.edit_web_logo').find('.edit-upload-news-img').append(
                    '<input type="text" id="edit_category_image"  name="category[category_image]" value="' +
                     res.path + '">'
                    );


                setTimeout(function() {}, 100);
            }
        });
    });


    $('body').on('click', '.btn-view', function(data) {
        $('#ModalView').modal('show');
    });

    $('body').on('click','.btn-view',function(data){
        var id = $(this).data('id');
        var btn = $(this);
        $('#view_category_id').val(id);
        loadingButton(btn);
        $.ajax({
            method: "GET",
            url: url_gb+"/admin/category/"+id,
            data: {
                id: id
            }
        }).done(function(res) {
            resetButton(btn);
            var data = res.content;
            $('#view_category_name').text(data.category_name ? data.category_name : '-' );
            $('#view_category_description').text(data.category_description ? data.category_description : '-');
            if(data.category_status){
                $('#view_category_status').text('ON');
            }else{
                $('#view_category_status').text('OFF');

            }
            if (data.category_image !== undefined) {
                // const ads_details_image = url_gb +'/uploads/AdsTemp/' + data.ads_details_image;
                    const category_image =  data.category_image;
                    $('#view_preview_img img').attr('src', (category_image ? `${url_gb}/uploads/Category/${category_image}` : url_gb+'/assets/uploads/images/no-image.jpg' ));

            }

            if(data.ads_details_start_date){
                var startDate = new Date(data.ads_details_start_date);
                var month = startDate.getMonth() + 1;
                var day = startDate.getDate();
                var year = startDate.getFullYear();
                month = month >= 10 ? month : '0'+month;
                day = day >= 10 ? day : '0'+day;
                $('#view_ads_start_date').text(`${day}/${month}/${year}`);
            }else{
                $('#view_ads_start_date').text('-');

            }

            if(data.ads_details_end_date){
                var endDate = new Date(data.ads_details_end_date);
                month = endDate.getMonth() + 1;
                day = endDate.getDate();
                year = endDate.getFullYear();
                month = month >= 10 ? month : '0'+month;
                day = day >= 10 ? day : '0'+day;
                $('#view_ads_end_date').text(`${day}/${month}/${year}`);
            }else{
                $('#view_ads_end_date').text('-');

            }


            if(data.ads_details_status == 1){
                $('#view_ads_details_status').text('NO');
            }else{
                $('#view_ads_details_status').text('OFF');
            }

        $('#ModalView').modal('show');
    }).fail(function(res) {
        // resetButton(form.find('button[type=submit]'));
        swal("โอ๊ะโอ! เกิดข้อผิดพลาด", res.content, 'error');
        });
    });

    $('body').on('change','.change-status',function(data){
        var id = $(this).data('id');
        var status = $(this).is(':checked');
        // alert(status);
        $.ajax({
            method: "POST",
            url: url_gb+"/admin/category/ChangeStatus/"+id,
            data: {
                id: id,
                status: status ? 1 : 0,
            }
        }).done(function(res) {
            teble_category.api().ajax.reload();

        }).fail(function(res) {
            Swal.fire("โอ๊ะโอ! เกิดข้อผิดพลาด", res.content, 'error');
        });
    });

    $('body').on('click', '.btn-delete', function(data) {
        var id = $(this).data('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            // icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.value) {
                $.ajax({
                    method: "DELETE",
                    url: url_gb+"/admin/category/"+id,
                    data: {
                        id : id,
                        // admin_id : $('#admin_id').val(),
                        // menu : $('#data_log_menu').val(),
                    }
                }).done(function(res) {
                    Swal.fire('Deleted!', 'Your file has been deleted.', 'success')
                    window.location.reload()
                }).fail(function(res) {
                    resetButton(form.find('button[type=submit]'));
                    Swal.fire("โอ๊ะโอ! เกิดข้อผิดพลาด", res.content, 'error');
                });

            }
        });
    });

    $('body').on('click', '.btn-search', function(e) {
        teble_category.api().ajax.reload();
    });

    $('body').on('click', '.btn-clear-search', function() {
        $("#search_name_category").val('').change();
        $('#search_category_status').prop('checked', true);
        teble_category.api().ajax.reload();
    });
});
