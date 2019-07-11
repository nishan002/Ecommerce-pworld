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
                            <div class="d-flex m-b-10 no-block">
                                <h5 class="card-title m-b-0 align-self-center">Product List</h5>
                                <div class="ml-auto text-light-blue">
                                    <ul class="nav nav-tabs customtab default-customtab list-inline text-uppercase lp-5 font-medium font-12" role="tablist">
                                        <li>
                                            <a href="{{route('product.add')}}" class="btn waves-effect waves-light btn-rounded btn-primary">Add Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="table-responsive m-t-10">
                                <table id="myTable" class="table color-table table-bordered product-table table-hover">
                                    <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Category Name</td>
                                        <td>Sub Category Name</td>
                                        <td>Product Name</td>
                                        <td>Product Name Bangla</td>
                                        <td>Unit Meassure</td>
                                        <td>Description</td>
                                        <td class="op-0">&nbsp;</td>
                                        <td class="op-0">&nbsp;</td>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @foreach($products as $product)
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->category->category_name}}</td>
                                        <td>{{$product->subcategory->sub_category_name}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->product_name_bangla}}</td>
                                        <td>{{$product->meassure->meassure_name}}</td>
                                        <td>{{$product->description}}</td>
                                        <td class="text-center"><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
                                        <td class="text-center"><a href="#"><i class="fas fa-trash-alt text-danger"></i></a></td>
                                    </tr>

                                        @endforeach


                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- ============================================================== -->


        </div>
    </div>
    @endsection
