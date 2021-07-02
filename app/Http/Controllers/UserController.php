<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index() {
        $users = User::all();
        //'user.index' view đc hiển thị compact truyển view thành dữ liệu hiển thị
        return view('user.index', compact('users'));
    }
}
