

@extends('mainlayout.index')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <!-- Column -->
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex m-b-10 no-block">
                                <h5 class="card-title m-b-0 align-self-center">Sub Category List</h5>
                                <div class="ml-auto text-light-blue">
                                    <ul class="nav nav-tabs customtab default-customtab list-inline text-uppercase lp-5 font-medium font-12" role="tablist">
                                        <li>
                                            <a href="ecommerce-add-new.html" class="btn waves-effect waves-light btn-rounded btn-primary">Add Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="table-responsive m-t-10">
                                <table id="myTable" class="table color-table table-bordered product-table table-hover">
                                    <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Product image</td>
                                        <td>Category Name</td>
                                        <td>Sub Category Name</td>
                                        <td>Category Bangla Name</td>
                                        <td>Description</td>
                                        <td class="op-0">&nbsp;</td>
                                        <td class="op-0">&nbsp;</td>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($sub_categories as $sub_category)
                                        <tr>

                                            <td>{{$sub_category->id}}</td>
                                            <td>empty</td>
                                            <td>{{$sub_category->category->category_name}}</td>
                                            <td>{{$sub_category->sub_category_name}}</td>
                                            <td>{{$sub_category->category_bangla_name}}</td>
                                            <td>{{$sub_category->category_description}}</td>
                                            <td class="text-center"><a href="{{route('sub_category.edit', $sub_category->id)}}"><i class="fas fa-pencil-alt"></i>

                                                </a></td>

                                            <form action="" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <td class="text-center">
                                                    <button type="submit"><i class="fas fa-trash-alt text-danger"></i>
                                                    </button></td>
                                            </form>


                                        </tr>
                                    @endforeach



                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

