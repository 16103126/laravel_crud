@extends('crud.layouts.master')

@section('title', 'Create Product')

@section('content')

<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card mt-5">
               <div class="card-header">Create Product</div>
               <div class="card-body">

                <form action="{{ route('product.store') }}" method="post">

                    @include('crud.partials.message')
                    @csrf
            
                    <div class="form-group">
                        <label for="product_name">Product Name:</label>
                        <input class="form-control" type="text" name="product_name" >
                        <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                    </div>
                
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input class="form-control" type="text" name="description">
                        <span class="text-danger">@error('description') {{ $message }} @enderror</span>
                    </div>
                
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input class="form-control" type="text" name="price">
                        <span class="text-danger">@error('price') {{ $message }} @enderror</span>
                    </div>
                
                    <button class="btn btn-primary" type="submit">Add</button>
                
                </form>

               </div>
           </div>
       </div>
   </div>
</div>

@endsection