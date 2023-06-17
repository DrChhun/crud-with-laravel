<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $all = Article::all();
        return view('Homepage', compact('all'));
    }
}
