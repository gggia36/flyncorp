$(() => {

    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                        Swal.fire('คำเตือน','คุณลืมกรอกข้อความ', 'error');
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    var teble_product = $('#teble_product').dataTable({

        "ajax": {
            "url": url_gb + "/admin/product/lists",
            "type": 'POST',
            "data": function(d) {
                d.search_name_product  = $('#search_name_product').val();
                d.search_product_status = $('input[name=search_product_status]:checked').val();
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
            {"data": "product_image","class": "text-center",},
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
        lengthMenu: [
            [10, 25, 50, -1],
            ['10 rows', '25 rows', '50 rows', 'Show all']
        ],
        "lengthChange": true,
        "columnDefs": [{
            className: 'noVis',
            visible: false
        }],
        processing: true,
        serverSide: true,
        responsive: true,

    });

    $('body').on('click', '.btn-search', function(e) {
        teble_product.api().ajax.reload();
    });

    $('body').on('click', '.btn-clear-search', function() {
        $("#search_name_product").val('').change();
        $('#search_product_status').prop('checked', true);
        teble_product.api().ajax.reload();
    });

    $('body').on('submit', '#FormAdd', function(e) {
        e.preventDefault();
        var form = $(this);
        loadingButton(form.find('button[type=submit]'));
        $.ajax({
            method: "POST",
            url: url_gb + "/admin/product",
            data: form.serialize()
        }).done(function(res) {
            resetButton(form.find('button[type=submit]'));
            // console.log(res);
            if (res.status == 1) {
                Swal.fire(res.title, res.content, 'success');
                form[0].reset();
                teble_product.api().ajax.reload();
                $('#ModalAdd').modal('hide');
                } else {
                    Swal.fire(res.title, res.content, 'error');
                }
        }).fail(function(res) {
            resetButton(form.find('button[type=submit]'));
            Swal.fire("โอ๊ะโอ! เกิดข้อผิดพลาด", res.content, 'error');
        });
    });


    $('body').on('submit', '#FormEdit', function(e) {
        e.preventDefault();
        var form = $(this);
        var id = $('#edit_product_id').val();
        loadingButton(form.find('button[type=submit]'));
        $.ajax({
            method: "PUT",
            url: url_gb+"/admin/product/"+id,
            data: form.serialize()
        }).done(function(res) {
            resetButton(form.find('button[type=submit]'));
            if (res.status == 1) {
                Swal.fire(res.title, res.content, 'success');
                form[0].reset();
                teble_product.api().ajax.reload();
                $('#ModalEdit').modal('hide');
            } else {
                Swal.fire(res.title, res.content, 'error');
            }
        }).fail(function(res) {
            resetButton(form.find('button[type=submit]'));
            Swal.fire("โอ๊ะโอ! เกิดข้อผิดพลาด", res.content, 'error');
        });
    });

});

$('#select2-search-hide').select2();
$('#edit_product_category').select2();


function clickUpload(e, input) {
    $(input).click();
}




$('body').on('change', '#upload_img input.upload-product-img', function() {
    var ele = $(this);
    var numid = ele.data('index');

    $('#add_delete_img_'+numid).removeClass('d-none');
    var formData = new FormData();
    formData.append('file', ele[0].files[0]);
    $('#add_preview_img_product_'+numid).attr('src', URL.createObjectURL(event.target.files[0]));

    // readURL(ele[0]);
    $.ajax({
        url: url_gb + '/admin/UploadImage/Product',
        type: 'POST',
        data: formData,
        processData: false, // tell jQuery not to process the data
        contentType: false, // tell jQuery not to set contentType
        success: function(res) {

            ele.closest('#upload_img').find('#uploadFile'+numid).append(
                '<input type="hidden" id="add_product_img_'+numid+'"  name="product_image['+numid+'][product_image]" value="' + res.path + '">',
                '<input type="hidden" id="add_product_sort_'+numid+'"  name="product_image['+numid+'][sort]" value="' + numid + '">'

                );
            $('#add_delete_img_'+numid).append('<span onclick="clickDelete(\'' + res.path + '\',\''+numid+'\')" class="badge badge-pill text-white" style="background-color: red;" >Delete img  </span>');

            setTimeout(function() {}, 100);
        }
    });
});

function clickDelete(respath,numid) {
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
                url: url_gb+'/admin/UploadImage/Product',
                data: {
                    id : numid,
                    file_name : respath,
                    // admin_id : $('#admin_id').val(),
                    // menu : $('#data_log_menu').val(),
                }
            }).done(function(res) {
                // Swal.fire('Deleted!', 'Your file has been deleted.', 'success')
                // window.location.reload()
                $('#add_preview_img_product_'+numid).attr('src', url_gb+'/assets/uploads/images/no-image.jpg');
                $('#add_delete_img_'+numid).addClass('d-none');

            }).fail(function(res) {
                // resetButton(form.find('button[type=submit]'));
                Swal.fire("โอ๊ะโอ! เกิดข้อผิดพลาด", res.content, 'error');
            });

        }
    });
}


$('body').on('change', '#edit-upload_img input.edit-upload-product-img', function() {
    var ele = $(this);
    var numid = ele.data('index');
    var imgid = ele.data('image-id');

    var formData = new FormData();
    formData.append('file', ele[0].files[0]);
    $('#edit_product_image_'+numid).find('img').attr('src', URL.createObjectURL(event.target.files[0]));
    // readURL(ele[0]);
    $.ajax({
        url: url_gb + '/admin/UploadImage/Product',
        type: 'POST',
        data: formData,
        processData: false, // tell jQuery not to process the data
        contentType: false, // tell jQuery not to set contentType
        success: function(res) {
            ele.closest('#edit-upload_img').find('.edit-upload-product-img').append(
                '<input type="hidden" id="edit_product_img_'+numid+'"  name="product_image['+numid+'][product_image]" value="' + res.path + '">',
                '<input type="hidden" id="edit_product_sort_'+numid+'"  name="product_image['+numid+'][sort]" value="' + numid + '">',
                '<input type="hidden" id="edit_product_image_'+numid+'"  name="product_image['+numid+'][product_image_id]" value="' + (imgid ? imgid : '')  + '">'

                );

            setTimeout(function() {}, 100);
        }
    });
});



$('body').on('click', '.btn-add', function(data) {
    $('#FormAdd img.img-thumbnail').attr('src', $('#default_image_src').val());
    $('#ModalAdd').modal('show');
});

$('body').on('click','.btn-edit',function(data){
    $('#FormEdit')[0].reset();

    var id = $(this).data('id');
    var btn = $(this);
    $('#edit_product_id').val(id);
    loadingButton(btn);
    $.ajax({
        method: "GET",
        url: url_gb+"/admin/product/"+id,
        data: {
            id: id
        }
    }).done(function(res) {
        resetButton(btn);
        var data = res.content;

        // var status = '';
            if(data){
                $('#edit_product_name').val(data.product_name);
                $('#edit_product_size').val(data.product_size);
                $('#edit_product_price').val(data.product_price);
                // $('#edit_product_category').val(data.category_id);
                // $('#edit_product_category option').eq(2).prop('selected', true);
                $("#edit_product_category").val(data.category_id);
                $("#edit_product_category").trigger('change');
                editor = new FroalaEditor('#edit_product_content', options);
                editor.html.set(data.product_description);

                    if (typeof data.product__image !== 'undefined' && data.product__image.length > 0) {
                        $.each(data.product__image, function(k, v) {
                            var html = '';
                            var img = '';
                            if(v.product_image){
                                img += ((v.product_image ) ? url_gb+'/uploads/Product/'+v.product_image : url_gb+'/assets/uploads/images/no-image.jpg');
                                html += `<img src="${img}"  class="img-thumbnail" style="max-width:100%; max-height: 220px;" onerror="this.src='${url_gb}/assets/uploads/images/no-image.jpg';"  />`
                                $('#edit_product_image_'+v.sort).html(html);
                                if(v.product_image_id){
                                    $('input#edit-uploadFile'+v.sort).attr('data-image-id', v.product_image_id );
                                 }
                            }
                          });
                    }else{
                        // var html = '<img src=" '+url_gb+'/assets/uploads/images/no-image.jpg"  class="img-thumbnail" style="width:85%;max-height: 320px; " /> ';
                        // $('#edit_preview_img').html(html);
                        // console.log('ไม่มีค่า');
                        var html = '';

                        html += '<img src=" '+url_gb+'/assets/uploads/images/no-image.jpg"  class="img-thumbnail" style="max-width:100%; max-height: 220px;" /> ';
                        for (i = 1; i < 7; i++) {
                            $('#edit_product_image_'+i).html(html);
                        }

                    }



                    if(data.product_status_fb_share == 1){
                        $('#edit_productfbstatus').prop('checked', true);
                    }else{
                        $('#edit_productfbstatus').prop('checked', false);
                    }
                    if(data.product_status_line_share == 1){
                        $('#edit_productlinestatus').prop('checked', true);
                    }else{
                        $('#edit_productlinestatus').prop('checked', false);
                    }
                    if(data.product_status == 1){
                        $('#edit_productstatus').prop('checked', true);
                    }else{
                        $('#edit_productstatus').prop('checked', false);
                    }
            };
    $('#ModalEdit').modal('show');
}).fail(function(res) {
    // resetButton(form.find('button[type=submit]'));
    Swal.fire("โอ๊ะโอ! เกิดข้อผิดพลาด", res.content, 'error');
    });
});

$('body').on('click', '.btn-view', function(data) {
    $('#ModalView').modal('show');
});

$('body').on('click','.btn-view',function(data){
    var id = $(this).data('id');
    var btn = $(this);

    // $('#view_category_id').val(id);
    loadingButton(btn);
    $.ajax({
        method: "GET",
        url: url_gb+"/admin/product/"+id,
        data: {
            id: id
        }
    }).done(function(res) {
        resetButton(btn);
        var data = res.content;

        $('#view_product_name').text(data.product_name ? data.product_name : '-' );
        $('#view_product_size').text(data.product_size ? data.product_size : '-' );
        $('#view_product_price').text(data.product_price ? data.product_price : '-' );

        if(data.product_cate){
            $('#view_category_name').text(data.product_cate.category_name ? data.product_cate.category_name : '-' );
        }
        editor = new FroalaEditor('#view_product_details', options);
        editor.html.set(data.product_description);
        editor.edit.off();


        if (typeof data.product__image !== 'undefined' && data.product__image.length > 0) {
            $.each(data.product__image, function(k, v) {
                var html = '';
                var img = '';
                if(v.product_image){
                    img += ((v.product_image ) ? url_gb+'/uploads/Product/'+v.product_image : url_gb+'/assets/uploads/images/no-image.jpg');
                    html += '<img src="'+img+'"  class="img-thumbnail" style="max-width:100%; max-height: 220px;" /> ';
                    $('#view_product_image_'+v.sort).html(html);

                }
              });
        }else{
            // var html = '<img src=" '+url_gb+'/assets/uploads/images/no-image.jpg"  class="img-thumbnail" style="width:85%;max-height: 320px; " /> ';
            // $('#edit_preview_img').html(html);
            // console.log('ไม่มีค่า');
            var html = '';

            html += '<img src=" '+url_gb+'/assets/uploads/images/no-image.jpg"  class="img-thumbnail" style="max-width:100%; max-height: 220px;" /> ';
            for (i = 1; i < 7; i++) {
                $('#view_product_image_'+i).html(html);
            }

        }

        // $('#view_product_details').text(data.product_description ? data.product_description : '-');
        if(data.product_status){
            $('#view_product_status').text('ON');
        }else{
            $('#view_product_status').text('OFF');
        }if(data.product_status_fb_share){
            $('#view_product_fb_status').text('ON');
        }else{
            $('#view_product_fb_status').text('OFF');
        }if(data.product_status_line_share){
            $('#view_product_line_status').text('ON');
        }else{
            $('#view_product_line_status').text('OFF');
        }

        // if (data.category_image !== undefined) {
        //     // const ads_details_image = url_gb +'/uploads/AdsTemp/' + data.ads_details_image;
        //         const category_image =  data.category_image;
        //         $('#view_preview_img img').attr('src', (category_image ? `${url_gb}/uploads/Category/${category_image}` : url_gb+'/assets/uploads/images/no-image.jpg' ));

        // }



    $('#ModalView').modal('show');
}).fail(function(res) {
    resetButton(form.find('button[type=submit]'));
    swal("โอ๊ะโอ! เกิดข้อผิดพลาด", res.content, 'error');
    });
});

$('body').on('change','.change-status',function(data){
    var id = $(this).data('id');
    var status = $(this).is(':checked');
    // alert(status);
    $.ajax({
        method: "POST",
        url: url_gb+"/admin/product/ChangeStatus/"+id,
        data: {
            id: id,
            status: status ? 1 : 0,
        }
    }).done(function(res) {
        teble_product.api().ajax.reload();

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
                url: url_gb+"/admin/product/"+id,
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


$('body').on('change', '.product-status', function(){
    if($(this).is(':checked')){
        $('#add_product_status').val(1);
    }else{
        $('#add_product_status').val(0);
    }
})
$('body').on('change', '.product-fb-status', function(){
    if($(this).is(':checked')){
        $('#add_product_fb_status').val(1);
    }else{
        $('#add_product_fb_status').val(0);
    }
})
$('body').on('change', '.product-line-status', function(){
    if($(this).is(':checked')){
        $('#add_product_line_status').val(1);
    }else{
        $('#add_product_line_status').val(0);
    }
})


$('body').on('change', '.edit-product-status', function(){
    if($(this).is(':checked')){
        $('#edit_product_status').val(1);
    }else{
        $('#edit_product_status').val(0);
    }
})
$('body').on('change', '.edit-product-fb-status', function(){
    if($(this).is(':checked')){
        $('#edit_product_fb_status').val(1);
    }else{
        $('#edit_product_fb_status').val(0);
    }
})
$('body').on('change', '.edit-product-line-status', function(){
    if($(this).is(':checked')){
        $('#edit_product_line_status').val(1);
    }else{
        $('#edit_product_line_status').val(0);
    }
})
