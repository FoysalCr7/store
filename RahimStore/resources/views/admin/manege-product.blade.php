@extends('admin.master')
@section('body')
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Manege Product</h3>

                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manege Product</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">

                    @if (session('message'))
                        <div class="alert alert-success" align="center">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Id</th>
                            <th>Product Quantity</th>
                            <th>Product Price</th>
                            <th>Product Image</th>
                            <th>Product Upload By</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($product as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->productid }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <img src="{{ asset($product->image) }}" alt="" height="100px" width="100px">
                            </td>
                            <td>{{ $product->uploadby }}</td>
                            <td>
                                <a href="{{ route('edit-product',$product->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('delete-product',$product->id) }}"class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>


                            </td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>

@endsection
