<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Cocur\Slugify\Slugify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::offset(15)->take(15)->get;
        // return view('dashboard.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $page = [
            'title' => 'Buat Postingan Baru ',
            'description' => 'Halaman Dashboard | Bogeng',
            'active' => 'posts'
        ];
        return view('dashboard.posts.createPosts', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'category' => 'required',
            'image' => 'required'
        ]);
        $validate['image'] = $request->file('image')->store('post-images');
        $validate['uploader'] = auth()->user()->username;
        $slug = new Slugify();
        $validate['slug'] =  $slug->slugify($request->judul);
        $validate['excerpt'] = Str::excerpt($request->isi, '', ['radius => 100']);


        Post::create($validate);

        return redirect()->route('posts.index')->with('message', 'Post berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $post = Post::find($id);
        $page = [
            'title' => $post->judul . ' | !Bogeng',
            'description' => $post->excerpt,
            'active' => 'posts'
        ];

        return view('page.post.post', compact('post', 'page')); // ini masih tahap pengembangan
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $post = Post::find($id);
        $page = [
            'title' => 'Edit Postingan | ' . $post->judul,
            'description' => 'Halaman Dashboard | Bogeng',
            'active' => 'posts'
        ];

        return view('dashboard.posts.updatePost', compact('post', 'page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validate = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'oldImage' => 'required'
        ]);
        if ($request->image) {
            Storage::delete($request->oldImage); // buat value image lama
            $validate['image'] = $request->file('image')->store('post-images');
        }
        $validate['uploader'] = auth()->user()->username;
        $slug = new Slugify();
        $validate['slug'] =  $slug->slugify($request->judul);
        $validate['excerpt'] = Str::excerpt($request->isi, '', ['radius => 100']);

        Post::find($id)->update($validate);

        return redirect()->route('posts.index')->with('message', 'Post berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Post::find($id)->delete();
        return redirect()->route('posts.index')->with('message', 'Post berhasil dihapus');
    }
}
