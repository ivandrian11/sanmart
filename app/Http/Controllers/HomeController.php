<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('home', [
            'products' => Product::query()
                ->latest()
                ->limit(3)
                ->get(),
        ]);
    }
}
