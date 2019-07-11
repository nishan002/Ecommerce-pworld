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
                                            <a href="{{route('purchase.create')}}" class="btn waves-effect waves-light btn-rounded btn-primary">Add Purchase</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="table-responsive m-t-10">
                                <table id="myTable" class="table color-table table-bordered product-table table-hover">
                                    <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Supplier Id</td>
                                        <td>Vouchar-No</td>
                                        <td>Total Bill</td>
                                        <td>Bill Paid</td>
                                        <td>Description</td>
                                        <td>Image</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      @if($purchases)
                                      @foreach($purchases as $purchase)
                                    <tr>

                                        <td>{{$purchase->id}}</td>
                                        <td>{{$purchase->supplier ? $purchase->supplier->supplier_name : "No supplier"}}</td>
                                        <td>{{$purchase->voucher_no}}</td>
                                        <td>{{$purchase->total_bill}}</td>
                                        <td>{{$purchase->bill_paid}}</td>
                                        <td>{{$purchase->description}}</td>
                                        <td><img src="images/{{$purchase->photo ? $purchase->photo->file : "No photo"}}" alt=""> </td>
                                    </tr>

                                        @endforeach
                                        @endif

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
