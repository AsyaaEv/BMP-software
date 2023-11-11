<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $page = [
            'title' => 'Dashboard ',
            'description' => 'Halaman Dashboard | Bogeng',
            'active' => 'dashboard'
        ];
        $post = Post::where('uploader', auth()->user()->username)->get();
        $product = Product::where('uploader', auth()->user()->username)->get();
        return view('dashboard.dashboard', compact('page, post, product'));
    }

    public function show()
    {
        $post = Post::all();
        $product = Product::all();
        $category = Category::all();

        return view('dashboard.posts', compact('post', 'product', 'category'));
    }

    public function showAllUsers()
    {
        $user = User::paginate(10);

        return view('dashboard.user', compact('user'));
    }
}
