<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $user = auth()->user();

        $blogs = $user->blogs;

        return view('home', [
            'blogs' => $blogs
        ]);
    }
}
