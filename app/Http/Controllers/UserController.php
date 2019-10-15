<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserController extends Controller
{

    public function index (Request $request)
    {
        $user = User::find(1);
        return view('client.index',['user'=>$user]);
    }

}
