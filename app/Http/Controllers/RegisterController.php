<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;


class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
}