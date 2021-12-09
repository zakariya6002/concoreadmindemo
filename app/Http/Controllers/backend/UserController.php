<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function UserView()
    {
        $allData = User::all();
        return view('backend.user.view_user', compact('allData'));
    }
    public function ViewUser()
    {
        return view('backend.user.user');
    }
    public function doc()
    {
        return view('backend.document.documents');
    }
}
