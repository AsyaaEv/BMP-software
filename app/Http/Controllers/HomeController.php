<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use App\Models\Testimoni;
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
        $products = Product::orderByDesc('id')->take(6)->get();
        $blogs = Post::orderByDesc('id')->take(6)->get();
        $testimony = Testimoni::orderByDesc('id')->take(6)->get();
        return view('welcome', compact('page', 'products', 'blogs', 'testimony'));
    }
}
