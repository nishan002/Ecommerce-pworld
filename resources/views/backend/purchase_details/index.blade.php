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
                                            <a href="{{route('purchase-details.create')}}" class="btn waves-effect waves-light btn-rounded btn-primary">Add Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="table-responsive m-t-10">
                                <table id="myTable" class="table color-table table-bordered product-table table-hover">
                                    <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Purchase ID</td>
                                        <td>Product ID</td>
                                        <td>Unit Measure</td>
                                        <td>Quantity</td>
                                        <td>Total Price</td>
                                        <td>Created_at</td>
                                        <td>Updated_at</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($purchase_details as $detail)
                                    <tr>
                                        <td>{{$detail->id}}</td>
                                        <td>{{$detail->purchase_id}}</td>
                                        <td>{{$detail->product_id}}</td>
                                        <td>{{$detail->unit_meassure_id}}</td>
                                        <td>{{$detail->quantity}}</td>
                                        <td>{{$detail->total_price}}</td>
                                        <td>{{$detail->created_at}}</td>
                                        <td>{{$detail->updated_at}}</td>
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
