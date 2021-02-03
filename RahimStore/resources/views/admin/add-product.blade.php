@extends('admin.master')
@section('body')


<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Product </h4>
                    @if (session('message'))
                        <div class="alert alert-success" align="center">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" method="POST" action="{{ route('insert-product') }}" enctype="multipart/form-data" >
                            @csrf
                            {{csrf_field()}}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Product Name</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Product Name">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Product ID</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="id" class="form-control" name="productid" placeholder="Product Id">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Product Price</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="number" id="price" class="form-control" name="price" placeholder="Product Price">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Product Quantity</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="quantity" class="form-control" name="quantity" placeholder="Quantity">
                                    </div>

                                    <div class="col-md-4">
                                        <label>Product Image</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="file" id="image" class="form-control" name="image">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Product Upload by</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="uploadby" class="form-control" name="uploadby" placeholder="UpLoad">
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
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
