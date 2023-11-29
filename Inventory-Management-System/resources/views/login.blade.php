@extends('layout')

@section('title')
    Login
@endsection

@section('mainContent')
    <div class="d-flex justify-content-center">
        <h1>Welcome to IMS</h1>
    </div>
    <br>
    <div class="d-flex justify-content-center">
        <form method="post" style="width:15%">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <br>
    <div class="d-flex justify-content-center text-danger">
        {{ session('msg') }}
    </div>
@endsection
