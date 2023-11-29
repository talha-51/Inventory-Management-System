<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function verifyUser(Request $req)
    {
        $result = DB::table('users')->where('username', $req->username)->where('password', $req->password)->first();

        if ($result) {
            $req->session()->put('id', $result->id);
            return redirect()->route('user.index');
        } else {
            $req->session()->flash('msg', 'Incorrect Username or Password.');
            return redirect()->route('login.index');
        }
    }

    public function logout(Request $req)
    {
        $req->session()->forget('id');
        $req->session()->flash('msg', 'Logged out successfully.');
        return redirect()->route('login.index');
    }
}
