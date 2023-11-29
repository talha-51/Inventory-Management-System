@extends('navbar')

@section('title')
    Edit Product Info
@endsection

@section('mainContent')
    <div class="d-flex justify-content-center">
        <h1>Edit Product Info</h1>
    </div>
    <div class="d-flex justify-content-center">
        <form method="post" style="width:15%">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                <div class="form-text text-danger">{{ $errors->first('name') }}</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}">
                <div class="form-text text-danger">{{ $errors->first('quantity') }}</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" class="form-control" name="price" value="{{ $product->price }}">
                <div class="form-text text-danger">{{ $errors->first('price') }}</div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
