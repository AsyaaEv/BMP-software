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
        return view('dashboard.dashboard', compact('page, post, product'));
    }

    public function show()
    {
        $post = Post::orderByDesc('id')->offset(6)->take(6)->get();
        $product = Product::orderByDesc('id')->offset(6)->take(6)->get();
        $category = Category::orderByDesc('id')->offset(6)->take(6)->get();

        return view('dashboard.posts', compact('post', 'product', 'category'));
    }

    public function showAllUsers()
    {
        $user = User::paginate(10);

        return view('dashboard.users', compact('user'));
    }

    public function showTestimony()
    {
        $testimony = Testimoni::orderByDesc('id')->offset(5)->take(5)->get();
        return view('dashboard.testimonies', compact('testimony'));
    }

    public function addTestimonyPage()
    {
        return view('dashboard.testimonies.createTestimonies');
    }

    public function addTestimonyAction(Request $request)
    {
        $validate = $request->validate([
            'name_consumer_testimony' => 'required',
            'starts' => 'required',
            'image' => 'required|file',
            'message_consumer_testimony' => 'required'
        ]);

        if ($request->image) {
            $validate['image'] = $request->file('image')->store('testimonies-imgae');
        }

        Testimoni::create($validate);
        return redirect()->route('dashboard-testimonies')->with('message', "testimoni terupoad");
    }
}
