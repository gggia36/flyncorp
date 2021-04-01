$(() => {
    const URL_href = window.location.href;
    const URL_share_line = escape(URL_href);
    // alert('as');
    var Idproduct = $('#product_id').val();
    $.ajax({
        url: url_gb + "/product-data/"+Idproduct,
        type: 'GET',
        dataType: 'json',
        success: (response) => {
            // console.log(response);
            let html = '';
            let show_detail = '';
            let show_detail_description = '';
            var numbers = [4, 2, 5, 1, 3];



            response.map((product, idx) => {
                let img = '';
                product.product__image.sort(function (a, b) {
                    return a.sort - b.sort;
                  });

                product.product__image.map(image => {

                    img += `
                            <li data-thumb="${url_gb}/uploads/Product/${image.product_image}" >
                                <div style="display:flex; align-items: center; height:100%;">
                                    <img class="" src="${url_gb}/uploads/Product/${image.product_image}" />
                                <div>
                            </li>
                `;
                });
                html += `
                        <div class="demo">
                            <ul id="lightSlider" class="fix-img" >
                                    ${img}
                            </ul>
                         </div>

                `;

                // product.product_cate.map(pro_cate => {
                //     cate = `
                //         ${pro_cate.category_name}
                // `;
                // });
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

                                            <a class="mx-2"><img src="${url_gb}/assets/image/logo/facebook.png" alt="Share on Facebook"
                                            onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('${window.location.href}'),'facebook-share-dialog','width=626,height=436'); return false;" />
                                            </a>
                                        </td>
                                        <td>
                                            <a  class="mx-2" href="https://social-plugins.line.me/lineit/share?url=${URL_share_line}" target="_blank">
                                            <img src="${url_gb}/assets/image/logo/line.png" class="img-fluid px-1" />
                                        </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <br>
                            <p>หมวดหมู่: ${product.product_cate.category_name}</p>

                    `;

                    show_detail_description += `

                    <div class="col-md-12 ">
                        <h5 class="text-blue mb-4">Product Description</h5>
                        <div class="line-height-30">
                            ${product.product_description}
                        </div>
                    </div>


                    `;


        });


            $('#slide_img').html(html);

            $('#lightSlider').lightSlider({
                gallery: true,
                item: 1,
                loop:true,
                slideMargin: 0,
                thumbItem: 9,
                // enableDrag : true,
                // responsive: true,
                onSliderLoad: function() {

                $("img").addClass("preferredHeight");
                $("#lightSlider").css("height","380px");

                }

            });

            $('#show_detail_1').html(show_detail);
            $('#show_detail_description').html(show_detail_description);


        }
    });



    $.ajax({
        url: url_gb + "/product-data-other/"+Idproduct,
        type: 'GET',
        dataType: 'json',
        success: (response) => {
            let other_product = '';
            response.map((product, idx) => {

                let img_other = '';
                if (product.product__image.length) {
                    product.product__image.map(image => {
                        if(product.product_id == image.product_id  && image.sort == 1 ){
                            img_other = `${url_gb}/uploads/Product/${image.product_image}`;
                            // console.log(image.product_image+'มีรูปเอา sort1 มา');
                        }
                    });

                  }else{
                    img_other = `${url_gb}/assets/uploads/images/no-image.jpg`
                    // console.log('ไม่มีproduct__image');
                  }



                other_product += `
                    <div class="col-lg-3 col-md-6 col-6 content">
                        <a href="${product.product_id}">
                            <div class="img-hover-zoom">
                                <img class="w-100 img" style="height:255px;"  src="${img_other}" onerror="this.src='${url_gb}/assets/uploads/images/no-image.jpg';" >
                            </div>
                            <div class="card-block">
                                <h5 class="fixed-text-1 text-blue">${product.product_name}</h5>
                                <small class="color-888">${product.product_size}</small>
                                <br><br>
                                <p class="text-blue">฿ ${product.product_price}</p>
                            </div>
                        </a>
                    </div>

                `;
            });
            $('#product_other').html(other_product);
        }
    });



});
