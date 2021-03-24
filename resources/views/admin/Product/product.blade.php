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



@endsection


@section('script')
    <script src="{{ asset('assets/js/admin/product.js') }}"></script>
@endsection
