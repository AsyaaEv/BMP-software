<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
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
        $product = Product::paginate(10);
        return view('dashboard.product',  compact('product'));
    }


    public function dashboardCreatePage()
    {

        $page = [
            'title' => 'Buat produk',
            'description' => '!Bogeng Company Profil adalah perusahaan yang bergerak pada bidang teknologi dengan melayani jasa Desain dan Pembuatan website',
            'active' => 'product-create'
        ];
        return  view('dashboard.createProduct', compact('page'));
    }

    public function dasboardCreateAction(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'content' => 'required',
            'foto' => 'required',
        ]);

        if ($request->foto) {
            $validate['foto'] = $request->file('foto')->store('product-images');
        }
        // akan saya tambahkan slug disini, berarti ngubah migrate,dan model





    }
}
