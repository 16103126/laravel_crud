@extends('crud.layouts.master')

@section('title', 'Edit Product')

@section('content')

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card mt-5">
            <div class="card-header">Edit Product</div>
            <div class="card-body">
                <form action="{{ route('product.update', $products->id) }}" method="POST">

                    @include('crud.partials.message')
                    @csrf
                    
                    <div class="form-group">
                        <label for="product_name">Product Name:</label>
                        <input class="from-control" type="text" name="product_name" value="{{ $products->product_name }}">
                        <span class="text-danger">@error('product_name') {{ $message }} @enderror</span>
                    </div>
            
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" name="description" value="{{ $products->description }}">
                        <span class="text-danger">@error('description') {{ $message }} @enderror</span>
                    </div>
            
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" name="price" value="{{ $products->price }}">
                        <span class="text-danger">@error('price') {{ $message }} @enderror</span>
                    </div>
            
                    <button class="btn btn-primary" type="submit">Update</button>
            
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection