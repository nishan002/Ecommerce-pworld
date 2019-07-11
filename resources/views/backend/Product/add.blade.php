@extends('mainlayout.index')
@section('content')
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-40 mt-3 align-self-center">Add new Product</h5>
                                <div class="row">
                                    <!-- End of product slider -->
                                    <div class="col-lg-8 col-md-8">
                                        <div class="row">
                                            <div class="form-wrap form-wrap2 mt-4">
                                                <form class="form-horizontal" method="post" action="{{route('product.store')}}">
                                                    @csrf

                                                    @if($errors->any())
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach($errors->all() as $error)
                                                                    <li>
                                                                        {{$error}}
                                                                    </li>
                                                                 @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif

                                                    @if(session()->has('message'))
                                                        <div class="alert alert-success">
                                                            {{session('message')}}
                                                        </div>
                                                    @endif


                                                    <div class="form-group m-b-15">
                                                        <div class="row m-0 m-b-20">
                                                            <div class="col-sm-6 col-xs-12">
                                                                <label class="control-label font-14 m-b-5">Select Category</label>
                                                                <div>
                                                                    <select class="custom-select font-14 m-b-5" data-style="btn-default btn-outline" name="category_id">
                                                                        <option  data-tokens="Category">Select Category </option>
                                                                        @foreach($categories as $category)
                                                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-xs-12">
{{--                                                                <label class="control-label font-14 m-b-5">SKU identification</label>--}}
{{--                                                                <div >--}}
{{--                                                                    <input type="text" class="form-control font-14"  placeholder="SKU">--}}
{{--                                                                </div>--}}
                                                                <label class="control-label font-14 m-b-5">Select Sub Category</label>
                                                                <div>
                                                                    <select class="custom-select font-14 m-b-5" data-style="btn-default btn-outline" name="subcategory_id">
                                                                        <option  data-tokens="Category">Select Sub Category </option>
                                                                        @foreach($sub_categories as $subcategory)

                                                                        <option  value="{{$subcategory->id}}">{{$subcategory->sub_category_name}} </option>
                                                                            @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="form-group m-b-15">
                                                        <div class="row m-0 m-b-20">
                                                            <div class="col-sm-6 col-xs-12">
                                                                <div class="form-group m-b-15">
                                                                    <label class="control-label text-primary font-12 m-b-5">Product Name</label>
                                                                    <div>
                                                                        <input type="text" class="form-control font-14"  name="product_name"  placeholder="Name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xs-12">
                                                                <div class="form-group m-b-15">
                                                                    <label class="control-label text-primary font-12 m-b-5">Product Bangla Name</label>
                                                                    <div>
                                                                        <input type="text" class="form-control font-14" name="product_name_bangla" placeholder="Name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="clearfix"></div>
                                                    <div class="form-group m-b-15">
                                                        <div class="row m-0 m-b-20">

                                                            <div class="col-md-12 col-xs-12 m-b-5">
                                                                <label class="control-label font-14 m-b-5 ">Unit Meassure</label>
                                                                <div >
                                                                    <select class="custom-select" data-style="btn-default btn-outline" name="unit_meassure_id">
                                                                        <option  data-tokens="Category">Select Unit Category </option>
                                                                        @foreach($meassures as $meassure)

                                                                        <option  value="{{$meassure->id}}">{{$meassure->meassure_name}}</option>
                                                                            @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group row m-b-15">
                                                        <div class="col-sm-12">
                                                            <label class="col-12 p-t-0 m-b-5">Description</label>
                                                            <div class="col-12">
                                                                <textarea class="form-control textarea-lg" name="description"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-l-0 m-b-10">
                                                        <div class="col-md-6 col-xs-12 m-b-10">
{{--                                                            <div class="p-l-15 p-r-15">--}}
{{--                                                                <input type="checkbox" checked class="js-switch" data-color="#4886ff" data-size="small">--}}
{{--                                                                <label class="m-l-10"> Available</label>--}}
{{--                                                            </div>--}}
                                                        </div>
                                                        <div class="col-md-6  col-xs-12 text-right">
                                                            <div class="p-l-15 p-r-15">
                                                                <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success" value="submit">Save</button>
{{--                                                                <button type="submit"  value="submit" class="btn btn-rounded waves-effect waves-light btn-outline-default">Cancel</button>--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>

    @endsection
