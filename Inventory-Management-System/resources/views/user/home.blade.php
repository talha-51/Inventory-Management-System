@extends('navbar')

@section('title')
    User Home
@endsection

@section('mainContent')
    <div class="d-flex justify-content-center">
        <h1>Welcome Home, {{ $user->username }}</h1>
    </div>
@endsection
