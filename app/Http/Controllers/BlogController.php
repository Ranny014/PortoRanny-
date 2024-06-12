<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class BlogController extends Controller
{
    public function home() {
        return view('home');
    }

    public function resume() {
        return view('resume');
    }

    public function projects() {
        return view('projects');
    }

    public function contact() {
        return view('contact');
    }
}
