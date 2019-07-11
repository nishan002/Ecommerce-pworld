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
                                <h5 class="card-title m-b-0 align-self-center">Purchase Details</h5>
                                <div class="ml-auto text-light-blue">
                                    <ul class="nav nav-tabs customtab default-customtab list-inline text-uppercase lp-5 font-medium font-12" role="tablist">
                                        <li>
                                            <a href="{{route('branch-stock.create')}}" class="btn waves-effect waves-light btn-rounded btn-primary">Add Branch Stock</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="table-responsive m-t-10">
                                <table id="myTable" class="table color-table table-bordered product-table table-hover">
                                    <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Chain Store</td>
                                        <td>Purchase Details ID</td>
                                        <td>Product</td>
                                        <td>Quantity</td>
                                        <td>Created at</td>
                                        <td>Updated at</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($stocks as $stock)
                                    <tr>

                                        <td>{{$stock->id}}</td>
                                        <td>{{$stock->chain_store ? $stock->chain_store->branch_name : "No branch"}}</td>
                                        <td>{{$stock->purchase_details_id}}</td>
                                        <td>{{$stock->product_id}}</td>
                                        <td>{{$stock->quantity}}</td>
                                        <td>{{$stock->created_at}}</td>
                                        <td>{{$stock->updated_at}}</td>
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
