$(() => {
    // alert('as');
    var Idproduct = $('#product_id').val();
    $.ajax({
        url: url_gb + "/product-data/"+Idproduct,
        type: 'GET',
        dataType: 'json',
        success: (response) => {
            console.log(response);
            let html = '';
            let show_detail = '';

            response.map((product, idx) => {
                let img = '';
                product.product__image.map(image => {

                        img = image.product_image;
                        html += `
                        <div class="col-md-12 col-lg-6">
                            <div class="demo">
                                <ul id="lightSlider">
                                    <li data-thumb="${url_gb}/assets/image/product/gallery18.png">
                                        <img class="w-100" src="${url_gb}/assets/image/product/gallery18.png" />
                                    </li>
                                    <li data-thumb="${url_gb}/assets/image/product/gallery17.png">
                                        <img class="w-100" src="${url_gb}/assets/image/product/gallery17.png" />
                                    </li>
                                    <li data-thumb="${url_gb}/assets/image/product/gallery16.png">
                                        <img class="w-100" src="${url_gb}/assets/image/product/gallery16.png" />
                                    </li>
                                    <li data-thumb="${url_gb}/assets/image/product/gallery14.png">
                                        <img class="w-100" src="${url_gb}/assets/image/product/gallery14.png" />
                                    </li>
                                    <li data-thumb="${url_gb}/assets/image/product/gallery13.png">
                                        <img class="w-100" src="${url_gb}/assets/image/product/gallery13.png" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                `;
                });

                show_detail += `
                            <h2 class="text-blue mb-3">${product.product_name}</h2>
                            <small>${product.product_size}</small>
                            <br><br>
                            <p class="text-blue">฿ ${product.product_price}</p>
                            <br><br><br><br>
                            <div>
                                <table>
                                    <tr>
                                        <td>
                                            Share:
                                        </td>
                                        <td>
                                            <img class="mx-2"  src="{{asset('assets/image/logo/facebook.png')}}">
                                        </td>
                                        <td>
                                            <img class="mx-2"  src="{{asset('assets/image/logo/line.png')}}">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <br>
                            <p>หมวดหมู่: บันไดบ้านสำเร็จรูป</p>

                    `;


        });

            // $('#slide_img').html(html);
            $('#show_detail_1').html(show_detail);

        }
    });








});
