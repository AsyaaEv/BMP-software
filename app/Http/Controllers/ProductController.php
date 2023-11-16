<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Cocur\Slugify\Slugify;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //

    public function show($id)
    {
        $product = Product::find($id)->with('user');
        $page = [
            'title' => 'Produk !Bogeng | ' . $product->title,
            'description' => '!Bogeng Company Profil adalah perusahaan yang bergerak pada bidang teknologi dengan melayani jasa Desain dan Pembuatan website',
            'active' => 'product'
        ];
        return view('product.product', compact('product', 'page'));
    }


    /*
        THIS FOR DASHBOARD FUNCTIONS!!!
    */
    public function dashboardAll()
    {
        $products = Product::orderByDesc('id')->take(10)->get();
        return view('dashboard.product', compact('products'));
    }


    public function dashboardCreatePage()
    {

        $page = [
            'title' => 'Buat produk',
            'description' => '!Bogeng Company Profil adalah perusahaan yang bergerak pada bidang teknologi dengan melayani jasa Desain dan Pembuatan website',
            'active' => 'product-create'
        ];
        return  view('dashboard.product.createProduct', compact('page'));
    }

    public function dasboardCreateAction(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'content' => 'required',
        ]);

        if ($request->foto) {
            $validate['foto'] = $request->file('foto')->store('product-images');
        }
        $validate['uploader'] = auth()->user()->username;
        $validate['excerpt'] = Str::excerpt($request->content, '', [
            'radius' => 50,
            'omission' => '(...) '
        ]);



        // make slug for link
        $slug = new Slugify();
        $validate['slug'] = $slug->slugify($request->title);


        // Insert to database
        Product::create($validate);

        // return to dashboard product
        // return redirect()->route('dashboard-product')->with('message', 'Produk berhasil di Upload');
        return redirect()->route('dashboard-page');
    }

    public function dashboardUpdatePage($id)
    {

        $product = Product::find($id);
        $page = [
            'title' => 'Update Produk | ' . $product->title,
            'description' => '!Bogeng Company Profil adalah perusahaan yang bergerak pada bidang teknologi dengan melayani jasa Desain dan Pembuatan website',
            'active' => 'product-update'
        ];

        return view('dashboard.product.updateProduct', compact('product', 'page'));
    }


    public function dashboardUpdateAction(Request $request) // tangkap id saat masuk ke update
    {
        $validate = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'content' => 'required',
        ]);
        if ($request->foto) {
            Storage::delete($request->oldPhoto); // butuh value photo sebelumnya
            $validate['foto'] = $request->file('foto')->store('product-images');
        }
        $validate['excerpt'] = Str::excerpt($request->content, '', ['radius => 50',  'omission' => '(...) ']);


        // update to database
        Product::find($request->id)->update($validate);


        return redirect()->route('dashboard-page');
    }

    public function dashboardDeleteAction($id)
    {
        Product::find($id)->delete();
    }
}
