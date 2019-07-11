@extends('mainlayout.index')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Info box -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-40 mt-3 align-self-center">Add new Category</h5>
                            <div class="row">
                            {{--                                <div class="col-lg-4 col-md-4">--}}
                            {{--                                    <div class="relative">--}}
                            {{--                                        <div id="amazingslider-wrapper-1" class="m-b-40">--}}
                            {{--                                            <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">--}}
                            {{--                                                <ul class="amazingslider-slides" style="display:none;">--}}
                            {{--                                                    <li><a href="assets/imgs/product-imgs/a-lightbox.jpg" class="html5lightbox"><img src="assets/imgs/product-imgs/a.jpg" alt="" title="" /></a> </li>--}}
                            {{--                                                    <li><a href="assets/imgs/product-imgs/4-lightbox.jpg" class="html5lightbox"><img src="assets/imgs/product-imgs/4.jpg" alt="" title="" /></a> </li>--}}
                            {{--                                                    <li><a href="assets/imgs/product-imgs/13-lightbox.jpg" class="html5lightbox"><img src="assets/imgs/product-imgs/13.jpg" alt="" title="" /></a> </li>--}}
                            {{--                                                    <li><a href="assets/imgs/product-imgs/19-lightbox.jpg" class="html5lightbox"><img src="assets/imgs/product-imgs/19.jpg" alt="" title="" /></a> </li>--}}
                            {{--                                                </ul>--}}
                            {{--                                                <ul class="amazingslider-thumbnails" style="display:none;">--}}
                            {{--                                                    <li><img src="assets/imgs/product-imgs/a-tn.jpg" alt="" title="" /></li>--}}
                            {{--                                                    <li><img src="assets/imgs/product-imgs/4-tn.jpg" alt="" title="" /></li>--}}
                            {{--                                                    <li><img src="assets/imgs/product-imgs/13-tn.jpg" alt="" title="" /></li>--}}
                            {{--                                                    <li><img src="assets/imgs/product-imgs/19-tn.jpg"  alt="" title="" /></li>--}}
                            {{--                                                </ul>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="upload-photo">--}}
                            {{--                                        <input type="file" id="input-file-now" class="dropify" name="image" />--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            <!-- End of product slider -->
                                <div class="col-lg-8 col-md-8">
                                    <div class="row">
                                        <div class="form-wrap form-wrap2 mt-4">
                                            <form class="form-horizontal" action="{{route('category.update', $categories->id)}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                @if($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>

                                                            @foreach($errors->all() as $err)
                                                                <li>
                                                                    {{ $err }}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                @if(session()->has('message'))
                                                    <div class="alert alert-success">
                                                        {{ session('message') }}
                                                    </div>
                                                @endif

                                                <div class="col-sm-12 col-xs-12">
                                                    <div class="form-group m-b-15">
                                                        <label class="control-label text-primary font-12 m-b-5">Category Name</label>
                                                        <div>
                                                            <input type="text" class="form-control font-14" name="category_name" value="{{ $categories->category_name }}"  placeholder="Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-xs-12">
                                                    <div class="form-group m-b-15">
                                                        <label class="control-label text-primary font-12 m-b-5">Category Name Bangla</label>
                                                        <div>
                                                            <input type="text" class="form-control font-14" name="category_bangla_name" value="{{ $categories->category_bangla_name }}"  placeholder="Name">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row m-b-15">
                                                    <div class="col-sm-12">
                                                        <label class="col-12 p-t-0 m-b-5" >Category Description</label>
                                                        <div class="col-12">
                                                            <textarea class="form-control textarea-lg"  name="category_description"  value="{{ $categories->category_description }}"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{--                                                <div class="form-group m-b-15">--}}
                                                {{--                                                    <div class="row m-0 m-b-20">--}}
                                                {{--                                                        <div class="col-sm-12 col-xs-12">--}}
                                                {{--                                                            <label class="control-label font-14 m-b-5" >Select sub Category</label>--}}
                                                {{--                                                            <div>--}}
                                                {{--                                                                <select class="custom-select font-14 m-b-5" name="sub_category" data-style="btn-default btn-outline">--}}
                                                {{--                                                                    <option  data-tokens="Category">Select Category </option>--}}
                                                {{--                                                                    <option data-tokens="Category 1" value="1">Category 1</option>--}}
                                                {{--                                                                    <option data-tokens="Category 2" value="2">Category 2</option>--}}
                                                {{--                                                                    <option data-tokens="Category 3" value="3">Category 3</option>--}}
                                                {{--                                                                </select>--}}
                                                {{--                                                            </div>--}}
                                                {{--                                                        </div>--}}

                                                {{--                                                    </div>--}}
                                                {{--                                                </div>--}}

                                                <div class="col-lg-4 col-md-4" >
                                                    <div class="upload-photo">
                                                        <input type="file" id="input-file-now" class="dropify" name="image" />
                                                    </div>
                                                </div>
                                                <div class="form-group row m-l-0 m-b-10">
                                                    <div class="col-md-6  col-xs-12  m-5">
                                                        <div class="p-l-15 p-r-15">
                                                            <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success" value="submit">Update</button>
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
    </div>

@endsection