@extends('mainlayout.index')
@section('content')
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-40 mt-3 align-self-center">Add new Details</h5>
                                <div class="row">
                                    <!-- End of product slider -->
                                    <div class="col-lg-8 col-md-8">
                                        <div class="row">
                                            <div class="form-wrap form-wrap2 mt-4">
                                                <form class="form-horizontal" method="post" action="{{route('purchase-details.store')}}" enctype="multipart/form-data">
                                                    @csrf



                                                    @if(session()->has('message'))
                                                        <div class="alert alert-success">
                                                            {{session('message')}}
                                                        </div>
                                                    @endif


                                                    <div class="form-group m-b-15">
                                                        <div class="row m-0 m-b-20">
                                                            <div class="col-sm-6 col-xs-12">
                                                                <label class="control-label font-14 m-b-5">Select Purchase id</label>
                                                                <div>
                                                                    <select class="custom-select font-14 m-b-5" data-style="btn-default btn-outline" name="purchase_id">
                                                                        <option  data-tokens="Purchase">Select Purchase id </option>
                                                                        @foreach($purchases as $purchase)
                                                                            <option value="{{$purchase->id}}">{{$purchase->id}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xs-12">
                                                                <label class="control-label font-14 m-b-5">Select Product</label>
                                                                <div>
                                                                    <select class="custom-select font-14 m-b-5" data-style="btn-default btn-outline" name="product_id">
                                                                        <option  data-tokens="Product">Select Product </option>

                                                                        @foreach($products as $product)
                                                                            <option value="{{$product->id}}">{{$product->product_name}}</option>
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
                                                                    <label class="control-label text-primary font-12 m-b-5">Select Unit Measure</label>
                                                                    <div>
                                                                      <select class="custom-select font-14 m-b-5" data-style="btn-default btn-outline" name="unit_meassure_id">
                                                                          <option  data-tokens="Meassures">Select Unit Measure </option>
                                                                          @foreach($meassures as $meassure)
                                                                              <option value="{{$meassure->id}}">{{$meassure->meassure_name}}</option>
                                                                          @endforeach
                                                                      </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-xs-12">
                                                                <div class="form-group m-b-15">
                                                                    <label class="control-label text-primary font-12 m-b-5">Total Price</label>
                                                                    <div>
                                                                      <input type="text" name="total_price" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="clearfix"></div>
                                                    <div class="form-group m-b-15">
                                                        <div class="row m-0 m-b-20">

                                                            <div class="col-md-12 col-xs-12 m-b-5">
                                                                <label class="control-label font-14 m-b-5 ">Quantity</label>
                                                                <div >
                                                                    <input type="number" class="form-control font-14" name="quantity" placeholder="" min="1">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="clearfix"></div>
                                                    <div class="form-group m-b-15">
                                                        <div class="row m-0 m-b-20">

                                                            <div class="col-md-12 col-xs-12 m-b-5">
                                                                <label class="control-label font-14 m-b-5 ">Branch 1</label>
                                                                <div >
                                                                    <input type="number" class="form-control font-14" name="branch_quantity[]"  placeholder="" min="1">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="form-group m-b-15">
                                                        <div class="row m-0 m-b-20">

                                                            <div class="col-md-12 col-xs-12 m-b-5">
                                                                <label class="control-label font-14 m-b-5 ">Branch 2</label>
                                                                <div >
                                                                    <input type="number" class="form-control font-14" name="branch_quantity[]" placeholder="" min="1">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="form-group m-b-15">
                                                        <div class="row m-0 m-b-20">

                                                            <div class="col-md-12 col-xs-12 m-b-5">
                                                                <label class="control-label font-14 m-b-5 ">Branch 3</label>
                                                                <div >
                                                                    <input type="number" class="form-control font-14" name="branch_quantity[]" placeholder="" min="1">
                                                                </div>
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
