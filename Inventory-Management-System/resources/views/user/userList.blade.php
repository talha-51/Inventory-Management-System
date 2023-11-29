@extends('navbar')

@section('title')
    User List
@endsection

@section('mainContent')
    <div class="d-flex justify-content-center">
        <h1>User List</h1>
    </div>
    <br>
    <div class="d-flex justify-content-center">
        <a href="{{ route('user.addUser') }}"><button type="button" class="btn btn-primary">Add
                User</button></a>
    </div>

    <br><br>
    <div class="d-flex justify-content-center">
        <table class="table table-striped" style="width:50%">
            <tr>
                <td>ID</td>
                <td>Username</td>
                <td>Password</td>
                <td>Action</td>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->password }}</td>
                    <td>
                        <a href="{{ route('user.deleteUser', $user->id) }}"><button type="button"
                                class="btn btn-danger">DELETE</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
