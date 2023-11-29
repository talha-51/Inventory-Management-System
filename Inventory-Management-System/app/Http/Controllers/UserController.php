<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index(Request $req)
    {
        $user = DB::table('users')->where('id', $req->session()->get('id'))->first();

        return view('user.home')->with('user', $user);
    }

    public function userList(Request $req)
    {
        $users = DB::table('users')->where('id', '<>', $req->session()->get('id'))->get();

        return view('user.userList')->with('users', $users);
    }

    public function addUser()
    {
        return view('user.addUser');
    }

    public function verifyNewUser(UserRequest $req)
    {
        DB::table('users')->insert(
            [
                'username' => $req->username,
                'password' => $req->password,
            ]
        );

        return redirect()->route('user.userList');
    }

    public function deleteUser($id)
    {
        DB::table('users')->where('id', $id)->delete();

        return redirect()->route('user.userList');
    }
}
