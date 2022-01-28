<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {

        $item = Product::with(['product_galleries'])
        ->where('slug',$slug)
        ->firstOrfail();
        return view('pages.detail',[
            'item' => $item
        ]);
    }
}
