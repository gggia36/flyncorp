@extends('layouts.layoutadmin')
@section('content')
<style type="text/css">
    .float-right {
        float: right !important;
    }

    .newdata {
        margin: -2rem -1rem -1rem auto;
    }

    .form-check-inline {
        display: inline-flex;
        align-items: center;
        padding-left: 0;
        margin-right: .75rem;
    }

</style>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body pb-0">
                <h4 class="card-title">Search</h4>
                 <form id="FormSearch">
                    <div class="row pt-3">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label" for="search_name_category">Name Category</label>
                                <input type="text" id="search_name_category" class="form-control search_table">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label" for="search_category_status">Status</label> <br>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" value="all" id="search_category_status" name="search_category_status" checked>
                                        <label class="custom-control-label" for="search_category_status">All</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" value="1" id="search_category_status_1" name="search_category_status">
                                        <label class="custom-control-label" for="search_category_status_1">On</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" value="0" id="search_category_status_2" name="search_category_status">
                                        <label class="custom-control-label" for="search_category_status_2">Off</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
            <hr>

            <div class="row pb-3">
                <div class="col-md-12">
                    <div class="text-center">
                        <button type="button" class="btn btn-info btn-search" id="btn-search">Search</button>
                        <button type="button" class="btn btn-secondary clear-search btn-clear-search">Clear</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="row">
        <div class="col-md-12">
            <div class="card overflow-hidden">
                <div class="card-body border-bottom">
                    <h4 class="card-title mb-0">{{$MainMenus}}</h4>
                    <button type="button"  class="btn waves-effect waves-light btn-success float-right newdata btn-add">Add Product</button>
                </div>
                <div class="row justify-content-center bg-light p-3">
                    <div class="col-md-12">
                        <div class="card shadow-sm">
                            <div class="p-4 text-center">
                                <div class="table-responsive">
                                    <table id="teble_product" class="table table-striped table-bordered no-wrap teble_product" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Category</th>
                                                <th>picture</th>
                                                <th>Name Product</th>
                                                <th>Created</th>
                                                <th>Updated</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection @section('modal')
    <div id="ModalAdd" class="modal fade" tabindex="-1"
        aria-labelledby="primary-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-light ">
                    <h4 class="modal-title text-black-50 " id="primary-header-modalLabel ">Add</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="FormAdd" class="mb-0" >
                    <div class="modal-body">
                        <div class="form-horizontal form-upload">
                            <div class="form-group row pb-3">
                                <label for="add_category_name"
                                    class="col-sm-4 control-label col-form-label text-center">Category:</label>
                                <div class="col-sm-8">
                                    {{-- <input type="text" class="form-control" id="add_category_name" name="category[category_name]"  placeholder="Name"> --}}
                                    <select class="form-control" id="select2-search-hide" style="width: 100%; height:36px;">
                                        @foreach ($Category as $item)
                                            <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row pb-3">
                                <label for="add_product_name"
                                    class="col-sm-4 control-label col-form-label text-center">Product Name:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="add_product_name" name="product[product_name]"  placeholder="Product Name">
                                </div>
                            </div>
                            <div class="form-group row pb-3">
                                <label for="add_product_size"
                                    class="col-sm-4 control-label col-form-label text-center">Product Size:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="add_product_size" name="product[product_size]"  placeholder="Product Size">
                                </div>
                            </div>
                            <div class="form-group row pb-3">
                                <label for="add_product_price"
                                    class="col-sm-4 control-label col-form-label text-center">Product Price:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="add_product_price" name="product[product_price]"  placeholder="Product Price">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="add_preview_img_product_main"
                                    class="col-sm-4 control-label col-form-label text-center">Product Picture Main:</label>
                                <div class="col-sm-8 main_web_logo">
                                    <input type="file" class="form-control upload-product-img" type="file" id="formFile" name="" accept="image/*">
                                    {{-- <div class="custom-file main_web_logo">
                                        <input type="file" class="custom-file-input upload-news-img form-control"id="add_menu_system_lang_image_page[]" name="menu_system_lang[][menu_system_lang_image_page]" placeholder="" accept="image/*">
                                        <small class="form-text text-muted">Recommended Size: 1200 x 630 pixel</small>
                                    </div> --}}
                                    <div class="mt-3 mb-2">
                                    <img class="img-thumbnail" id="add_preview_img_product_main" style="max-width:85%; max-height: 200px;"  src="{{asset('assets/uploads/images/no-image.jpg')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row pb-3">
                                <label for="add_product_price"
                                    class="col-sm-4 control-label col-form-label text-center">Product Details:</label>
                                <div class="col-sm-8">
                                    <?php
                                        $content_textarea_id = 'add_product_content';
                                        $content_textarea_name = 'product[product_description]';
                                        echo Froala::initEditor($content_textarea_name,$content_textarea_id,'');
                                    ?>

                                </div>
                            </div>






                            <div class="form-group row">
                                <label for="add_product_status"
                                    class="col-sm-4 control-label col-form-label text-center">Status:</label>
                                <div class="col-sm-8 ">
                                    <div class="form-check form-switch ">
                                        <input type="hidden" id="add_product_status"   name="product[product_status]"  data-id="1" value="1">
                                        <input type="checkbox" class="form-check-input product-status mt-2" style="width: 35px" id="add_catestatus"  checked value="1">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="add_product_fb_status"
                                    class="col-sm-4 control-label col-form-label text-center">Status Facebook Share:</label>
                                <div class="col-sm-8 ">
                                    <div class="form-check form-switch ">
                                        <input type="hidden" id="add_product_fb_status"   name="product[product_status_fb_share]"  data-id="1" value="1">
                                        <input type="checkbox" class="form-check-input product-fb-status mt-2" style="width: 35px" id="add_catefbstatus"  checked value="1">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="add_product_line_status"
                                    class="col-sm-4 control-label col-form-label text-center">Status Line Share:</label>
                                <div class="col-sm-8 ">
                                    <div class="form-check form-switch ">
                                        <input type="hidden" id="add_product_line_status"   name="product[product_status_line_share]"  data-id="1" value="1">
                                        <input type="checkbox" class="form-check-input product-line-status mt-2" style="width: 35px" id="add_catelinestatus"  checked value="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="form-group text-center mb-0">
                            <button type="submit" class="btn btn-lg btn-success">Save</button>
                            <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-light"
                        data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-light-primary text-primary font-weight-medium">Save changes</button>
                </div> --}}
                </form>
            </div>
        </div>
    </div>


@section('script')
    <script src="{{ asset('assets/js/admin/product.js') }}"></script>
@endsection
