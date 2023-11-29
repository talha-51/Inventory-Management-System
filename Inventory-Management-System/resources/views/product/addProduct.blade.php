@extends('navbar')

@section('title')
    Add Product
@endsection

@section('mainContent')
    <div class="d-flex justify-content-center">
        <h1>Add Product</h1>
    </div>
    <br>
    <div class="d-flex justify-content-center">
        <form method="post" style="width:15%">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                <div class="form-text text-danger">{{ $errors->first('name') }}</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" class="form-control" name="quantity" value="{{ old('quantity') }}">
                <div class="form-text text-danger">{{ $errors->first('quantity') }}</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" class="form-control" name="price" value="{{ old('price') }}">
                <div class="form-text text-danger">{{ $errors->first('price') }}</div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection
