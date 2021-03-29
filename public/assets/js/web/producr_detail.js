$(() => {

    var Idproduct = $('#product_id').val();
    $.ajax({
        url: url_gb + "/product/"+Idproduct,
        type: 'GET',
        dataType: 'json',
        success: (response) => {
            let html = '';
            response.map((product, idx) => {
                let img = '';
                console.log(idx);
                product.product__image.map(image => {

                        img = image.product_image;
                });

                html += `
                <ul id="lightSlider">
                    <li data-thumb="${url_gb}/uploads/Product/${img}">
                        <img class="w-100" src="${url_gb}/uploads/Product/${img}" />
                    </li>
                </ul>

                `;
        });

            $('#slide_img').html(html);
        }
    });


});
