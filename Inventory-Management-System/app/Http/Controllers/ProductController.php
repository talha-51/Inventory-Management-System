<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function productList()
    {
        $products = DB::table('products')->get();

        return view('product.productList')->with('products', $products);
    }

    public function addProduct()
    {
        return view('product.addProduct');
    }

    public function insertProduct(ProductRequest $req)
    {
        DB::table('products')->insert(
            [
                'name' => $req->name,
                'quantity' => $req->quantity,
                'price' => $req->price,
            ]
        );

        return redirect()->route('product.productList');
    }

    public function editProduct($id)
    {
        $product = DB::table('products')->where('id', $id)->first();

        return view('product.editProduct')->with('product', $product);
    }

    public function updateProduct(ProductRequest $req, $id)
    {
        DB::table('products')->where('id', $id)->update(
            [
                'name' => $req->name,
                'quantity' => $req->quantity,
                'price' => $req->price,
            ]
        );

        return redirect()->route('product.productList');
    }

    public function deleteProduct($id)
    {
        DB::table('products')->where('id', $id)->delete();

        return redirect()->route('product.productList');
    }
}
