<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    // public function index_view ()
    // {
    //     return view('pages.user.user-data', [
    //         'user' => User::class
    //     ]);
    // }
    public function index()
    {
        $data = User::latest()->paginate(10);

        return view('pages.user.user-data', compact('data'));
    }
}
