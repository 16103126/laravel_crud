@extends('crud.layouts.master')

@section('title', 'Products List')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header"><a href="{{ route('product.create') }}" class="btn btn-success">Create Product</a></div>
                <div class="card-body">
                    @include('crud.partials.message')
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th class="colspan-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('product.destroy', $product->id) }}" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center" style="margin-top: 20px;">
    {!! $products->links() !!}
</div>

@endsection