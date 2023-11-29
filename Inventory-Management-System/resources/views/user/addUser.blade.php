@extends('navbar')

@section('title')
    Add New User
@endsection

@section('mainContent')
    <div class="d-flex justify-content-center">
        <h1>Add New User</h1>
    </div>
    <br>
    <div class="d-flex justify-content-center">
        <form method="post" style="width:15%">
            @csrf
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                <div class="form-text text-danger">{{ $errors->first('username') }}</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                <div class="form-text text-danger">{{ $errors->first('password') }}</div>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
@endsection
