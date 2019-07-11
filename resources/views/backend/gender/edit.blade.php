
@extends('mainlayout.index')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-40 mt-3 align-self-center">Edit Gender</h5>
                            <div class="row">

                                <div class="col-lg-8 col-md-8">
                                    <div class="row">
                                        <div class="form-wrap form-wrap2 mt-4">
                                            <form class="form-horizontal" action="{{route('gender.update',$genders->id)}}" method="post">
                                                @csrf
                                                @method('PUT')


                                                @if(session()->has('message'))
                                                    <div class="alert alert-success">
                                                        {{session('message')}}
                                                    </div>
                                                @endif
                                                @if($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach($errors->all() as $err)
                                                                <li>{{ $err }}</li>
                                                            @endforeach
                                                        </ul>

                                                    </div>
                                                @endif

                                                <div class="col-sm-12 col-xs-12">
                                                    <div class="form-group m-b-15">
                                                        <label class="control-label text-primary font-12 m-b-5">Gender Name</label>
                                                        <div>
                                                            <input type="text" class="form-control font-14" name="gender_name" value="{{$genders->gender_name}}"  placeholder="Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row m-l-0 m-b-10">
                                                    <div class="col-md-6  col-xs-12  m-5">
                                                        <div class="p-l-15 p-r-15">
                                                            <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success" value="submit">Submit</button>
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