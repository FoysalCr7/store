@extends('admin.master')
@section('body')
    <div class="row" id="table-inverse">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product View Table</h4>
                </div>
                <div class="card-content">

                    <!-- table with dark -->
                    <div class="table-responsive">
                        <table class="table table-dark mb-0">
                            <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Id</th>
                                <th>Product Quantity</th>
                                <th>Product Price</th>
                                <th>Product Image</th>
                                <th>Product Upload By</th>
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
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- table with light -->

                </div>
            </div>
        </div>
    </div>
@endsection
