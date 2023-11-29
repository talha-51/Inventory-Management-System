@extends('navbar')

@section('title')
    Product List
@endsection

@section('mainContent')
    <div class="d-flex justify-content-center">
        <h1>Product List</h1>
    </div>
    <br>
    <div class="d-flex justify-content-center">
        <a href="{{ route('product.addProduct') }}"><button type="button" class="btn btn-primary">Add
                Product</button></a>
    </div>
    <br><br>
    <div class="d-flex justify-content-center">
        <table class="table table-striped" style="width:50%">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Quantity</td>
                <td>Price</td>
                <td>Action</td>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('product.editProduct', $product->id) }}"><button type="button"
                                class="btn btn-warning">EDIT</button></a>
                        <a href="{{ route('product.deleteProduct', $product->id) }}"><button type="button"
                                class="btn btn-danger">DELETE</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
