<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index',  [
            'products' => Product::get(),
        ]);
    }

    public function show(Product $product)
    {
        $relatedProducts = Product::query()
            ->where('jenis', $product->jenis)
            ->where('id', '!=', $product->id)
            ->latest()
            ->limit(3)
            ->get();

        return view(
            'product.show',
            [
                'product' => $product,
                'relatedProducts' => $relatedProducts,
            ],
        );
    }
}
