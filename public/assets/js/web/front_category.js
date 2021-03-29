$(() => {

    $.ajax({
        url: url_gb + "/category",
        type: 'GET',
        dataType: 'json',
        success: (response) => {
            let html = '';

            response.map((category, idx) => {


                html += `
                        <div class="col-md-6 card-p-y ">
                            <img class="w-75 "  src="uploads/Category/${category.category_image['product_image']}">
                            <div class="mt-5 text-left">
                                <h2 class="text-blue mb-3">${category.category_name}</h2>
                                <label class="line-height-30">${category.category_description}</label>
                                <br><br>
                                <a href="category/${category.category_id}" class="text-blue f-14" >ดูรายละเอียด</a>
                            </div>
                        </div>
                `;
            });
            $('#show_category').html(html);
        }
    });
    // $('body').on('submit', '#FormAdd', function(e) {
    //     e.preventDefault();
    //     var form = $(this);
    //     loadingButton(form.find('button[type=submit]'));
    //     $.ajax({
    //         method: "POST",
    //         url: url_gb + "/admin/category",
    //         data: form.serialize()
    //     }).done(function(res) {
    //         resetButton(form.find('button[type=submit]'));
    //         // console.log(res);
    //         if (res.status == 1) {
    //             Swal.fire(res.title, res.content, 'success');
    //             form[0].reset();
    //             teble_category.api().ajax.reload();
    //             $('#ModalAdd').modal('hide');
    //             } else {
    //                 Swal.fire(res.title, res.content, 'error');
    //             }
    //     }).fail(function(res) {
    //         resetButton(form.find('button[type=submit]'));
    //         Swal.fire("โอ๊ะโอ! เกิดข้อผิดพลาด", res.content, 'error');
    //     });
    // });

});
