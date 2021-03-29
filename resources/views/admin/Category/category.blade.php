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
                    <button type="button"  class="btn waves-effect waves-light btn-success float-right newdata btn-add">Add Category</button>
                </div>
                <div class="row justify-content-center bg-light p-3">
                    <div class="col-md-12">
                        <div class="card shadow-sm">
                            <div class="p-4 text-center">
                                <div class="table-responsive">
                                    <table id="teble_category" class="table table-striped table-bordered no-wrap teble_category" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>picture</th>
                                                <th>Name Category</th>
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
            <form id="FormAdd" >
                <div class="modal-body">
                    <div class="form-horizontal form-upload">
                        <div class="form-group row pb-3">
                            <label for="add_category_name"
                                class="col-sm-4 control-label col-form-label text-center">Name Category:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="add_category_name" name="category[category_name]"  placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row pb-3">
                            <label for="add_category_description"
                                class="col-sm-4 control-label col-form-label text-center">Description:</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="add_category_description" name="category[category_description]" rows="4" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="add_preview_img"
                                class="col-sm-4 control-label col-form-label text-center">Picture:</label>
                            <div class="col-sm-8 main_web_logo">
                                <input type="file" class="form-control upload-news-img" type="file" id="formFile" name="" accept="image/*">
                                {{-- <div class="custom-file main_web_logo">
                                    <input type="file" class="custom-file-input upload-news-img form-control"id="add_menu_system_lang_image_page[]" name="menu_system_lang[][menu_system_lang_image_page]" placeholder="" accept="image/*">
                                    <small class="form-text text-muted">Recommended Size: 1200 x 630 pixel</small>
                                </div> --}}
                                <div class="mt-3 mb-2">
                                <img class="img-thumbnail" id="add_preview_img" style="max-width:85%; max-height: 320px;"  src="{{asset('assets/uploads/images/no-image.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="add_page_title"
                                class="col-sm-4 control-label col-form-label text-center">Status:</label>
                            <div class="col-sm-8 ">
                                <div class="form-check form-switch ">
                                    <input type="hidden" id="add_category_status"   name="category[category_status]"  data-id="1" value="1">
                                    <input type="checkbox" class="form-check-input category-status mt-2" style="width: 35px" id="add_catestatus"  checked value="1">
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

<div id="ModalEdit" class="modal fade" tabindex="-1"
    aria-labelledby="primary-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-light ">
                <h4 class="modal-title text-black-50 " id="primary-header-modalLabel ">Edit</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="FormEdit" >
                <div class="modal-body">
                    <div class="form-horizontal form-upload">
                        <input type="hidden" id="edit_category_id" name="category[category_id]" >

                        <div class="form-group row pb-3">
                            <label for="edit_category_name"
                                class="col-sm-4 control-label col-form-label text-center">Name Category:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="edit_category_name" name="category[category_name]"  placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row pb-3">
                            <label for="edit_category_description"
                                class="col-sm-4 control-label col-form-label text-center">Description:</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="edit_category_description" name="category[category_description]" rows="4" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edit_preview_img"
                                class="col-sm-4 control-label col-form-label text-center">Picture:</label>
                            <div class="col-sm-8 edit_web_logo">
                                <input type="file" class="form-control edit-upload-news-img" type="file" id="formFile" name="" accept="image/*">
                                {{-- <div class="custom-file main_web_logo">
                                    <input type="file" class="custom-file-input upload-news-img form-control"id="edit_menu_system_lang_image_page[]" name="menu_system_lang[][menu_system_lang_image_page]" placeholder="" accept="image/*">
                                    <small class="form-text text-muted">Recommended Size: 1200 x 630 pixel</small>
                                </div> --}}
                                <div class="mt-3 mb-2 " id="edit_preview_img">
                                    <img class="img-thumbnail"  style="max-width:85%; max-height: 320px;"  src="{{asset('assets/uploads/images/no-image.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edit_page_title"
                                class="col-sm-4 control-label col-form-label text-center">Status:</label>
                            <div class="col-sm-8 ">
                                <div class="form-check form-switch ">
                                    <input type="hidden" id="edit_category_status"   name="category[category_status]"  data-id="1" value="1">
                                    <input type="checkbox" class="form-check-input edit-category-status mt-2" style="width: 35px" id="edit_catestatus"  checked value="1">
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
            </form>
        </div>
    </div>
</div>

<div id="ModalView" class="modal fade" tabindex="-1"
    aria-labelledby="primary-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-light ">
                <h4 class="modal-title text-black-50 " id="primary-header-modalLabel ">View</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="FormView" >
                <div class="modal-body">
                    <div class="form-horizontal form-upload">
                        <input type="hidden" id="view_category_id" >

                        <div class="form-group row pb-3">
                            <label for="view_category_name"
                                class="col-sm-4 control-label col-form-label text-center">Name Category:</label>
                            <div class="col-sm-8">
                                <label class="col-sm-8 control-label col-form-label" id="view_category_name"></label>
                            </div>
                        </div>
                        <div class="form-group row pb-3">
                            <label for="view_category_description"
                                class="col-sm-4 control-label col-form-label text-center">Description:</label>
                            <div class="col-sm-8">
                                <label class="col-sm-12 control-label col-form-label" id="view_category_description"></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="view_preview_img"
                                class="col-sm-4 control-label col-form-label text-center">Picture:</label>
                            <div class="col-sm-8 view_web_logo">
                                <div class="mt-3 mb-2 " id="view_preview_img">
                                    <img class="img-thumbnail"  style="max-width:85%; max-height: 320px;"  src="{{asset('assets/uploads/images/no-image.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="view_page_title"
                                class="col-sm-4 control-label col-form-label text-center">Status:</label>
                            <div class="col-sm-8 ">
                                <label class="col-sm-8 control-label col-form-label" id="view_category_status"></label>
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
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="{{ asset('assets/js/admin/category.js') }}"></script>
    <script>
    const isLogin = sessionStorage.getItem('session_login');
    if(!isLogin || isLogin === '0'){
        window.location.href = `{{url('admin/login')}}`
    }
    </script>
@endsection
