$('#Filter_product').on('change', function() {
    const link = $(this).find('option:selected').data('link');
    // var loading = `
    //             <div class="spinner-border text-secondary" role="status">
    //                 <span class="sr-only">Loading...</span>
    //             </div>
    //             `;
    // $('#show_product_category').html(loading);
    getFilter(link);
  });



function getFilter(link = null) {
    if(link){
        window.location.href = link;
    }
}
