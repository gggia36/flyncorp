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

        .div_preview_product {
            width: 100%;
            height: 180px;
            background-position: center center;
            background-size: cover;
            /* -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3); */
            display: inline-block;
            content: "click Here";
            color: black;
            position: relative;

            /* background-color: #686869; */
        }
        .div_preview_product img {
            width: 100%;
        }
        .edit_div_preview_product {
            width: 100%;
            height: 180px;
            background-position: center center;
            background-size: cover;
            /* -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3); */
            display: inline-block;
            content: "click Here";
            color: black;
            position: relative;

            /* background-color: #686869; */
        }
        .edit_div_preview_product img {
            width: 100%;
        }

        .view_div_preview_product {
            width: 100%;
            height: 180px;
            background-position: center center;
            background-size: cover;
            /* -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3); */
            display: inline-block;
            content: "click Here";
            color: black;
            position: relative;

            /* background-color: #686869; */
        }
        .view_div_preview_product img {
            width: 100%;
        }

        .text-inbox-center {
            position: absolute;
            top: 10%;
            /* left: 50%; */
            right: 10%;
            transform: translate(0%, 0%);
            font-size: 15px;
            font-weight: 600;
            color: #9fa0a2;
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
                                    <label class="control-label" for="search_name_product">Name Product</label>
                                    <input type="text" id="search_name_product" class="form-control search_table">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="search_product_status">Status</label> <br>
                                    <div class="form-check form-check-inline">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" value="all"
                                                id="search_product_status" name="search_product_status" checked>
                                            <label class="custom-control-label" for="search_product_status">All</label>
                                        </div>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" value="1"
                                                id="search_product_status_1" name="search_product_status">
                                            <label class="custom-control-label" for="search_product_status_1">On</label>
                                        </div>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" value="0"
                                                id="search_product_status_2" name="search_product_status">
                                            <label class="custom-control-label" for="search_product_status_2">Off</label>
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
                    <h4 class="card-title mb-0">{{ $MainMenus }}</h4>
                    <button type="button" class="btn waves-effect waves-light btn-success float-right newdata btn-add">Add
                        Product</button>
                </div>
                <div class="row justify-content-center bg-light p-3">
                    <div class="col-md-12">
                        <div class="card shadow-sm">
                            <div class="p-4 text-center">
                                <div class="table-responsive">
                                    <table id="teble_product"   class="table table-striped table-bordered no-wrap " style="width:100%">
                                        <thead>
                                            <tr>
                                                <th scope="col" >No</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">picture</th>
                                                <th scope="col">Name Product</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Updated</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                    </table>
                                    {{-- <table id="teble_product" class="table display table-bordered table-striped no-wrap">
                                        <thead>
                                            <tr>
                                                <th>First name</th>
                                                <th>Last name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <th>Extn.</th>
                                                <th>E-mail</th>
                                            </tr>
                                        </thead>
                                    </table> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection @section('modal')
<div id="ModalAdd" class="modal fade"  aria-labelledby="primary-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-light ">
                <h4 class="modal-title text-black-50 " id="primary-header-modalLabel ">Add</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="FormAdd" class="mb-0">
                <div class="modal-body">
                    <div class="form-horizontal form-upload">
                        <div class="row">
                            <div class="col-sm-6 mb-2">
                                <label for="add_category_name" class="control-label col-form-label">Category:</label>
                                <select class="form-control" id="select2-search-hide" name="product[category_id]" style="width: 100%; height:36px;">
                                    @foreach ($Category as $item)
                                        <option value="{{ $item->category_id }}">{{ $item->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <label for="add_product_name" class="control-label col-form-label text-center">Product Name:</label>
                                <input type="text" class="form-control" id="add_product_name" name="product[product_name]" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mb-2">
                                <label for="add_product_size" class="control-label col-form-label text-center">Product Size:</label>
                                <input type="text" class="form-control" id="add_product_size" name="product[product_size]" placeholder="Product Size">
                            </div>
                            <div class="col-sm-6 mb-2">
                                <label for="add_product_price" class="control-label col-form-label text-center">Product Price:</label>
                                <input type="text" class="form-control number-only" id="add_product_price" name="product[product_price]" placeholder="Product Price">
                            </div>
                        </div>
                        <div class="row mb-3" id="upload_img">
                            @for ($i = 1; $i < 7; $i++)
                                <div class="col-sm-4 main_web_logo mb-2 mt-2" onclick="clickUpload(this,'#uploadFile{{$i}}')"  style="max-width:100%; height: 220px;">
                                    <div class=" mb-2 text-center div_preview_product" id="div_preview_img_product_{{$i}}" img-preview="{{$i}}" >
                                        <img class="img-thumbnail" id="add_preview_img_product_{{$i}}" style="max-width:100%; max-height: 220px;" src="{{ asset('assets/uploads/images/no-image.jpg') }}">
                                        <div class="text-inbox-center" id="image_placeholder_{{$i}}">
                                            <i class="fas fa-plus-circle set-icon "> {{$i}}</i>
                                            {{-- <p class="text-center text-white">{{$i}}</p> --}}
                                        </div>
                                    </div>

                                </div>
                                <input type="file" class="form-control upload-product-img d-none" type="file" id="uploadFile{{$i}}" name="image{{$i}}"  data-index="{{$i}}" accept="image/*">
                            @endfor
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label for="add_product_price"
                                class="control-label col-form-label text-center">Product Details:</label>
                                <?php
                                    $content_textarea_id = 'add_product_content';
                                    $content_textarea_name = 'product[product_description]';
                                    echo Froala::initEditor($content_textarea_name, $content_textarea_id, '');
                                ?>
                            </div>
                        </div>

                        <div class="row text-end">
                            <div class="col-sm-4">
                                <div class="col row">
                                    <div class="col-sm-6">
                                        <label for="add_product_status"  class="col-sm-4 control-label col-form-label text-center">Status:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check form-switch ">
                                            <input type="hidden" id="add_product_status" name="product[product_status]"
                                                data-id="1" value="1">
                                            <input type="checkbox" class="form-check-input product-status mt-2"
                                                style="width: 35px" id="add_catestatus" checked value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="col row">
                                    <div class="col-sm-6">
                                        <label for="add_product_fb_status"  class="col control-label col-form-label text-center">FB Share:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check form-switch ">
                                            <input type="hidden" id="add_product_fb_status"
                                                name="product[product_status_fb_share]" data-id="1" value="1">
                                            <input type="checkbox" class="form-check-input product-fb-status mt-2"
                                                style="width: 35px" id="add_catefbstatus" checked value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="col row">
                                    <div class="col-sm-6">
                                        <label for="add_product_line_status"
                                        class="col control-label col-form-label text-center">Line Share:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check form-switch ">
                                            <input type="hidden" id="add_product_line_status" name="product[product_status_line_share]" data-id="1" value="1">
                                            <input type="checkbox" class="form-check-input product-line-status mt-2" style="width: 35px" id="add_catelinestatus" checked value="1">
                                        </div>
                                    </div>
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

<div id="ModalEdit" class="modal fade"  aria-labelledby="primary-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-light ">
                <h4 class="modal-title text-black-50 " id="primary-header-modalLabel ">Edit</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="FormEdit" class="mb-0">
                <div class="modal-body">
                    <div class="form-horizontal form-upload">
                        <input type="hidden" id="edit_product_id" name="product[product_id]">

                        <div class="row">
                            <div class="col-sm-6 mb-2">
                                <label for="edit_category_name" class="control-label col-form-label">Category:</label>
                                <select class="form-control" id="edit_product_category" name="product[category_id]" style="width: 100%; height:36px;">
                                    @foreach ($Category as $item)
                                        <option value="{{ $item->category_id }}">{{ $item->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <label for="edit_product_name" class="control-label col-form-label text-center">Product Name:</label>
                                <input type="text" class="form-control" id="edit_product_name" name="product[product_name]" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mb-2">
                                <label for="edit_product_size" class="control-label col-form-label text-center">Product Size:</label>
                                <input type="text" class="form-control" id="edit_product_size" name="product[product_size]" placeholder="Product Size">
                            </div>
                            <div class="col-sm-6 mb-2">
                                <label for="edit_product_price" class="control-label col-form-label text-center">Product Price:</label>
                                <input type="text" class="form-control number-only" id="edit_product_price" name="product[product_price]" placeholder="Product Price">
                            </div>
                        </div>
                        <div class="row mb-3" id="edit-upload_img">
                            @for ($i = 1; $i < 7; $i++)
                                <div class="col-sm-4 edit_main_web_logo mb-2 mt-2" onclick="clickUpload(this,'#edit-uploadFile{{$i}}')"  style="max-width:100%; height: 220px;">
                                    <div class=" mb-2 text-center edit_div_preview_product" id="edit-div_preview_img_product_{{$i}}" img-preview="{{$i}}" >
                                        <div class="" id="edit_product_image_{{$i}}">
                                            <img class="img-thumbnail" id="edit_preview_img_product_{{$i}}" style="max-width:100%; max-height: 220px;" src="{{ asset('assets/uploads/images/no-image.jpg') }}">
                                        </div>
                                        <div class="text-inbox-center" id="edit-image_placeholder_{{$i}}">
                                            <i class="fas fa-plus-circle set-icon "> {{$i}}</i>
                                            {{-- <p class="text-center text-white">{{$i}}</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <input type="file" class="form-control edit-upload-product-img d-none" type="file" id="edit-uploadFile{{$i}}" name="image{{$i}}"  data-index="{{$i}}" accept="image/*">
                            @endfor
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label for="edit_product_price"
                                class="control-label col-form-label text-center">Product Details:</label>
                                <?php
                                    $content_textarea_id = 'edit_product_content';
                                    $content_textarea_name = 'product[product_description]';
                                    echo Froala::initEditor($content_textarea_name, $content_textarea_id, '');
                                ?>
                            </div>
                        </div>

                        <div class="row text-end">
                            <div class="col-sm-4">
                                <div class="col row">
                                    <div class="col-sm-6">
                                        <label for="edit_product_status"  class="col-sm-4 control-label col-form-label text-center">Status:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check form-switch ">
                                            <input type="hidden" id="edit_product_status" name="product[product_status]"
                                                data-id="1" value="1">
                                            <input type="checkbox" class="form-check-input edit-product-status mt-2"
                                                style="width: 35px" id="edit_productstatus" checked value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="col row">
                                    <div class="col-sm-6">
                                        <label for="edit_product_fb_status"  class="col control-label col-form-label text-center">FB Share:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check form-switch ">
                                            <input type="hidden" id="edit_product_fb_status"
                                                name="product[product_status_fb_share]" data-id="1" value="1">
                                            <input type="checkbox" class="form-check-input edit-product-fb-status mt-2"
                                                style="width: 35px" id="edit_productfbstatus" checked value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="col row">
                                    <div class="col-sm-6">
                                        <label for="edit_product_line_status"
                                        class="col control-label col-form-label text-center">Line Share:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check form-switch ">
                                            <input type="hidden" id="edit_product_line_status" name="product[product_status_line_share]" data-id="1" value="1">
                                            <input type="checkbox" class="form-check-input edit-product-line-status mt-2" style="width: 35px" id="edit_productlinestatus" checked value="1">
                                        </div>
                                    </div>
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

<div id="ModalView" class="modal fade"  aria-labelledby="primary-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-light ">
                <h4 class="modal-title text-black-50 " id="primary-header-modalLabel ">View</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="FormView" class="mb-0">
                <div class="modal-body">
                    <div class="form-horizontal form-upload">
                        <div class="row">
                            <div class="col-sm-6 mb-2">
                                <label for="view_category_name" class="control-label col-form-label">Category:</label>
                                <label class="col-sm-8 control-label col-form-label" id="view_category_name"></label>

                            </div>
                            <div class="col-sm-6 mb-2">
                                <label for="view_product_name" class="control-label col-form-label text-center">Product Name:</label>
                                <label class="col-sm-8 control-label col-form-label" id="view_product_name"></label>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mb-2">
                                <label for="view_product_size" class="control-label col-form-label text-center">Product Size:</label>
                                <label class="col-sm-8 control-label col-form-label" id="view_product_size"></label>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <label for="view_product_price" class="control-label col-form-label text-center">Product Price:</label>
                                <label class="col-sm-8 control-label col-form-label" id="view_product_price"></label>
                            </div>
                        </div>
                        <div class="row mb-3" id="view-upload_img">
                            @for ($i = 1; $i < 7; $i++)
                                <div class="col-sm-4 view_main_web_logo mb-2 mt-2"  style="max-width:100%; height: 220px;">
                                    <div class=" mb-2 text-center view_div_preview_product" id="view-div_preview_img_product_{{$i}}" img-preview="{{$i}}" >
                                        <div class="" id="view_product_image_{{$i}}">
                                            <img class="img-thumbnail" id="view_preview_img_product_{{$i}}" style="max-width:100%; max-height: 220px;" src="{{ asset('assets/uploads/images/no-image.jpg') }}">
                                        </div>

                                    </div>
                                </div>
                            @endfor
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label for="view_product_details"
                                class="control-label col-form-label text-center">Product Details:</label>
                                {{-- <label class="col-sm-8 control-label col-form-label" id="view_product_details"></label> --}}
                                <?php
                                    $content_textarea_id = 'view_product_details';
                                    $content_textarea_name = 'product[product_description]';
                                    echo Froala::initEditor($content_textarea_name, $content_textarea_id, '');
                                ?>
                            </div>
                        </div>

                        <div class="row text-end">
                            <div class="col-sm-4">
                                <div class="col row">
                                    <div class="col-sm-6">
                                        <label for="view_product_status"  class="col-sm-4 control-label col-form-label text-center">Status:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-sm-8 control-label col-form-label" id="view_product_status"></label>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="col row">
                                    <div class="col-sm-6">
                                        <label for="view_product_fb_status"  class="col control-label col-form-label text-center">FB Share:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-sm-8 control-label col-form-label" id="view_product_fb_status"></label>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="col row">
                                    <div class="col-sm-6">
                                        <label for="view_product_line_status"
                                        class="col control-label col-form-label text-center">Line Share:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-sm-8 control-label col-form-label" id="view_product_line_status"></label>

                                    </div>
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
    {{-- <script>
        const isLogin = sessionStorage.getItem('session_login');
        console.log(isLogin)
        if(!isLogin || isLogin === '0'){
            window.location.href = `{{url('admin/login')}}`
        }
    </script> --}}
@endsection
