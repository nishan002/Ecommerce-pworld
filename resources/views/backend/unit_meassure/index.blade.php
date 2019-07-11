

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
                                <h5 class="card-title m-b-0 align-self-center">Unit Meassure List</h5>
                                <div class="ml-auto text-light-blue">
                                    <ul class="nav nav-tabs customtab default-customtab list-inline text-uppercase lp-5 font-medium font-12" role="tablist">
                                        <li>
                                            <a href="{{route('meassure.add')}}" class="btn waves-effect waves-light btn-rounded btn-primary">Add Meassure</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="table-responsive m-t-10">
                                <table id="myTable" class="table color-table table-bordered product-table table-hover">
                                    <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Unit Meassure Name</td>
                                        <td class="op-0">&nbsp;</td>
                                        <td class="op-0">&nbsp;</td>


                                    </tr>
                                    </thead>
                                    <tbody>


                                    <tr>
                                        @foreach($meassures as $meassure)

                                            <td>{{$meassure->id}}</td>
                                            <td>{{$meassure->meassure_name}}</td>
                                            <td class="text-center"><a href="{{route('meassure.edit',$meassure->id)}}"><i class="fas fa-pencil-alt"></i>

                                                </a></td>
                                            <td class="text-center"><button href=""><i class="fas fa-trash-alt text-danger"></i>
                                                </button></td>

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

