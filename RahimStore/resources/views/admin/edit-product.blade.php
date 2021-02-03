@extends('admin.master')
@section('body')


    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Product </h4>
                        @if (session('message'))
                            <div class="alert alert-success" align="center">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" method="POST" action="{{ route('update-product',$product->id) }}" enctype="multipart/form-data" >
                                @csrf
                                {{csrf_field()}}
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Product Name</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="name" class="form-control" name="name" value="{{ $product->name }}">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Product ID</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="id" class="form-control" name="productid" value="{{ $product->productid }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Product Price</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="price" class="form-control" name="price" value="{{ $product->price }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Product Quantity</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="quantity" class="form-control" name="quantity" value="{{ $product->quantity }}">
                                        </div>

                                        <div class="col-md-4">
                                            <label>Product Image</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="file" id="image" class="form-control" name="image" >
                                        </div>

                                        <div class="form-group">


                                            <img src="{{ asset($product->image) }}" alt="" height="100px" width="100px" name="old_image">
                                        </div>

                                        <div class="col-md-4">
                                            <label>Product Upload by</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="uploadby" class="form-control" name="uploadby" value="{{ $product->uploadby }}">
                                        </div>

                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
