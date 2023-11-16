<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page = [
            'title' => '!Bogeng Company Profile | Jasa pembuatan Desain dan website ',
            'description' => '!Bogeng Company Profil adalah perusahaan yang bergerak pada bidang teknologi dengan melayani jasa Desain dan Pembuatan website',
            'active' => 'home'
        ];
        $products = Product::offset(6)->take(6)->get();
        $blogs = Post::offset(6)->take(6)->get();
        return view('welcome', compact('page', 'products', 'blogs'));
    }
}
