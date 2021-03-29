$(() => {
    // alert(url_gb);
   var Idcate = $('#category_id').val();
    $.ajax({
        url: url_gb + "/category/"+Idcate+"/product",
        type: 'GET',
        dataType: 'json',
        success: (response) => {
            let html = '';

console.log(response);
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

{/* <a href="${product.category_id}/product/${product.product_id}"> */}
