@extends('mainlayout.index')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <!-- Column -->
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-40 mt-3 align-self-center">Add new Sub Category</h5>
                            <div class="row">

                                <div class="col-lg-8 col-md-8">
                                    <div class="row">
                                        <div class="form-wrap form-wrap2 mt-4">
                                            <form class="form-horizontal" action="{{route('subcategory.store')}}" method="post">
                                                @csrf

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

                                                <div class="form-group m-b-15">
                                                    <div class="row m-0 m-b-20">
                                                        <div class="col-sm-12 col-xs-12">
                                                            <label class="control-label font-14 m-b-5">Select Category</label>
                                                            <div>
                                                                <select name="category_id" class="custom-select font-14 m-b-5" data-style="btn-default btn-outline">
                                                                    <option  data-tokens="Category" > Select </option>
                                                                    @foreach($categories as $category)
                                                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                                        @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-sm-12 col-xs-12">
                                                    <div class="form-group m-b-15">
                                                        <label class="control-label text-primary font-12 m-b-5">Sub Category Name</label>
                                                        <div>
                                                            <input type="text" class="form-control font-14" name="sub_category_name"  placeholder="Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-xs-12">
                                                    <div class="form-group m-b-15">
                                                        <label class="control-label text-primary font-12 m-b-5">Category Name Bangla</label>
                                                        <div>
                                                            <input type="text" class="form-control font-14" name="category_bangla_name"  placeholder="Name">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row m-b-15">
                                                    <div class="col-sm-12">
                                                        <label class="col-12 p-t-0 m-b-5" >Category Description</label>
                                                        <div class="col-12">
                                                            <textarea class="form-control textarea-lg" name="category_description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4" >
                                                    <div class="upload-photo">
                                                        <input type="file" id="input-file-now" class="dropify" name="image" />
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