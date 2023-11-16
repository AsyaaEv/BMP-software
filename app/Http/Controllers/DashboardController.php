<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Product;
use App\Models\Testimoni;
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
        return view('dashboard.layout', compact('page', 'post', 'product'));
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
        $users = User::all();

        return view('dashboard.users', compact('users'));
    }
    public function showAllTestimony()
    {
        $testimonies = Testimoni::all();

        return view('dashboard.testimony', compact('testimonies'));
    }
    public function createTestimonyPage()
    {
        return view('dashboard.testimony.createTestimony');
    }
    public function createTestimonyAction(Request $request)
    {
        $validate = $request->validate([
            'name_consumer' => 'required',
            'stars' => 'required',
            'he_say' => 'required',
        ]);
        $validate['image_consumer'] = $request->file('image_consumer')->store('testimonies-images');
        Testimoni::create($validate);


        return view('dashboard.layout');
    }
    public function deleteTestimonyAction($id)
    {
        Testimoni::find($id)->delete();
    }

    public function maintenance()
    {
        return view('dashboard.posts');
    }
}
