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


});

$('#select2-search-hide').select2();
$('#edit_product_category').select2();


function clickUpload(e, input) {
    $(input).click();
}




$('body').on('change', '#upload_img input.upload-product-img', function() {
    var ele = $(this);
    var numid = ele.data('index');

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
            ele.closest('#upload_img').find('.upload-product-img').append(
                '<input type="hidden" id="add_product_img_'+numid+'"  name="product_image[product_image_'+numid+']" value="' + res.path + '">'
                );

            setTimeout(function() {}, 100);
        }
    });
});



$('body').on('click', '.btn-add', function(data) {
    $('#ModalAdd').modal('show');
});

$('body').on('click','.btn-edit',function(data){
    // $('#FormEdit').trigger('reset');
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
                        var img_1 = '<img src=" '+url_gb+'/uploads/Product/' +data.product__image.product_image_1+'"  class="img-thumbnail" style="width:85%;max-height: 320px; " /> ';
                        var img_2 = '<img src=" '+url_gb+'/uploads/Product/' +data.product__image.product_image_2+'"  class="img-thumbnail" style="width:85%;max-height: 320px; " /> ';
                        var img_3 = '<img src=" '+url_gb+'/uploads/Product/' +data.product__image.product_image_3+'"  class="img-thumbnail" style="width:85%;max-height: 320px; " /> ';
                        var img_4 = '<img src=" '+url_gb+'/uploads/Product/' +data.product__image.product_image_4+'"  class="img-thumbnail" style="width:85%;max-height: 320px; " /> ';
                        var img_5 = '<img src=" '+url_gb+'/uploads/Product/' +data.product__image.product_image_5+'"  class="img-thumbnail" style="width:85%;max-height: 320px; " /> ';
                        var img_6 = '<img src=" '+url_gb+'/uploads/Product/' +data.product__image.product_image_6+'"  class="img-thumbnail" style="width:85%;max-height: 320px; " /> ';



                        // $('#edit_product_image_1').html(img_1);

                    }else{
                        // var html = '<img src=" '+url_gb+'/assets/uploads/images/no-image.jpg"  class="img-thumbnail" style="width:85%;max-height: 320px; " /> ';
                        // $('#edit_preview_img').html(html);
console.log('ไม่มีค่า');

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
