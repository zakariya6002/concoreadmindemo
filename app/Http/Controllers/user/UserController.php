<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function UserView()
    {
        $allData = User::all();
        return view('admin.user.userTable', compact('allData'));
    }
    public function ViewUser()
    {
        return view('admin.user.profile');
    }
    public function doc()
    {
        return view('admin.body.documents');
    }
}
