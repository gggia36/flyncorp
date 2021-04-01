$(() => {
    // alert(url_gb);
   var Idcate = $('#category_id').val();
    $.ajax({
        url: url_gb + "/category-data/"+Idcate,
        type: 'GET',
        dataType: 'json',
        success: (response) => {
            let html = '';
            var  total_category = response.length

            $('#sum_cate').html('พบสินค้า '+total_category+' ชิ้น');
            response.map((product, idx) => {
                let img = '';
                product.product__image.map(image => {
                    if(image.sort == 1 ){
                        img = image.product_image;
                    }
                });

                html += `
                        <div class="col-lg-3 col-md-6 col-6 ">
                            <a href="${product.category_id}/product/${product.product_id}">

                                <div class="img-hover-zoom">
                                    <img class="w-100 img" style="height: 255px;" src="${url_gb}/uploads/Product/${img}"  onerror="this.src='${url_gb}/assets/uploads/images/no-image.jpg';" >
                                </div>
                                <div class="card-block">
                                    <h5 class="fixed-text-1 text-blue">${product.product_name}</h5>
                                    <small class="color-888">${product.product_size}</small>
                                    <br><br>
                                    <p class="text-blue">฿ ${product.product_price} </p>
                                </div>
                            </a>
                        </div>


                `;
        });

            $('#show_product_category').html(html);
        }
    });
});

$('#Filter_product').on('change', function() {
    var Idcate = $('#category_id').val();

    if(this.value == 1 ){
        alert('อัพเดทล่าสุด');
        // var id = $(this).data('id');
        // var status = $(this).is(':checked');
        // alert(status);
        $.ajax({
            url: url_gb + "/category-data/"+Idcate,
            type: 'GET',
            dataType: 'json',
            data: {
                filter: 1,
            }
        }).done(function(response) {
            let html = '';
            var  total_category = response.length
            $('#sum_cate').html('พบสินค้า '+total_category+' ชิ้น');

            response.map((product, idx) => {
                let img = '';
                product.product__image.map(image => {
                    if(image.sort == 1 ){
                        img = image.product_image;
                    }
                });

                html += `
                        <div class="col-lg-3 col-md-6 col-6 ">
                            <a href="${product.category_id}/product/${product.product_id}">

                                <div class="img-hover-zoom">
                                    <img class="w-100 img" style="height: 255px;" src="${url_gb}/uploads/Product/${img}"  onerror="this.src='${url_gb}/assets/uploads/images/no-image.jpg';" >
                                </div>
                                <div class="card-block">
                                    <h5 class="fixed-text-1 text-blue">${product.product_name}</h5>
                                    <small class="color-888">${product.product_size}</small>
                                    <br><br>
                                    <p class="text-blue">฿ ${product.product_price} </p>
                                </div>
                            </a>
                        </div>


                `;
        });

            $('#show_product_category').html(html);

        }).fail(function(res) {
            Swal.fire("โอ๊ะโอ! เกิดข้อผิดพลาด", res.content, 'error');
        });
    }if(this.value == 2 ){
        alert('ราคาสูงสุด');
        $.ajax({
            url: url_gb + "/category-data/"+Idcate,
            type: 'GET',
            dataType: 'json',
            data: {
                filter: 2,
            }
        }).done(function(response) {
            let html = '';
            var  total_category = response.length
            $('#sum_cate').html('พบสินค้า '+total_category+' ชิ้น');

            response.map((product, idx) => {
                let img = '';
                product.product__image.map(image => {
                    if(image.sort == 1 ){
                        img = image.product_image;
                    }
                });

                html += `
                        <div class="col-lg-3 col-md-6 col-6 ">
                            <a href="${product.category_id}/product/${product.product_id}">

                                <div class="img-hover-zoom">
                                    <img class="w-100 img" style="height: 255px;" src="${url_gb}/uploads/Product/${img}"  onerror="this.src='${url_gb}/assets/uploads/images/no-image.jpg';" >
                                </div>
                                <div class="card-block">
                                    <h5 class="fixed-text-1 text-blue">${product.product_name}</h5>
                                    <small class="color-888">${product.product_size}</small>
                                    <br><br>
                                    <p class="text-blue">฿ ${product.product_price} </p>
                                </div>
                            </a>
                        </div>


                `;
        });

            $('#show_product_category').html(html);

        }).fail(function(res) {
            Swal.fire("โอ๊ะโอ! เกิดข้อผิดพลาด", res.content, 'error');
        });
    }if(this.value == 3 ){
        alert('ราคาต่ำสุด');
        $.ajax({
            url: url_gb + "/category-data/"+Idcate,
            type: 'GET',
            dataType: 'json',
            data: {
                filter: 3,
            }
        }).done(function(response) {
            let html = '';
            var  total_category = response.length
            $('#sum_cate').html('พบสินค้า '+total_category+' ชิ้น');

            response.map((product, idx) => {
                let img = '';
                product.product__image.map(image => {
                    if(image.sort == 1 ){
                        img = image.product_image;
                    }
                });

                html += `
                        <div class="col-lg-3 col-md-6 col-6 ">
                            <a href="${product.category_id}/product/${product.product_id}">

                                <div class="img-hover-zoom">
                                    <img class="w-100 img" style="height: 255px;" src="${url_gb}/uploads/Product/${img}"  onerror="this.src='${url_gb}/assets/uploads/images/no-image.jpg';" >
                                </div>
                                <div class="card-block">
                                    <h5 class="fixed-text-1 text-blue">${product.product_name}</h5>
                                    <small class="color-888">${product.product_size}</small>
                                    <br><br>
                                    <p class="text-blue">฿ ${product.product_price} </p>
                                </div>
                            </a>
                        </div>


                `;
        });

            $('#show_product_category').html(html);

        }).fail(function(res) {
            Swal.fire("โอ๊ะโอ! เกิดข้อผิดพลาด", res.content, 'error');
        });
    }

  });
